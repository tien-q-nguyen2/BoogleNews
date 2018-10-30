<h4>In the news</h4>
<hr>
<div class='trending-topics'>
    <?php foreach ($inTheNews as $topic): ?>
    <div class='trending-topic'>
        <a href="#">
            <?php echo $topic ?>
        </a>
    </div>
    <?php endforeach; ?>
</div>