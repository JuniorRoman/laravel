<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Service;
use App\Models\Master;

class DemoSeeder extends Seeder
{
  public function run()
  {
    // Створюємо категорії
    $hair = Category::create(['name' => 'Włosy']);
    $nails = Category::create(['name' => 'Paznokci']);
    $lashes = Category::create(['name' => 'Rzęsy/Brwi']);

    // Створюємо послуги
    $haircut = Service::create(['name' => 'Podcięcie końcówek', 'price' => 100, 'duration' => 60, 'category_id' => $hair->id]);
    $coloring = Service::create(['name' => 'Koloryzacja', 'price' => 200, 'duration' => 120, 'category_id' => $hair->id]);

    $manicure = Service::create(['name' => 'Manicure', 'price' => 100, 'duration' => 60, 'category_id' => $nails->id]);
    $pedicure = Service::create(['name' => 'Pedicure', 'price' => 100, 'duration' => 60, 'category_id' => $nails->id]);

    $lashesExtension = Service::create(['name' => 'Нарощення вій', 'price' => 100, 'duration' => 60,  'category_id' => $lashes->id]);
    $lashesLamination = Service::create(['name' => 'Ламінування вій', 'price' => 100, 'duration' => 60, 'category_id' => $lashes->id]);

    // Створюємо майстрів
    $master1 = Master::create([
      'name' => 'Олена Іванова',
      'avatar' => 'avatars/master1.jpg',
    ]);

    $master2 = Master::create([
      'name' => 'Марія Петрова',
      'avatar' => 'avatars/master2.jpg',
    ]);

    $master3 = Master::create([
      'name' => 'Анна Сидоренко',
      'avatar' => 'avatars/master3.jpg',
    ]);

    // Прив'язуємо послуги до майстрів
    $master1->services()->attach([$haircut->id, $coloring->id]); // Олена працює з волоссям
    $master2->services()->attach([$manicure->id, $pedicure->id]); // Марія робить нігті
    $master3->services()->attach([$lashesExtension->id, $lashesLamination->id]); // Анна робить вії
  }
}
