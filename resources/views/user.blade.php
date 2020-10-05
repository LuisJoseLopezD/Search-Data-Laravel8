<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- BOOTSTRAP INCLUDE --}}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>busqueda</title>
</head>
<body>

    <div class="container">
        <div class="row>
            <div class="col-md-12">
                <div class="page-header">
                    <h1>Busqueda de usuarios</h1>
                    {{ Form::open(['route' => 'users', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}

                    <div class='form-group'>
                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) }}
                    </div>
                    
                    <div class='form-group'>
                        {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}   
                    </div>

                    <div class='form-group'>
                        {{ Form::text('bio', null, ['class' => 'form-control', 'placeholder' => 'Bio']) }}   
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-light">
                            <img src="https://img.icons8.com/material-rounded/24/000000/search.png"/>
                        </button>
                    </div>

                    {{ Form::close() }}
                </div>
            </div>

            <div class="col-md-8">
                <table class="table table-hover table-striped">
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->bio }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- paginacion --}}
                {{ $users->links() }}
            </div>

        </div>
    </div>

    <footer class="text-center">
        <p>created by @luisjoselopezd on laravel 8.</p>
        <a href="https://icons8.com/icon/84433/search-bar">Search Bar icon by Icons8</a>
    </footer>
    
</body>
</html>