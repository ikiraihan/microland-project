<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'processor_type',
        'ram',
        'storage',
        'daily_rate',
        'monthly_rate',
        'yearly_rate',
        'units_available',
    ];

    /**
     * Relasi dengan model Booking
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    /**
     * Mendapatkan nama lengkap perangkat
     */
    public function getFullNameSpecificationAttribute()
    {
        return "{$this->brand} {$this->model} ( {$this->processor_type} - {$this->ram}/{$this->storage} )";
    }

    /**
     * Format harga harian
     */
    public function getFormattedDailyRateAttribute()
    {
        return number_format($this->daily_rate, 0, ',', '.');
    }

    /**
     * Format harga bulanan
     */
    public function getFormattedMonthlyRateAttribute()
    {
        return number_format($this->monthly_rate, 0, ',', '.');
    }

    /**
     * Format harga tahunan
     */
    public function getFormattedYearlyRateAttribute()
    {
        return number_format($this->yearly_rate, 0, ',', '.');
    }

    /**
     * Cek apakah perangkat tersedia untuk dipesan
     */
    public function isAvailable($quantity)
    {
        return $this->units_available >= $quantity;
    }
}