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
        factory(App\User::class,50)->create();

        factory(App\User::class,1)->create([
            'name'  => 'João Guilherme Chaves',
            'email' => 'g.dasilva@hotmail.com',
            'password' => bcrypt('ufpb2014')
        ]);
    }
}
