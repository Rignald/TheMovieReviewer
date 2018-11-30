<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/">Home</a>

            @if (Auth::check())
            user
                <a class="nav-link" href="/logout">My reviews</a>
                <a class="nav-link" href="/logout">My comments</a>
            admin
                <a class="nav-link" href="/logout">Movies</a>
                <a class="nav-link" href="/logout">Actors</a>
                <a class="nav-link" href="/logout">Users</a>
                <a class="nav-link" href="/logout">Categories</a>
                <a class="nav-link" href="/logout">Logout</a>
                <a class="nav-link ml-auto" href="/profiel">{{ Auth::user()->name }}</a>
            @else
                <a class="nav-link" href="/login">Login</a>
                <a class="nav-link" href="/register">Register</a>
            @endif

        </nav>
    </div>
</div>
