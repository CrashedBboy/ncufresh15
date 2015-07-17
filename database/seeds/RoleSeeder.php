<?php

use Illuminate\Database\Seeder;
use Bican\Roles\Models\Role;
use App\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => '神仙大人',
            'level' => 100,
        ]);
        $adminRole->save();
        $jxcode = User::find(1);
        $jxcode->attachRole($adminRole);

        $salesRole = Role::create([
            'name' => 'Sales',
            'slug' => 'sales',
            'description' => '猴子',
            'level' => 50,
        ]);
        $salesRole->save();
        
        $userRole = Role::create([
            'name' => 'User',
            'slug' => 'user',
            'description' => '香蕉',
            'level' => 10,
        ]);
        $userRole->save();
    }
}
