<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faq::insert([
            ['title' => 'Czy mogę umówić się na wizytę online?', 'description' => 'Tak, oferujemy możliwość rezerwacji wizyt online przez naszą stronę internetową lub media społecznościowe.'],
            ['title'=> 'Czy mogę zmienić termin umówionej wizyty?', 'description'=>'Oczywiście! Prosimy o kontakt co najmniej 24 godziny przed zaplanowaną wizytą'],
            ['title'=> 'Czy oferujecie karty podarunkowe?', 'description'=>'Tak, posiadamy eleganckie karty podarunkowe na dowolną kwotę. Można je wykorzystać na wszystkie usługi naszego salonu.'],
            ['title'=> 'Jakie metody płatności są akceptowane?', 'description'=>'Akceptujemy gotówkę, karty płatnicze oraz płatności mobilne (BLIK, Google Pay, Apple Pay).'],
            ['title'=> 'Czy mogę przyjść z dzieckiem?', 'description'=>'Tak, dzieci są mile widziane, jednak prosimy o wcześniejsze poinformowanie nas w celu lepszej organizacji przestrzeni.'],
            ['title'=> 'Jakie produkty używacie podczas zabiegów?', 'description'=>'Używamy wyłącznie profesjonalnych i certyfikowanych kosmetyków renomowanych marek, takich jak [np. VIART, GENUS, CeCe, Versum, KaaralBaco, Serum, DNKa, HELLO, Platinum].'],
            ['title'=> 'Czy oferujecie rabaty dla stałych klientów?', 'description'=>'Tak, posiadamy program lojalnościowy — po 5 wizytach otrzymujesz Kartę Stałego Klienta z dodatkowymi korzyściami.'],
            ['title'=> 'Co jeśli spóźnię się na wizytę?', 'description'=>'Do 10 minut — bez problemu. Powyżej tej granicy możemy skrócić zabieg lub przełożyć wizytę na inny termin.'],
            ['title'=> 'Czy muszę się przygotować do zabiegu (np. manicure, zabieg twarzy)?', 'description'=>'W większości przypadków nie — stylistka poinformuje Cię, jeśli potrzebne będą konkretne przygotowania.'],
            ['title'=> 'Czy mogę odwołać wizytę przez wiadomość na Instagramie lub Messengerze?', 'description'=>'Tak, ale zalecamy kontakt telefoniczny, aby mieć pewność, że wiadomość dotarła na czas.'],
        ]);
    }
}
