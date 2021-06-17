<div class="col-md-12">
    <div class="card">
        <div class="card-header bg-light">
            <h3>
                {{ $data[0]->songlist->name }}&nbsp;&nbsp;
                @if($data[0]->songlist->private == 0)
                    <span class="badge badge-success">Public</span>
                @else
                    <span class="badge badge-warning">Private</span>
                @endif
            </h3></div>
            <div class="card-body">
                <div>
                    <div>
                        <div class="form-group row">
                            <label for="creator" class="col-sm-2 col-form-label font-weight-bold"><h4>Creator:</h4></label>
                            <div class="col-sm-10">
                            <label for="name" class="col-sm-2 col-form-label font-weight-bold"><h4>{{ Auth::user()->name }}</h4></label>
                            </div>
                        </div>
                                                
                        <div class="card mt-4">
                            <div class="card-header bg-light font-weight-bold">Songs</div>
                                <div class="card-body">
                            <table class="table table-responsive-sm">
                        <tbody>

                        @foreach ($data as $item)
                            <tr>
                                <td>
                                    @if ($item->position > 1)
                                    <a wire:click.prevent="song_up({{ $item->songlist_id }}, {{ $item->song_id}})" href="#">
                                        &uarr;
                                    </a>
                                    @endif
                                    @if ($item->position < $data->max('position'))
                                    <a wire:click.prevent="song_down({{ $item->songlist_id }}, {{ $item->song_id}})" href="#">
                                        &darr;
                                    </a>
                                    @endif
                                </td>
                                <td>{{ $item->song->name }}</td>
                                <td>{{ $item->song->artist }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

            {{-- {!! $songs->links() !!} --}}
        </div>
    </div>
</div>
</div>
                    </div>
                </div>
            </div>

</div>
