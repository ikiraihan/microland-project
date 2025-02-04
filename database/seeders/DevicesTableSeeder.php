<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DevicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $devices = [
            [
                'brand' => 'Dell',
                'model' => 'Latitude 5320 2in1 Touchscreen',
                'processor_type' => 'i5-11',
                'ram' => '16GB',
                'storage' => '256GB',
                'daily_rate' => 160000,
                'monthly_rate' => 3000000,
                'yearly_rate' => 6000000,
                'units_available' => 100,
                'slug' => Str::slug('Dell Latitude 5320 2in1 Touchscreen i5-11 16GB 256GB'),
            ],
            [
                'brand' => 'Dell',
                'model' => 'Latitude 5320 Touchscreen',
                'processor_type' => 'i7-11',
                'ram' => '16GB',
                'storage' => '256GB',
                'daily_rate' => 175000,
                'monthly_rate' => 3300000,
                'yearly_rate' => 6300000,
                'units_available' => 500,
                'slug' => Str::slug('Dell Latitude 5320 Touchscreen i7-11 16GB 256GB'),
            ],
            [
                'brand' => 'Dell',
                'model' => 'Latitude 5400 Touchscreen',
                'processor_type' => 'i5-8',
                'ram' => '16GB',
                'storage' => '256GB',
                'daily_rate' => 110000,
                'monthly_rate' => 2400000,
                'yearly_rate' => 4600000,
                'units_available' => 50,
                'slug' => Str::slug('Dell Latitude 5400 Touchscreen i5-8 16GB 256GB'),
            ],
            [
                'brand' => 'Lenovo',
                'model' => 'Thinkpad T490 Touchscreen',
                'processor_type' => 'i5-8',
                'ram' => '8GB',
                'storage' => '256GB',
                'daily_rate' => 110000,
                'monthly_rate' => 2400000,
                'yearly_rate' => 4600000,
                'units_available' => 20,
                'slug' => Str::slug('Lenovo Thinkpad T490 Touchscreen i5-8 8GB 256GB'),
            ],
            [
                'brand' => 'Lenovo',
                'model' => 'Thinkpad T480 Double VGA',
                'processor_type' => 'i7-8',
                'ram' => '8GB',
                'storage' => '256GB',
                'daily_rate' => 125000,
                'monthly_rate' => 2600000,
                'yearly_rate' => 5000000,
                'units_available' => 50,
                'slug' => Str::slug('Lenovo Thinkpad T480 Double VGA i7-8 8GB 256GB'),
            ],
            [
                'brand' => 'Lenovo',
                'model' => 'Thinkpad T470s Keyboard Backlight',
                'processor_type' => 'i5-6 8/256',
                'ram' => '8GB',
                'storage' => '256GB',
                'daily_rate' => 90000,
                'monthly_rate' => 1800000,
                'yearly_rate' => 3500000,
                'units_available' => 300,
                'slug' => Str::slug('Lenovo Thinkpad T470s Keyboard Backlight i5-6 8GB 256GB'),
            ],
            [
                'brand' => 'Lenovo',
                'model' => 'Thinkpad T460s Keyboard Backlight',
                'processor_type' => 'i5-6',
                'ram' => '8GB',
                'storage' => '256GB',
                'daily_rate' => 90000,
                'monthly_rate' => 1800000,
                'yearly_rate' => 3500000,
                'units_available' => 300,
                'slug' => Str::slug('Lenovo Thinkpad T460s Keyboard Backlight i5-6 8GB 256GB'),
            ],
            [
                'brand' => 'Lenovo',
                'model' => 'Thinkpad L470',
                'processor_type' => 'i5-7',
                'ram' => '8GB',
                'storage' => '256GB',
                'daily_rate' => 100000,
                'monthly_rate' => 2000000,
                'yearly_rate' => 3800000,
                'units_available' => 150,
                'slug' => Str::slug('Lenovo Thinkpad L470 i5-7 8GB 256GB'),
            ],
            [
                'brand' => 'Lenovo',
                'model' => 'Thinkpad L460',
                'processor_type' => 'i5-6',
                'ram' => '8GB',
                'storage' => '256GB',
                'daily_rate' => 90000,
                'monthly_rate' => 1800000,
                'yearly_rate' => 3500000,
                'units_available' => 50,
                'slug' => Str::slug('Lenovo Thinkpad L460 i5-6 8GB 256GB'),
            ],
            [
                'brand' => 'Lenovo',
                'model' => 'Thinkpad X270',
                'processor_type' => 'i5-6',
                'ram' => '8GB',
                'storage' => '256GB',
                'daily_rate' => 90000,
                'monthly_rate' => 1800000,
                'yearly_rate' => 3500000,
                'units_available' => 100,
                'slug' => Str::slug('Lenovo Thinkpad X270 i5-6 8GB 256GB'),
            ],
            [
                'brand' => 'Lenovo',
                'model' => 'Thinkpad T470',
                'processor_type' => 'i5-6',
                'ram' => '8GB',
                'storage' => '256GB',
                'daily_rate' => 90000,
                'monthly_rate' => 1800000,
                'yearly_rate' => 3500000,
                'units_available' => 50,
                'slug' => Str::slug('Lenovo Thinkpad T470 i5-6 8GB 256GB'),
            ],
            [
                'brand' => 'Lenovo',
                'model' => 'Thinkpad X280',
                'processor_type' => 'i5-8',
                'ram' => '8GB',
                'storage' => '256GB',
                'daily_rate' => 110000,
                'monthly_rate' => 2400000,
                'yearly_rate' => 4600000,
                'units_available' => 30,
                'slug' => Str::slug('Lenovo Thinkpad X280 i5-8 8GB 256GB'),
            ],
            [
                'brand' => 'Lenovo',
                'model' => 'Thinkpad T480s',
                'processor_type' => 'i7-8',
                'ram' => '8GB',
                'storage' => '256GB',
                'daily_rate' => 125000,
                'monthly_rate' => 2600000,
                'yearly_rate' => 5000000,
                'units_available' => 50,
                'slug' => Str::slug('Lenovo Thinkpad t480S i7-8 8GB 256GB'),
            ],
            [
                'brand' => 'Lenovo',
                'model' => 'Thinkpad L380 Yoga + Pen Stylus',
                'processor_type' => 'i5-8',
                'ram' => '8GB',
                'storage' => '256GB',
                'daily_rate' => 110000,
                'monthly_rate' => 2400000,
                'yearly_rate' => 4600000,
                'units_available' => 20,
                'slug' => Str::slug('Lenovo Thinkpad L380 Yoga + Pen Stylus i5-8 8GB 256GB'),
            ],
            [
                'brand' => 'Lenovo',
                'model' => 'Thinkpad L480 Tc & Non Tc',
                'processor_type' => 'i5-8',
                'ram' => '8GB',
                'storage' => '256GB',
                'daily_rate' => 110000,
                'monthly_rate' => 2400000,
                'yearly_rate' => 4600000,
                'units_available' => 95,
                'slug' => Str::slug('Lenovo Thinkpad L480 Tc & Non Tc i5-8 8GB 256GB'),
            ],
            [
                'brand' => 'Lenovo',
                'model' => 'Thinkpad L490 Touchscreen',
                'processor_type' => 'i5-8',
                'ram' => '8GB',
                'storage' => '256GB',
                'daily_rate' => 110000,
                'monthly_rate' => 2400000,
                'yearly_rate' => 4600000,
                'units_available' => 60,
                'slug' => Str::slug('Lenovo Thinkpad L490 Touchscreen i5-8 8GB 256GB'),
            ],
            [
                'brand' => 'Lenovo',
                'model' => 'Thinkpad L13',
                'processor_type' => 'i3-11',
                'ram' => '8GB',
                'storage' => '256GB',
                'daily_rate' => 120000,
                'monthly_rate' => 3300000,
                'yearly_rate' => 5900000,
                'units_available' => 10,
                'slug' => Str::slug('Lenovo Thinkpad L13 i3-11 8GB 256GB'),
            ],
            [
                'brand' => 'Lenovo',
                'model' => 'Thinkpad L13',
                'processor_type' => 'i5-10',
                'ram' => '8GB',
                'storage' => '256GB',
                'daily_rate' => 140000,
                'monthly_rate' => 3900000,
                'yearly_rate' => 7500000,
                'units_available' => 10,
                'slug' => Str::slug('Lenovo Thinkpad L13 i5-10 8GB 256GB'),
            ],
            [
                'brand' => 'HP',
                'model' => 'Elitebook 840 G4',
                'processor_type' => 'i5-7',
                'ram' => '8GB',
                'storage' => '256GB',
                'daily_rate' => 100000,
                'monthly_rate' => 2000000,
                'yearly_rate' => 3800000,
                'units_available' => 50,
                'slug' => Str::slug('HP Elitebook 840 G4 i5-7 8GB 256GB'),
            ]
        ];

        // Insert devices into the database
        DB::table('devices')->insert($devices);
    }
}
