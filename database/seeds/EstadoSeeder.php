<?php

use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    public function run()
    {
        \DB::table('estados')->delete();

        \DB::table('estados')->insert(['id' => 1, 'nome' => 'Acre', 'uf' => 'AC', 'ibge' => 12]);
        \DB::table('estados')->insert(['id' => 2, 'nome' => 'Alagoas', 'uf' => 'AL', 'ibge' => 27]);
        \DB::table('estados')->insert(['id' => 3, 'nome' => 'Amapá', 'uf' => 'AP', 'ibge' => 16]);
        \DB::table('estados')->insert(['id' => 4, 'nome' => 'Amazonas', 'uf' => 'AM', 'ibge' => 13]);
        \DB::table('estados')->insert(['id' => 5, 'nome' => 'Bahia', 'uf' => 'BA', 'ibge' => 29]);
        \DB::table('estados')->insert(['id' => 6, 'nome' => 'Ceará', 'uf' => 'CE', 'ibge' => 23]);
        \DB::table('estados')->insert(['id' => 7, 'nome' => 'Distrito Federal', 'uf' => 'DF', 'ibge' => 53]);
        \DB::table('estados')->insert(['id' => 8, 'nome' => 'Espírito Santo', 'uf' => 'ES', 'ibge' => 32]);
        \DB::table('estados')->insert(['id' => 9, 'nome' => 'Goiás', 'uf' => 'GO', 'ibge' => 52]);
        \DB::table('estados')->insert(['id' => 10, 'nome' => 'Maranhão', 'uf' => 'MA', 'ibge' => 21]);
        \DB::table('estados')->insert(['id' => 11, 'nome' => 'Mato Grosso', 'uf' => 'MT', 'ibge' => 51]);
        \DB::table('estados')->insert(['id' => 12, 'nome' => 'Mato Grosso do Sul', 'uf' => 'MS', 'ibge' => 50]);
        \DB::table('estados')->insert(['id' => 13, 'nome' => 'Minas Gerais', 'uf' => 'MG', 'ibge' => 31]);
        \DB::table('estados')->insert(['id' => 14, 'nome' => 'Pará', 'uf' => 'PA', 'ibge' => 15]);
        \DB::table('estados')->insert(['id' => 15, 'nome' => 'Paraíba', 'uf' => 'PB', 'ibge' => 25]);
        \DB::table('estados')->insert(['id' => 16, 'nome' => 'Paraná', 'uf' => 'PR', 'ibge' => 41]);
        \DB::table('estados')->insert(['id' => 17, 'nome' => 'Pernambuco', 'uf' => 'PE', 'ibge' => 26]);
        \DB::table('estados')->insert(['id' => 18, 'nome' => 'Piauí', 'uf' => 'PI', 'ibge' => 22]);
        \DB::table('estados')->insert(['id' => 19, 'nome' => 'Rio de Janeiro', 'uf' => 'RJ', 'ibge' => 33]);
        \DB::table('estados')->insert(['id' => 20, 'nome' => 'Rio Grande do Norte', 'uf' => 'RN', 'ibge' => 24]);
        \DB::table('estados')->insert(['id' => 21, 'nome' => 'Rio Grande do Sul', 'uf' => 'RS', 'ibge' => 43]);
        \DB::table('estados')->insert(['id' => 22, 'nome' => 'Rondônia', 'uf' => 'RO', 'ibge' => 11]);
        \DB::table('estados')->insert(['id' => 23, 'nome' => 'Roraima', 'uf' => 'RR', 'ibge' => 14]);
        \DB::table('estados')->insert(['id' => 24, 'nome' => 'Santa Catarina', 'uf' => 'SC', 'ibge' => 42]);
        \DB::table('estados')->insert(['id' => 25, 'nome' => 'São Paulo', 'uf' => 'SP', 'ibge' => 35]);
        \DB::table('estados')->insert(['id' => 26, 'nome' => 'Sergipe', 'uf' => 'SE', 'ibge' => 28]);
        \DB::table('estados')->insert(['id' => 27, 'nome' => 'Tocantins', 'uf' => 'TO', 'ibge' => 17]);
    }
}
