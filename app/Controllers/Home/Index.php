<?php
namespace App\Controllers\Home;
use App\Controllers\Controller;

class Index extends Controller
{
    public function welcome() 
    {
        show('home/index/welcome', [
            'app_name' => APP_NAME,
            'author'   => 'Alex-黑白',
            'qq'       => '392999164',
            'version'  => APP_VERSION
        ]);
    }
}