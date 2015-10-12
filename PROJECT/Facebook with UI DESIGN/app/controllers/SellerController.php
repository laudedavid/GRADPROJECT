<?php

class SellerController extends BaseController {


	public function seller()
	{
		 $user = User::where('fbId','=',$_SESSION['userFbID'])->get();
		return View::make('homeSeller')->with('user',$user);
	}

	public function sellerStore()
	{
	
		$select = User::where('fbId','=',$_SESSION['userFbID'])->get();
		$seller = new Seller;
		foreach($select as $selects){
		$name = $selects['name'];
		$fbId = $selects['fbId'];
		$email = $selects['email'];
		$image = $selects['image'];
		}


		$seller->name = $name;
		$seller->fbId = $fbId;
		$seller->email = $email;
		//$seller->image = $image;


		$findUsers = Seller::all();
			$count=0;
			foreach($findUsers as $findUser)
				{if($findUser['fbId']==$_SESSION['userFbID'])
					{$count=+1;}
				}
				if($count==0)
				{$seller->save();}

	
		return Redirect::to('homeSeller');
		
	}
	public function listOfSellerCreationCakes()
	{
	     $findUsers = Seller::all();
	     $findUsers=$_SESSION['userFbID'];
            
        $cakes = Cake::where('userFbId', '=', $findUsers)->get(); 
        $user = User::where('fbId','=',$_SESSION['userFbID'])->get();
        return View::make('myaccountSeller', ['cakes'=>$cakes, 'user'=>$user]);
	}
	public function listOfSellerCakes()
    {
        $cakes = Cake::all(); 
        $user = User::where('fbId','=',$_SESSION['userFbID'])->get();
        return View::make('productsSeller', ['cakes'=>$cakes,'user'=>$user]);
    }
    
}
