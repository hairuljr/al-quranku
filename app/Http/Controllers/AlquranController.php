<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class AlquranController extends Controller
{

  public function index()
  {
    $response = Http::get('https://api.quran.sutanlab.id/surah/');
    $data = $response->json();
    return view('index', compact('data'));
  }

  public function ngaji($surat)
  {
    $response = Http::get("https://api.quran.sutanlab.id/surah/$surat");
    $data = $response->json();
    //dd($data);
    return view('ngaji', compact('data'));
  }
}
