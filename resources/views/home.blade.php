<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME', 'Laravel') }}</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div id="app" class="flex flex-col" style="min-height: 100vh;"></div>
    @vite('resources/js/app.js')
</body>
</html>