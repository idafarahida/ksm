<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit Todo</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Edit Todo {{$todo->name}}</h1>
                <a href="/todos" class="btn btn-outline-success">Back to List</a>
                <div class="card">
                    <div class="card-body">
                       <form action="/todos/{{ $todo->id }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name" ></label>
                            <input type="text" name="name" class="form-control" placeholder="Todo name" value="{{$todo->name}}">
                        </div>
                        <button class="btn btn-success btn-sm float-end mt-4" type="submit">Update</button>
                       </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
