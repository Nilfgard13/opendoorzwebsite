<?php

namespace App\Http\Controllers;

use App\Models\Nomor;
use Illuminate\Http\Request;

class nomors extends Controller
{
    // Menampilkan daftar nomor
    public function index()
    {
        $nomors = Nomor::latest()->get();
        return view('dashboard', ['title' => 'OAS+ | Rotator Management', 'nomors' => $nomors]);
    }

    // Menampilkan form untuk membuat nomor baru
    public function create()
    {
        return view('nomors.create');
    }

    public function store(Request $request)
    {
        // Validasi data input dari form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'nomor' => 'required|numeric',
        ]);

        // Buat entri baru di database
        $nomor = new Nomor();
        $nomor->name = $validatedData['name'];
        $nomor->nomor = $validatedData['nomor'];
        $nomor->save();

        // Redirect ke halaman daftar dengan pesan sukses
        return redirect()->route('nomors.index')->with('success', 'Nomor added successfully.');
    }

    // Controller Method for Multi-Update
    public function multiUpdate(Request $request)
    {
        $ids = $request->input('selected_ids', []);
        $names = $request->input('name', []);
        $nomors = $request->input('nomor', []);

        foreach ($ids as $id) {
            $nomor = Nomor::find($id);
            if ($nomor) {
                $nomor->name = $names[$id] ?? $nomor->name;
                $nomor->nomor = $nomors[$id] ?? $nomor->nomor;
                $nomor->save();
            }
        }

        return redirect()->route('nomors.index')->with('success', 'Nomors updated successfully.');
    }

    public function multiDelete(Request $request)
    {
        $ids = explode(',', $request->input('ids'));

        Nomor::whereIn('id', $ids)->delete();

        return redirect()->route('nomors.index')->with('success', 'Selected items deleted successfully.');
    }

    // Menampilkan form untuk mengedit nomor
    // public function edit(Nomor $nomor)
    // {
    //     return view('nomors.edit', compact('nomor'));
    // }

    // // Mengupdate data nomor
    // public function update(Request $request, Nomor $nomor)
    // {
    //     $validated = $request->validate([
    //         'name' => 'required|string|max:125',
    //         'nomor' => 'required|string|max:16',
    //     ]);

    //     $nomor->update($validated);

    //     return redirect()->route('nomors.index')->with('success', 'Nomor updated successfully.');
    // }

    // // Menghapus nomor
    // public function destroy(Nomor $nomor)
    // {
    //     $nomor->delete();

    //     return redirect()->route('nomors.index')->with('success', 'Nomor deleted successfully.');
    // }
}
