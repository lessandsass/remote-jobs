<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        body {
            font-family: "Hanken Grotesk", sans-serif;
        }
    </style>

    @vite('resources/css/app.css')

    <title>Remote-Jobs</title>
</head>
<body class="bg-black text-white font-hanken-grotesk pb-10">

    <div class="px-10">

        <nav class="flex justify-between items-center py-4 border-b border-white/10">

            <div>
                <a href="">
                    <x-logo />
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            @auth
                <div>
                    <a href="/jobs/create">Post a job</a>
                </div>
            @endauth

            @guest
                <a href="/register">Sign Up</a>
                <a href="/login">Log In</a>
            @endguest

        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>

    </div>

</body>
</html>
