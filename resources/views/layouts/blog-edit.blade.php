<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Blog</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="container">
        <div class ='mt-5'>
            <h2 class="mb-3 text-center text-primary font-monospace fw-bolder "> Edit blog {{ $blog->id }} </h2>
            <form action="{{ url('blog/' . $blog->id . '/update') }}" method="POST">
                @csrf
                @method('PATCH')
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="mb-3">
                    <label for="title" class="form-label">Title :</label>
                    <input type="text" class="form-control" id="title"name="title" value= "{{ $blog->title }}">
                </div>
                <div class="mb-3 mt-4">
                    <label for="description" class="form-label">Description :</label>
                    <textarea class="form-control" id="description" rows="2" name="description"> {{ $blog->description }} </textarea>
                </div>
                <div class="col-md-5 mt-3">
                    <button class="btn btn-outline-success">Save</button>
                </div>
            </form>
</body>

</html>
