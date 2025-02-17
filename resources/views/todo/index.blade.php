<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Index Todo</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>  {{ $name }}'s Todos</h1>
                <a href="/todos/create" class="btn btn-outline-primary btn-sm mb-4">Create New</a>
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{session('status')}}
                            </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Item</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($todos as $todo)
                                    <tr>
                                        <td>{{ $todo->name }}</td>
                                        <td>{{ $todo->status }}</td>
                                        <td><button class="btn btn-primary">Done</button></td>
                                    </tr>
                                @endforeach --}}
                                @forelse ($todos as $key => $todo)
                                    <tr>
                                        <td>{{ $todos->firstItem() + $key }}</td>
                                        <td>{{ $todo->name }}</td>
                                        <td>{{ $todo->status }}</td>
                                        <td> <div class="d-flex">

                                            <a href="/todos/{{$todo->id}}/edit" class="btn btn-warning btn-sm mx-2">Edit</a>

                                            <button class="btn btn-primary btn-sm mx-2">Done</button>
                                            <form action="todos/{{$todo->id}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm mx-2">Delete</button>
                                            </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No Record Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        {{ $todos->links() }}
                    </div>
                </div>

                <div class="card mt-5">
                    <div class="row text-white">
                        <div class="col bg-primary">Ini Col 4</div>
                        <div class="col bg-success">Ini Col 4</div>
                        <div class="col bg-warning">Ini Col 4</div>
                        <div class="col bg-danger">Ini Col 4</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
