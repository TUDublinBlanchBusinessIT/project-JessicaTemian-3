<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Author Field -->
<div class="form-group col-sm-6">
    {!! Form::label('author', 'Author:') !!}
    {!! Form::text('author', null, ['class' => 'form-control']) !!}
</div>

<!-- Genre Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('genre_id', 'Genre Id:') !!}
    {!! Form::number('genre_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Published Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('published_year', 'Published Year:') !!}
    {!! Form::date('published_year', null, ['class' => 'form-control']) !!}
</div>

<!-- Condition Field -->
<div class="form-group col-sm-6">
    {!! Form::label('condition', 'Condition:') !!}
    {!! Form::text('condition', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Available Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_available', 'Is Available:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_available', false) !!}
        {!! Form::checkbox('is_available', 1, null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('books.index') !!}" class="btn btn-default">Cancel</a>
</div>
