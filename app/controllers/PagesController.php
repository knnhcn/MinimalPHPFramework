<?php

namespace App\Controllers;

use App\Core\App;


class PagesController
{

	public function home()
	{
		

		return view('index');


	}

	public function skills()
	{
		
		return view('skills');

		
	}


	public function contact()
	{
		
		return view('contact');

		
	}


}

