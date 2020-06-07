<?php

use Illuminate\Database\Seeder;
use App\Shipping;

class ShippingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shipping = [
          [
            'name'  => 'Recoger en central',
            'price' => '0.00',
          ],
          [
            'name'  => 'Envío 24 horas',
            'price' => '8.15',
          ],
          [
            'name'  => 'Envío estándar 48 horas',
            'price' => '4.25',
          ],
        ];

        foreach ($shipping as $key => $value) {
          Shipping::create($value);
        }
    }
}
