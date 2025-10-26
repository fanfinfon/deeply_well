<div class="">
    <header class="top-0 w-full flex justify-between items-center px-6 sm:px-12 md:px-16 lg:px-24 py-8 text-black relative">
        <!-- Logo -->
        <h2 style="font: normal 16px Raleway;" class="text-gray-800">
            <a href="/" class="text-black hover:text-gray-700 transition duration-300 border-b border-transparent hover:border-gray-400">DeeplyWell</a>
        </h2>

        <!-- Hamburger Button for Mobile -->
        <button id="menu-btn" class="md:hidden text-black focus:outline-none transition duration-300" aria-label="Toggle menu">
            <svg id="menu-icon" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Navigation Menu (Desktop) -->
        <nav class="hidden md:flex space-x-8" style="font: normal 16px Raleway;">
            <ul class="flex space-x-10">
                <li><a href="/posts" class="text-gray-800 hover:text-black transition-all duration-300 relative after:absolute after:bottom-0 after:left-0 after:h-px after:w-0 after:bg-black after:transition-all after:duration-300 hover:after:w-full">Blogs</a></li>
                <li><a href="/aboutus" class="text-gray-800 hover:text-black transition-all duration-300 relative after:absolute after:bottom-0 after:left-0 after:h-px after:w-0 after:bg-black after:transition-all after:duration-300 hover:after:w-full">About</a></li>
                <li><a href="/#services" class="text-gray-800 hover:text-black transition-all duration-300 relative after:absolute after:bottom-0 after:left-0 after:h-px after:w-0 after:bg-black after:transition-all after:duration-300 hover:after:w-full">Services</a></li>

                <!-- Authenticated Links -->
                @auth
                    <li><a href="/dashboard" class="text-gray-900 hover:text-black transition-all duration-300 relative after:absolute after:bottom-0 after:left-0 after:h-px after:w-0 after:bg-black after:transition-all after:duration-300 hover:after:w-full">Dashboard</a></li>
                    <li><a href="/profile" class="text-gray-900 hover:text-black transition-all duration-300 relative after:absolute after:bottom-0 after:left-0 after:h-px after:w-0 after:bg-black after:transition-all after:duration-300 hover:after:w-full">Profile</a></li>
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="text-red-700 hover:text-red-800 transition duration-300 relative after:absolute after:bottom-0 after:left-0 after:h-px after:w-0 after:bg-red-700 after:transition-all after:duration-300 hover:after:w-full" type="submit">Log Out</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="absolute top-20 left-0 w-full bg-white shadow-md md:hidden hidden transform transition-all duration-500 ease-in-out z-20">
            <ul class="flex flex-col p-8 border-t border-gray-100" style="font: normal 16px Raleway;">
                <li class="py-3 border-b border-gray-50"><a href="/posts" class="block text-gray-800 hover:text-black transition duration-300">Blogs</a></li>
                <li class="py-3 border-b border-gray-50"><a href="/aboutus" class="block text-gray-800 hover:text-black transition duration-300">About</a></li>
                <li class="py-3 border-b border-gray-50"><a href="/#services" class="block text-gray-800 hover:text-black transition duration-300">Services</a></li>

                <!-- Authenticated Links -->
                @auth
                    <li class="py-3 border-b border-gray-50"><a href="/dashboard" class="block text-gray-900 hover:text-black transition duration-300">Dashboard</a></li>
                    <li class="py-3 border-b border-gray-50"><a href="/profile" class="block text-gray-900 hover:text-black transition duration-300">Profile</a></li>
                    <li class="py-3">
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="block text-red-700 hover:text-red-800 transition duration-300 w-full text-left" type="submit">Log Out</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </header>
    <div class="w-full border-t border-gray-100 "></div>
</div>

<!-- JavaScript for Mobile Menu with Elegant Animation -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    let isOpen = false;

    menuBtn.addEventListener('click', function() {
      isOpen = !isOpen;

      if (isOpen) {
        // Open menu with elegant fade-in
        mobileMenu.classList.remove('hidden');
        setTimeout(() => {
          mobileMenu.classList.add('opacity-100');
          mobileMenu.classList.remove('opacity-0');

          // Change to elegant X icon
          menuIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" />`;
        }, 10);
      } else {
        // Elegant fade-out
        mobileMenu.classList.add('opacity-0');
        mobileMenu.classList.remove('opacity-100');

        // Change back to hamburger
        menuIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />`;

        // Hide after animation completes
        setTimeout(() => {
          mobileMenu.classList.add('hidden');
        }, 500);
      }
    });
  });
</script>