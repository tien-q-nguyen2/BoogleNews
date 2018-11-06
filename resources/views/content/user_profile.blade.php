<div class = 'about-author'>
    <h1>About the Author</h1>
    <div class='user-profile'>
        <div class='user-image'>
            <img src="<?php echo $user->profile->image ?>" alt="">
        </div>
        <div>
            <div class='profile-section'>
                <h2>{{ $user->name }}</h2>
                <h3><?php echo $user->email ?></h3>
            </div>
            <div class='profile-section'>
                <h3><b>Description: </b></h3>
                <h3>{{ $user->profile->description }}</h3>
            </div>
            <?php if ($user->profile->website !== NULL): ?>
                <div class='profile-section'>
                    <h3><b>Website: </b></h3>
                    <h3><?php echo $user->profile->website ?></h3>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>