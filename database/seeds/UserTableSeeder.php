<?php

/**
 * Created by PhpStorm.
 * User: maedc
 * Date: 26/11/2015
 * Time: 2:36 PM
 *
 *
 */

use Illuminate\Database\Seeder;
use TeachMe\Entities\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $this->createAdmin();
    }

    private function createAdmin()
    {
        User::create([
            'name' => 'Manuel',
            'email' => 'maedca@gmail.com',
            'password' => bcrypt('admin')
        ]);
    }
}