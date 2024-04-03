<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests\ClientFormRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ClientExport;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.index', [
            'clients' => Client::orderBy('created_at', 'asc')->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = new Client();
        return view('client.form', [
            'client' => $client
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientFormRequest $request)
    {
        $client = Client::create($request->validated());
        return to_route('admin.client.index')->with('success', 'Le client a bien été créé.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('client.form', [
            'client' => $client
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientFormRequest $request, Client $client)
    {
        $client->update($request->validated());
        return to_route('admin.client.index')->with('success', 'Le client a bien été modifié.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return to_route('admin.client.index')->with('success', 'Le client a bien été supprimé.');
    }

    public function export()
    {
        return Excel::download(new ClientExport, 'clients.xlsx');
    }
}
