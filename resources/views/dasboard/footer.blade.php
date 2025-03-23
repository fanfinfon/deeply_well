<x-layout>

    <x-nav-bar-black>

    </x-nav-bar-black>


    <div class="flex items-center justify-center mb-16 pt-5">
        <div class="bg-white shadow-xl border border-gray-200 rounded-lg p-6 md:p-8 max-w-5xl w-full">
            <h2 class="text-xl font-semibold text-gray-900">Information About Footer !</h2>
            <p class="text-gray-600 text-sm mb-4">Update your Footer information.</p>

            <form action="/footer" method="POST"  class="space-y-4">
                @csrf
                @method('PATCH')
                <!-- Name Field -->

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input  id="title" name="title" value="{{old("title")?old("title"):$footer->title}}"
                            class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <x-forms-eror name="title"/>
                </div>

                <div>
                    <label for="body" class="block text-sm font-medium text-gray-700">About</label>
                    <textarea id="body" name="body" rows="4"
                              class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
 {{old("body")?old("body"):$footer->body}}</textarea>
                    <x-forms-eror name="body"/>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input  id="email" name="email" value="{{old("email")?old("email"):$footer->email}}"
                            class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <x-forms-eror name="email"/>
                </div>

                <div>
                    <label for="facebook" class="block text-sm font-medium text-gray-700">Facebook</label>
                    <input  id="facebook" name="facebook" value="{{old("facebook")?old("facebook"):$footer->facebook}}"
                            class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <x-forms-eror name="facebook"/>
                </div>

                <div>
                    <label for="instagram" class="block text-sm font-medium text-gray-700">Instagram</label>
                    <input  id="instagram" name="instagram" value="{{old("instagram")?old("instagram"):$footer->instagram}}"
                            class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <x-forms-eror name="instagram"/>
                </div>



                <!-- Save Button -->
                <div>
                    <button type="submit"
                            class="bg-gray-900 text-white px-4 py-2 rounded-md text-sm font-medium shadow-sm hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:ring-offset-2">
                        SAVE
                    </button>
                </div>
            </form>
        </div>
    </div>


</x-layout>