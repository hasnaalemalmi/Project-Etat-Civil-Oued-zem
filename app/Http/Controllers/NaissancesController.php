<?php

namespace App\Http\Controllers;

use App\Models\Naissances;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\NaissancesRequest;
use PHPUnit\TextUI\Configuration\Builder;

class NaissancesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFiled = $request->all();
        Naissances::create($formFiled);
        return redirect('naissances.create');
        // ->withFragment('تمت اضافة المولود')
    }

    /**
     * Display the specified resource.
     */
    public function show(Naissances $naissances)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Naissances $naissances)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Naissances $naissances)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Naissances $naissances)
    {
        //
    }
    public function rechercher()
    {
        return view('recherche');
    }
    public function find(Request $request)
    {
        $ne = DB::table('naissances')->where('nomDeNe', $request->nomDeNe)->whereYear('dateNaissance', $request->anneeDeNaissance)->get();
        return view('recherche', ['ne' => $ne]);
    }
}