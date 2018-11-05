<?php
// Author: Tien Quang Nguyen
// Date: Oct 30, 2018

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsCategory 
{
	function __construct()
	{
		$this->name = '';
		$this->mainHeadlines = [];
	}
}

class Headline 
{
	function __construct()
	{
		$this->title = '';
		$this->author = '';
		$this->postedTime = '';
		$this->childHeadlines = [];
		$this->imageURL = '';
	}
}

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

class LandingPageController extends Controller
{
    function index()
    {
        //-------- Populate the two news categories with content --------//
        $category1 = $this->getContentForCategory1();
        $category2 = $this->getContentForCategory2();
        
        $weatherForecastFor5Days = $this->getWeatherForecastFor5Days();
    
        $viewData = [
            'categories' => [$category1, $category2],
    
            'currentWeather' => [
                'location' => 'Calgary',
                'temperature' => '7',
                'description' => 'Partly cloudy',
                'imageURL' => 'https://lh3.googleusercontent.com/proxy/KOElqUH0RqiFITmz4nXxxhKOa4X3QivOknmm9SVbNaqHvx0zjEdkWReeAIh8WUvoN3BaBRtJI-yFRsQaqo39vdEO_ctpHCBvF6wsWd4rM4wEqxQBOSVzG48z27TKeV-7e6e20IhlXQUEDQ8T5SfJyoBFHA'
            ],
    
            'inTheNews' => [
                'Toronto Maple Leafs', 
                'Saudi Arabia', 
                'Edmonton Oilers',
                'Leicester City F.C.',
                'Lion Air',
                'Brazil',
                'Boston Red Sox',
                'Canadian Football League',
                'Jamal Khashoggi',
                'Los Angeles Dodgers',
            ],
    
            'weatherForecastFor5Days' => $weatherForecastFor5Days
        ];
        return view('welcome', $viewData);
    }

    function getContentForCategory1()
    {
        $category1 = new NewsCategory();
        $category1->name = 'Headlines';

        $mainHeadline = $this->getContentForHeadline1OfCategory1();
        array_push($category1->mainHeadlines, $mainHeadline);

        $mainHeadline = $this->getContentForHeadline2OfCategory1();
        array_push($category1->mainHeadlines, $mainHeadline);

        $mainHeadline = $this->getContentForHeadline3OfCategory1();
        array_push($category1->mainHeadlines, $mainHeadline);

        $mainHeadline = $this->getContentForHeadline4OfCategory1();
        array_push($category1->mainHeadlines, $mainHeadline);
        
        return $category1;
    }

    function getContentForHeadline1OfCategory1()
    {
        $mainHeadline = new Headline();
        $mainHeadline->title = '29 charges for man accused of gunning down 11 during baby naming ceremony at synagogue';
        $mainHeadline->author = 'CANOE';
        $mainHeadline->postedTime = 'today';
        $mainHeadline->imageURL = 'https://lh5.googleusercontent.com/proxy/BfEBYNUTG_ieJOv5BiorunDM88L67BhupBj9ZKWxvLzt9NraIqw7Zv38DFAKGW7DbbnhFOFG0JdcJw3kcE4Mr5dFEfHvGMRsbZLAmTenAHWEH4SUaVHB5OqVxGhmirldW7ZXPSFiFkyLBFSwd1Ok5B0B2yuj=pf-w200-h200';
        
        //Also attach child headlines to the main headline
        $childHeadline = new Headline();
        $childHeadline->title = '11 dead, 6 injured in shooting at Tree of Life synagogue in Pittsburgh';
        $childHeadline->author = 'Global News';
        $childHeadline->postedTime = 'yesterday';
        array_push($mainHeadline->childHeadlines, $childHeadline);
        
        $childHeadline = new Headline();
        $childHeadline->title = "'Brutally murdered simply because of their faith': 11 killed by gunman in Pittsburgh synagogue";
        $childHeadline->author = 'CBC News';
        $childHeadline->postedTime = 'yesterday';
        array_push($mainHeadline->childHeadlines, $childHeadline);
        
        $childHeadline = new Headline();
        $childHeadline->title = "Six injure, 'atleast 10 people' dead in 'wicked act of mass murder' shooting in Pittsburgh synagogue";
        $childHeadline->author = 'National Post';
        $childHeadline->postedTime = 'today';
        array_push($mainHeadline->childHeadlines, $childHeadline);
        
        $childHeadline = new Headline();
        $childHeadline->title = "Suspect in Pittsburgh synagogue killing of 11 charged with 29 counts";
        $childHeadline->author = 'The Globe and Mail';
        $childHeadline->postedTime = 'today';
        array_push($mainHeadline->childHeadlines, $childHeadline);

        return $mainHeadline;
    }

    function getContentForHeadline2OfCategory1()
    {
        $mainHeadline = new Headline();
        $mainHeadline->title = 'Midterms elections polls 2018: Who will win in Senate and House of Representatives?';
        $mainHeadline->author = 'Express.co.uk';
        $mainHeadline->postedTime = 'one hour ago';
        $mainHeadline->imageURL = 'https://lh4.googleusercontent.com/proxy/MfkpSPiNeCMM05YP0lyTrGZx3jUhaELQa1i6OsDT89glT25Su9QREHMOH4ZbnAeZNguKwMsA_lU_ONWTnO7nB5DVPOrqst_xAZ5H2T1NOyKHoSKLdzs=pf-w200-h200';
        
        return $mainHeadline;
    }

    function getContentForHeadline3OfCategory1()
    {
        $mainHeadline = new Headline();
        $mainHeadline->title = 'Toronto police increase security around places of worship in wake of Pittsburgh shooting';
        $mainHeadline->author = 'Toronto Star';
        $mainHeadline->postedTime = 'today';
        $mainHeadline->imageURL = 'https://lh3.googleusercontent.com/UYQ7I7T9KbhaDM7Ruh__Pdhuztys8kNx97NX_zYmwDcHpTbiC4xNJt6eMDh7AYB9crzn2mA63Qh2Y8Xkots=pf-w200-h200';

        $childHeadline = new Headline();
        $childHeadline->title = "'I'm just torn apart:' Pittsburgh's Jewish community in shock after 11 killed in synagogue shooting";
        $childHeadline->author = 'Global News';
        $childHeadline->postedTime = 'today';
    
        return $mainHeadline;
    }

    function getContentForHeadline4OfCategory1()
    {
        $mainHeadline = new Headline();
        $mainHeadline->title = 'Police hunt for driver after woman killed crossing Ont. street';
        $mainHeadline->author = 'CTV News';
        $mainHeadline->postedTime = 'one hour ago';
        $mainHeadline->imageURL = 'https://lh3.googleusercontent.com/proxy/3aD_rGhk9IZTdzL1UCKbf3nZ1wHV-JNDcUJA4gWwvmjo60AU8ZhSouQxOZ0rAcMotYuBJZ2cvbE0RybM6Nn8Mp-8rI3o2cPAR2Vkvjkd5ZHzAfphWNWecS1BwLCC3GxdFK01q7XiihgaJjtAlat99AXP-0W8SX_QkXd9Visj8rJusuT3mvnW=pf-w200-h200';
    
        return $mainHeadline;
    }

    function getContentForCategory2()
    {
        $category2 = new NewsCategory();
        $category2->name = 'For You';

        $mainHeadline = $this->getContentForHeadline1OfCategory2();
        array_push($category2->mainHeadlines, $mainHeadline);

        $mainHeadline = $this->getContentForHeadline2OfCategory2();
        array_push($category2->mainHeadlines, $mainHeadline);

        $mainHeadline = $this->getContentForHeadline3OfCategory2();
        array_push($category2->mainHeadlines, $mainHeadline);

        $mainHeadline = $this->getContentForHeadline4OfCategory2();
        array_push($category2->mainHeadlines, $mainHeadline);
        
        return $category2;
    }

    function getContentForHeadline1OfCategory2()
    {
        $mainHeadline = new Headline();
        $mainHeadline->title = 'Finance minister not happy with federal money for 2026 Calgary Olympic bid';
        $mainHeadline->author = 'Global News Edmonton';
        $mainHeadline->postedTime = 'today';
        $mainHeadline->imageURL = 'https://lh3.googleusercontent.com/9Pk1TK6VUfwtRwtrwrlrXp3KH3HOSMLZjgMjAY58IMCyRQRjMhCq-QL37XyUc9-gHmOoj6bFGcuavKaOqw=pf-w200-h200';

        $childHeadline = new Headline();
        $childHeadline->title = "'Braid: Nenshi ready to cancel Olympic bid over funding furor";
        $childHeadline->author = 'Calgary Herald';
        $childHeadline->postedTime = 'today';
        array_push($mainHeadline->childHeadlines, $childHeadline);
    
        return $mainHeadline;
    }

    function getContentForHeadline2OfCategory2()
    {
        $mainHeadline = new Headline();
        $mainHeadline->title = "Following the money: Alberta's active political action committees";
        $mainHeadline->author = 'Edmonton Journal';
        $mainHeadline->postedTime = 'today';
        $mainHeadline->imageURL = 'https://lh3.googleusercontent.com/FeKUCpEgk6Q_nJx3XflFBy77OEli2tzgA7JAh4vIivXMP7D1V_CrNTIc4Zb7mm4vxbFhJzVN9ntPACi6hMs=pf-w200-h200';
    
        return $mainHeadline;
    }

    function getContentForHeadline3OfCategory2()
    {
        $mainHeadline = new Headline();
        $mainHeadline->title = "Canadian Olympian Dave Duncan speaks about 2018 Winter Games arrest";
        $mainHeadline->author = 'CBC News';
        $mainHeadline->postedTime = 'today';
        $mainHeadline->imageURL = 'https://lh3.googleusercontent.com/HWAicicWUHUmRa2afmXw42GEmqMZmGUEa5sK_f65YhpjujbhfoR32gYVJAExeqyANxfB-UuotDO13aqry__X=pf-w200-h200';
    
        return $mainHeadline;
    }

    function getContentForHeadline4OfCategory2()
    {
        $mainHeadline = new Headline();
        $mainHeadline->title = "Grab the Visual Studio 2019 Preview now (while it lasts)";
        $mainHeadline->author = 'MSPoweruser';
        $mainHeadline->postedTime = 'today';
        $mainHeadline->imageURL = 'https://lh4.googleusercontent.com/proxy/o0Cz0QHMZiKd9g1dIsC6X69iMnwQ7x7Ij-cGDj7K7fL9fJR-bkQz8l37dW1DfTg5p7AXc4G_W7Mkz7Tck4qLIHb6XlhtpF_vhCpgYVlvhqg9vDXiYHarlmMfwFCg0mQA72oyzm3k=pf-w200-h200';

        return $mainHeadline;
    }

    function getWeatherForecastFor5Days()
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