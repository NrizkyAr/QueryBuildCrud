<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body bgcolor="cyan">
    <div class="container">
        <div class ='mt-5'>
            <h3 class="text-center">Blog List</h3>
            <div class="table-responsive mt-5 ">
                <a href="{{ url('blog-add') }}" class="btn btn-outline-primary mb-4 form-control">Add New</a>
                <form method="GET">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="input-group mb-3">
                        <input type="text"name="title" value ="{{ $title }}"class="col-auto rounded-3"
                            placeholder="Search.." aria-label="Search">
                        <button class="rounded-3 mx-2  btn btn-outline-primary" type="submit">Search</button>
                    </div>
                </form>
                <table class="table table- table-hover">
                    <thead class="table-primary">
                        <th>No</th>
                        <th> Title</th>
                        <th>Action</th>
                    </thead>
                    <tbody table-group-divider>
                        @if ($blogs->count() == 0)
                            <p class="text-center text-danger ">No data found <span
                                    class="text-uppercase">{{ $title }}</span></p>
                        @endif
                        @foreach ($blogs as $blog)
                            <tr class="table-secondary">
                                <td>{{ ($blogs->currentpage() - 1) * $blogs->perpage() + $loop->index + 1 }}</td>
                                <td> {{ $blog->title }}</td>
                                <td><a href= "{{ url('blog/' . $blog->id . '/detail') }}"> <img
                                            src="{{ asset('css/eye.png') }}" style="width:18px">
                                        <a href= "{{ url('blog/' . $blog->id . '/edit') }}"> <img
                                                src="{{ asset('css/edit.png') }}" style="width:18px"></a> <a
                                            href= "{{ url('blog/' . $blog->id . '/delete') }}"><img
                                                src="{{ asset('css/delete.png') }}" style="width:18px"> </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
                {{ $blogs->links() }}
            </div>

        </div>
    </div>

</body>

</html>
