<?php

namespace App\Http\Controllers;
use App\Models\BalanceHistory;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BalanceController extends Controller {
    public function getBalance(Request $request) {
        $user_id = Auth::user()->id;
        $history = Balancehistory::where('user_id', $user_id)->get();

        return view('balance.mybalance', [
            "title" => "balance",
            "histories" => $history
        ]);
    }

    public function topup() {
        return view ('balance.topup', [
            "title" => "balance",
        ]);
    }
    
    public function topupStore(Request $request) {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        
        $validatedData = $request->validate([
            'amount' => 'required'
        ]);
        
        if ($validatedData['amount'] < 0) {
            return back()->withErrors([
                'negatifAmount' => "Top up amount can not be negative",
            ]);
        } else if ($validatedData['amount'] < 10000) {
            return back()->withErrors([
                'minimalAmount' => 'Minimum top up amount is Rp 10.000',
            ]);
        }

        $user->balance = $user->balance + $validatedData['amount'];
        $user->save();
        
        BalanceHistory::create([
            'amount' => $validatedData['amount'],
            'description' => 'Top Up',
            'user_id' => $user_id
        ]);
        
        return redirect('/mybalance/')->with('status', 'Top up successful');
    }
    
    public function withdraw() {
        return view ('balance.withdraw', [
            "title" => "balance",
        ]);
    }

    public function withdrawStore(Request $request) {
        $user_id = Auth::user()->id;
        $user_balance = Auth::user()->balance;

        $user = User::find($user_id);
        
        $validatedData = $request->validate([
            'amount' => 'required'
        ]);
        
        if ($validatedData['amount'] < 0) {
            return back()->withErrors([
                'negatifAmount' => "Withdrawal amount cannot be negative",
            ]);
        } else if ($validatedData['amount'] > $user_balance) {
            return back()->withErrors([
                'insufficient' => "Your balance is insufficient.",
            ]);
        } else if ($validatedData['amount'] > 500000) {
            return back()->withErrors([
                'maxWithdraw' => "Withdrawals cannot exceed Rp500.000",
            ]);
        }

        $user->balance = $user->balance - $validatedData['amount'];
        $user->save();
        
        BalanceHistory::create([
            'amount' => -$validatedData['amount'],
            'description' => 'Withdraw',
            'user_id' => $user_id
        ]);
        
        return redirect('/mybalance/')->with('status', 'Withdraw successful');
    }
}

