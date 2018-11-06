<div class="right-sidebar">

    <?php if(Auth::check()): ?>
        <div class='hello-message'>
                Hello, {{ request()->user()->name }}
        </div>
    <?php endif; ?>

    <div class='weather-forecast-card'>
        @include('widgets/weather_forecast_widget')
    </div>
    <div class='in-the-news'>
        @include('widgets/in_the_news_widget')
    </div>

    <div class='user-directory'>
        <h3>User Directory</h3>
        <ul>
            <li><a href="/">All users</a></li>
            <?php foreach($allUsers as $user): ?>
                <li>
                    <a href="/<?php echo $user->id ?>">{{ $user->name }}</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    
</div>