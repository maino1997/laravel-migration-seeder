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
        $new_train = new Train();

        $new_train->Azienda = 'ciao';
        $new_train->Stazione_di_partenza = 'Milano';
        $new_train->Stazione_di_arrivo = 'Brescia';
        $new_train->Orario_di_partenza = '2022-02-10 10:35:21';
        $new_train->Orario_di_arrivo = '2022-02-10 10:41:25';
        $new_train->Codice_treno = 445;
        $new_train->Carrozze = 20;
        $new_train->In_orario = true;
        $new_train->Cancellato = false;

        $new_train->save();
    }
}
