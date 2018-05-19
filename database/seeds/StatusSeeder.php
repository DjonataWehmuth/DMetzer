<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            'nome' => 'Cadastrado',
            'cor'  => 'warning ',
        ]);

        DB::table('status')->insert([
            'nome' => 'Ativo',
            'cor'  => 'success ',
        ]);

        DB::table('status')->insert([
            'nome' => 'Cancelado',
            'cor'  => 'danger ',
        ]);

        DB::table('status')->insert([
            'nome' => 'Editando',
            'cor'  => 'info',
        ]);
    }
}
