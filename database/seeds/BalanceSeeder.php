<?php

use Illuminate\Database\Seeder;

class BalanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('balances')->truncate();
        DB::table('balances')->insert([
            'fecha' => '2019-07-02',
            'descripcion' => 'cobro sueldo',
            'importe' => '20000',
        ] );
        DB::table('balances')->insert([
            'fecha' => '2019-07-03',
            'descripcion' => 'pago expensas',
            'importe' => '-3000',
         ]);

        DB::table('balances')->insert([
            'fecha' => '2019-07-03',
            'descripcion' => 'transferencia',
            'importe' => '-2250',
        ]);


    }
}
