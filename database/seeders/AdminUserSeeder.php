<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // Tạo role admin nếu chưa có
        $role = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);

        // Tạo user admin
        $user = User::updateOrCreate(
            ['email' => 'admin@Monoline.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password'),
            ]
        );

        // Gán role admin
        $user->assignRole($role);
    }
}
