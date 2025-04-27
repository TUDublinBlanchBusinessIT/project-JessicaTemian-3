<!-- Book Dropdown -->
<div class="form-group col-sm-6 mb-3">
    {!! Form::label('book_id', 'Book:') !!}
    {!! Form::select('book_id', \App\Models\Book::pluck('title', 'id'), null, [
        'class' => 'form-control',
        'placeholder' => 'Select a Book'
    ]) !!}
</div>

<!-- Member Dropdown -->
<div class="form-group col-sm-6 mb-3">
    {!! Form::label('member_id', 'Member:') !!}
    {!! Form::select('member_id', \App\Models\Member::pluck('name', 'id'), null, [
        'class' => 'form-control',
        'placeholder' => 'Select a Member'
    ]) !!}
</div>

<!-- Borrow Date Field -->
<div class="form-group col-sm-6 mb-3">
    {!! Form::label('borrow_date', 'Borrow Date:') !!}
    {!! Form::text('borrow_date', null, [
        'class' => 'form-control datepicker',
        'autocomplete' => 'off',
        'placeholder' => 'YYYY-MM-DD'
    ]) !!}
</div>

<!-- Return Date Field -->
<div class="form-group col-sm-6 mb-3">
    {!! Form::label('return_date', 'Return Date:') !!}
    {!! Form::text('return_date', null, [
        'class' => 'form-control datepicker',
        'autocomplete' => 'off',
        'placeholder' => 'YYYY-MM-DD'
    ]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 mt-4">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('loans.index') }}" class="btn btn-secondary ms-2">Cancel</a>
</div>
