
    <header>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <h2><a href="/">DeeplyWell</a></h2>
        <nav>
            <li><a href="/posts">Blogs</a></li>
            <li><a href="/aboutus">About</a></li>
            <li><a href="/contactus">Contact Us</a></li>
            @auth
                <li><a href="/dashboard">Dashboard</a></li>
                <li><a href="/profile">Profile</a></li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button  type="submit">Log Out</button>
                    </form>
                </li>
            @endauth

        </nav>
    </header>
