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
    <div class="welcome">
        <div class="welcome-title">
            <h1> Todo List <span class="material-symbols-outlined"> fact_check </span> </h1>
        </div>
        
        <div class="login-section">
            @if (Route::has('login'))
                @auth
                    <a href="{{ route('task.index') }}" class="">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="">Register</a>
                @endif
                @endauth
            @endif
        </div>

        <footer>
            Made by: Mark Joseph Serrano, 2023
        </footer>
    </div>
    
</body>
</html>
