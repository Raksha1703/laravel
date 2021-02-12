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
<div class="row">
    <form class="col s12" method="post" action="{{route('save.add')}}">
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Name" id="name" type="varchar" class="validate">
          <label for="name">Post</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <textarea id="textarea" class="materialize-textarea" placeholder="textarea"></textarea>
            <label for="description">Description</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
        </div>
      </div>      
    </form>
</body>
</html>