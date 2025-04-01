<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-slot name="body">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __("You're logged in!") }}
                    </div>
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h2 class="text-xl font-semibold mb-4">Clients</h2>
                        <ul class="space-y-2">
                            @foreach($clients as $client)
                                <li>
                                    <a href="#"
                                    class="text-gray-600 hover:text-gray-800">
                                        {{ $client->contact_name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
