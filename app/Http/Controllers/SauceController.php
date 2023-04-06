<?php

namespace App\Http\Controllers;

use App\Models\Sauce;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SauceController extends Controller
{
    public function index() : View {
        $sauces = Sauce::all();
        return view('allSauces', ['sauces' => $sauces]);
    }

    public function create() {
        return view('addSauce');
    }

    public function show($id) : View {
        $sauce = Sauce::findOrFail($id);
        return view('sauce', ['sauce' => $sauce]);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'manufacturer' => 'required',
            'description' => 'required',
            'mainPepper' => 'required',
            'heat' => 'required',
            'imageUrl' => 'required'
        ]);

        $user = Sauce::create([
            'userId' => auth()->user()->id,
            'name' => $request->name,
            'manufacturer' => $request->manufacturer,
            'description' => $request->description,
            'mainPepper' => $request->mainPepper,
            'heat' => $request->heat,
            'imageUrl' => $request->imageUrl
        ]);

        return redirect()->route('allSauces');
    }

    public function destroy($id) {
        $sauce = Sauce::findOrFail($id);
        $sauce->delete();
        return redirect()->route('allSauces');
    }
}
