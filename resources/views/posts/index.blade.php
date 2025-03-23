<x-layout>

    <x-nav-bar-black>

    </x-nav-bar-black>

    @auth
        <div class="flex justify-end w-full pr-12 pt-3 bg-gray-50">
            <a href="/posts/create">
                <button class="flex items-center justify-center gap-2 text-xs md:text-sm font-medium tracking-wider text-black bg-white border border-gray-200 rounded-lg px-4 py-2 md:px-5 md:py-2.5 transition-all duration-300 shadow-md hover:shadow-lg hover:bg-gray-50 hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-opacity-50 active:scale-95">
                    <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 md:w-5 md:h-5">
                        <path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" stroke-width="1.5"></path>
                        <path d="M8 12H16" stroke-width="1.5"></path>
                        <path d="M12 16V8" stroke-width="1.5"></path>
                    </svg>
                    <span class="font-serif">Create</span>
                </button>
            </a>
        </div>
    @endauth







    <div class="py-16 bg-gray-50">
        <h2 class="text-center text-3xl font-light text-gray-800 mb-16 tracking-wider uppercase">All Posts</h2>

        <div class="flex flex-col items-center max-w-4xl mx-auto px-6 space-y-12">
            @foreach($posts as $post)
                <div class="w-full bg-white shadow-sm rounded-sm overflow-hidden border border-gray-100 transition duration-300 hover:shadow-md">
                    <div class="flex flex-col">
                        <!-- Media Section -->
                        <div class="h-72 w-full bg-cover bg-center" style="background-image: url('{{$post->image}}');"></div>

                        <!-- Card Body -->
                        <div class="p-8 text-gray-800 flex flex-col">
                            <p class="text-xs uppercase text-gray-400 tracking-widest mb-2">Blog Post</p>
                            <h3 class="text-xl font-normal text-gray-700 mb-4">{{Str::limit($post->title, 40, '...') }}</h3>
                            <div class="w-8 h-px bg-gray-300 mb-4"></div>

                            <p class="text-gray-600 text-sm leading-relaxed mb-6">
                                {{Str::limit($post->body, 120, '...')}}
                            </p>

                            <!-- Read More Link -->
                            <a href="/posts/{{$post->id}}" class="text-sm text-gray-700 font-normal tracking-wider uppercase hover:text-gray-900 transition duration-300 inline-flex items-center">
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

    <div class="space-y-4  pb-5 ml-10 mr-10 bg-gray-50">
        {{$posts->links()}}
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