{{-- The Single Listing Page --}}
{{-- this page is opened from the <a> anchor link elements in listing-card.blade.php. $listing is passed from the route in web.php or the controller --}}
<x-layout>

    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between my-6">
            <a href="/" class="text-black inline-block">
                <i class="fa-solid fa-arrow-left"></i> Back
            </a>
            <a href="/listings/{{ $listing->id }}/edit" class="text-blue-500 hover:text-blue-700">
                <i class="fa-solid fa-pencil"></i> Edit
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="flex flex-col items-center p-6 text-center">

                <img
                    class="w-48 h-48 object-cover rounded-full mb-4"
                    src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/vmedis.png') }}"
                    alt="{{ $listing->title }} Logo"
                />
                <h2 class="text-3xl font-semibold mb-2">{{ $listing->title }}</h2>
                <p class="text-xl font-bold text-gray-600 mb-4">{{ $listing->company }}</p>

                <x-listing-tags :tagsCsv="$listing->tags" />

                <div class="text-lg text-gray-700 mt-4 mb-6">
                    <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
                </div>

                <div class="w-full border-t border-gray-200 mb-6"></div>

                <div class="text-left w-full">
                    <h3 class="text-2xl font-bold mb-4">
                        Job Description
                    </h3>
                    <p class="text-lg text-gray-700 space-y-4 mb-6">
                        {{ $listing->description }}
                    </p>

                    <div class="flex flex-col space-y-4">
                        <a
                            href="mailto:{{ $listing->email }}"
                            class="inline-block bg-laravel text-white py-2 px-4 rounded-lg hover:bg-laravel-dark transition"
                        >
                            <i class="fa-solid fa-envelope"></i> Contact Employer
                        </a>

                        <a
                            href="{{ $listing->website }}"
                            target="_blank"
                            class="inline-block bg-black text-white py-2 px-4 rounded-lg hover:bg-gray-800 transition"
                        >
                            <i class="fa-solid fa-globe"></i> Visit Website
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
