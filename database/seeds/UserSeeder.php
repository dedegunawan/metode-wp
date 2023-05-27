<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    \App\User::firstOrCreate([
		    'email' => 'gunawan@dede.web.id'
	    ], [
		    'name' => 'Dede Gunawan',
		    'password' => password_hash('dedegunawan', PASSWORD_DEFAULT)
	    ]);
    }
}
