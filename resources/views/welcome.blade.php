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

        <div class='compressible-space'></div>

        <div class='headlines-section'>
            <!-- start of news category -->
            <?php foreach ($categories as $category): ?>
            <div class='news-category'>
                <h1><?php echo $category->name ?></h1>
                <?php foreach ($category->mainHeadlines as $mainHeadline): ?>
                <div class='headline-card'>
                    <div class='main-headline'>
                        <h2 class='headline-title'>
                            <?php echo $mainHeadline->title ?>
                        </h2>
                        <div class='headline-subtitles'>
                            <div class='author'>
                                <?php echo $mainHeadline->author ?>
                            </div>
                            <div class='postedTime'>
                                <?php echo $mainHeadline->postedTime ?>
                            </div>
                        </div>

                        <ul class='child-headline-list'>
                            <?php foreach ($mainHeadline->childHeadlines as $childHeadline): ?>
                            <li>
                                <div class='child-headline'>
                                    <h3 class='headline-title'>
                                        <?php echo $childHeadline->title ?>
                                    </h3>
                                    <div class='headline-subtitles'>
                                        <div class='author'>
                                            <?php echo $childHeadline->author ?>
                                        </div>
                                        <div class='bullet-point'>•</div>
                                        <div class='postedTime'>
                                            <?php echo $childHeadline->postedTime ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <img src="<?php echo $mainHeadline->imageURL ?>" >
                </div>
                <?php endforeach; ?>
            </div>
            <?php endforeach; ?>
            <!-- end of news category -->
        </div> 

        <div class="right-sidebar">
            <div class='weather-forecast-card'>
                <h4><?php echo $currentWeather['location'] ?></h4>
                <div>  
                    <hr>
                </div>
                <div class='current-weather'>
                    <div class='current-weather-left'>
                        <p><?php echo $currentWeather['description'] ?></p>
                        <p>
                        <span class='current-temperature'>
                            <?php echo $currentWeather['temperature'] ?>°
                        </span>C
                        </p>
                    </div>
                    <div class='current-weather-right'>
                        <img src="<?php echo $currentWeather['imageURL'] ?>" alt="">
                    </div>
                </div>

                <div class='weather-forecast-5days'>
                    <?php foreach($weatherForecastFor5Days as $weatherForecastForADay): ?>
                        <div class='weather-forecast-day'>
                            <p><?php echo $weatherForecastForADay->when ?></p>
                            <img src="<?php echo $weatherForecastForADay->imageURL ?>">
                            <p class='max-temperature'>
                                <?php echo $weatherForecastForADay->maxTemperature ?>°C
                            </p>
                            <p class='min-temperature'>
                                <?php echo $weatherForecastForADay->minTemperature ?>°C
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div>  
                    <hr>
                </div>
                <div class='weather-card-footer'><b>C</b> | F | K</div>

            </div>

            <div class='in-the-news'>
                <h4>In the news</h4>
                <hr>
                <div class='trending-topics'>
                    <?php foreach ($inTheNews as $topic): ?>
                    <div class='trending-topic'>
                        <a href="#">
                            <?php echo $topic ?>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>