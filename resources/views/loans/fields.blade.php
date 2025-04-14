<!-- Book Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('book_id', 'Book Id:') !!}
    {!! Form::number('book_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Member Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('member_id', 'Member Id:') !!}
    {!! Form::number('member_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Borrow Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('borrow_date', 'Borrow Date:') !!}
    {!! Form::date('borrow_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Return Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('return_date', 'Return Date:') !!}
    {!! Form::date('return_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('loans.index') !!}" class="btn btn-default">Cancel</a>
</div>
