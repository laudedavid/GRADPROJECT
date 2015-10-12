<?php 

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequestException;
use Facebook\FacebookRequest;
use Facebook\GraphUser;

class FacebookHelper
{

	private $helper;
	private $session;

	public function __construct(){
		FacebookSession::setDefaultApplication(Config::get('facebook.app_id'), Config::get('facebook.app_secret'));
	
		$this->helper = new FacebookRedirectLoginHelper(url('login/fb/callback'));

	}
	public function getLoginUrl(){
		return $this->helper->getLoginUrl(Config::get('facebook.app_scope'));
	}
	
	public function generateSessionFromRedirect(){
		$this->session = null;
		try {
  			$this->session = $this->helper->getSessionFromRedirect();
		} 
		catch(FacebookRequestException $ex) {
    		//die(" Error : " . $ex->getMessage());
		} 
		catch(\Exception $ex) {
    		//die(" Error : " . $ex->getMessage());
		}
		return $this->session;
	}
	public function getGraph(){
		$request = new FacebookRequest($this->session, 'GET', '/me');
		$response = $request->execute();
		return $response->getGraphObject(GraphUser::className());

        //echo "<img src='$image'/>";
        //echo "<br>";
       	//echo "Hello $name <br>";
        //echo "Email: $email <br>";
        //echo "Your Facebook ID: $id <br>";
	}

}