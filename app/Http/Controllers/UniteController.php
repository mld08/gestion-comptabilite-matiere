<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unite;
use App\Http\Requests\UniteFormRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UniteExport;

class UniteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('unite.index', [
            'unites' => Unite::orderBy('created_at', 'asc')->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unite = new Unite();
        return view('unite.form', [
            'unite' => $unite
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UniteFormRequest $request)
    {
        $unite = Unite::create($request->validated());
        return to_route('admin.unite.index')->with('success', 'L\'unité a bien été créée');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Unite $unite)
    {
        return view('unite.form', [
            'unite' => $unite
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UniteFormRequest $request, Unite $unite)
    {
        $unite->update($request->validated());
        return to_route('admin.unite.index')->with('success', 'L\'unité a bien été modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unite $unite)
    {
        $unite->delete();
        return redirect()->route('admin.unite.index')
                         ->with('success','L\'unité a bien été supprimée');
    }

    public function export()
    {
        return Excel::download(new UniteExport, 'unites.xlsx');
    }
}
