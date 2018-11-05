<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory;

use App\User;
use App\Models\Profile;
use App\Models\Headline;

class SingleDayWeatherForecast 
{
	function __construct()
	{
		$this->when = '';
		$this->maxTemperature = '';
		$this->minTemperature = '';
		$this->imageURL = '';
	}
}

class MainContentController extends Controller
{
    function index($id = 0)
    {
        $primaryUser = '';
        if ($id === 0) {
            $contentAuthorName = 'All Users';
            $allHeadlines = $this->getAllHeadlines();
            $headlinesToDisplay = $allHeadlines;
        } else {
            $primaryUser = $this->getPrimaryUser($id);
            $contentAuthorName = $primaryUser->name;
            $primaryUserHeadlines = $this->getHeadlinesOfUser($id);
            $headlinesToDisplay = $primaryUserHeadlines;
        }
        $allUsers = $this->getAllUsers();

        $weatherForecastFor5Days = $this->getFakeWeatherForecast5Days();
        $faker = Factory::create();
        $inTheNewsTopics = [];
        for ($i = 0; $i < 10; $i++) {
            array_push($inTheNewsTopics, $faker->name);
        }
    
        $viewData = [
            'authorName' => $contentAuthorName,
            'authorId' => $id,
            'user' => $primaryUser,
            'allUsers' => $allUsers,
            'headlines' => $headlinesToDisplay,
            'currentWeather' => [
                'location' => 'Calgary',
                'temperature' => '7',
                'description' => 'Partly cloudy',
                'imageURL' => 'https://lh3.googleusercontent.com/proxy/KOElqUH0RqiFITmz4nXxxhKOa4X3QivOknmm9SVbNaqHvx0zjEdkWReeAIh8WUvoN3BaBRtJI-yFRsQaqo39vdEO_ctpHCBvF6wsWd4rM4wEqxQBOSVzG48z27TKeV-7e6e20IhlXQUEDQ8T5SfJyoBFHA'
            ],
            'weatherForecastFor5Days' => $weatherForecastFor5Days,
            'inTheNews' => $inTheNewsTopics,
        ];
        return view('welcome', $viewData);
    }

    public function getPrimaryUser($id)
    {
      $primaryUser = User::findOrFail($id);
      return $primaryUser;
    }

    public function getHeadlinesOfUser($id)
    {
        return Headline::where('user_id', $id)->orderBy('id', 'desc')->get();
    }
    
    public function getAllUsers()
    {
        return User::all();
    }

    public function getAllHeadlines()
    {
        return Headline::orderBy('id', 'desc')->get();
    }

    public function getFakeWeatherForecast5Days()
    {
        $weatherToday = new SingleDayWeatherForecast();
        $weatherToday->when = 'Today';
        $weatherToday->maxTemperature = '11';
        $weatherToday->minTemperature = '1';
        $weatherToday->imageURL = 'https://lh3.googleusercontent.com/proxy/KOElqUH0RqiFITmz4nXxxhKOa4X3QivOknmm9SVbNaqHvx0zjEdkWReeAIh8WUvoN3BaBRtJI-yFRsQaqo39vdEO_ctpHCBvF6wsWd4rM4wEqxQBOSVzG48z27TKeV-7e6e20IhlXQUEDQ8T5SfJyoBFHA';
    
        $weatherDay2 = new SingleDayWeatherForecast();
        $weatherDay2->when = 'Tue.';
        $weatherDay2->maxTemperature = '10';
        $weatherDay2->minTemperature = '-1';
        $weatherDay2->imageURL = 'https://lh3.googleusercontent.com/proxy/KOElqUH0RqiFITmz4nXxxhKOa4X3QivOknmm9SVbNaqHvx0zjEdkWReeAIh8WUvoN3BaBRtJI-yFRsQaqo39vdEO_ctpHCBvF6wsWd4rM4wEqxQBOSVzG48z27TKeV-7e6e20IhlXQUEDQ8T5SfJyoBFHA';
        
        $weatherDay3 = new SingleDayWeatherForecast();
        $weatherDay3->when = 'Wed.';
        $weatherDay3->maxTemperature = '9';
        $weatherDay3->minTemperature = '-2';
        $weatherDay3->imageURL = 'https://lh5.googleusercontent.com/proxy/4WTSIIDw66Cox_tvxEgYTF3eYr94It7mAsib9UhQLsAJgyawdf5zaburHeJU4D27GlyAYpOrqEZqvYJsd_ibQdvKz2oWuZi5VNUuS4DVgr-JH9pVr3aO62W5eck94-W6yEARBUyVikqYgzwk';
        
        $weatherDay4 = new SingleDayWeatherForecast();
        $weatherDay4->when = 'Thu.';
        $weatherDay4->maxTemperature = '4';
        $weatherDay4->minTemperature = '-2';
        $weatherDay4->imageURL = 'https://lh3.googleusercontent.com/proxy/ssGF_4ZADor_bABtyHQlMTM5juYwYH-X_14tkhEM33kgkK2Il3tiPcaWFGEVkXik7Vspa0yoiAQN-pB41hiEMcb1PClJ-duwo8mRwBH27AZ6ug8qKCVxtFH2jpinT_tHH2xREeno1oOLFGOP7vkkoAExsyeUTMw';
        
        $weatherDay5 = new SingleDayWeatherForecast();
        $weatherDay5->when = 'Fri.';
        $weatherDay5->maxTemperature = '3';
        $weatherDay5->minTemperature = '-3';
        $weatherDay5->imageURL = 'https://lh6.googleusercontent.com/proxy/9wZNtnf-fjbKzUeYWGGmAdYD4LPXQTxcjSLVjFeKoiThblMCIEa1vnqZ8i5kS8OjMgvgMoFkgw95gF7XAYexEzHZx85cbQqUfqQYHqOFyCIO_uR-uDnpd3ZgA2wXWUyQUh9NYgZbdNyRRCJi6cEWSIeNajE7J-5Mtak';
    
        return [$weatherToday, $weatherDay2, $weatherDay3, $weatherDay4, $weatherDay5];
    }

}