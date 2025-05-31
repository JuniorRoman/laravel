<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Promo;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Promo::insert([
         [ 'title'=>'🎉 Świętujemy 3. urodziny naszego salonu! 🎉',
          'rules'=>json_encode([
            '💖 Dzięki Wam jesteśmy tu już 3 lata!',
            '✨ Dziękujemy za zaufanie, każdą wizytę, uśmiech i dobre słowo – jesteście najlepsze!',
            '🎁 Z tej okazji przygotowaliśmy dla Was urodzinowy KONKURS!',
        ]),
        ],
        [ 'title'=>'🎉 Świętujemy 3. urodziny naszego salonu! 🎉',
          'rules'=> json_encode([
            '💖 Dzięki Wam jesteśmy tu już 3 lata!',
            '✨ Dziękujemy za zaufanie, każdą wizytę, uśmiech i dobre słowo – jesteście najlepsze!',
            '🎁 Z tej okazji przygotowaliśmy dla Was urodzinowy KONKURS!',
        ]),
        ],
        ]);
    }
}
