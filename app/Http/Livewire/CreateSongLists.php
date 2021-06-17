<?php

namespace App\Http\Livewire;

use App\Models\Song;
use App\Models\Status;
use Livewire\Component;
use App\Models\Songlist;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class CreateSongLists extends Component
{
    

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $showModal = false;
    public $showDeleteModal = false;
    public $songId;
    public $song;
    public $songListSaved = false;
    public $name;
    public $creator;
    public $private;
    public $selectedSongs = [];

    protected $rules = [
        // 'song.name' => 'required',
        // 'song.artist' => 'required',
        // 'song.time' => 'numeric',
        // 'song.singer' => 'nullable',
        // 'song.solo' => 'nullable',
        // 'song.keyboard' => 'nullable',
        // 'song.acoustic' => 'nullable',
        // 'song.notes' => 'nullable',
        // 'song.status_id' => 'nullable',
    ];

    public function render()
    {
        return view('livewire.create-song-lists', [
            'songs' => Song::paginate(15),
            'statuses' => Status::all(),
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

    public function saveSongList()
    {

        $this->creator = Auth::user()->id;
        
        $songlist = Songlist::create([
            'name' => $this->name,
            'creator' => $this->creator,
            'private' => $this->private,
        ]);

        $rowsSelected = count($this->selectedSongs);
        
        for ($i=1; $i < $rowsSelected; $i++) {
            $songlist->songs()->attach($this->selectedSongs[$i],[ 'position' => $i ]);
        };

        $songListSaved = true;
        return redirect()->route('setlists');
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
