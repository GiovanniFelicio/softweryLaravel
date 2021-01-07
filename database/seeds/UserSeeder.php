<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            'id'        => 1,
            'name'    => 'Giovanni Felicio Carvalho',
            'login'  => 'giovannifc',
            'email'  => 'giovanni@softwery.com',
            'company_id'  => '0',
            'password'  => Hash::make('09112013'),
        );
        DB::table('sft_user')->insert($users);
    }
}
