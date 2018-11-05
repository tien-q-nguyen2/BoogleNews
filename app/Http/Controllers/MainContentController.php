<?php
// Author: Tien Quang Nguyen
// Date: Nov 5, 2018

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Models\Profile;
use App\Models\Headline;

class SingleDayWeatherForecast 
{
	function __construct()
	{
        $this->when = '';
        $this->minTemperature = '';
		$this->maxTemperature = '';
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

        $weatherForecastFor5Days = $this->getFakeWeatherForecastFor5Days();
    
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
                'imageURL' => '/img/partly_cloudy.png'
            ],
            'weatherForecastFor5Days' => $weatherForecastFor5Days,
            'inTheNews' => ['Marcelo Cartwright', 'Andreanne Skiles III', 'Mrs. Della Bayer Sr.',
                'Prof. Milan Breitenberg V', 'Adan Weimann', 'Alta Koss', 'Jamal Barrows',
                'Dashawn Durgan', 'Prof. Mina Metz', 'Asia Ziemann']
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

    public function getFakeWeatherForecastFor5Days()
    {
        $weatherDay1 = $this->createFakeWeatherForecast('Today', '1', '11', '/img/partly_cloudy.png');
        $weatherDay2 = $this->createFakeWeatherForecast('Tue.', '-1', '10', '/img/partly_cloudy.png');
        $weatherDay3 = $this->createFakeWeatherForecast('Wed.', '-2', '9', '/img/cloudy.png');
        $weatherDay4 = $this->createFakeWeatherForecast('Thu.', '-2', '4', '/img/cloudy_sun.png');
        $weatherDay5 = $this->createFakeWeatherForecast('Fri.', '-3', '3', '/img/snowy_rain.png');
    
        return [$weatherDay1, $weatherDay2, $weatherDay3, $weatherDay4, $weatherDay5];
    }

    public function createFakeWeatherForecast($when, $minTemp, $maxTemp, $image) 
    {
        $fakeWeather = new SingleDayWeatherForecast();
        $fakeWeather->when = $when;
        $fakeWeather->minTemperature = $minTemp;
        $fakeWeather->maxTemperature = $maxTemp;
        $fakeWeather->imageURL = $image;

        return $fakeWeather;
    }

}