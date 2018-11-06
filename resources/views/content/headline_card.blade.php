<div class='headline-card'>    
    <div class='main-headline'>
        <h2 class='headline-title'>
            {{ $headline->title }}
        </h2>
        <div class='headline-subtitles'>
            <div class='author'>
                <a href="/<?php echo $headline->user->id ?>">
                    {{ $headline->user->name }}
                </a>
            </div>
            <div class='posted-time'>
                <?php echo $headline->created_at->format('M j') ?>
            </div>
        </div>
        @include('content/likes_row')
    </div>
    <img src="<?php echo $headline->image ?>" >
</div>