<x-layout>

    <x-nav-bar-black></x-nav-bar-black>

    <div class="flex items-center justify-center mb-16 pt-5">
        <div class="bg-white shadow-xl border border-gray-200 rounded-lg p-6 md:p-8 max-w-5xl w-full">
            <h2 class="text-xl font-semibold text-gray-900">Home Page Information</h2>
            <p class="text-gray-600 text-sm mb-4">Update your home page information</p>

            <form action="/homeedit" method="POST" class="space-y-4">
                @csrf
                @method('PATCH')

                <!-- Slogan (ID: 1) -->
                <div>
                    <label for="title_1" class="block text-sm font-medium text-gray-700">Slogan</label>
                    <input id="title_1" name="title[1]" value="{{old('title.1')?? $homeTexts->where('id', 1)->first()->title }}"
                           class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <input type="hidden" name="id[]" value="1">
                    <x-forms-eror name="title.1"/>
                </div>

                <!-- Title 1 (ID: 2) -->
                <div>
                    <label for="title_2" class="block text-sm font-medium text-gray-700">Title 1</label>
                    <input id="title_2" name="title[2]" value="{{old('title.2')?? $homeTexts->where('id', 2)->first()->title }}"
                           class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <input type="hidden" name="id[]" value="2">
                    <x-forms-eror name="title.2"/>
                </div>

                <!-- Description (ID: 2) -->
                <div>
                    <label for="body_2" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="body_2" name="body[2]" rows="4"
                              class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{old('body.2')?? $homeTexts->where('id', 2)->first()->body}}</textarea>
                    <x-forms-eror name="body.2"/>
                </div>

                <!-- Title 2 (ID: 3) -->
                <div>
                    <label for="title_3" class="block text-sm font-medium text-gray-700">Title 2</label>
                    <input id="title_3" name="title[3]" value="{{old('title.3')?? $homeTexts->where('id', 3)->first()->title }}"
                           class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <input type="hidden" name="id[]" value="3">
                    <x-forms-eror name="title.3"/>
                </div>

                <!-- Description 2 (ID: 3) -->
                <div>
                    <label for="body_3" class="block text-sm font-medium text-gray-700">Description 2</label>
                    <textarea id="body_3" name="body[3]" rows="4"
                              class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{old('body.3')?? $homeTexts->where('id', 3)->first()->body }}</textarea>
                    <x-forms-eror name="body.3"/>
                </div>

                <!-- Title 3 (ID: 4) -->
                <div>
                    <label for="title_4" class="block text-sm font-medium text-gray-700">Title 3</label>
                    <input id="title_4" name="title[4]" value="{{old('title.4')?? $homeTexts->where('id', 4)->first()->title }}"
                           class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <input type="hidden" name="id[]" value="4">
                    <x-forms-eror name="title.4"/>
                </div>

                <!-- Description 3 (ID: 4) -->
                <div>
                    <label for="body_4" class="block text-sm font-medium text-gray-700">Description 3</label>
                    <textarea id="body_4" name="body[4]" rows="4"
                              class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{old('body.4')?? $homeTexts->where('id', 4)->first()->body }}</textarea>
                    <x-forms-eror name="body.4"/>
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
