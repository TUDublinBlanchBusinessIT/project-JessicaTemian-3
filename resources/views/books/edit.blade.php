@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Book
        </h1>
    </section>
    <div class="content">
       @include('basic-template::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($book, ['route' => ['books.update', $book->id], 'method' => 'patch']) !!}

                        @include('books.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
    </div>
@endsection