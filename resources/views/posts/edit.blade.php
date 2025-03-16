<x-layout>

    <x-nav-bar-black>

    </x-nav-bar-black>

    <form action="/posts/{{$post->id}}" method="post">
        @csrf
        @method('PATCH')

        <!-- component -->
        <div class="flex justify-center items-start min-h-screen bg-white pt-10">
            <!-- COMPONENT CODE -->
            <div class="container mx-auto px-4 lg:px-20">
                <div class="w-full p-8 rounded-2xl shadow-2xl">
                    <div class="flex">
                        <h1 class="font-bold uppercase text-5xl">Edit Your <br /> Post !</h1>
                    </div>
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5 mb-10">
                        <input class="w-full bg-gray-100 text-gray-900 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                               id="title"
                               name="title"
                               value="{{old("title")?old("title"):$post->title}}"
                               placeholder="Title*" />
                        <x-forms-eror name="title"/>
                        <input class="w-full bg-gray-100 text-gray-900 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                               id="image"
                               name="image"
                               value="{{old("image")?old("image"):$post->image}}"
                               placeholder="Image url*" />
                        <x-forms-eror name="image"/>
                    </div>
                    <div class="my-4">
                    <textarea placeholder="Paragraph*"
                              name="body"
                              id="body"
                              class="w-full h-56 bg-gray-100 text-gray-900 p-3 rounded-lg focus:outline-none focus:shadow-outline">{{old("body")?old("body"):$post->body}}</textarea>
                        <x-forms-eror name="body"/>
                    </div>
                    <div>
                        <div class="my-2 w-1/2 lg:w-1/4">
                            <button class="uppercase text-sm font-bold tracking-wide bg-blue-900 text-gray-100 p-3 rounded-lg w-full
                  focus:outline-none focus:shadow-outline" type="submit">
                                Edit Post
                            </button>
                        </div>
                        <div class="my-2 w-1/2 lg:w-1/4">
                            <a href="/posts/{{$post->id}}" >
                                <button class="uppercase text-sm font-bold tracking-wide bg-blue-900 text-gray-100 p-3 rounded-lg w-full
                  focus:outline-none focus:shadow-outline" form="get-form" >
                                    Cancel
                                </button>
                            </a>

                        </div>
                        <div class="my-2 w-1/2 lg:w-1/4">
                            <button class="uppercase text-sm font-bold tracking-wide bg-red-600 text-gray-100 p-3 rounded-lg w-full
                  focus:outline-none focus:shadow-outline" form="delete-form">
                                Delete Post
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form action="/posts/{{$post->id}}" method="post" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')

    </form>

    <form action="/posts/{{$post->id}}" method="get" id="get-form">
        @csrf

    </form>




</x-layout>