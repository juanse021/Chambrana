<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserTableSeeder::class);
        DB::table('ingredientes')->insert(
            [
                [
                    'id' => 1,
                    'nombre' => 'Milo',
                    'tipo' => 'g',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 2,
                    'nombre' => 'Leche',
                    'tipo' => 'ml',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 3,
                    'nombre' => 'Azucar',
                    'tipo' => 'ml',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 4,
                    'nombre' => 'Cafe',
                    'tipo' => 'g',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
            ]
        );

        DB::table('unidades')->insert(
            [
                [
                    'id_ingrediente' => 1,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-01-03',
                    'cantidad' => 700,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 1,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 1000,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 2,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 500,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 2,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 1000,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 3,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 1000,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 4,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 1000,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_ingrediente' => 4,
                    'fecha_ingreso' => date('Y-m-d'),
                    'fecha_vencimiento' => '2019-05-03',
                    'cantidad' => 1000,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
            ]
        );
        DB::table('productos')->insert(
            [
                [
                    'id' => 1,
                    'nombre' => 'Milo Caliente',
                    'precio' => 5000.00,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id' => 2,
                    'nombre' => 'Cafe Caliente',
                    'precio' => 3000.00,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],

            ]
        );

        DB::table('recetas')->insert(
            [
                [
                    'id_producto' => 1,
                    'id_ingrediente' => 1,
                    'cantidad' => 100,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 1,
                    'id_ingrediente' => 2,
                    'cantidad' => 300,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 1,
                    'id_ingrediente' => 3,
                    'cantidad' => 10,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 2,
                    'id_ingrediente' => 4,
                    'cantidad' => 100,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 2,
                    'id_ingrediente' => 2,
                    'cantidad' => 300,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'id_producto' => 2,
                    'id_ingrediente' => 3,
                    'cantidad' => 10,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],

            ]
        );
        DB::table('mesas')->insert(
            [
                [
                    'mesa' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'mesa' => 2,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'mesa' => 3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'mesa' => 4,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],


            ]
        );
    }
}
