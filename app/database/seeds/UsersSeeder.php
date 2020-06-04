<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = [
        [
          'name'      => 'Customer1',
          'email'     => 'customer1@test.com',
          'is_admin'  => 1,
          'password'  => bcrypt('qwe123QWE'),
        ],
        [
          'name'      => 'Customer2',
          'email'     => 'customer2@test.com',
          'is_admin'  => 0,
          'password'  => bcrypt('qwe123QWE'),
        ],
        [
          'name'      => 'Customer3',
          'email'     => 'customer3@test.com',
          'is_admin'  => 1,
          'password'  => bcrypt('P@ssw0rd'),
        ],
      ];

      foreach ($user as $key => $value) {
        User::create($value);
      }
    }
}
