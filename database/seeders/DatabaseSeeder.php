<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Database\Seeders\MastersSliderSeeder;
use Database\Seeders\PromoSeeder;
use Database\Seeders\MarketingSeeder;
use Database\Seeders\GallerySeeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // User::factory(10)->create();
    // User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
    // $this->call(DemoSeeder::class);
    // $this->call(CategorySeeder::class);
    // $this->call(MastersSeeder::class);
    // $this->call(ServiceSeeder::class);
    // $this->call(FeaturesSeeder::class);
    // $this->call(MastersSliderSeeder::class);
    // $this->call(FaqSeeder::class);
    // $this->call(PromoSeeder::class);
    // $this->call(MarketingSeeder::class);
    $this->call(GallerySeeder::class);
  }
}
