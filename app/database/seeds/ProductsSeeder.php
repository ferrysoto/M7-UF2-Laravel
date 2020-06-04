<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $products = [
        [
          'name'        => 'patatas ecologicas 20Kgs',
          'price'       => '18.95',
          'id_supplier' => 1,
        ],
        [
          'name'        => 'patatas ecologicas 10Kgs',
          'price'       => '11.95',
          'id_supplier' => 1,
        ],
        [
          'name'        => 'patatas ecologicas 5Kgs',
          'price'       => '8.95',
          'id_supplier' => 1,
        ],
        [
          'name'        => 'cebollas ecologicas 20Kgs',
          'price'       => '12.95',
          'id_supplier' => 2,
        ],
        [
          'name'        => 'cebollas ecologicas 10Kgs',
          'price'       => '7.95',
          'id_supplier' => 2,
        ],
        [
          'name'        => 'cebollas ecologicas 5Kgs',
          'price'       => '3.95',
          'id_supplier' => 2,
        ],
        [
          'name'        => 'naranjas ecologicas 20Kgs',
          'price'       => '12.95',
          'id_supplier' => 3,
        ],
        [
          'name'        => 'naranjas ecologicas 10Kgs',
          'price'       => '7.95',
          'id_supplier' => 3,
        ],
        [
          'name'        => 'naranjas ecologicas 5Kgs',
          'price'       => '3.95',
          'id_supplier' => 3,
        ],
      ];

      foreach ($products as $key => $value) {
        Product::create($value);
      }
    }
}
