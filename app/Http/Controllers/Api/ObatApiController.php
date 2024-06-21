<?php

namespace App\Http\Controllers\Api;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Models\Obat;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ObatApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    

     //all obat
     $obats = Obat::orderBy('id', 'desc')->get();
     return response()->json([
         'success' => true,
         'message' => 'List Data Obat',
         'data' => $obats
     ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'category' => 'required|in:bebas,terbatas,keras',
            'image' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $filename = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/obats', $filename);
        $obat = Obat::create([
            'name' => $request->name,
            'category' => $request->category,
            'image' => $filename,
        ]);

        if ($obat) {
            return response()->json([
                'success' => true,
                'message' => 'Obat Created',
                'data' => $obat
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Obat Failed to Save',
            ], 409);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $obat = Obat::where('id', $id)
            ->get()
            ->map(function ($obat) {
                return $this->format($obat);
            });
        return $this->respons($obat);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $obat = Obat::where('id', $id)->first();

        if(!$obat) {
            return MessageHelper::error(false, 'Data Tidak ditemukan');
        }

        Storage::delete($obat->image);
        $obat->delete();
        return MessageHelper::error(true, 'Berhasil Menghapus Data');
    }

    public function format($obat)
    {

        return [
            'id' => $obat->id,
            'name' => $obat->name,
            'deskripsi' => $obat->deskripsi,
            'category' => $obat->category,
            'image' => $obat->image,
            'tanggal_tambah_obat' => Carbon::parse($obat->created_at)->translatedFormat('d F Y'),
        ];
    }

    public function respons($obat)
    {
        return response()->json([
            'status' => true,
            'data' => $obat,
        ], 200);
    }

    public function errorStatus($status, $msg)
    {
        return response()->json([
            'status' => $status,
            'message' => $msg,
        ], 200);
    }
}