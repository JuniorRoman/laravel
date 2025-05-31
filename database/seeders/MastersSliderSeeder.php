<?php

namespace Database\Seeders;

use App\Models\MasterSlider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MastersSliderSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    MasterSlider::insert([
      ['name' => 'Alina', 'image' => '/images/masters/alina.webp', 'specialty' => 'fryzjer/kolorysta'],
      ['name' => 'Irina', 'image' => '/images/masters/Irina.jpg', 'specialty' => 'kolorysta'],
      ['name' => 'Alina', 'image' => '/images/masters/alinab.webp', 'specialty' => 'fryzjer/kolorysta'],
      ['name' => 'Ksenia', 'image' => '/images/masters/ksenia.webp', 'specialty' => 'rzęsy/brwi'],
      ['name' => 'Jana', 'image' => '/images/masters/Jana.jpg', 'specialty' => 'manicure/pedicure'],
    ]);
  }
}
