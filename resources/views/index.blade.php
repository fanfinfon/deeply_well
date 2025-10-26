<x-layout>
    <x-header></x-header>

    <x-section>

        <x-slot:email>
            {{$footer->email}}
        </x-slot:email>

        <x-slot:carousel>
            {{$carousel->image}}   {{--banner image path--}}
        </x-slot:carousel>

        <x-slot:slogan>
            {{$slogan->title}}     {{--slogan on the banner--}}
        </x-slot:slogan>
    </x-section>

    <x-flower></x-flower>

        <section class="packages">
            <link rel="stylesheet" href="{{ asset('css/style.css') }}">
            <h3 class="title">{{$title_1->title}}</h3>
            <p>{{$title_1->body}}</p>
            <hr>
            <ul class="grid">
                <li>
                    <i class="fa fa-compass fa-4x"></i>
                    <h4>{{$title_2->title}}</h4>
                    <p>{{$title_2->body}}</p>
                </li>
                <li>
                    <i class="fa fa-camera-retro fa-4x"></i>
                    <h4>{{$title_3->title}}</h4>
                    <p>{{$title_3->body}}</p>
                </li>
            </ul>
        </section>

    <hr class="border-black">

    <div class="w-full mx-auto py-16 px-6 bg-gray-50">
        <h2 class="text-center text-3xl font-light text-gray-800 mb-16 tracking-wider uppercase">Our Team</h2>

        <div class="flex flex-wrap justify-center gap-24 max-w-6xl mx-auto">
            <!-- Team Member 1 -->
            <a href="/aboutus" class="group transform transition duration-300 hover:-translate-y-2">
                <div class="text-center">
                    <div class="relative w-56 h-56 mx-auto overflow-hidden">
                        <!-- Elegant Circle Border -->
                        <div class="absolute inset-0 border-2 border-gray-200 rounded-full transition duration-300 ease-in-out group-hover:border-gray-400"></div>
                        <img src="{{$user_1->profile_pic}}" alt="Team Member 1"
                             class="w-56 h-56 object-cover rounded-full shadow-md transition duration-300 ease-in-out group-hover:shadow-xl">
                        <!-- Elegant Overlay -->
                        <div class="absolute inset-0 bg-black opacity-0 rounded-full transition duration-300 ease-in-out group-hover:opacity-10"></div>
                    </div>
                    <div class="w-12 h-px bg-gray-300 mx-auto my-6"></div>
                    <h3 class="text-xl font-normal text-gray-700 tracking-wide">{{($user_1->name)." ".($user_1->last_name)}}</h3>
                </div>
            </a>

            <!-- Team Member 2 -->
            <a href="/aboutus" class="group transform transition duration-300 hover:-translate-y-2">
                <div class="text-center">
                    <div class="relative w-56 h-56 mx-auto overflow-hidden">
                        <!-- Elegant Circle Border -->
                        <div class="absolute inset-0 border-2 border-gray-200 rounded-full transition duration-300 ease-in-out group-hover:border-gray-400"></div>
                        <img src="{{$user_2->profile_pic}}" alt="Team Member 2"
                             class="w-56 h-56 object-cover rounded-full shadow-md transition duration-300 ease-in-out group-hover:shadow-xl">
                        <!-- Elegant Overlay -->
                        <div class="absolute inset-0 bg-black opacity-0 rounded-full transition duration-300 ease-in-out group-hover:opacity-10"></div>
                    </div>
                    <div class="w-12 h-px bg-gray-300 mx-auto my-6"></div>
                    <h3 class="text-xl font-normal text-gray-700 tracking-wide">{{($user_2->name)." ".($user_2->last_name)}}</h3>
                </div>
            </a>
        </div>
    </div>

     <div class="w-full h-px bg-gray-200"></div>

    <!-- Our Services Section -->
<div id="services" class="py-16 bg-gray-50">
    <h2 class="text-center text-3xl font-light text-gray-800 mb-16 tracking-wider uppercase">Advanced Healing Modalities</h2>

    <div class="flex flex-wrap justify-center gap-8 max-w-7xl mx-auto px-6">
       <!-- Service 1 -->
<a href="/services/online" 
   class="block w-full max-w-md bg-white shadow-sm rounded-sm overflow-hidden border border-gray-100 transition duration-300 hover:shadow-md hover:-translate-y-1">
    <div class="flex flex-col sm:flex-row h-full">
        <!-- Media Section -->
        <div class="h-64 sm:h-auto sm:w-1/2 bg-cover bg-center" 
             style="background-image: url('{{ asset('about/f1a6e4c58d25ae85f757e10dcdd54414.jpg') }}');">
        </div>

        <!-- Card Body -->
        <div class="p-8 text-gray-800 flex flex-col justify-between sm:w-1/2 h-full">
            <div>
                <p class="text-xs uppercase text-gray-400 tracking-widest mb-2">Online Services</p>
                <h3 class="text-xl font-normal text-gray-700 mb-4">Books and PDF's</h3>
                <div class="w-8 h-px bg-gray-300 mb-4"></div>

                <p class="text-gray-600 text-sm leading-relaxed">
                    Online services that will change your life balance.
                </p>
            </div>

            <!-- Learn More Link (always at bottom) -->
            <div class="mt-6">
                <span class="text-sm text-gray-700 font-normal tracking-wider uppercase inline-flex items-center group-hover:text-gray-900 transition duration-300">
                    Learn More
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </span>
            </div>
        </div>
    </div>
</a>


               <!-- Service 2 -->
<a href="/services/facetoface" 
   class="block w-full max-w-md bg-white shadow-sm rounded-sm overflow-hidden border border-gray-100 transition duration-300 hover:shadow-md hover:-translate-y-1">
    <div class="flex flex-col sm:flex-row h-full">
        <!-- Media Section -->
        <div class="h-64 sm:h-auto sm:w-1/2 bg-cover bg-center" 
             style="background-image: url('{{ asset('about/4db45c2ae833ff717e16b1314979e879.jpg') }}');">
        </div>

        <!-- Card Body -->
        <div class="p-8 text-gray-800 flex flex-col justify-between sm:w-1/2 h-full">
            <div>
                <p class="text-xs uppercase text-gray-400 tracking-widest mb-2">Face to Face Services</p>
                <h3 class="text-xl font-normal text-gray-700 mb-4">Therapies</h3>
                <div class="w-8 h-px bg-gray-300 mb-4"></div>

                <p class="text-gray-600 text-sm leading-relaxed">
                    In person advanced healing therapies and technologies
                </p>
            </div>

            <!-- Learn More Link (always at bottom) -->
            <div class="mt-6">
                <span class="text-sm text-gray-700 font-normal tracking-wider uppercase inline-flex items-center group-hover:text-gray-900 transition duration-300">
                    Learn More
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </span>
            </div>
        </div>
    </div>
</a>



    <div class="w-full h-px bg-gray-200"></div>
</div>
    <div class="py-24 bg-gray-50">
        <h2 class="text-center text-3xl font-light text-gray-800 mb-16 tracking-wider uppercase">Latest Blogs</h2>

        <div class="flex flex-wrap justify-center gap-8 max-w-7xl mx-auto px-6">
            @foreach($blog as $blog)
                <div class="w-full max-w-md bg-white shadow-sm rounded-sm overflow-hidden border border-gray-100 transition duration-300 hover:shadow-md">
                    <div class="flex flex-col sm:flex-row">
                        <!-- Media Section -->
                        <div class="h-64 sm:h-auto sm:w-1/2 bg-cover bg-center" style="background-image: url('{{$blog->image}}');"></div>

                        <!-- Card Body -->
                        <div class="p-8 text-gray-800 flex flex-col justify-center sm:w-1/2">
                            <p class="text-xs uppercase text-gray-400 tracking-widest mb-2">Blog Post</p>
                            <h3 class="text-xl font-normal text-gray-700 mb-4">{{Str::limit($blog->title, 25, '...') }}</h3>
                            <div class="w-8 h-px bg-gray-300 mb-4"></div>

                            <p class="text-gray-600 text-sm leading-relaxed mb-6">
                                {{Str::limit($blog->body, 60, '...')}}
                            </p>

                            <!-- Read More Link -->
                            <a href="/posts/{{$blog->id}}" class="text-sm text-gray-700 font-normal tracking-wider uppercase hover:text-gray-900 transition duration-300 inline-flex items-center">
                                Read Blog
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>




    <x-footer>

        <x-slot:title>
            {{$footer->title}}
        </x-slot:title>

        <x-slot:body>
            {{$footer->body}}

        </x-slot:body>

        <x-slot:email>
            {{$footer->email}}
        </x-slot:email>

        <x-slot:facebook>
            {{$footer->facebook}}
        </x-slot:facebook>

       <x-slot:instagram>
           {{$footer->instagram}}
       </x-slot:instagram>

    </x-footer>

</x-layout>

