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
            <li> <a href="{{ route('task.index') }}"> Go Back </a> </li>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        </header>
        <div class="history_container">
            <h1> Task history log </h1>
            
            <section class="history"> 
                <div class="search">
                    <form action="{{ route('taskdone.index') }}" method="GET">
                        <div class="search_by_date">
                            <label for="date">Search by date</label>
                            <div>
                                <input type="date" id="date" name="date">
                                <button type="submit">Search</button>
                            </div>
                            
                        </div>
                    </form>
                </div>
                    
                
                <table class="task_history">
                    <tr class="tasks">
                        <th> Title </th> 
                        <th> Task target completion </th> 
                        <th> Task done at </th> 
                        <th> Status </th> 
                        <th> - </th>
                        
                    </tr>

                    @foreach ($task_done as $task)
                    <tr class="tasks">
                        <td> {{ $task->title }} </td> 
                        <td> {{ $task->target_time_to_complete  }} </td> 
                        <td class="actual-finished"> {{ $task->created_at }}  </td>
                        
                        @if ($task->target_time_to_complete > $task->created_at)
                            <td> On-time </td>
                        @else
                            <td> Late </td>
                        @endif

                        <td>
                        <form action="{{ route('taskdone.destroy', $task->id) }}" method="post">
                        @csrf
                        @method('delete')
                            <button type="submit"> <span class="material-symbols-outlined"> delete </span> </button>
                        </form>
                                    
                                
                        </td>
                        
                        

                    </tr>
                    @endforeach          
                </table>           
            </section>
        </div>
    </div>
    
</body>
</html>