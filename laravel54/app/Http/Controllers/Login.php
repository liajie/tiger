<?php


namespace App\Http\Controllers;


class Login extends Controller
{
    public function disanfang()
    {
    	
        include '/disanfang/openqq.class.php';
		$open = new openqq();
		$code = $_GET['code'];
		echo "<pre>";
		print_r( $open->me($code) );
    }
}
