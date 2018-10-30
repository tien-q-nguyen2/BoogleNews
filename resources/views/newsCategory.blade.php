<div class='news-category'>
    <h1><?php echo $category->name ?></h1>
    <?php foreach ($category->mainHeadlines as $mainHeadline): ?>
        @include('headlinesOfACategory')
    <?php endforeach; ?>
</div>