<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Priyanshu's Site - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/css/style2.css')}}">
    

</head>
<body>
    <header>
        <h1>Priyanshu's Site</h1>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/post">Post</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="container">
        <aside class="sidebar">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/post">Post</a></li>
                <li><a href="/allusers">Query Builder List Data</a></li>
            </ul>
        </aside>
        
        <main class="content">
           <article>
            @yield('main-content')
           </article>
        </main>
    </div>
    
    <footer>
        <p>&copy; 2024 Priyanshu. All rights reserved.</p>
    </footer>
    
</body>
</html>
