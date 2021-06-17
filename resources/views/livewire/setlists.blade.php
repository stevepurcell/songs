<div class="col-md-12">
    <div class="card">
        <div class="card-header bg-light"><h3>Setlists</h3></div>
            <div class="card-body">
                <a href="createsetlist" class="btn btn-primary m-2">New Setlist</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Creator</th>
      <th scope="col"># Songs</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
        @forelse ($data as $item)
            <tr>
            <td><a href="/setlists/{{ $item->id }}/sort">{{ $item->name }}</a></td>
            <td>{{ $item->creator }}</td>
            <td>{{ getSongCount($item->id) }}</td>
            <td class="">
                    <button class="btn btn-sm btn-primary"
                        wire:click.prevent="edit({{ $item->id }})">Edit
                    </button>
                    
                    <button class="btn btn-sm btn-success"
                        wire:click.prevent="sort({{ $item->id }})">Order</a>
                    </button>

                    <button class="btn btn-sm btn-danger"
                        wire:click.prevent="delete({{ $item->id }})"
                        onclick="confirm('Are you sure?') || event.stopImmediatePropagation()">Delete
                    </button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No Setlists found.</td>
            </tr>
        @endforelse
    </tbody>
</table>

    {!! $data->links() !!}
</div>
</div>
</div>
</div>