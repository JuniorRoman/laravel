<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Master;

class MastersSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Master::insert([
      ['name' => 'Jana', 'avatar' => '/images/masters/Jana.jpg', 'image' => '/images/masters/Jana.jpg', 'specialty' => 'Manicure/pedicure'],
      ['name' => 'Iryna', 'avatar' => '/images/masters/Irina.jpg', 'image' => '/images/masters/Irina.jpg', 'specialty' => 'Fryzjer/kolorysta'],
      ['name' => 'Alina', 'avatar' => '/images/masters/Alina.jpg', 'image' => '/images/masters/Alina.jpg', 'specialty' => 'Fryzjer/kolorysta'],
      ['name' => 'AlinaB', 'avatar' => '/images/masters/alinab.webp', 'image' => '/images/masters/alinab.webp', 'specialty' => 'Fryzjer/kolorysta'],
      ['name' => 'Ksenia', 'avatar' => '/images/masters/ksenia.webp', 'image' => '/images/masters/ksenia.webp', 'specialty' => 'Rzęsy/brwi'],
    ]);
  }
}
