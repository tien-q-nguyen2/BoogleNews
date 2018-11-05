<div class='logo-group'>
    <a href="#"><i class="fas fa-bars"></i></a>
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
    <div class='hello-user'>
        <?php if(Auth::check()): ?>
            <a href = '/profile'>Profile</a>
            &nbsp;&nbsp;/&nbsp;&nbsp;
            <a href = '/create_post'>Create Post</a>&nbsp;
        <?php else: ?>  
            <a href = '/login'>Login</a>
            &nbsp;&nbsp;/&nbsp;&nbsp;
            <a href = '/register'>Register</a>&nbsp;
        <?php endif; ?>
    </div>
    <a href="#"><i class="fas fa-shapes"></i></a>
    <a href="#"><i class="fas fa-bell"></i></a>
    <a href="/home" class='profile-hoverable'>
        <?php if(Auth::check()): ?>
            <img src="<?php echo request()->user()->profile->image ?>" alt="User">
        <?php else: ?>
            <img src="https://at-cdn-s01.audiotool.com/2013/05/11/users/guess_audiotool/avatar256x256-709d163bfa4a4ebdb25160d094551c33.jpg" alt="Question mark">
        <?php endif; ?>
    </a>
</div>