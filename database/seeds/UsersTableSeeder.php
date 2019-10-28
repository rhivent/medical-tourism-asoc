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
        $namespace = 'App\\';
        $users = [
            ['name' => 'user_amtour01', 'email' => 'user@amtour.id', 'password' => \Hash::make('12345678'), 'role_id' => 3]
        ];

        foreach($users as $user) {
            app($namespace. 'User')->create($user);
        }

        $this->command->info('Berhasil menambah seed pada table role dan accessright');

    }
}
