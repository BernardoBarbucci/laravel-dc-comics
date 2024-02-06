<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Laravel Project</title>
{{-- vite inserisce qua app.js --}}
    @vite('resources/js/app.js')

</head>
<body class="bg-dark">
    <header>
        <h1 class="text-warning text-center py-5">
            Comics List
        </h1>
    </header> 
    
    <main>
        @yield('content')
    </main>

    <footer class="pt-5">
        <p class="text-warning ms-3">By Berna</p>
    </footer>
</body>
</html>