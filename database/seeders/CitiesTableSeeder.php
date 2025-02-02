<?php

namespace Database\Seeders;

use App\Models\Address\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
                ['name' => 'Acrelândia', 'estado' => 'AC'],
                ['name' => 'Rio Branco', 'estado' => 'AC'],
                ['name' => 'Maceió', 'estado' => 'AL'],
                ['name' => 'Arapiraca', 'estado' => 'AL'],
                ['name' => 'Macapá', 'estado' => 'AP'],
                ['name' => 'Santana', 'estado' => 'AP'],
                ['name' => 'Manaus', 'estado' => 'AM'],
                ['name' => 'Parintins', 'estado' => 'AM'],
                ['name' => 'Salvador', 'estado' => 'BA'],
                ['name' => 'Feira de Santana', 'estado' => 'BA'],
                ['name' => 'Fortaleza', 'estado' => 'CE'],
                ['name' => 'Juazeiro do Norte', 'estado' => 'CE'],
                ['name' => 'Brasília', 'estado' => 'DF'],
                ['name' => 'Vitória', 'estado' => 'ES'],
                ['name' => 'Vila Velha', 'estado' => 'ES'],
                ['name' => 'Goiânia', 'estado' => 'GO'],
                ['name' => 'Anápolis', 'estado' => 'GO'],
                ['name' => 'São Luís', 'estado' => 'MA'],
                ['name' => 'Imperatriz', 'estado' => 'MA'],
                ['name' => 'Cuiabá', 'estado' => 'MT'],
                ['name' => 'Rondonópolis', 'estado' => 'MT'],
                ['name' => 'Campo Grande', 'estado' => 'MS'],
                ['name' => 'Dourados', 'estado' => 'MS'],
                ['name' => 'Belo Horizonte', 'estado' => 'MG'],
                ['name' => 'Uberlândia', 'estado' => 'MG'],
                ['name' => 'Belém', 'estado' => 'PA'],
                ['name' => 'Ananindeua', 'estado' => 'PA'],
                ['name' => 'João Pessoa', 'estado' => 'PB'],
                ['name' => 'Campina Grande', 'estado' => 'PB'],
                ['name' => 'Curitiba', 'estado' => 'PR'],
                ['name' => 'Londrina', 'estado' => 'PR'],
                ['name' => 'Recife', 'estado' => 'PE'],
                ['name' => 'Jaboatão dos Guararapes', 'estado' => 'PE'],
                ['name' => 'Teresina', 'estado' => 'PI'],
                ['name' => 'Parnaíba', 'estado' => 'PI'],
                ['name' => 'Rio de Janeiro', 'estado' => 'RJ'],
                ['name' => 'Niterói', 'estado' => 'RJ'],
                ['name' => 'Natal', 'estado' => 'RN'],
                ['name' => 'Mossoró', 'estado' => 'RN'],
                ['name' => 'Porto Alegre', 'estado' => 'RS'],
                ['name' => 'Caxias do Sul', 'estado' => 'RS'],
                ['name' => 'Porto Velho', 'estado' => 'RO'],
                ['name' => 'Ji-Paraná', 'estado' => 'RO'],
                ['name' => 'Boa Vista', 'estado' => 'RR'],
                ['name' => 'Florianópolis', 'estado' => 'SC'],
                ['name' => 'Joinville', 'estado' => 'SC'],
                ['name' => 'São Paulo', 'estado' => 'SP'],
                ['name' => 'Campinas', 'estado' => 'SP'],
                ['name' => 'Aracaju', 'estado' => 'SE'],
                ['name' => 'Nossa Senhora do Socorro', 'estado' => 'SE'],
                ['name' => 'Palmas', 'estado' => 'TO'],
                ['name' => 'Araguaína', 'estado' => 'TO']
        ];

        foreach ($cities as $city) {
            City::firstOrCreate($city);
        }
    }
}
