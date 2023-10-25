<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $count_clients = Client::count();
        $clients = Client::simplePaginate(10);
        return view('private.partner.client')
            ->with('count_clients', $count_clients)
            ->with('clients', $clients);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        $client = new Client;
        $client->name = $request->input('name');
        $client->phone = $request->input('phone');
        $client->email = $request->input('email');
        $client->subject = $request->input('subject');
        $client->message = $request->input('message');
        $client->save();
        $previousUrl = app('request')->header('referer');
        return redirect($previousUrl);
    }

    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect('/private/clients');
    }
}
