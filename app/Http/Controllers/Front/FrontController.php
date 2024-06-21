<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Materi;
use App\Models\Obat;
use Illuminate\Http\Request;

class FrontController extends Controller
{


    public function index()
    {
        return view('welcome');
    }


    // untuk ke page obat harusnya seperti ini tapi karena route nya not devine jadi untuk sementaara di index

    public function obatFront()
    {
        $obat = Materi::all();
        return view('Front.obat', compact('obat'));
    }

    public function indexHome()
    {
        $obats = Materi::count();
        return view('Admin.dashboardAdmin', compact('obats'));
    }
}