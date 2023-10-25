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
        $client = Client::create($request->all());
        return response()->json($client, 201);
    }

    public function destroy($id)
    {
        $client = Client::find($id);
        if (!$client) {
            return response()->json(['message' => 'Client not found'], 404);
        }
        $client->delete();
        return response()->json(['message' => 'Client deleted successfully']);
    }
}
