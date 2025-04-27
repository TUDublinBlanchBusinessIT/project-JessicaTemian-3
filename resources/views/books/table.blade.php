<table class="table table-responsive" id="books-table">
    <thead>
        <th>Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th>Published Year</th>
        <th>Condition</th>
        <th>Status</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->genre->name ?? 'Unknown' }}</td>
            <td>{{ \Carbon\Carbon::parse($book->published_year)->format('Y') }}</td>
            <td>{{ $book->condition }}</td>
            <td>
                @if($book->is_available)
                    <span class="badge bg-success">Available</span>
                @else
                    <span class="badge bg-warning text-dark">Borrowed</span>
                @endif
            </td>
            <td>
                {!! Form::open(['route' => ['books.destroy', $book->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{{ route('books.show', $book->id) }}" class='btn btn-default btn-xs'>
                        <i class="far fa-eye"></i>
                    </a>
                    <a href="{{ route('books.edit', $book->id) }}" class='btn btn-default btn-xs'>
                        <i class="far fa-edit"></i>
                    </a>
                    {!! Form::button('<i class="far fa-trash-alt"></i>', [
                        'type' => 'submit', 
                        'class' => 'btn btn-danger btn-xs', 
                        'onclick' => "return confirm('Are you sure?')"
                    ]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
