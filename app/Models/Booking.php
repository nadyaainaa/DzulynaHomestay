<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'homestay_id',
        'cust_id',
        'start_date',
        'end_date',
        'days',
        'price',
        'payment_id',
        'status',
    ];

    /**
     * Relationships
     */
    public function homestay()
    {
        return $this->belongsTo(Homestay::class);
    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'cust_id');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
