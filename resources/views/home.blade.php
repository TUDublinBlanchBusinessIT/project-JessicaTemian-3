@extends('layouts.app')

@section('content')
<div class="container mt-5 text-center">
    <h1 class="mb-4">📚 Welcome to BookBorrow</h1>
    <p class="lead">Manage books, members, and loans efficiently.</p>

    <div class="mt-4">
        <a href="{{ route('books.index') }}" class="btn btn-primary btn-lg m-2">
            <i class="fas fa-book"></i> View Books
        </a>
        <a href="{{ route('members.index') }}" class="btn btn-secondary btn-lg m-2">
            <i class="fas fa-users"></i> View Members
        </a>
        <a href="{{ route('loans.index') }}" class="btn btn-success btn-lg m-2">
            <i class="fas fa-exchange-alt"></i> Manage Loans
        </a>
        <a href="{{ route('genres.index') }}" class="btn btn-info btn-lg m-2">
            <i class="fas fa-list"></i> View Genres
        </a>
    </div>
</div>
@endsection
