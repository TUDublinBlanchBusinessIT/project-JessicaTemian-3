<table class="table table-responsive" id="genres-table">
    <thead>
        <th>Name</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($genres as $genre)
        <tr>
            <td>{!! $genre->name !!}</td>
            <td>
                {!! Form::open(['route' => ['genres.destroy', $genre->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('genres.show', [$genre->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-eye"></i></i></a>
                    <a href="{!! route('genres.edit', [$genre->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-edit"></i></i></a>
                    {!! Form::button('<i class="far fa-trash-alt"></i></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>