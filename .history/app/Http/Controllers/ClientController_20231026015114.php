<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('private.partner.client')->with($clients);
    }

    public function store(Request $request)
    {
        Client::create($request->all());
        $previousUrl = app('request')->header('referer');
        return redirect($previousUrl);
    }

    public function destroy($id)
    {
        $client = Client::find($id);
        if (!$client) {
            return response()->json(['message' => 'Client not found'], 404);
        }
        $client->delete();
        return view()->json(['message' => 'Client deleted successfully']);
    }
}
