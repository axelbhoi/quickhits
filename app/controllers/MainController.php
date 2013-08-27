<?php

class MainController extends BaseController {

	public function home()
	{
		$scripts = array('jquery.min.js','jquery.easing.1.3.js','jquery.eislideshow.js','home.js');
		$styles = array('demo.css','style-corousel.css','reset.css','style.css','home.css');

		return View::make('home')
				->with('scripts',$scripts)
				->with('styles',$styles);
	}

}