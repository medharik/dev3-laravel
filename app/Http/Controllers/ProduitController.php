<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Produit::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produit=Produit::create($request->all(),201);
        return response()->json($produit, 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produit=Produit::find($id);
        if(!$produit)  return response()->json(['message'=>'produit introuvable'],404);
        return response()->json($produit,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produit=Produit::find($id);
        if(!$produit)  return response()->json(['message'=>'produit introuvable'],404);
        $produit->update($request->all());
        return response()->json($produit,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produit=Produit::find($id);
        if(!$produit)  return response()->json(['message'=>'produit introuvable'],404);
        $produit->delete();
        return response()->json($produit,200);
    }
}
