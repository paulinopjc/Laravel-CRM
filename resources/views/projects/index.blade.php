<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Projects') }}
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
                        <h2 class="text-xl font-semibold mb-4">Projects</h2>
                        <a href="{{ route('projects.create') }}" class="block w-40 text-center bg-blue-500 text-white my-3 px-4 py-2 rounded">Add New Project</a>
                        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                            <thead class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <tr>
                                    <th class="py-3 px-6 text-left">Title</th>
                                    <th class="py-3 px-6 text-left">User</th>
                                    <th class="py-3 px-6 text-center">Client</th>
                                    <th class="py-3 px-6 text-center">Status</th>
                                    <th class="py-3 px-6 text-center">Priority</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                                @foreach($projects as $project)
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6">{{ $project->title }}</td>
                                        <td class="py-3 px-6">{{ $project->user->first_name }} {{ $project->user->last_name }}</td>
                                        <td class="py-3 px-6 text-center">{{ $project->client->company_name }}</td>
                                        <td class="py-3 px-6 text-center">{{ $project->status }}</td>
                                        <td class="py-3 px-6 text-center">{{ $project->priority }}</td>
                                        <td class="py-3 px-6 text-center">
                                            <a href="{{ route('projects.edit', $project) }}" class="bg-blue-500 text-white my-3 px-3 py-1 rounded">Edit</a>
                                            <form method="POST" action="{{ route('projects.destroy', $project) }}" class="my-3">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" onclick="return confirm('Are you sure?')" class="bg-red-500 text-white px-3 py-1 rounded ml-2">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
