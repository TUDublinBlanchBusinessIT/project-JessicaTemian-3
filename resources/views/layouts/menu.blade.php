<li class="nav-item">
    <a href="{{ route('books.index') }}"
       class="nav-link {{ Request::is('books*') ? 'active' : '' }}">
        <p>Books</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('members.index') }}"
       class="nav-link {{ Request::is('members*') ? 'active' : '' }}">
        <p>Members</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('genres.index') }}"
       class="nav-link {{ Request::is('genres*') ? 'active' : '' }}">
        <p>Genres</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('loans.index') }}"
       class="nav-link {{ Request::is('loans*') ? 'active' : '' }}">
        <p>Loans</p>
    </a>
</li>


