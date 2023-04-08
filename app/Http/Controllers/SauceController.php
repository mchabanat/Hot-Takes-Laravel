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
        return redirect()->route('allSauces')->with('success', 'Sauce bien supprimée');
    }

    public function likeSauce($id){
        //Vérification que l'utilisateur n'a pas déjà liké dans le json
        $idUser = auth()->user()->id;
        $sauce = Sauce::findOrfail($id);

        $usersWhoLiked = json_decode($sauce->usersLiked);
        if(in_array($idUser, $usersWhoLiked)){
            return redirect()->back()->with('error', 'Vous avez déjà liké cette sauce');
            
        }
        //On vérifie que l'utilisateur n'a pas déjà disliké
        $usersWhoDisliked = json_decode($sauce->usersDisliked);
        if(in_array($idUser, $usersWhoDisliked)){
            //On supprime l'utilisateur du json
            $usersWhoDisliked = array_diff($usersWhoDisliked, [$idUser]);
            $sauce->usersDisliked = json_encode($usersWhoDisliked);
            //On retire le dislike
            $sauce->dislikes -= 1;
        }
        //Ajout du like
        $sauce->likes += 1;
        //On ajoute l'utilisateur dans le json
        array_push($usersWhoLiked, $idUser);
        $sauce->usersLiked = json_encode($usersWhoLiked);
        $sauce->save();
        return redirect()->back()->with('success', 'Vous avez liké cette sauce');
    }

    public function dislikeSauce($id){
        //Vérification que l'utilisateur n'a pas déjà disliké dans le json
        $idUser = auth()->user()->id;
        $sauce = Sauce::findOrfail($id);

        $usersWhoDisliked = json_decode($sauce->usersDisliked);
        if(in_array($idUser, $usersWhoDisliked)){
            return redirect()->back()->with('error', 'Vous avez déjà disliké cette sauce');
        }
        //On vérifie que l'utilisateur n'a pas déjà liké
        $usersWhoLiked = json_decode($sauce->usersLiked);
        if(in_array($idUser, $usersWhoLiked)){
            //On supprime l'utilisateur du json
            $usersWhoLiked = array_diff($usersWhoLiked, [$idUser]);
            $sauce->usersLiked = json_encode($usersWhoLiked);
            //On retire le like
            $sauce->likes -= 1;
        }
        //Ajout du dislike
        $sauce->dislikes += 1;
        //On ajoute l'utilisateur dans le json
        array_push($usersWhoDisliked, $idUser);
        $sauce->usersDisliked = json_encode($usersWhoDisliked);
        $sauce->save();
        return redirect()->back()->with('success', 'Vous avez disliké cette sauce');
    }
}
