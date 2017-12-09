<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      if (!DB::table('users')->where('email', 'xx@sunnyface.com')->first()) {
          factory(App\User::class)->create([
              'name'     => 'Kiko Seijo',
              'email'    => 'xx@sunnyface.com',
              'password' => Hash::make('secret'),
          ]);
          // DB::table('users')->insert();
      }
    }
}
