<table class="table table-responsive-sm">
    <tbody>
    @foreach ($tasks as $task)
        <tr>
            <td>
                @if ($task->position > 1)
                <a wire:click.prevent="task_up({{ $task->id }})" href="#">
                    &uarr;
                </a>
                @endif
                @if ($task->position < $tasks->max('position'))
                <a wire:click.prevent="task_down({{ $task->id }})" href="#">
                    &darr;
                </a>
                @endif
            </td>
            <td>{{ $task->name }}</td>
            <td>
                <a class="btn btn-sm btn-primary"
                   href="{{ route('admin.checklists.tasks.edit', [$checklist, $task]) }}">{{ __('Edit') }}</a>
                <form style="display: inline-block"
                      action="{{ route('admin.checklists.tasks.destroy', [$checklist, $task]) }}"
                      method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" type="submit"
                            onclick="return confirm('{{ __('Are you sure?') }}')"> {{ __('Delete') }}</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>



//BLADE CODE to call livewire

<div class="card">
    <div class="card-header"><i class="fa fa-align-justify"></i> {{ __('List of Tasks') }}</div>
        <div class="card-body">
            @livewire('tasks-table', ['checklist' => $checklist])
        </div>
    </div>


// Livewire component

<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class TasksTable extends Component
{
    public $checklist;

    public function render()
    {
        $tasks = $this->checklist->tasks()->where('user_id', NULL)->orderBy('position')->get();

        return view('livewire.tasks-table', compact('tasks'));
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


