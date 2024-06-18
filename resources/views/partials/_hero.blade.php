<!-- Hero -->
<section
    class="relative h-72 bg-laravel flex flex-col justify-center items-center text-center space-y-4 mb-4"
>
    <div
        class="absolute top-0 left-0 w-full h-full opacity-50 bg-cover bg-center"
        style="background-image: url('/path/to/your/background-image.jpg');"
    ></div>

    <div class="z-10">
        <h1 class="text-6xl font-bold uppercase text-white drop-shadow-lg">
            Karir<span class="text-blue-900">Gemilang</span>
        </h1>
        <p class="text-2xl text-gray-200 font-bold my-4 drop-shadow-md">
            Find or post jobs & projects
        </p>

        {{-- Authentication Directives (@auth and @guest): https://laravel.com/docs/9.x/blade --}}
        @guest {{-- If the current user is NOT authenticated/logged-out/guest/visitor --}}
            <div>
                <a
                    href="/register"
                    class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:bg-white hover:text-laravel transition duration-300"
                    >Sign Up to List a Job</a
                >
            </div>
        @endguest
    </div>
</section>
