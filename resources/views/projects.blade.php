<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="{{asset('assets/css/projects.css')}}">
    
</head>
<body>
    <header>
        <a href="/" class="logo">MySite</a>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/post">Post</a></li>
                <li><a href="/projects">Projects</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="projects-container">
        <!-- First Column -->
        <div class="projects-column">
            <div class="project-details">
                <h2>Project 1: Awesome Website</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur auctor, nulla id lacinia cursus, lorem felis euismod odio, nec tincidunt lorem arcu in nisi.</p>
            </div>
            <div class="project-slider">
                <div class="slider">
                    <img src="images/project1_1.jpg" alt="Project Image 1">
                    <img src="images/project1_2.jpg" alt="Project Image 2">
                    <img src="images/project1_3.jpg" alt="Project Image 3">
                </div>
            </div>
        </div>
        
        <!-- Space between columns -->
        <div class="spacer"></div>
        
        <!-- Second Column -->
        <div class="projects-column">
            <div class="project-slider">
                <div class="slider">
                    <img src="images/project2_1.jpg" alt="Project Image 4">
                    <img src="images/project2_2.jpg" alt="Project Image 5">
                    <img src="images/project2_3.jpg" alt="Project Image 6">
                </div>
            </div>
            <div class="project-details">
                <h2>Project 2: Innovative App</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur auctor, nulla id lacinia cursus, lorem felis euismod odio, nec tincidunt lorem arcu in nisi.</p>
            </div>
        </div>
    </div>
    
    <script src="scripts/projects.js"></script>
</body>
</html>
