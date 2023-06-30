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
    <script src="script.js" defer > </script>
    <title>Blog Post</title>
</head>
<body>
    <div>
        <header>
            <li> To-do List </li>
            <li> <a href="{{ route('taskdone.index') }}"> <span class="material-symbols-outlined"> history </span> </a></li>
            <li> <a href="{{ route('task.create') }}"> <span class="material-symbols-outlined"> add_circle </span> </a> </li>
            <li> <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <span class="material-symbols-outlined">
                logout </span> </a> </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </header>
            <ul>

                @if (!$tasks)
                    <a href="{{ route('task.create') }}" class="display_msg"> Create a task </a>
                @endif
            
                @foreach ($tasks as $task)
                <li> 
                    <h3> {{ $task->title }} </h3>
                    <p> {{ $task->timestarted }} </p>

                    <form action="{{ route('task.destroy', $task->id) }}" class="dash_form" method="post">
                    @csrf
                    @method('delete')

                    <button class="deletespan" type="submit">
                        <span class="material-symbols-outlined"> delete </span>
                    </button>
                    </form>

                    <form action="{{ route('taskdone.store') }}" class="dash_form" method="post">
                        @csrf
    
                        <input type="text" value="{{ $task->id }}" name="value" style="display: none">
                        <button class="deletespan" type="submit">
                            <span class="material-symbols-outlined">  task_alt </span>
                        </button>
                    </form>
                    
                </li>
                @endforeach  
                
            </ul>
        <main>
              
        </main>
    </div>
    
</body>
</html>