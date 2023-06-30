<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer > </script>
    <title>Blog Post</title>
</head>
<body>
    <div>
        <header>
            <li> To-do List </li>
            <li> <a href="{{ route('task.index') }}"> Go Back </a> </li>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        </header>
    
        <main>
            <form action="{{ route('task.store') }}" method="post">
            @csrf
                <div class="title">
                    <label for=""> Title </label>
                    <input type="text" name="title" placeholder="Insert title ...">
                </div>
    
                <div class="description">
                    <label for="">Description</label>
                    <textarea name="description" placeholder="Add description.." id="" cols="30" rows="5"></textarea>
                </div>
    
                <div class="datestarted">
                    <label for=""> Started at: </label>
                    <input type="datetime-local" name="timestarted" id="">
                </div>
    
                <div class="target_time_to_complete">
                    <label for=""> Target completion: </label>
                    <input type="datetime-local" name="target_time_to_complete" id="">
                </div>
    
                <button type="submit"> Create  </button>
            </form>   


            @if ($errors->any())
            <div class="errors">
                @foreach ($errors->all() as $error)
                    <p> {{ $error }} </p>
                @endforeach
            </div>
            @endif
            
        </main>
    </div>
    
</body>
</html>