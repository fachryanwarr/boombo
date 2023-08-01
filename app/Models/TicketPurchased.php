<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketPurchased extends Model
{
    use HasFactory;
    
    protected $primaryKey = ['movie_id', 'tanggal', 'waktu', 'seat'];
    public $incrementing = false;

    protected $fillable = [
        'movie_id',
        'tanggal',
        'waktu',
        'seat',
        'user_id'
    ];

}
