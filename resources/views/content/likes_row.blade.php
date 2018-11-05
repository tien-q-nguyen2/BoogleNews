<div class='likes-row'>
    <div>
        <?php if ($headline->likes->count()): ?>
            <i id='heart-<?php echo $headline->id ?>' class="fas fa-heart"></i>
        <?php else: ?>
            <i id='heart-<?php echo $headline->id ?>' class="far fa-heart"></i>
        <?php endif; ?>
        <span id='likes-<?php echo $headline->id ?>'>
            <?php echo $headline->likes()->count() ?>
        </span>
    </div>
    <?php if(Auth::check() and !(request()->user()->headlines->contains($headline)) ): ?>
    
        <?php if ($headline->likes->contains(request()->user())):?>
            <button id='unlike-button-<?php echo $headline->id ?>' class='like-unlike'>
                <i class="fas fa-heart"></i>&nbsp;Liked
            </button>
            <button id='like-button-<?php echo $headline->id ?>' class='like-unlike display-none'>
                <i class="far fa-heart"></i>&nbsp;Like ?
            </button>
        <?php else: ?>
            <button id='unlike-button-<?php echo $headline->id ?>' class='like-unlike display-none'>
                <i class="fas fa-heart"></i>&nbsp;Liked
            </button>
            <button id='like-button-<?php echo $headline->id ?>' class='like-unlike'>
                <i class="far fa-heart"></i>&nbsp;Like ?
            </button>
        <?php endif; ?>

    <?php endif; ?>
</div>