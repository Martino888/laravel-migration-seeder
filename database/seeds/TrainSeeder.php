<?php

use Illuminate\Database\Seeder;
use App\home;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i = 0; $i < 30; $i++) {
            $listaTreni = new Train();
            $listaTreni->Azienda = $faker->word();
            $listaTreni->Stazione_Di_Partenza = $faker->word();
            $listaTreni->Stazione_Di_Arrivo = $faker->word();

            $times = [
                '2022-04-02 15:00:00',
                '2022-04-02 16:45:00',
                '2022-04-02 18:20:00',
                '2022-04-02 21:00:00',
                '2022-04-02 22:00:00'
            ];
            $listaTreni->Orario_Di_Partenza = $times[rand(0, count($times) - 1)];
            $listaTreni->Orario_Di_Arrivo = $times[rand(0, count($times) - 1)];

            $listaTreni->Codice_Treno = $faker->randomNumber(4, false);
            $listaTreni->Numero_Carrozza = $faker->randomNumber(2, false);
            $listaTreni->Binario = $faker->randomNumber(2, false);

            $listaTreni->in_time = $faker->boolean();
            $listaTreni->deleted = $faker->boolean();
            $listaTreni->save();
        }
    }
}
