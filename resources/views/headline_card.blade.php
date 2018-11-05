<div class='headline-card'>    
    <div class='main-headline'>
        <h2 class='headline-title'>
            <?php echo $headline->title ?>
        </h2>
        <div class='headline-subtitles'>
            <div class='author'>
                <a href="/<?php echo $headline->user->id ?>">
                    <?php echo $headline->user->name ?>
                </a>
            </div>
            <div class='posted-time'>
                <?php echo $headline->created_at->format('M j') ?>
            </div>
        </div>
        <div class='likes-row'>
            <div>
                <?php if ($headline->likes->count()): ?>
                    <i class="fas fa-heart"></i>&nbsp;Liked by 
                <?php else: ?>
                    <i class="far fa-heart"></i>&nbsp;Liked by 
                <?php endif; ?>
                <span id='likes-<?php echo $headline->id ?>'><?php echo $headline->likes()->count() ?></span>
            </div>
            <div id='like-or-unlike-<?php echo $headline->id ?>'>
                <?php if(Auth::check() and !(request()->user()->headlines->contains($headline)) ): ?>
                    <?php if ($headline->likes->contains(request()->user())):?>
                        <a id='unlike-button-<?php echo $headline->id ?>' 
                            class='like-unlike' href='/unlike/<?php echo $headline->id ?>'>
                            <i class="far fa-heart"></i>&nbsp;Unlike
                        </a>
                    <?php else: ?>
                        <a id='like-button-<?php echo $headline->id ?>' 
                            class='like-unlike' href="/like/<?php echo $headline->id ?>">
                            <i class="fas fa-heart"></i>&nbsp;Like
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <img src="<?php echo $headline->image ?>" >
</div>