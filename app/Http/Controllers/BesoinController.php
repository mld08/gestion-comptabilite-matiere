<?php

namespace App\Http\Controllers;

use App\Exports\BesoinExport;
use App\Http\Requests\BesoinFormRequest;
use App\Models\Besoins;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class BesoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('besoin.index', [
            'besoins' => Besoins::orderBy('created_at','asc')->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $besoin = new Besoins();
        return view('besoin.form', [
            'besoin'=> $besoin
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BesoinFormRequest $request)
    {
        $besoin = Besoins::create($request->validated());
        return to_route('admin.besoin.index')->with('success','Le besoin a bien été créé.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Besoins $besoin)
    {
        return view('besoin.form', [
            'besoin'=> $besoin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BesoinFormRequest $request, Besoins $besoin)
    {
        $besoin->update($request->validated());
        return to_route('admin.besoin.index')->with('success','Le besoin a bien été modifié.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Besoins $besoin)
    {
        $besoin->delete();
        return to_route('admin.besoin.index')->with('success','Le besoin a bien été supprimé.');
    }

    public function export(){
        return Excel::download(new BesoinExport, 'besoins.xlsx');
    }
}
