<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commend;
use App\Models\Client;

class CommendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commends = Commend::with('Client')->get();
        return view('commends',compact('commends'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        return view('createCommend',compact("clients"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "name"=>"string|required|max:55",
            "prix"=>"numeric|required",
            "image"=>"image|mimes:jpg,jped,png,gif,svg|max:4080",
            "client_id"=>"required|exists:clients,id"
        ]);

        if($image = $request->file('image')){
            $articleImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move('image/',$articleImage);
            $data['image'] = $articleImage;
        };
        Commend::create($data);
        return redirect('/')->with('succes','ajouté');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        //
    }
}
