<x-layout>

    <x-nav-bar-black>

    </x-nav-bar-black>

    <div class="max-w-4xl mx-auto p-4 md:p-8 my-8">
        <!-- Blog Post -->
        <div class="bg-white shadow-sm rounded-sm overflow-hidden border border-gray-100">
            <!-- Cover Image with Overlay Gradient -->
            <div class="h-80 md:h-96 bg-cover bg-center relative" style="background-image: url('{{$post->image}}');">
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/70"></div>
                <div class="absolute bottom-0 w-full p-6 md:p-8">
                    <div class="flex items-center mb-4">
                        <img src="{{$post->user->profile_pic}}" class="w-10 h-10 rounded-full mr-3 object-cover border-2 border-white/30" alt="Author" />
                        <div>
                            <h3 class="text-white text-sm md:text-base font-light tracking-wide">
                                {{$post->user->name}}{{" "}}{{$post->user->last_name}}
                            </h3>
                            <p class="text-white/70 text-xs">{{($post->created_at)->diffForHumans()}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Content -->
            <div class="p-6 md:p-8">
                <h1 class="text-2xl md:text-3xl font-light text-gray-800 mb-4 leading-tight">{{$post->title}}</h1>

                <div class="w-12 h-px bg-gray-300 mb-6"></div>

                <div class="prose prose-gray max-w-none">
                    <p class="text-gray-600 leading-relaxed">{!!nl2br(e($post->body))!!}</p>
                </div>

                @can('edit-post', $post)
                    <div class="mt-10 pt-6 border-t border-gray-100">
                        <a href="/posts/{{$post->id}}/edit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-200 rounded-sm hover:bg-gray-50 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-200 focus:ring-offset-2 transition duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            Edit Article
                        </a>
                    </div>
                @endcan
            </div>
        </div>
    </div>





</x-layout>