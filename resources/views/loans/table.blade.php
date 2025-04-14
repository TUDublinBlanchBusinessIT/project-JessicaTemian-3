<table class="table table-responsive" id="loans-table">
    <thead>
        <th>Book Id</th>
        <th>Member Id</th>
        <th>Borrow Date</th>
        <th>Return Date</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($loans as $loan)
        <tr>
            <td>{!! $loan->book_id !!}</td>
            <td>{!! $loan->member_id !!}</td>
            <td>{!! $loan->borrow_date !!}</td>
            <td>{!! $loan->return_date !!}</td>
            <td>
                {!! Form::open(['route' => ['loans.destroy', $loan->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('loans.show', [$loan->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-eye"></i></i></a>
                    <a href="{!! route('loans.edit', [$loan->id]) !!}" class='btn btn-default btn-xs'><i class="far fa-edit"></i></i></a>
                    {!! Form::button('<i class="far fa-trash-alt"></i></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>