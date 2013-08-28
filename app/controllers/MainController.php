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

	public function contact(){
		$scripts = array('jquery.min.js','jquery.easing.1.3.js','jquery.eislideshow.js','home.js');
		$styles = array('demo.css','style-corousel.css','reset.css','style.css','home.css');

	
		return View::make('contacts')
			->with('scripts',$scripts)
			->with('styles',$styles);
	}

	public function email(){
		$data = array(
			'name' => Input::get('name'),
			'messages'=>Input::get('message'),
			'From' => Input::get('email'),
			'mobile' => Input::get('mobile')
			);
		Mail::send('emails.contact',$data,function($message){
			$message->from(Input::get('email'), Input::get('name'));
			$message->to('quickhits.team@gmail.com', 'Quick Hits');		
		});

		return Redirect::to('contact');
	}
}
