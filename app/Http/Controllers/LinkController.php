<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use Hashids\Hashids;

class LinkController extends Controller
{
    public function index()
    {
        $links = Link::all();
        return view('links.generate', compact('links'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
            'title' => 'nullable|string|max:255',
        ]);

        $linkData = [
            'url' => $request->input('url'),
        ];

        if ($request->filled('title')) {
            $linkData['title'] = $request->input('title');
        }

        $link = Link::create($linkData);

        // Generate short URL using hashids
        $hashids = new Hashids('your_salt', 6); // Adjust 'your_salt' as needed
        $shortUrl = url('/') . '/' . $hashids->encode($link->id);

        // Update the link with the short URL
        $link->update(['short_url' => $shortUrl]);

        // Redirect to the show route with the hash
        return redirect()->route('links.show', $hashids->encode($link->id));
    }

    public function show($hash)
    {
        // Decode the hash to get the link ID
        $hashids = new Hashids('your_salt', 6); // Adjust 'your_salt' as needed
        $linkId = $hashids->decode($hash);

        // Retrieve the link from the database
        $link = Link::find($linkId)->first();

        // Check if the link exists
        if ($link) {
            return view('links.show', compact('link'));
        } else {
            abort(404); // Link not found
        }
    }
}
