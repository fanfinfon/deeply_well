<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeeplyWell</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body >

<x-nav-bar-black>

</x-nav-bar-black>

<div class="justify-evenly flex">
    <div class="relative bg-white w-[350px] mx-auto p-10 shadow-lg mt-24 rounded-lg">
        <!-- Logo -->
        <div class="absolute bg-blue-500 rounded-full w-[100px] h-[100px] -top-12 left-1/2 transform -translate-x-1/2 bg-cover bg-center" style="background-image: url('{{$user_1->profile_pic}}');"></div>

        <!-- Heading -->
        <h2 class="text-gray-800 text-2xl leading-[300%] -mt-2 mb-4">{{$user_1->name}} {{$user_1->last_name}}</h2>

        <!-- Paragraphs -->
        <p class="text-sm text-gray-500">{{$user_1->about}}</p>

        <!-- Read More Button -->
        <a href="#" class="inline-block bg-blue-900 shadow-lg text-white text-sm font-bold text-center px-6 py-2 mt-6 rounded transition-all hover:bg-blue-900 hover:underline decoration-white">
            Contact!
        </a>
    </div>

    <div class="relative bg-white w-[350px] mx-auto p-10 shadow-lg mt-24 rounded-lg">
        <!-- Logo -->
        <div class="absolute bg-blue-500 rounded-full w-[100px] h-[100px] -top-12 left-1/2 transform -translate-x-1/2 bg-cover bg-center" style="background-image: url('{{$user_2->profile_pic}}');"></div>

        <!-- Heading -->
        <h2 class="text-gray-800 text-2xl leading-[300%] -mt-2 mb-4">{{$user_2->name}} {{$user_2->last_name}}</h2>

        <!-- Paragraphs -->
        <p class="text-sm text-gray-500">{{$user_2->about}}</p>


        <!-- Read More Button -->
        <a href="#" class="inline-block bg-blue-900 shadow-lg text-white text-sm font-bold text-center px-6 py-2 mt-6 rounded transition-all hover:bg-blue-900 hover:underline decoration-white">
            Contact!
        </a>
    </div>
</div>




<section class="flex justify-center max-w-[820px] space-x-6">
    <!-- Card 1 -->
    @foreach($books as $book)
        <a href="{{$book->link}}">
    <article class="relative bg-white w-1/3 rounded-xl overflow-hidden shadow-lg transition-transform duration-300 ease-in-out hover:scale-110 hover:shadow-2xl">
        <div class="relative">
            <div class="absolute inset-0 bg-cover bg-center opacity-0 transition-opacity duration-300 hover:opacity-30" style="background-image: url('{{$book->image}}');"></div>
            <div class="h-[235px] bg-cover bg-center" style="background-image: url('{{$book->image}}');"></div>

        </div>
        <div class="p-6 bg-white rounded-b-xl">
            <span class="text-xs font-semibold uppercase text-gray-500 tracking-wide">{{$book->title}}</span>
            <h3 class="mt-2 mb-3 text-lg font-semibold">{{$book->description}}</h3>
            <span class="text-xs text-gray-600">by <a href="#" class="text-brown-600 font-semibold">{{$book->author}}</a></span>
        </div>
    </article>
        </a>
    @endforeach
</section>

<x-footer>
    <x-slot:title>
        {{$footer->title}}
    </x-slot:title>

    <x-slot:body>
    {{$footer->body}}
    </x-slot:body>
</x-footer>



</body>
</html>
