@extends('layout')

@section('landingPageContent')
<div class='headlines-section'>
    <?php foreach ($categories as $category): ?>
        @include('newsCategory')
    <?php endforeach; ?>
</div> 

<div class="right-sidebar">
    <div class='weather-forecast-card'>
        @include('weatherForecastSection')
    </div>
    <div class='in-the-news'>
        @include('inTheNewsSection')
    </div>
</div>
@endsection