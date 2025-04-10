<?php

namespace App\Http\Controllers;

use App\Models\Societe;
use Illuminate\Http\Request;

class SocieteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $societes=Societe::all();
        return view('filtre',compact('societes'));
    }
    public function indexs()
    {
        $societes=Societe::all();
        return view('dashboard',compact('societes'));
    }
    public function getArticleDetails(Request $request)
{
    $article = Societe::where('NomSociete', $request->imei)
                 ->first();

    if ($article) {
        return response()->json([
            'success' => true,
            'data' => [
                'url_site' => $article->url_site,
                
            ]
        ]);
    } else {
        return response()->json(['success' => false]);
    }
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        // $validatedData = $request->validate([
        //     'NomSociete' => 'required|max:255',
        //     'Adresse' => 'nullable',
        //     'url_site' => 'required',
        //     'Telephone' => 'nullable',
           
        // ]);
        // dd($request);
        // $societes = Societe::create($validatedData);

      
        $order = new Societe();
        $order->NomSociete=$request->input('NomSociete');
        $order->Logo=$request->input('Logo');
        $order->Adresse=$request->input('Adresse');
        $order->url_site=$request->input('url_site');
        $order->Telephone=$request->input('Telephone');
       
       
     

        $order->save();
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
   
    {
        $societes = Societe::findOrfail($id);
        $societes->NomSociete = $request->NomSociete;
        $societes->Logo = $request->Logo;
        $societes->Adresse = $request->Adresse;
        $societes->url_site = $request->url_site;
        $societes->Telephone = $request->Telephone;
        $societes->save();
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Societe::findOrfail($id);
        $categorie->delete();
        // session()->flash('success', 'Suppression de la catégorie réussie !');
        return redirect('/dashboard');
    }
}
