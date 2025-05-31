<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class InPostService
{
    protected $baseUrl = 'https://api-shipx-pl.easypack24.net';

    public function getPoints()
    {
      $response = Http::get("{$this->baseUrl}/v1/points", [
        'type' => 'parcel_locker', // тільки пачкомати
        'status' => 'Operating',
        'limit' => 500,
    ]);

        if ($response->successful()) {
            return $response->json()['items'] ?? [];
        }

        return [];
    }
}
