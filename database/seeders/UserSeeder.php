<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username'        => 'administrador',
            'name'         => 'Administrador',
            'email'           => 'admin@admin.com',
            'password'        => Hash::make('admin2022.'),
            'status'          => 'activo',
            'created_at'      => now(),
            'updated_at'      => now()
        ]);
        $user = User::find(1);
        $user->assignRole(1);
    }
}
