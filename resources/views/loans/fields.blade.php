<!-- Book Dropdown -->
<div class="form-group col-sm-6">
    {!! Form::label('book_id', 'Book:') !!}
    {!! Form::select('book_id', \App\Models\Book::pluck('title', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Select Book']) !!}
</div>

<!-- Member Dropdown -->
<div class="form-group col-sm-6">
    {!! Form::label('member_id', 'Member:') !!}
    {!! Form::select('member_id', \App\Models\Member::pluck('name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Select Member']) !!}
</div>

<!-- Borrow Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('borrow_date', 'Borrow Date:') !!}
    {!! Form::text('borrow_date', null, ['class' => 'form-control datepicker']) !!}
</div>

<!-- Return Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('return_date', 'Return Date:') !!}
    {!! Form::text('return_date', null, ['class' => 'form-control datepicker']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('loans.index') !!}" class="btn btn-default">Cancel</a>
</div>
