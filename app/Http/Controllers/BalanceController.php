<?php

namespace App\Http\Controllers;
use App\Models\BalanceHistory;

use Illuminate\Http\Request;

class BalanceController extends Controller
{
    public function getBalance() {
        return view('mybalance', [
            "title" => "balance"
        ]);
    }
}
