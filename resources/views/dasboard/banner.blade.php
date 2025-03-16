<x-layout>

    <x-nav-bar-black></x-nav-bar-black>

    <div class="flex items-center justify-center mb-16">
        <div class="bg-white shadow-xl border border-gray-200 rounded-lg p-6 md:p-8 max-w-5xl w-full">
            <h2 class="text-xl font-semibold text-gray-900">Banner Image !</h2>
            <p class="text-gray-600 text-sm mb-4">Update your Banner Image.</p>

            <form action="/banner" method="POST"  class="space-y-4">
                @csrf
                @method('PATCH')
                <!-- Name Field -->

                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Image Url</label>
                    <input  id="image" name="image" value="{{old("image")?old("image"):$carousel->image}}"
                            class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <x-forms-eror name="title"/>
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