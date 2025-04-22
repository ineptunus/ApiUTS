<?php 

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ShazamApiService;
use Illuminate\Http\Request;

class ShazamController extends Controller
{
    protected $apiService;

    // Menambahkan dependensi pada constructor
    public function __construct(ShazamApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    // Method untuk mendapatkan count
    public function getCount()
    {
        // Memanggil service untuk mendapatkan data terbaru
        $count = $this->apiService->getLatestRelease();

        // Jika Anda ingin mengirim data ke tampilan Blade
        return view('count', ['data' => $count]);  // pastikan ada view count.blade.php

        // Jika Anda lebih memilih merespon dalam bentuk JSON (untuk API)
        // return response()->json($count);
    }
}
