<div class='headline-card'>    
    <div class='main-headline'>
        <h2 class='headline-title'>
            <?php echo $mainHeadline->title ?>
        </h2>
        <div class='headline-subtitles'>
            <div class='author'>
                <?php echo $mainHeadline->author ?>
            </div>
            <div class='posted-time'>
                <?php echo $mainHeadline->postedTime ?>
            </div>
        </div>

        <ul class='child-headline-list'>
            <?php foreach ($mainHeadline->childHeadlines as $childHeadline): ?>
            <li>
                <div class='child-headline'>
                    <h3 class='headline-title'>
                        <?php echo $childHeadline->title ?>
                    </h3>
                    <div class='headline-subtitles'>
                        <div class='author'>
                            <?php echo $childHeadline->author ?>
                        </div>
                        <div class='bullet-point'>•</div>
                        <div class='posted-time'>
                            <?php echo $childHeadline->postedTime ?>
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <img src="<?php echo $mainHeadline->imageURL ?>" >
</div>