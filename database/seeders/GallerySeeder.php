<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Gallery::insert([
        ['category' => 'manicure', 'img' => '/images/gallery/manicure/man1.jpg'],
        ['category' => 'manicure', 'img' => '/images/gallery/manicure/man2.jpg'],
        ['category' => 'manicure', 'img' => '/images/gallery/manicure/man3.jpg'],
        ['category' => 'manicure', 'img' => '/images/gallery/manicure/man4.jpg'],
        ['category' => 'manicure', 'img' => '/images/gallery/manicure/man5.jpg'],
        ['category' => 'manicure', 'img' => '/images/gallery/manicure/man6.jpg'],
        ['category' => 'manicure', 'img' => '/images/gallery/manicure/man7.jpg'],
        ['category' => 'hair', 'img' => '/images/gallery/hair/hair1.jpg'],
        ['category' => 'hair', 'img' => '/images/gallery/hair/hair2.jpg'],
        ['category' => 'hair', 'img' => '/images/gallery/hair/hair3.jpg'],
        ['category' => 'hair', 'img' => '/images/gallery/hair/hair4.jpg'],
        ['category' => 'hair', 'img' => '/images/gallery/hair/hair5.jpg'],
        ['category' => 'hair', 'img' => '/images/gallery/hair/hair6.jpg'],
        ['category' => 'lashes', 'img' => '/images/gallery/lashes/lashes1.jpg'],
        ['category' => 'lashes', 'img' => '/images/gallery/lashes/lashes2.jpg'],
        ['category' => 'lashes', 'img' => '/images/gallery/lashes/lashes3.jpg'],
        ['category' => 'lashes', 'img' => '/images/gallery/lashes/lashes4.jpg'],
        ['category' => 'lashes', 'img' => '/images/gallery/lashes/lashes5.jpg'],
        ['category' => 'lashes', 'img' => '/images/gallery/lashes/lashes6.jpg'],
    ]);
        
    }
}
