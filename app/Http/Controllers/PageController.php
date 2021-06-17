<?php

namespace App\Http\Controllers;

use App\Models\Page;

class PageController extends Controller
{

    public function setlists()
    {
        return view('setlists');
    }

    public function createsonglist()
    {
        return view('create-song-lists');
    }

    public function editsonglist($id)
    {
        return view('edit-song-lists', compact('id'));
    }

}
