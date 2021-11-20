<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class CredentialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Admin ITFP',
            'email'     => 'admin@itfp.co.id',
            'password'  => bcrypt('itfp')
        ]);
    }
}
