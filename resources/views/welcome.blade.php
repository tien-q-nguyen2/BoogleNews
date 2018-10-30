<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boogle News</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header>
        <div class='logo-group'>
            <!-- hamburger icon -->
            <a href="#"><i class="fas fa-bars"></i></a>
            <!-- news site title/logo -->
            <p>
                <span class='boo-letters'>Boo</span><span class='gle-letters'>gle</span> 
                <span class='news-letters'>News</span>
            </p>
        </div>
        <div class='search-bar'>
            <a href="#"><i class="fas fa-search"></i></a>
            <input type="text" placeholder="Search for topics, locations & sources">
            <a href="#"><i class="fas fa-times"></i></a>
        </div>
        <div class='menu-group'>
            <a href="#"><i class="fas fa-shapes"></i></a>
            <a href="#"><i class="fas fa-bell"></i></a>
            <a href="#">
                <img src="https://media.licdn.com/dms/image/C4E03AQHgZLO4xdpObg/profile-displayphoto-shrink_800_800/0?e=1546473600&v=beta&t=g6IoADqGPvRmhB4mQvBQMdm9Tg8aYganCDKoNdAQ-LE" alt="Cameron the PHP guy">
            </a>
        </div>
    </header>

    <div class='header-placeholder'></div>

    <main>
        <div class="left-sidebar">
            <a href="#"><i class="fas fa-newspaper"></i>Top stories</a>
            <a href="#"><i class="fas fa-user"></i>For you</a>
            <a href="#"><i class="far fa-star"></i>Favorites</a>
            <a href="#"><i class="fas fa-search"></i>Saved searches</a>
            <hr>
            <a href="#"><i class="fas fa-flag"></i>Canada</a>
            <a href="#"><i class="fas fa-globe-americas"></i>World</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i>Local</a>
            <a href="#"><i class="fas fa-building"></i>Business</a>
            <a href="#"><i class="fas fa-microchip"></i>Technology</a>
            <a href="#"><i class="fas fa-film"></i>Entertainment</a>
            <a href="#"><i class="fas fa-bicycle"></i>Sports</a>
            <a href="#"><i class="fas fa-flask"></i>Science</a>
            <a href="#"><i class="fas fa-dumbbell"></i>Health</a>
        </div>
        
        <div class='left-sidebar-placeholder'></div>

        <div class='compressible-space'></div>

        <div class='headlines-section'>
            <!-- start of news category -->
            <?php foreach ($categories as $category): ?>
            <div class='news-category'>
                <h1><?php echo $category->name ?></h1>
                <?php foreach ($category->mainHeadlines as $mainHeadline): ?>
                <div class='headline-card'>
                    @include('headlinesForACategory')
                </div>
                <?php endforeach; ?>
            </div>
            <?php endforeach; ?>
            <!-- end of news category -->
        </div> 

        <div class="right-sidebar">
            <div class='weather-forecast-card'>
                @include('weatherForecastSection')
            </div>

            <div class='in-the-news'>
                @include('inTheNewsSection')
            </div>
        </div>
    </main>
</body>
</html>