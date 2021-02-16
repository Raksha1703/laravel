<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
  @if(Session::has('post_add'))
  <span>{{Session::get('post_add')}}</span>
  @endif
  <div class="container">
    <div class="row">
        <form class="col s6" method="post" action="{{route('save.add')}}">
          @csrf
          <div class="row">
            <div class="input-field s12 m4 l8">
              <label for="name">Post</label>
              <input placeholder="Name" id="name" name="name" type="text" class="validate">
            </div>
          </div>
          <div class="row">
            <div class="input-field s12 m4 l8">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="materialize-textarea" placeholder="description"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="input-field s12 m4 l8">
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
            </div>
        </form>
    </div>      
  </div>
</body>
</html>