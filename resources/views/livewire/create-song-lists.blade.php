<div>
    @if ($songListSaved)
        <div class="p-2 bg-green-500 text-white border border-green-600 rounded-md">Songlist saved successfully.</div>
    @endif
    <form wire:submit.prevent="saveSongList">
        @csrf
  
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label font-weight-bold">Setlist Name:</label>
        <div class="col-sm-10">
        <input type="text" wire:model="name" class="form-control" id="name" placeholder="Enter a name for this setlist">
        </div>
    </div>

    <div class="form-group row">
        <label for="creator" class="col-sm-2 col-form-label font-weight-bold">Setlist Creator:</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="creator" value="{{ Auth::user()->name }}">
        </div>
    </div>

    
    
    <div class="form-group row">
        <label for="private" class="col-sm-2 col-form-label font-weight-bold">Visibility:</label>
        <div class="col-sm-10">
            <input wire:model="private" type="radio" id="public" value="0"/> Public
            <input wire:model="private" type="radio" id="private" value="1"/> Private
        </div>
    </div>
    
    <div>
        <input class="btn btn-primary" type="submit" value="Save Setlist">
    </div>

    <div class="card mt-4">
        <div class="card-header bg-light font-weight-bold">Songs</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Add</th>
                        <th scope="col">Name</th>
                        <th scope="col">Artist</th>
                        <th scope="col">Status</th>
                        <th scope="col">Created By</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($songs as $item)
                            <tr>
                                <td class="px-2 py-3 whitespace-nowrap border-b leading-5">
                                    <input type="checkbox" wire:model="selectedSongs" value="{{ $item->id }}">
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->artist }}</td>
                                <td><span class="badge badge-{{getStatus($item->status_id)->style}}">{{ getStatus($item->status_id)->name }}</span></td>
                                <td>{{ getUsername($item->created_by) }}</td>
                                <td class="">
                                        <button class="btn btn-sm btn-primary"
                                            wire:click.prevent="edit({{ $item->id }})">Add To List
                                        </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">No Songs found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            {!! $songs->links() !!}
        </div>
    </div>
<br />
        <div>
            <input class="btn btn-primary" type="submit" value="Save Setlist">
        </div>
    </form>
</div>

