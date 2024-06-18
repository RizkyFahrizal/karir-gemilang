{{-- Manage User Listings page --}}
<x-layout>
    <x-card class="p-10 bg-white shadow-md rounded-md">
        <header class="mb-8">
            <h1 class="text-3xl text-center font-bold my-6 uppercase text-laravel">
                Manage Jobs
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <thead>
                <tr class="bg-gray-100 border-b-2 border-gray-300">
                    <th class="px-4 py-2 text-left text-gray-600">Title</th>
                    <th class="px-4 py-2 text-left text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody>
                @unless ($listings->isEmpty())
                    @foreach ($listings as $listing)
                        <tr class="border-b border-gray-200 hover:bg-gray-100 transition duration-150">
                            <td class="px-4 py-4 text-lg">
                                <a href="/listings/{{ $listing->id }}" class="text-blue-500 hover:underline">
                                    {{ $listing->title }}
                                </a>
                            </td>
                            <td class="px-4 py-4 text-lg flex space-x-4">
                                <a
                                    href="/listings/{{ $listing->id }}/edit"
                                    class="text-blue-400 hover:text-blue-600 px-4 py-2 rounded-xl border border-blue-400 hover:border-blue-600 transition duration-150"
                                >
                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                                </a>
                                <form method="POST" action="/listings/{{ $listing->id }}" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        type="submit"
                                        class="text-red-500 hover:text-red-700 px-4 py-2 rounded-xl border border-red-500 hover:border-red-700 transition duration-150"
                                    >
                                        <i class="fa-solid fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg text-center" colspan="2">
                            <p class="text-gray-500">No Listings Found</p>
                        </td>
                    </tr>
                @endunless
            </tbody>
        </table>
    </x-card>
</x-layout>
