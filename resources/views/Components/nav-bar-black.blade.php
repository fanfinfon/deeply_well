<div class="mb-20">
    <header class="top-0 w-full flex justify-between items-center px-6 md:px-24 py-6 text-black opacity-1 relative">
        <!-- Logo -->
        <h2 class="text-base font-normal text-gray-700 font-raleway">
            <a href="/" class="text-black opacity-75 hover:opacity-100 transition">DeeplyWell</a>
        </h2>

        <!-- Hamburger Button for Mobile -->
        <button id="menu-btn" class="md:hidden text-black focus:outline-none">
            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>

        <!-- Navigation Menu (Desktop) -->
        <nav class="hidden md:flex space-x-6 text-base font-normal text-gray-700 font-raleway">
            <ul class="flex space-x-6">
                <li><a href="/posts" class="opacity-75 hover:opacity-100 transition">Blogs</a></li>
                <li><a href="/aboutus" class="opacity-75 hover:opacity-100 transition">About</a></li>
                <li><a href="/contactus" class="opacity-75 hover:opacity-100 transition">Contact Us</a></li>

                <!-- Authenticated Links -->
                @auth
                    <li><a href="/dashboard" class="text-blue-400 opacity-75 hover:opacity-100 transition">Dashboard</a></li>
                    <li><a href="/profile" class="text-blue-400 opacity-75 hover:opacity-100 transition">Profile</a></li>
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="text-red-500 opacity-75 hover:opacity-100 transition" type="submit">Log Out</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="absolute top-16 left-0 w-full  bg-white shadow-md md:hidden hidden">
            <ul class="flex flex-col space-y-4 p-6">
                <li><a href="/posts" class="opacity-75 hover:opacity-100 transition block">Blogs</a></li>
                <li><a href="/aboutus" class="opacity-75 hover:opacity-100 transition block">About</a></li>
                <li><a href="/contact" class="opacity-75 hover:opacity-100 transition block">Contact Us</a></li>

                <!-- Authenticated Links -->
                @auth
                    <li><a href="/dashboard" class="text-blue-400 opacity-75 hover:opacity-100 transition block">Dashboard</a></li>
                    <li><a href="/profile" class="text-blue-400 opacity-75 hover:opacity-100 transition block">Profile</a></li>
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="text-red-500 opacity-75 hover:opacity-100 transition block" type="submit">Log Out</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </header>
    <hr class="w-full  border-black-200 opacity-25">
</div>

<!-- JavaScript for Mobile Menu -->
<script>
  document.getElementById('menu-btn').addEventListener('click', function () {
    let menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
  });
</script>
