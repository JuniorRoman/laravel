<?php

namespace Database\Seeders;

use App\Models\Master;
use App\Models\Service;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Service::insert([
      ['title'=>'Stryzenie','name'=>'Podcięcie końcówek','duration'=>30,'price'=>50],
      ['title'=>'Stryzenie','name'=>'Podcięcie końcówek + (mycie głowy)','duration'=>60,'price'=>80],
      ['title'=>'Stryzenie','name'=>'Strzyżenie damskie', 'duration'=>60, 'price'=> 90],
      ['name'=>'Włosy średnie', 'duration'=>60, 'price'=> 110],
      ['name'=>'Włosy długie', 'duration'=>60, 'price'=> 130],
      ['name'=>'Włosy krótkie', 'duration'=>60, 'price'=> 90],
      ['name'=>'Modelowanie włosów', 'duration'=>30, 'price'=> 100],
      ['name' => 'Podcięcie końcówek', 'price' => 50, 'duration' => 30, 'category_id' => 1],
      ['name' => 'Podcięcie grzywki', 'price' => 50, 'duration' => 30, 'category_id' => 1],
      ['name' => 'Milirówanie', 'price' => 450, 'duration' => 180, 'category_id' => 1],
      ['name' => 'Koloryzacja jednolita', 'price' => 350, 'duration' => 120, 'category_id' => 1],
      ['name' => 'Laminuwanie rzęs', 'price' => 120, 'duration' => 80, 'category_id' => 2],
      ['name' => 'Przedłuzenie rzęs 2:1', 'price' => 160, 'duration' => 260, 'category_id' => 2],
      ['name' => 'Przedłuzenie rzęs 3:1', 'price' => 200, 'duration' => 300, 'category_id' => 2],
      ['name' => 'Manicure klasyczny', 'price' => 70, 'duration' => 40, 'category_id' => 3],
      ['name' => 'French', 'price' => 20, 'duration' => 20, 'category_id' => 3],
    ]);
  }
}
