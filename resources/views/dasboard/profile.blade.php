<x-layout>

    <x-nav-bar-black>

    </x-nav-bar-black>

    <div class="flex items-center justify-center mb-16 ">
        <div class="bg-white shadow-xl border border-gray-200 rounded-lg p-6 md:p-8 max-w-5xl w-full">
            <h2 class="text-xl font-semibold text-gray-900">Profile Information</h2>
            <p class="text-gray-600 text-sm mb-4">Update your account's profile information and email address.</p>

            <form action="/profile" method="POST"  class="space-y-4">
                @csrf
                @method('PATCH')
                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input  id="name" name="name" value="{{$user->name}}"
                           class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <x-forms-eror name="name"/>
                </div>

                <div>
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                    <input  id="last_name" name="last_name" value="{{$user->last_name}}"
                           class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <x-forms-eror name="last_name"/>
                </div>


                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input  id="email" name="email" value="{{$user->email}}"
                           class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <x-forms-eror name="email"/>
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





    <div class="flex items-center justify-center mb-16">
        <div class="bg-white shadow-xl border border-gray-200 rounded-lg p-6 md:p-8 max-w-5xl w-full">
            <h2 class="text-xl font-semibold text-gray-900">Password</h2>
            <p class="text-gray-600 text-sm mb-4">Update your password.</p>

            <form action="/password" method="POST"  id="password-form" class="space-y-4">
                @csrf
                @method('PATCH')
                <!-- Name Field -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">New Password</label>
                    <input  id="password" name="password" placeholder="new password"
                           class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <x-forms-eror name="password"/>
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input  id="password_confirmation" name="password_confirmation" placeholder="confirm the password*"
                           class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <x-forms-eror name="password_confirmation"/>
                </div>



                <!-- Save Button -->
                <div>
                    <button type="submit" form="password-form"
                            class="bg-gray-900 text-white px-4 py-2 rounded-md text-sm font-medium shadow-sm hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:ring-offset-2">
                        SAVE
                    </button>
                </div>
            </form>
        </div>
    </div>



    <div class="flex items-center justify-center mb-16">
        <div class="bg-white shadow-xl border border-gray-200 rounded-lg p-6 md:p-8 max-w-5xl w-full">
            <h2 class="text-xl font-semibold text-gray-900">Information About Your Self!</h2>
            <p class="text-gray-600 text-sm mb-4">Update your about information.</p>

            <form action="/profile2" method="POST"  class="space-y-4">
                @csrf
                @method('PATCH')
                <!-- Name Field -->
                <div>
                    <label for="about" class="block text-sm font-medium text-gray-700">About</label>
                    <textarea id="about" name="about" rows="4"
                              class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{old("about")?old("about"):$user->about}}</textarea>
                    <x-forms-eror name="about"/>
                </div>

                <div>
                    <label for="profile_pic" class="block text-sm font-medium text-gray-700">Profile Picture</label>
                    <input  id="profile_pic" name="profile_pic" value="{{$user->profile_pic}}"
                           class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <x-forms-eror name="profile_pic"/>
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input  id="phone" name="phone" value="{{$user->phone}}"
                           class="mt-1 block w-1/2 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <x-forms-eror name="phone"/>
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