<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'device_slug',
        'rental_type',
        'company_name',
        'company_address',
        'person_name',
        'phone_number',
        'email',
        'quantity',
        'start_date',
        'end_date',
        'total_price',
    ];

    /**
     * Relasi dengan model Device
     */
    public function device()
    {
        return $this->belongsTo(Device::class);
    }

    /**
     * Hitung durasi sewa (dalam hari)
     */
    public function getRentalDurationAttribute()
    {
        if ($this->start_date && $this->end_date) {
            return (new \Carbon\Carbon($this->end_date))->diffInDays($this->start_date) + 1;
        }
        return null;
    }

    /**
     * Format harga total
     */
    public function getFormattedTotalPriceAttribute()
    {
        return number_format($this->total_price, 0, ',', '.');
    }

    /**
     * Cek status validitas periode sewa
     */
    public function isValidRentalPeriod()
    {
        if (!$this->start_date || !$this->end_date) {
            return false;
        }
        return $this->start_date <= $this->end_date;
    }
}
