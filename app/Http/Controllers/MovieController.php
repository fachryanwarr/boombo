<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\BalanceHistory;
use App\Models\Movie;
use App\Models\TicketPurchased;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller {
    public function index() {
        return view('movie.movies', [
            "movies" => Movie::All(),
            "title" => "movies"
        ]);
    }

    public function getOne(Movie $movie) {
        return view('movie.movie', [
            "movie" => $movie,
            "title" => "movies"
        ]);
    }

    public function getMyTicket(Request $request) {
        $user_id = Auth::user()->id;
        $tickets = TicketPurchased::where('user_id', $user_id)->with(['movie'])->get();
        
        return view('movie.myticket', [
                "title" => "myTicket",
                "tickets" => $tickets
        ]);
    }

    public function chooseDateTime(Movie $movie) {
        $user_age = Auth::user()->age;
        if ($movie->age_rating > $user_age) {
            return redirect('/movies/' . $movie->slug)->withErrors([
                'ageRestriction' => "You are not old enough to watch this",
            ]);
        }

        return view('movie.datetime_form', [
           "movie" => $movie
        ]);
    }

    public function dateTimeStore(Request $request, Movie $movie) {
        $validatedData = $request->validate([
            'date' => 'required',
            'watching_time' => 'required'
        ]);


        $request->session()->put('date', $validatedData['date']);
        $request->session()->put('time', $validatedData['watching_time']);

        return redirect('/movies/choose-seats/' . $movie->slug);
    }

    public function chooseSeats(Request $request, Movie $movie) {
        $res = TicketPurchased::where('movie_id', $movie->id)
                ->where('tanggal', $request->session()->get('date'))
                ->where('waktu', $request->session()->get('time'))
                ->get();
        
        $unavailable_seats = [];
        foreach($res as $data) {
            $unavailable_seats[] = $data["seat"];
        }

        return view('movie.seats_form', [
            "movie" => $movie,
            "unavailable_seats" => $unavailable_seats
         ]);
    }

    public function seatsStore(Request $request, Movie $movie) {
        $validatedData = $request->validate([
            'selected' => 'required',
            'total_price' => 'required'
        ]);

        $request->session()->put('seats', $validatedData['selected']);
        $request->session()->put('total_price', $validatedData['total_price']);

        return redirect('/movies/purchase-summary/' . $movie->slug);
    }

    public function getSummary(Request $request, Movie $movie) {
        $data = [
            'time' => $request->session()->get('time'),
            'date' => $request->session()->get('date'),
            'seats' => $request->session()->get('seats'),
            'total_price' => $request->session()->get('total_price'),
        ];

        return view('movie.summary', [
            "movie" => $movie,
            "data" => $data
        ]);
    }

    public function checkout(Request $request, Movie $movie) {
        $time = $request->session()->get('time');
        $date = $request->session()->get('date');
        $seats = $request->session()->get('seats');
        $total_price = $request->session()->get('total_price');

        $seat = explode(",", $seats);

        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        BalanceHistory::create([
            'amount' => -$total_price,
            'description' => $movie->title . ' ticket purchase',
            'user_id' => $user_id
        ]);

        $user->balance = $user->balance - $total_price;
        $user->save();

        foreach($seat as $s) {
            TicketPurchased::create([
                'movie_id' => $movie->id,
                'tanggal' => $date,
                'waktu' => $time,
                'seat' => $s,
                'user_id' => $user_id
            ]);
        }

        return redirect('/myticket/')->with('status', 'Purchasement successful');
    }
}
