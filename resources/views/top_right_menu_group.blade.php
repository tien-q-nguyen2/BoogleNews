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
<a href="/home"><i class="fas fa-shapes"></i></a>
<a href="/home"><i class="fas fa-bell"></i></a>
<a href="/home" class='profile-hoverable'>
    <?php if(Auth::check()): ?>
        <img src="<?php echo request()->user()->profile->image ?>" alt="User">
    <?php else: ?>
        <img src="/img/anonymous_profile.jpg" alt="Anonymous profile image">
    <?php endif; ?>
</a>