<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ChirpController extends Controller
{
    public function index(): View
    {
        return view('chirps', []);
    }

    public function store(Request $request)
    {
        $data = $request->validate([

        ]);

        return Chirp::create($data);
    }

    public function show(Chirp $chirp)
    {
        return $chirp;
    }

    public function update(Request $request, Chirp $chirp)
    {
        $data = $request->validate([

        ]);

        $chirp->update($data);

        return $chirp;
    }

    public function destroy(Chirp $chirp)
    {
        $chirp->delete();

        return response()->json();
    }
}
