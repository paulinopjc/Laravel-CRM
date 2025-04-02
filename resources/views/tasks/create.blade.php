<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Task Create') }}
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
                        <h2 class="text-xl font-semibold mb-4">New Task</h2>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('tasks.store') }}">
                            @csrf
                            {{ $users }}
                            {{ $clients }}
                            {{ $projects }}
                            
                            {{-- <div> 
                                <div>
                                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="name">Contact Name:</label>
                                </div>
                                <input type="text" name="contact_name" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="name" required />
                            </div>
                            <div> 
                                <div>
                                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="email">Contact Email:</label>
                                </div>
                                <input type="text" name="contact_email" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="email" required />
                            </div>
                            <div> 
                                <div>
                                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="phone">Contact Number:</label>
                                </div>
                                <input type="text" name="contact_phone_number" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="phone" required />
                            </div>
                            <div> 
                                <div>
                                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="company-name">Company Name:</label>
                                </div>
                                <input type="text" name="company_name" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="company-name" required />
                            </div>
                            <div> 
                                <div>
                                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="company-address">Company Address:</label>
                                </div>
                                <input type="text" name="company_address" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="company-address" required />
                            </div>
                            <div> 
                                <div>
                                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="company-city">Company City:</label>
                                </div>
                                <input type="text" name="company_city" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="company-city" required />
                            </div>
                            <div> 
                                <div>
                                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="company-zip">Company Zip:</label>
                                </div>
                                <input type="text" name="company_zip" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="company-zip" required />
                            </div>
                            <div>
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 my-3">
                                    Save
                                </button>
                            </div>  --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
