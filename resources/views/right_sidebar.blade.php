<div class="right-sidebar">
    <?php if(Auth::check()): ?>
        <div class='hello-message'>
                Hello, <?php echo request()->user()->name ?>
        </div>
    <?php endif; ?>
    <div class='weather-forecast-card'>
        @include('weather_forecast_section')
    </div>
    <div class='in-the-news'>
        @include('in_the_news_section')
    </div>
    <div class='current-user-profile'>

    </div>
    <div class='user-directory'>
        <h3>User Directory</h3>
        <ul>
            <li><a href="/">All users</a></li>
            <?php foreach($allUsers as $user): ?>
                <li>
                    <a href="/<?php echo $user->id ?>"><?php echo $user->name ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>