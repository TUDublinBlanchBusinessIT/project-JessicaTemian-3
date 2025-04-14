<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $book->title !!}</p>
</div>

<!-- Author Field -->
<div class="form-group">
    {!! Form::label('author', 'Author:') !!}
    <p>{!! $book->author !!}</p>
</div>

<!-- Genre Id Field -->
<div class="form-group">
    {!! Form::label('genre_id', 'Genre Id:') !!}
    <p>{!! $book->genre_id !!}</p>
</div>

<!-- Published Year Field -->
<div class="form-group">
    {!! Form::label('published_year', 'Published Year:') !!}
    <p>{!! $book->published_year !!}</p>
</div>

<!-- Condition Field -->
<div class="form-group">
    {!! Form::label('condition', 'Condition:') !!}
    <p>{!! $book->condition !!}</p>
</div>

<!-- Is Available Field -->
<div class="form-group">
    {!! Form::label('is_available', 'Is Available:') !!}
    <p>{!! $book->is_available !!}</p>
</div>

