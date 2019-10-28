<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $namespace = 'App\\';
        $admins = [
            ['name' => 'admin', 'email' => 'admin@amtour.id', 'password' => \Hash::make('12345678'), 'role_id' => 1]
        ];

        foreach($admins as $admin) {
            app($namespace. 'Admin')->create($admin);
        }

        $this->command->info('Berhasil menambah seed pada table role dan accessright');
    }
}
