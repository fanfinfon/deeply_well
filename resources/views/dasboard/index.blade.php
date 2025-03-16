<x-layout>

    <x-nav-bar-black>

    </x-nav-bar-black>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <x-dashboard-card>
            <x-slot:title>
                Home Page
            </x-slot:title>
            <x-slot:explanation>
                Edit the home page information
            </x-slot:explanation>
            <x-slot:link>
                /homeedit
            </x-slot:link>

        </x-dashboard-card>
        <x-dashboard-card>
            <x-slot:title>
                Footer
            </x-slot:title>
            <x-slot:explanation>
                Footer  information
            </x-slot:explanation>
            <x-slot:link>
                /footer
            </x-slot:link>

        </x-dashboard-card>
        <x-dashboard-card>
            <x-slot:title>
                Banner image
            </x-slot:title>
            <x-slot:explanation>
                Edit the home page banner
            </x-slot:explanation>
            <x-slot:link>
                /banner
            </x-slot:link>

        </x-dashboard-card>
        <x-dashboard-card>
            <x-slot:title>
                Books
            </x-slot:title>
            <x-slot:explanation>
                Edit update or add books
            </x-slot:explanation>
            <x-slot:link>
                /book
            </x-slot:link>

        </x-dashboard-card>

    </div>




</x-layout>