<x-layout>

<x-nav-bar-black>

</x-nav-bar-black>

    <div class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <!-- Page Header -->
            <div class="text-center mb-16">
                <h1 class="text-3xl md:text-4xl font-light text-gray-800 mb-4 tracking-wider">{{$about->find(1)->title}}</h1>
                <div class="w-16 h-px bg-gray-300 mx-auto mb-6"></div>
                <p class="max-w-2xl mx-auto text-gray-600 leading-relaxed">
                    {{$about->find(1)->body}}
                </p>
            </div>

            <!-- Team Members -->
            <div class="flex flex-col md:flex-row justify-center gap-12 mb-16">
                <!-- Team Member 1 -->
                <div class="relative bg-white w-full md:w-96 p-8 shadow-sm border border-gray-100 rounded-sm transition duration-300 hover:shadow-md">
                    <!-- Profile Picture -->
                    <div class="w-24 h-24 rounded-full mx-auto mb-6 border-4 border-white shadow-md overflow-hidden">
                        <img src="{{$user_1->profile_pic}}" alt="{{$user_1->name}}" class="w-full h-full object-cover" />
                    </div>

                    <!-- Name and Role -->
                    <div class="text-center mb-6">
                        <h2 class="text-xl font-normal text-gray-800 mb-1">{{$user_1->name}} {{$user_1->last_name}}</h2>
                    </div>

                    <!-- Divider -->
                    <div class="w-12 h-px bg-gray-300 mx-auto mb-6"></div>

                    <!-- About Text -->
                    <p class="text-gray-600 text-sm leading-relaxed mb-6 text-center">{{$user_1->about}}</p>

                    <!-- Contact Information -->
                    <div class="space-y-2 mb-6">
                        <div class="flex items-center justify-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span>{{$user_1->email ?? 'contact@example.com'}}</span>
                        </div>
                        <div class="flex items-center justify-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span>{{$user_1->phone ?? '+1 (555) 123-4567'}}</span>
                        </div>
                    </div>

                    <!-- Contact Button -->
                    <a href="mailto:{{$user_1->email }}" class="block w-full text-center py-2 px-4 text-sm font-medium tracking-wide text-gray-800 bg-white border border-gray-300 rounded-sm hover:bg-gray-50 transition duration-300">
                        Contact Me
                    </a>
                </div>

                <!-- Team Member 2 -->
                <div class="relative bg-white w-full md:w-96 p-8 shadow-sm border border-gray-100 rounded-sm transition duration-300 hover:shadow-md">
                    <!-- Profile Picture -->
                    <div class="w-24 h-24 rounded-full mx-auto mb-6 border-4 border-white shadow-md overflow-hidden">
                        <img src="{{$user_2->profile_pic}}" alt="{{$user_2->name}}" class="w-full h-full object-cover" />
                    </div>

                    <!-- Name and Role -->
                    <div class="text-center mb-6">
                        <h2 class="text-xl font-normal text-gray-800 mb-1">{{$user_2->name}} {{$user_2->last_name}}</h2>
                    </div>

                    <!-- Divider -->
                    <div class="w-12 h-px bg-gray-300 mx-auto mb-6"></div>

                    <!-- About Text -->
                    <p class="text-gray-600 text-sm leading-relaxed mb-6 text-center">{{$user_2->about}}</p>

                    <!-- Contact Information -->
                    <div class="space-y-2 mb-6">
                        <div class="flex items-center justify-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span>{{$user_2->email }}</span>
                        </div>
                        <div class="flex items-center justify-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span>{{$user_2->phone }}</span>
                        </div>
                    </div>

                    <!-- Contact Button -->
                    <a href="mailto:{{$user_2->email }}" class="block w-full text-center py-2 px-4 text-sm font-medium tracking-wide text-gray-800 bg-white border border-gray-300 rounded-sm hover:bg-gray-50 transition duration-300">
                        Contact Me
                    </a>
                </div>
            </div>

            <!-- Recommended Books Section -->
            <div class="mt-24">
                <h2 class="text-center text-2xl font-light text-gray-800 mb-2 tracking-wider">Recommended Books</h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach($books as $book)
                        <a href="{{$book->link}}" class="group">
                            <div class="bg-white rounded-sm overflow-hidden shadow-sm border border-gray-100 transition duration-300 hover:shadow-md">
                                <div class="h-56 bg-cover bg-center" style="background-image: url('{{$book->image}}');"></div>
                                <div class="p-6">
                                    <span class="text-xs font-medium uppercase text-gray-500 tracking-wider">{{$book->title}}</span>
                                    <h3 class="mt-2 mb-3 text-base font-normal text-gray-800 group-hover:text-gray-600 transition duration-300">{{$book->description}}</h3>
                                    <div class="flex items-center">
                                        <span class="text-xs text-gray-500">by </span>
                                        <span class="text-xs ml-1 text-gray-700 font-medium">{{$book->author}}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>


            <x-about-description>
                <x-slot:title> {{$about->find(2)->title}}</x-slot:title>

                <x-slot:body> {{$about->find(2)->body}}</x-slot:body>

            </x-about-description>

            <x-about-description>
                <x-slot:title> {{$about->find(3)->title}}</x-slot:title>

                <x-slot:body>{{$about->find(3)->body}} </x-slot:body>

            </x-about-description>



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