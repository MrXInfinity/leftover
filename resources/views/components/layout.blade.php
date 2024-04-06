<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
        @vite('resources/css/app.css')
    <title>Leftovers</title>
</head>
<body>
    <x-navigation />
    <main class="flex justify-center  overflow-hidden" >
        <section class="flex flex-col items-center max-w-7xl w-full p-8">
            {{$slot}}
        </section>
    </main>
    <x-snackbar/>
</body>
</html>