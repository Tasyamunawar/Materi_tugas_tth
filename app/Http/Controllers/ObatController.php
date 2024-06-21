<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function indexObat()
    {
        $obat = Materi::all();
        return view('Admin.Obat.indexObat', compact('obat'));
    }

    public function dataObatForm()
    {
        return view('Admin.Obat.createObat');
    }

    public function dataObatCreate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'deskripsi' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,giv,svg',

        ]);

        $filename = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/obats', $filename);
        $data = $request->all();

        Materi::create([
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
            'image' => $filename,
        ]);

        return redirect()->route('index.obat')->with('Create', "Data Obat $request->name berhasil ditambahkan");
    }



    public function dataObatFormEdit($id)
    {
        $obat = Materi::findOrFail($id);
        return view('Admin.Obat.editObat', compact('obat'));
    }

    public function dataObatFormUpdate(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'deskripsi' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,giv,svg',

        ]);

        $obat = Materi::findOrFail($id);

        if ($request->file('image') == "") {
            $obat([
                'name' => $request->name,
                'deskripsi' => $request->deskripsi,
            ]);
        } else {

            $image = $request->file('image');
            $namaFile = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $namaFile);

            $obat->update([
                'name' => $request->name,
                'deskripsi' => $request->deskripsi,
            ]);
        }
        return redirect()->route('index.obat')->with('Update', "Data Obat $request->name berhasil diupdate");
    }


    public function dataObatSearch(Request $request)
    {
        if ($request->has('search')) {
            $obat = Materi::where('name', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $obat = Materi::all();
        }

        return view('Admin.Obat.indexObat', compact('obat'));
    }

    public function dataObatDelete(Request $request)
    {
        $obat = Materi::findOrFail($request->id);
        $obat->delete();
        return redirect()->back()->with('Delete', "Data Obat $request->name berhasil dihapus");
    }
}
