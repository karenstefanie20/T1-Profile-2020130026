<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Classes\Notifikasi;
class HomeController extends Controller
{
 public function index()
 {
    return view('Home');
}
public function contohFacade(){
    echo Str::snake('SayaSedangBelajarLaravel');
    echo "<br>";
    echo Str::kebab('SedangBelajarLaravelUncover');
}
public function contohClass()
{
    $notifikasi = new \App\Classes\Notifikasi();
    return $notifikasi->panggil();
}
}
