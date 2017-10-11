<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}


function p($val = '',$type= false)
{
    echo '<pre>';
    if($type||$val==false||@strlen($val)==1)
    {
        var_dump($val);
    }else
    {
        print_r($val);
    }
}