<?php

namespace App\Http\Controllers;

use App\Models\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Agrega esta línea

class URLController extends Controller
{
    public function index()
    {
        return view('home', ['component' => 'shorterInput']);
    }

    public function list()
    {
        $urls = URL::all();
        return view('home', ['component' => 'shorterView', 'urls' => $urls]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'url' => 'required|url',
        ]);

        $url = URL::create([
            'url' => $request->url,
            'short_url' => Str::random(10),
        ]);

        return redirect()->back()->with('success', 'URL acortada con éxito.');
    }

    public function redirect($short_url)
    {
        $url = URL::where('short_url', $short_url)->firstOrFail();
        return redirect($url->url);
    }
}
