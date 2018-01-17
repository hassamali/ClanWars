<?php

namespace ClanWars\Http\Controllers;

use Illuminate\Http\Request;
use Steam;

class NewsController extends Controller
{
    public function dotaNews(){
    
    $news = Steam::news()->GetNewsForApp(570, 5, 500)->newsitems;
    return $news;
    }
}
