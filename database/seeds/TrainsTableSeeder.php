<?php

use Illuminate\Database\Seeder;
use App\Train;



class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'Azienda' => 'Vd Trains',
                'Stazione_di_partenza' => 'Milano Centrale',
                'Stazione_di_arrivo' => 'Brescia',
                'Orario_di_partenza' => '2022-02-10 10:35:21',
                'Orario_di_arrivo' => '2022-02-10 10:41:25',
                'Codice_treno' => 452,
                'Carrozze' => 32,
                'In_orario' => true,
                'Cancellato' => false,
            ],

            [
                'Azienda' => 'aks transport',
                'Stazione_di_partenza' => 'Milano rogorego',
                'Stazione_di_arrivo' => 'Torino',
                'Orario_di_partenza' => '2022-02-12 14:35:21',
                'Orario_di_arrivo' => '2022-02-10 14:41:25',
                'Codice_treno' => 556,
                'Carrozze' => 21,
                'In_orario' => false,
                'Cancellato' => false,
            ]

        ];


        foreach ($trains as $train) {
            $new_train = new Train();

            $new_train->fill($train);

            $new_train->save();
        }
    }
}
