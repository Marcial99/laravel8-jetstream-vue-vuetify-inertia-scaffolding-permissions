<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([RolesPermisionSeeder::class]);
        $user = User::create([
            'name' => 'administrador',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        $user->assignRole('admin');

        $user = User::create([
            'name' => 'cliente',
            'email' => 'client@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        $user->assignRole('cliente');
    }
}
