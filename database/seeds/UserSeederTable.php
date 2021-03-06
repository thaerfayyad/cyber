<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = \App\User::create([
            'name' => 'Admin',
            'email' => 'mai@admin.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('10201020'),
        ]);
    }
}
