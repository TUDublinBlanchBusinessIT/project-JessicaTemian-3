<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome to BookBorrow') }}
        </h2>
    </x-slot>

    <div class="py-12 text-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <p class="mb-4 text-lg">Manage books, members, and loans efficiently.</p>

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
    </div>
</x-app-layout>
