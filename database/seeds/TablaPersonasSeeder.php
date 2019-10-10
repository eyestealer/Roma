<?php

use App\Models\Persona;
use Illuminate\Database\Seeder;

class TablaPersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    factory(Persona::class,10)->create(); //EL NUMERO REPRESENTA CUANTAS VECES SE CREA
    }
    
}
//PARA CREAR EL SEEDER PRIMERO TENEMOS QUE HACER EL MODELO EN MODELS Y LUEGO EL FACTORY