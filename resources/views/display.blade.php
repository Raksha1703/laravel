<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARAVEL_CRUD</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
</head>
<body>
    @if(Session::has('post_delete'))
    <span>{{Session::get('post_delete')}}</span>
    @endif
    <a class="btn waves-effect waves-light blue "  href="{{route('save.add')}}">Create</a>
        <table class="striped highlight centered" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cust as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->description}}</td>
                        <td>
                        <a href="/edit/{{$data->id}}" class="waves-effect waves-light btn ">UPDATE</a>
                        <a href="/delete/{{$data->id}}" class="waves-effect waves-light btn red">DELETE</a>
                        </td>
                    </tr>
                @endforeach         
            </tbody>
        </table>
</body>
</html>