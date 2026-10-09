<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Blog</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div>
        <div class="text-center mt-4 text-warning font-monospace fw-bolder">
            <h3>Detail Halaman</h3>
        </div>
        <div class="judul mx-5 text-info">
            <h4>Detail Profil</h4>
            <p> {{ $blog->title }}</p>
            <p> {{ $blog->description }}</p>
            <p> {{ $blog->created_at }}</p>
        </div>
    </div>
</body>

</html>
