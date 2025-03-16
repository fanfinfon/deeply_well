<x-layout>

    <x-nav-bar-black>

    </x-nav-bar-black>

    @auth
        <a href="/posts/create">
            <button xmlns="http://www.w3.org/2000/svg" class="flex items-center justify-center gap-1 text-[11px] md:text-[12px] font-medium uppercase tracking-wide text-[#7e97b8] bg-[#e0e8ef] border border-white/30 rounded-full px-4 py-2 md:px-5 md:py-3 transition-all duration-200 shadow-[inset_-2px_-1px_8px_0px_#ffffff,inset_2px_1px_8px_0px_rgba(95,157,231,0.48)] hover:text-[#516d91] hover:bg-[#E5EDF5] hover:shadow-[inset_-1px_-1px_4px_0px_#ffffff,inset_1px_1px_4px_0px_rgba(95,157,231,0.48)] active:shadow-none">
                <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 md:w-5 md:h-5">
                    <path
                            d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z"
                            stroke-width="1.5"
                    ></path>
                    <path d="M8 12H16" stroke-width="1.5"></path>
                    <path d="M12 16V8" stroke-width="1.5"></path>

                </svg>
                Create
            </button>
        </a>
    @endauth







@foreach($posts as $post)
            <div class="w-full max-w-2xl max-h-max bg-white shadow-lg rounded-md overflow-hidden mt-4 mb-12 mx-auto justify-center">
                <div class="flex flex-col sm:grid sm:grid-cols-2">
                    <!-- Media Section -->
                    <div class="h-60 sm:h-72 w-full bg-cover bg-center" style="background-image: url('{{$post->image}}');"></div>

                    <!-- Card Body -->
                    <div class="p-6 text-gray-800 flex flex-col justify-center">
                        <p class="text-xs uppercase text-center text-gray-500 tracking-wide">Featured</p>
                        <h3 class="text-2xl font-semibold text-center mt-2">{{Str::limit($post->title, 20, '...') }} </h3>
                        <div class="h-[2px] w-10 bg-gray-500 mx-auto my-4"></div>

                        <p class="mx-auto mt-6 max-w-md text-center leading-relaxed text-gray-600 break-words">
                            {{Str::limit($post->body, 60, '...')}}
                        </p>

                        <!-- Read More Button -->
                        <a href="/posts/{{$post->id}}" class="mt-6 mx-auto px-6 py-2 text-white bg-blue-600 hover:bg-blue-700 transition-all shadow-md text-sm font-medium">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        @endforeach

    <div class="space-y-4  ml-10 mr-10">
        {{$posts->links()}}
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