<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //creación de roles de la página administrable
        $role = Role::create(['name' => 'Administrador']);

        Permission::create(['name' =>'admin.home.index'])->syncRoles([$role]);

        Permission::create(['name' => 'admin.usuario.index'])->syncRoles([$role]);
        Permission::create(['name' => 'admin.usuario.store'])->syncRoles([$role]);
        Permission::create(['name' => 'admin.usuario.update'])->syncRoles([$role]);
        Permission::create(['name' => 'admin.usuario.destroy'])->syncRoles([$role]);

        Permission::create(['name' => 'admin.categoria.index'])->syncRoles([$role]);
        Permission::create(['name' => 'admin.categoria.store'])->syncRoles([$role]);
        Permission::create(['name' => 'admin.categoria.update'])->syncRoles([$role]);
        Permission::create(['name' => 'admin.categoria.destroy'])->syncRoles([$role]);

        Permission::create(['name' => 'admin.producto.index'])->syncRoles([$role]);
        Permission::create(['name' => 'admin.producto.store'])->syncRoles([$role]);
        Permission::create(['name' => 'admin.producto.update'])->syncRoles([$role]);
        Permission::create(['name' => 'admin.producto.destroy'])->syncRoles([$role]);

        Permission::create(['name' => 'admin.pedido.index'])->syncRoles([$role]);
        Permission::create(['name' => 'admin.pedido.store'])->syncRoles([$role]);
        Permission::create(['name' => 'admin.pedido.update'])->syncRoles([$role]);
        Permission::create(['name' => 'admin.pedido.destroy'])->syncRoles([$role]);

        User::factory()->create([
            'name' => 'Rodrigo Riveros Mitma',
            'email' => 'rriverosmitma@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Administrador');
    }
}
