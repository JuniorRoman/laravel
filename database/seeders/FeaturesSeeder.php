<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Feature::insert([
            ['title' => 'Manicure/Pedicure', 'description' => 'Perfekcyjne paznokcie to Twoja wizytówka! Zapisz się na manicure i ciesz się pięknem każdego dnia.', 'image' => '/images/feature/feature-1.webp'],
            ['title' => 'Koloryzacja', 'description' => 'Nowy styl - nowe inspiracje! Wybierz fryzurę lub koloryzację, a my sprawimy, że będziesz wyglądać zniewalająco.', 'image' => '/images/feature/feature-2.webp'],
            ['title' => 'Przedłużanie rzęs', 'description' => 'Twoje oczy są magiczne! Spraw, by były wyraziste i uwodzicielskie dzięki profesjonalnemu przedłużaniu rzęs.', 'image' => '/images/feature/feature-3.webp'],
            ['title' => 'Makijaż permanentny', 'description' => 'Podkreśl swoje naturalne piękno i zapomnij o codziennym makijażu.', 'image' => '/images/feature/feature-4.webp'],
        ]);
    }
}
