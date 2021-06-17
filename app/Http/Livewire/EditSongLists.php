<?php

namespace App\Http\Livewire;

use App\Models\Song;
use App\Models\Songlist;
use Livewire\Component;
use Livewire\WithPagination;

// Show the Songlist record, followed by a list of all songs with songs in the list checked.

class EditSongLists extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $showModal = false;
    public $showDeleteModal = false;
    public $songId;
    public $song;
    public $songlist_id;

    protected $rules = [
        'song.name' => 'required',
        'song.artist' => 'required',
        'song.time' => 'numeric',
        'song.singer' => 'nullable',
        'song.solo' => 'nullable',
        'song.keyboard' => 'nullable',
        'song.acoustic' => 'nullable',
        'song.notes' => 'nullable',
        'song.status_id' => 'nullable',
    ];

    public function render()
    {
        dd($songlist_id);
        return view('livewire.edit-song-lists', [
            'data' => Songlist::paginate(15),
        ]);
    }

    public function edit($songId)
    {
        $this->showModal = true;
        $this->songId = $songId;
        $this->song = Song::find($songId);
    }

    public function create()
    {
        $this->showModal = true;
        $this->song = null;
        $this->songId = null;
    }

    public function save()
    {
        $this->validate();

        if (!is_null($this->songId)) {
            $this->song->save();
        } else {
            Song::create($this->song);
        }
        $this->showModal = false;
    }

    public function close()
    {
        $this->showModal = false;
    }

    public function delete($songId)
    {
        $song = Song::find($songId);
        if ($song) {
            $song->delete();
        }
    }
}
