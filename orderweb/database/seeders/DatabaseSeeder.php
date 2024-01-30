<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\Technician;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(CausalSeeder::class);
        $this->call(ObservationSeeder::class);
        $this->call(TypeActivitySeeder::class);
        //Se crea un usuario con rol admin
        User::factory()->create([
            'role_id' => 1
        ]);

        //Se crea un usuario con rol supervisor 
        User::factory(3)->create([
            'role_id' => 2
        ]);

        Technician::factory()->create([
            'especiality' => 'Instalación de redes'
        ]);

        //2 - construcción - 2 lectura de redes 

        Technician::factory(2)->create([
            'especiality' => 'Construcción'
        ]);
        //
        Technician::factory(2)->create([
            'especiality' => 'Lectura de redes'
        ]);
        //Tecnico sin especialidad
        Technician::factory(2)->create();
        $this->call(TestOrderActivitySeeder::class);
    }
}
