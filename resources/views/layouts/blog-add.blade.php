<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Blog</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        <h3>Add New Data</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ url('/blog-create') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title :</label>
                <input type="text" class="form-control" id="title"name="title" value= {{ old('title') }}>
            </div>
            <div class="mb-3 mt-4">
                <label for="description" class="form-label">Description :</label>
                <textarea class="form-control" id="description" rows="2" name="description" value ={{ old('description') }}></textarea>
            </div>
            <div class="col-md-5 mt-3">
                <button class="btn btn-outline-success">Save</button>
            </div>
        </form>

    </div>

</body>

</html>
