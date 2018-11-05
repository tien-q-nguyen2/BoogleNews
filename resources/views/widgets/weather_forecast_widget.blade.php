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
        @include('widgets/weather_forecast_for_a_day')
    <?php endforeach; ?>
</div>
<div>  
    <hr>
</div>
<div class='weather-card-footer'><b>C</b> | F | K</div>