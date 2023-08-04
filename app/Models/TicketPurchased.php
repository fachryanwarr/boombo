<?php

namespace App\Models;

use App\Models\User;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TicketPurchased extends Model
{
    use HasFactory;
    
    public $incrementing = false;

    protected $fillable = [
        'movie_id',
        'tanggal',
        'waktu',
        'seat',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function movie() {
        return $this->belongsTo(Movie::class);
    }

}
