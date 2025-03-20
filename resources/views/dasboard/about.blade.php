<x-layout>

    <x-nav-bar-black> </x-nav-bar-black>

    <div class="flex items-center justify-center mb-16 pt-5">
        <div class="bg-white shadow-xl border border-gray-200 rounded-lg p-6 md:p-8 max-w-5xl w-full">
            <h2 class="text-xl font-semibold text-gray-900">AboutPage Information</h2>
            <p class="text-gray-600 text-sm mb-4">Update your about page information</p>

            <form action="/aboutedit" method="POST" class="space-y-4">
                @csrf
                @method('PATCH')

                <div>
                    <label for="title_1" class="block text-sm font-medium text-gray-700">Title_1</label>
                    <input id="title_1" name="title[1]" value="{{old('title.1')?? $about->where('id', 1)->first()->title }}"
                           class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <input type="hidden" name="id[]" value="1">
                    <x-forms-eror name="title.1"/>
                </div>

                <div>
                    <label for="body_1" class="block text-sm font-medium text-gray-700">Description_1</label>
                    <textarea id="body_1" name="body[1]" rows="4"
                              class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{old('body.1')?? $about->where('id', 1)->first()->body}}</textarea>

                    <x-forms-eror name="body.1"/>
                </div>

                <div>
                    <label for="title_2" class="block text-sm font-medium text-gray-700">Title_2</label>
                    <input id="title_2" name="title[2]" value="{{old('title.2')?? $about->where('id', 2)->first()->title }}"
                           class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <input type="hidden" name="id[]" value="2">
                    <x-forms-eror name="title.2"/>
                </div>

                <div>
                    <label for="body_2" class="block text-sm font-medium text-gray-700">Description_2</label>
                    <textarea id="body_2" name="body[2]" rows="4"
                              class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{old('body.2')?? $about->where('id', 2)->first()->body}}</textarea>
                    <x-forms-eror name="body.2"/>
                </div>

                <div>
                    <label for="title_3" class="block text-sm font-medium text-gray-700">Title_3</label>
                    <input id="title_3" name="title[3]" value="{{old('title.3')?? $about->where('id', 3)->first()->title }}"
                           class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <input type="hidden" name="id[]" value="3">
                    <x-forms-eror name="title.3"/>
                </div>

                <div>
                    <label for="body_3" class="block text-sm font-medium text-gray-700">Description_3</label>
                    <textarea id="body_3" name="body[3]" rows="4"
                              class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{old('body.3')?? $about->where('id', 3)->first()->body}}</textarea>
                    <x-forms-eror name="body.3"/>
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