<?php

class LoginFacebookController extends \BaseController {
	
	private $fb;

	public function __construct(FacebookHelper $fb){
		$this->fb = $fb;
	}
	public function login(){
			return Redirect::to($this->fb->getLoginUrl());
	}
	public function callback(){

		//dd(Input::all());
		if (!$this->fb->generateSessionFromRedirect()){
			return Redirect::to('/')->with('message','Error Facebook Connection!');
		}
		else{

			$user_fb = $this->fb->getGraph();
			$user = new User;

			$_SESSION['userFbID']=$user_fb->getProperty('id');
			
			


			$name = $user_fb->getProperty('name');
			$id = $_SESSION['userFbID'];
			$email = $user_fb->getProperty('email');
			//$location = $user_fb->getProperty('location');
			$image='http://graph.facebook.com/'.$user_fb->getProperty('id').'/picture?width=300';

			$user->name = $name;
			$user->fbId = $id;
			$user->email = $email;
			$user->image = $image;
			//$user->location = $location;

			$findUsers = User::all();
			$count=0;
			foreach($findUsers as $findUser)
				{if($findUser['fbId']==$_SESSION['userFbID'])
					{$count=+1;}
				}
				if($count==0)
				{$user->save();}

			
			Auth::login($user);
			return Redirect::to('/home');
		}
	}
	public function logout() {
    	
    	Auth::logout();
    	return Redirect::to('/');
	}
}