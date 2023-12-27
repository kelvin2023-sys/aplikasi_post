<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    // Admin/PageController.php

public function create()
{
    return view('admin.pages.create');
}

public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    // Simpan data halaman
    $page = new Page([
        'title' => $request->input('title'),
        'content' => $request->input('content'),
    ]);

    $page->save();

    return redirect()->route('admin.pages.create')->with('success', 'Halaman berhasil dibuat!');
}
}