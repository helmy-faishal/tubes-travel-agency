<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Booking extends Model
{
    use HasFactory;

    protected $table = "bookings";
    protected $guarded = [];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class,"user_id");
    }
}
