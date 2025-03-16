<x-layout>

    <x-nav-bar-black></x-nav-bar-black>




    <div class="flex items-center justify-center mb-16">
        <div class="bg-white shadow-xl border border-gray-200 rounded-lg p-6 md:p-8 max-w-5xl w-full">
            <h2 class="text-xl font-semibold text-gray-900">Books</h2>
            <p class="text-gray-600 text-sm mb-4">Update or Create Books.</p>

            @foreach($books as $book)
                <div class="space-y-4">
                    <div class=" flex items-center ">
                        <div class="flex-auto">
                            <label for="book" class="block text-sm font-medium text-gray-700">Book Name</label>
                            <input disabled  id="book" name="book" value="{{$book->title}}"
                                    class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>

                        <div class="mt-6">
                            <a href="/book/{{$book->id}}/edit">
                                <button type="submit"
                                        class="bg-gray-900 text-white px-4 py-2 rounded-md text-sm font-medium shadow-sm hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:ring-offset-2">
                                    Edit
                                </button>
                            </a>
                        </div>
                    </div>
            @endforeach

                <div>
                    <a href="/book/create">
                        <button type="submit"
                                class="bg-gray-900 text-white px-4 py-2 rounded-md text-sm font-medium shadow-sm hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:ring-offset-2">
                            Add Book
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>





</x-layout>