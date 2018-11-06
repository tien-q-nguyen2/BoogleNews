@extends('boogle_news_layout')

@section('main_page_content')
<div class='headlines-section'>
    <div class='news-category'>
        <h1>Content by {{ $authorName }}</h1>
        <?php if ($headlines->count() === 0): ?>
            <h5>&nbsp;&nbsp;No posts yet</h5>
        <?php endif; ?>
        <?php foreach ($headlines as $headline): ?>
            @include('content/headline_card')
        <?php endforeach; ?>
    </div>

    <?php if ($authorId !== 0): ?>
        @include('content/user_profile')
    <?php endif; ?>
</div>

@include('script/ajax_like_script')
@endsection