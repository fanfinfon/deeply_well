
<footer class="bg-gray-100 mt-10">
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="relative mx-auto max-w-screen-xl px-4 py-10 sm:px-6 lg:px-8 lg:pt-10 ">


        <div class="lg:flex lg:items-end lg:justify-between">
            <div>
                <div class="flex justify-center text-teal-600 lg:justify-start">
                    <a href="/">
                    <img src="{{asset('flower.png')}}" alt="logo" class="w-20 h-20">
                    </a>
                </div>

                <h1 class="mx-auto mt-6 max-w-md text-center leading-relaxed text-black-500 text-xl lg:text-left">{{$title}}</h1>

                <p class="mx-auto mt-6 max-w-md text-center leading-relaxed text-gray-500 lg:text-left">
                    {{$body}}

                </p>
            </div>

            <div>
                <ul
                        class="mt-12 flex flex-wrap justify-center gap-6 md:gap-8 lg:mt-0 lg:justify-end lg:gap-12"
                >
                    <li>
                        <a class="text-gray-700 transition hover:text-gray-700/75" href="/posts"> Blogs </a>
                    </li>

                    <li>
                        <a class="text-gray-700 transition hover:text-gray-700/75" href="/aboutus"> About </a>
                    </li>

                    <li>
                        <a class="text-gray-700 transition hover:text-gray-700/75" href="/contactus"> Contact Us </a>
                    </li>

                </ul>
            </div>
        </div>

        <p class="mt-12 text-center text-sm text-gray-500 lg:text-right">
            Copyright &copy; 2022. All rights reserved.
        </p>
    </div>
</footer>
