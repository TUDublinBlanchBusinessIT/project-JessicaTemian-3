@extends('layouts.app')

@section('content')
<div class="container text-center py-5">
    <div class="mb-5">
        <h1 class="display-5">
            <i class="fas fa-book-reader text-primary me-2"></i>Welcome to <strong>BookBorrow</strong>
        </h1>
        <p class="lead mt-3">Your simple solution for managing books, members, genres, and loans.</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-2 m-2">
            <a href="{{ route('books.index') }}" class="btn btn-outline-primary btn-lg w-100">
                <i class="fas fa-book me-2"></i>Books
            </a>
        </div>
        <div class="col-md-2 m-2">
            <a href="{{ route('members.index') }}" class="btn btn-outline-secondary btn-lg w-100">
                <i class="fas fa-users me-2"></i>Members
            </a>
        </div>
        <div class="col-md-2 m-2">
            <a href="{{ route('loans.index') }}" class="btn btn-outline-success btn-lg w-100">
                <i class="fas fa-random me-2"></i>Loans
            </a>
        </div>
        <div class="col-md-2 m-2">
            <a href="{{ route('genres.index') }}" class="btn btn-outline-info btn-lg w-100">
                <i class="fas fa-tags me-2"></i>Genres
            </a>
        </div>
    </div>
</div>
@endsection
