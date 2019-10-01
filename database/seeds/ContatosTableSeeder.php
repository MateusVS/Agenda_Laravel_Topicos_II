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
        DB::table("contatos")->insert([
            "saudacao"=>"Sr.",
            "nome"=>"Mateus Vinicius da Silva",
            "telefone"=>"(19) 99925-6792",
            "data_nascimento"=>"1998/06/03",
            "email"=>"mateusviniciussilva07@gmail.com",
            "nota"=>"Usuário padrão",
            "created_at"=>date("Y-m-d H:i:s")
        ]);

        factory(App\Contato::class,20)->create();
    }
}
