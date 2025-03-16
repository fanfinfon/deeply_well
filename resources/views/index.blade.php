<x-layout>
    <x-header></x-header>

    <x-section>
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

    <div class="container mx-auto p-6">
        <h2 class="text-center text-4xl font-extrabold text-gray-800 mb-12">Our Team</h2>

        <div class="flex flex-wrap justify-around gap-36">
            <!-- Team Member 1 -->
            <a href="/aboutus">
                <div class="text-center group">
                    <div class="relative w-48 h-48 mx-auto">
                        <!-- Thin Blue Circle -->
                        <div class="absolute inset-0 border-4 border-blue-300 rounded-full transition duration-100 ease-in-out group-hover:border-blue-400 group-hover:scale-110"></div>
                        <img src="{{$user_1->profile_pic}}" alt="Team Member 1"
                             class="w-full h-full rounded-full shadow-lg border-2 border-gray-400 transition duration-100 ease-in-out group-hover:opacity-90">
                    </div>
                    <hr class="w-16 mx-auto my-4 border-gray-300">
                    <h3 class="mt-5 text-xl font-semibold text-gray-700">{{($user_1->name)." ".($user_1->last_name)}}</h3>
                </div>
            </a>

            <!-- Team Member 2 -->
            <a href="/aboutus">
                <div class="text-center group">
                    <div class="relative w-48 h-48 mx-auto">
                        <!-- Thin Blue Circle -->
                        <div class="absolute inset-0 border-4 border-blue-300 rounded-full transition duration-100 ease-in-out group-hover:border-blue-400 group-hover:scale-110"></div>
                        <img src="{{$user_2->profile_pic}}" alt="Team Member 2"
                             class="w-full h-full rounded-full shadow-lg border-2 border-gray-400 transition duration-100 ease-in-out group-hover:opacity-90">
                    </div>
                    <hr class="w-16 mx-auto my-4 border-gray-300">
                    <h3 class="mt-5 text-xl font-semibold text-gray-700">{{($user_2->name)." ".($user_2->last_name)}}</h3>
                </div>
            </a>
        </div>
    </div>

    <div class="flex flex-wrap justify-around gap-6 mt-10 mb-10">
        @foreach($blog as $blog)
            <div class="w-full max-w-lg bg-white shadow-lg rounded-md overflow-hidden">
                <div class="flex flex-col sm:grid sm:grid-cols-2">
                    <!-- Media Section -->
                    <div class="h-60 sm:h-72 w-full bg-cover bg-center" style="background-image: url('{{$blog->image}}');"></div>

                    <!-- Card Body -->
                    <div class="p-6 text-gray-800 flex flex-col justify-center">
                        <p class="text-xs uppercase text-center text-gray-500 tracking-wide">Featured</p>
                        <h3 class="text-2xl font-semibold text-center mt-2">{{Str::limit($blog->title, 20, '...') }}</h3>
                        <div class="h-[2px] w-10 bg-gray-500 mx-auto my-4"></div>

                        <p class="text-center text-gray-600 text-sm leading-relaxed">
                            {{Str::limit($blog->body, 60, '...')}}
                        </p>

                        <!-- Read More Button -->
                        <a href="/posts/{{$blog->id}}" class="mt-6 mx-auto px-6 py-2 text-white bg-blue-600 hover:bg-blue-700 transition-all shadow-md text-sm font-medium">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>




    <x-footer>
        {{--Terms and conditions title and explanation--}}
        <x-slot:title>
            {{$footer->title}}
        </x-slot:title>

        <x-slot:body>
            {{$footer->body}}

        </x-slot:body>
        {{--social medai links and contact adress--}}
        <x-slot:phone>
            {{$footer->phone}}
        </x-slot:phone>
        <x-slot:email>
            {{$footer->email}}
        </x-slot:email>
        <x-slot:facebook>
            {{$footer->facebook}}
        </x-slot:facebook>
        <x-slot:address>
            {{$footer->address}}
        </x-slot:address>

    </x-footer>

</x-layout>

