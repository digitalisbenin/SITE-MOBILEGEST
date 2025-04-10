<?php

namespace App\Http\Controllers;

use App\Models\Partenaire;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partenaire=Partenaire::all();
        return view('welcome',compact('partenaire'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partenaire');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partenaire = new Partenaire();

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/',$filename);
            $partenaire->image = $filename;
        }

        $partenaire->url_site = $request->url_site;
        $partenaire->save();

        // session()->flash('success', 'La Formation à été bien créée !');


        return redirect('/partenaire');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function show(Partenaire $partenaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Partenaire $partenaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $partenaire = Partenaire::findOrfail($id);

        if ($request->hasFile('file')) {
            $path='assets/uploads/'.$partenaire->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file =$request->file('file');
            $ext=$file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/',$filename);
            $partenaire->image= $filename;
        }

        $partenaire->url_site = $request->url_site;
        $partenaire->save();

        // session()->flash('success', 'La Formation à été bien créée !');


        return redirect('/partenaire');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)    {
        $partenaire = Partenaire::findOrfail($id);
        $partenaire->delete();
        // session()->flash('success', 'Suppression de la catégorie réussie !');
        return redirect('/partenaire');
    }
}
