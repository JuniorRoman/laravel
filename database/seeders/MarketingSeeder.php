<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Marketing;

class MarketingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Marketing::insert([
          [ 'title' => 'Poszukiwana stylistka paznokci',
            'desc' => 'Do naszego nowoczesnego i przytulnego salonu urody poszukujemy    stylistki paznokci / pedicurzystki do współpracy na zasadach procentowych.
            Jeśli kochasz swoją pracę, masz doświadczenie i chcesz rozwijać się w miłej atmosferze – zapraszamy do naszego zespołu! 🌸',
            'phone' => '736-966-582',
            'img'=>null,
           ],
           ['title' => 'Sprzedaż fotelia dla pedicura',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, possimus!',
            'phone' => '736-966-582',
            'img' => '/images/slider/photo.webp',
           ],
           ['title' => 'Sprzedaż fotelia dla pedicura',
            'desc' => 'Lorem ipsum dolor sit amet consectetur!',
            'phone' => '736-966-582',
            'img' => '/images/slider/fotel_black.webp',
           ],
        ]);
    }
}
