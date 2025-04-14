<table class="table table-responsive" id="loans-table">
    <thead>
        <th>Book</th>
        <th>Member</th>
        <th>Borrow Date</th>
        <th>Return Date</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($loans as $loan)
        <tr>
            <td>{{ $loan->book->title ?? 'Unknown Book' }}</td>
            <td>{{ $loan->member->name ?? 'Unknown Member' }}</td>
            <td>{{ \Carbon\Carbon::parse($loan->borrow_date)->format('d M Y') }}</td>
            <td>
                @if($loan->return_date)
                    {{ \Carbon\Carbon::parse($loan->return_date)->format('d M Y') }}
                @else
                    <span class="text-warning">Not Returned</span>
                @endif
            </td>
            <td>
                {!! Form::open(['route' => ['loans.destroy', $loan->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('loans.show', [$loan->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-eye"></i></a>
                    <a href="{!! route('loans.edit', [$loan->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-edit"></i></a>
                    {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
