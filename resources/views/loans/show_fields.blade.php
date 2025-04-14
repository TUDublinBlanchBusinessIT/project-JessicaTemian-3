<!-- Book Id Field -->
<div class="form-group">
    {!! Form::label('book_id', 'Book Id:') !!}
    <p>{!! $loan->book_id !!}</p>
</div>

<!-- Member Id Field -->
<div class="form-group">
    {!! Form::label('member_id', 'Member Id:') !!}
    <p>{!! $loan->member_id !!}</p>
</div>

<!-- Borrow Date Field -->
<div class="form-group">
    {!! Form::label('borrow_date', 'Borrow Date:') !!}
    <p>{!! $loan->borrow_date !!}</p>
</div>

<!-- Return Date Field -->
<div class="form-group">
    {!! Form::label('return_date', 'Return Date:') !!}
    <p>{!! $loan->return_date !!}</p>
</div>

