@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="mb-0">Loans</h1>
            <a class="btn btn-primary" href="{{ route('loans.create') }}">Add New</a>
        </div>

        @include('flash::message')

        <div class="card">
            <div class="card-body">
                @include('loans.table')
            </div>
        </div>
    </div>
@endsection


