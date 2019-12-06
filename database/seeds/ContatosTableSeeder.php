<?php

use Illuminate\Database\Seeder;

class ContatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Opção 1
        DB::table('contatos')->insert([
            'saudacao' => 'Sr.',
            'nome' => 'Renato Dias',
            'telefone' => '(19) 99761-4764',
            'data_nascimento' => '1997/12/07',
            'email' => 'renato@gmail.com',
            'nota' => 'Usuário criado usando Seeder com método DB.',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        //Opção 2
        factory(App\Contato::class, 20)->create();
    }
}
