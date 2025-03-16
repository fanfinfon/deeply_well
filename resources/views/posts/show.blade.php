<x-layout>

    <x-nav-bar-black>

    </x-nav-bar-black>

    <div class="max-w-5xl mx-auto p-4">

        <!-- Blog Post -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-6">
            <!-- Cover Image -->
            <div class="h-60 bg-cover bg-center" style="background-image: url('{{$post->image}}');">
                <div class="h-full flex items-end p-4">
                    <h3 class="text-white text-lg font-light flex items-center">
                        <img src="{{$post->user->profile_pic}}" class="w-10 h-10 rounded-full mr-2" />
                        {{$post->user->name}}{{" "}}{{$post->user->last_name}}
                    </h3>
                </div>
            </div>

            <!-- Blog Content -->
            <div class="p-6">
                <h1 class="text-xl font-semibold mb-2">{{$post->title}}</h1>
                <p class="text-gray-600 mb-4">{!!nl2br(e($post->body))!!}</p>
            </div>

            <!-- Footer -->
            <div class="border-t p-4 flex items-center justify-between text-gray-500 text-sm">
                <span>{{($post->created_at)->diffForHumans()}}</span>
                <div class="flex items-center space-x-4">

                </div>
            </div>
        </div>
    </div>

    @can('edit-post',$post)
            <p class="mt-6 ">
                <a href="/posts/{{$post->id}}/edit" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">Edit</a>
            </p>
    @endcan





</x-layout>