<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ShazamApiService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('RAPIDAPI_KEY'); // Pastikan RAPIDAPI_KEY ada di .env
    }

    public function getLatestRelease()
    {
        try {
            $response = $this->client->request('GET', 'https://shazam.p.rapidapi.com/songs/get-count', [
                'query' => [
                    'key' => '40333609' // Parameter key, sebaiknya ini diambil dari environment variable atau diatur dengan benar
                ],
                'headers' => [
                    'x-rapidapi-key' => $this->apiKey,
                    'x-rapidapi-host' => 'shazam.p.rapidapi.com'
                ],
                'verify' => false  // Menonaktifkan verifikasi SSL, pastikan dihapus atau diubah di lingkungan produksi
            ]);

            // Mengambil response body dan mengubahnya menjadi array
            $data = json_decode($response->getBody()->getContents(), true);
            return $data;
        } catch (RequestException $e) {
            // Menangani error request
            return ['error' => 'Request failed: ' . $e->getMessage()];
        }
    }
}
