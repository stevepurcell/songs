<?php

namespace App\Http\Livewire;

use App\Models\Song;
use App\Models\Songlist;
use Livewire\Component;
use Livewire\WithPagination;

class Setlists extends Component
{
    use WithPagination;
    //protected $paginationTheme = 'bootstrap';

    public $showModal = false;
    public $showDeleteModal = false;
    public $songId;
    public $song;
    public $current_list;
    public $listId;

    public function mount()
    {

        $this->current_list = NULL;

        // Resets the pagination after reloading the page
        $this->resetPage();
    }

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
        return view('livewire.setlists', [
            'data' => Songlist::paginate(3),
        ]);
    }

    public function edit($listId)
    {
        $this->showModal = true;
        // $this->songId = $songId;
        // $this->song = Song::find($songId);
    }

    public function sort($listId)
    {
        dd($listId);
        $this->current_list = 1;
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
