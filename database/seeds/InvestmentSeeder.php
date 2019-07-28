<?php

use Illuminate\Database\Seeder;

class InvestmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('investments')->truncate();
        DB::table('investments')->insert([
            'empresa' => 'AGROMETAL',
            'acciones' => '0',
            'valor' => '11.2',
            'total' => '0',
        ] );
        DB::table('investments')->insert([
            'empresa' => 'ALUAR',
            'acciones' => '0',
            'valor' => '17.5',
            'total' => '0',
        ] );    
        DB::table('investments')->insert([
            'empresa' => 'BANCO FRANCES',
            'acciones' => '0',
            'valor' => '171.5',
            'total' => '0',
        ] );  
        DB::table('investments')->insert([
            'empresa' => 'LOMA NEGRA',
            'acciones' => '0',
            'valor' => '105',
            'total' => '0',
        ] );  

        DB::table('investments')->insert([
            'empresa' => 'EDENOR',
            'acciones' => '0',
            'valor' => '42.1',
            'total' => '0',
        ] );  
        DB::table('investments')->insert([
            'empresa' => 'TELECOM ARG.',
            'acciones' => '0',
            'valor' => '152.2',
            'total' => '0',
        ] );  
        DB::table('investments')->insert([
            'empresa' => 'YPF SA',
            'acciones' => '0',
            'valor' => '733',
            'total' => '0',
        ] );  
    }
}
