<?php

namespace App\Http\Livewire;

use App\Models\SongSonglist;
use Livewire\Component;

class SortSetlists extends Component
{
    public $setlistid;

    public function render()
    {
        $data = SongSonglist::where('songlist_id', $this->setlistid)->orderBy('position', 'asc')->get();
        return view('livewire.sort-setlists', compact('data'));
    }

    public function song_up($songlist_id, $song_id)
    {
        $song = SongSonglist::where('songlist_id', $songlist_id)
                            ->where('song_id', $song_id)->first();
        if ($song) {
            SongSonglist::where('position', $song->position - 1)->update([
                'position' => $song->position
            ]);
            $song->update(['position' => $song->position - 1]);
        }
    }

    public function song_down($songlist_id, $song_id)
    {
        $song = SongSonglist::where('songlist_id', $songlist_id)
                            ->where('song_id', $song_id)->first();
        if ($song) {
            SongSonglist::where('position', $song->position + 1)->update([
                'position' => $song->position
            ]);
            $song->update(['position' => $song->position + 1]);
        }
    }

    public function task_up($task_id)
    {
        $task = Task::find($task_id);
        if ($task) {
            Task::whereNull('user_id')->where('position', $task->position - 1)->update([
                'position' => $task->position
            ]);
            $task->update(['position' => $task->position - 1]);
        }
    }

    public function task_down($task_id)
    {
        $task = Task::find($task_id);
        if ($task) {
            Task::whereNull('user_id')->where('position', $task->position + 1)->update([
                'position' => $task->position
            ]);
            $task->update(['position' => $task->position + 1]);
        }
    }
}
