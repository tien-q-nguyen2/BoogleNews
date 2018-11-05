<div class='weather-forecast-day'>
    <p>
        <?php echo $weatherForecastForADay->when ?>
    </p>
    <img src="<?php echo $weatherForecastForADay->imageURL ?>">
    <p class='max-temperature'>
        <?php echo $weatherForecastForADay->maxTemperature ?>°C
    </p>
    <p class='min-temperature'>
        <?php echo $weatherForecastForADay->minTemperature ?>°C
    </p>
</div>