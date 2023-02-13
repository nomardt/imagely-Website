<!DOCTYPE html>
<html>
<head>
  <title>Imagely</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/logo.png" />
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
                            laravel: "#54B1CF",
                            darklara: "#003366",
                        },
                    },
                },
            };
        </script>
        <title>Imagely | AI Image Collection</title>
        <style>
            body {
                color:black;
            }
            .grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(500px, 1fr));
                grid-gap: 10px;
            }

            .grid img {
                width: 100%;
            }
        </style>
    </head>
    <body class="mb-0">
        <nav class="flex justify-between items-center" style="background-color: #003366;">
            <a href="/"
                ><img class="w-14 h-14" src="images/logo.png" alt="" class="logo"
            /></a>
            <ul class="flex space-x-6 mr-6 text-lg">
                @auth
                <li>
                    <form class='inline' method='POST' action='/logout'>
                        @csrf
                        <button type="submit" style="color:white">
                            <i class="fa-solid fa-door-open"></i> Logout
                        </button>
                    </form>
                </li>
                @else
                <li>
                    <a href="register" class="text-white hover:text-laravel"
                        ><i class="fa-solid fa-pen-nib"></i> Sign Up</a
                    >
                </li>
                <li>
                    <a href="login" class="text-white hover:text-laravel"
                        ><i class="fa-solid fa-user"></i>
                        Login</a
                    >
                </li>
                @endauth
            </ul>
        </nav>
    
        <main>
            @yield('content')
        </main>
        <x-flash-message />
    </body>
</html>
