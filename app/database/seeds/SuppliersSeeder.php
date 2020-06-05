<?php

use Illuminate\Database\Seeder;
use App\Supplier;

class SuppliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $suppliers = [
        [
          'name'      => 'supplier1',
          'email'     => 'supplier1@test.com',
          'address'   => 'calle falsa 123, 08980 Sant Feliu de Llobregat, Barcelona',
          'phone'     => '695 444 444',
          'cif'       => 'B58585858',
          'active'    => true,
        ],
        [
          'name'      => 'supplier2',
          'email'     => 'supplier2@test.com',
          'address'   => 'calle falsa 456, 08980 Sant Feliu de Llobregat, Barcelona',
          'phone'     => '695 555 555',
          'cif'       => 'B59595959',
          'active'    => true,
        ],
        [
          'name'      => 'supplier3',
          'email'     => 'supplier3@test.com',
          'address'   => 'calle falsa 789, 08980 Sant Feliu de Llobregat, Barcelona',
          'phone'     => '695 666 666',
          'cif'       => 'B60606060',
          'active'    => true,
        ],
      ];

      foreach ($suppliers as $key => $value) {
        Supplier::create($value);
      }
    }
}
