<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Suryo Galih Kencana Harianja',
            'gender' => 'male',
            'phone' => '081231721707',
            'bod' => date('Y-m-d', strtotime('12-09-1985')),
            'address' => 'Jl. Gunuk II No. 24',
            'city' => 'Jakarta Selatan',
            'nationality' => 'Indonesia',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
