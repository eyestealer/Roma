<?php

use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Foreach_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTablas ([
            'personas'
        ]);
        $this->call(TablaPersonasSeeder::class);  //Este es para ejecutar la TablaPersonasSeeder
        }

//TRUNCAR TABLAS COSA QUE NO SE HACE EN VERDAD

    protected function truncateTablas(array $tablas)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tablas as $tabla) {
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
