<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#FFAA33",
                        },
                    },
                },
            };
        </script>
        <title>YourJob | Find Laravel Jobs & Projects</title>
    </head>
    <body class="bg-gray-100">
        <nav class="bg-white shadow-md">
            <div class="container mx-auto flex justify-between items-center p-4">
                <a href="/">
                    <img class="w-40" src="{{ asset('images/jobs-logo.jpg') }}" alt="Logo" />
                </a>
                <ul class="flex space-x-6 text-lg">
                    @auth
                        <li>
                            <span class="font-bold uppercase">{{ auth()->user()->name }}</span>
                        </li>
                        <li>
                            <a href="/listings/manage" class="hover:text-laravel">
                                <i class="fa-solid fa-gear"></i> Manage Listings
                            </a>
                        </li>
                        <li>
                            <form class="inline" method="POST" action="/logout">
                                @csrf
                                <button type="submit" class="hover:text-laravel">
                                    <i class="fa-solid fa-door-closed"></i> Logout
                                </button>
                            </form>
                        </li>
                    @else
                        <li>
                            <a href="/register" class="hover:text-laravel">
                                <i class="fa-solid fa-user-plus"></i> Register
                            </a>
                        </li>
                        <li>
                            <a href="/login" class="hover:text-laravel">
                                <i class="fa-solid fa-arrow-right-to-bracket"></i> Login
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>

        <main class="container mx-auto mt-8">
            {{ $slot }}
        </main>

        <footer class="bg-laravel text-white py-4 mt-16">
            <div class="container mx-auto flex justify-between items-center">
                <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>
                <a
                    href="/listings/create"
                    class="bg-blue-950 text-white py-2 px-5 rounded-md hover:bg-blue-800 transition duration-300"
                >Post Job</a>
            </div>
        </footer>

        <x-flash-message />
    </body>
</html>
