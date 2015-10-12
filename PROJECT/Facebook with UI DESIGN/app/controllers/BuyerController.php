<?php

class BuyerController extends BaseController {


	public function buyer()
	{	
			$_SESSION['cakeModelID']=NULL;
		 $user = User::where('fbId','=',$_SESSION['userFbID'])->get();
		return View::make('homeBuyer')->with('user',$user);
	}

	public function buyerStore()
	{
		//$select = User::orderBy('created_at', 'desc')->first();
		$select = User::where('fbId','=',$_SESSION['userFbID'])->get();
		$buyer = new Buyer;
		foreach($select as $selects){
		$name = $selects['name'];
		$fbId = $selects['fbId'];
		$email = $selects['email'];
		$image = $selects['image'];
		}
		
	
		$buyer->name = $name;
		$buyer->fbId = $fbId;
		$buyer->email = $email;
		$buyer->image = $image;
		

		$findUsers = Buyer::all();
			$count=0;
			foreach($findUsers as $findUser)
				{if($findUser['fbId']==$_SESSION['userFbID'])
					{$count=+1;}
				}
				if($count==0)
				{$buyer->save();}

			
	

		
		return Redirect::to('homeBuyer');
		
	}
	public function listOfBuyerOrderCakes()
    {
        //  $buyer = Buyer::orderBy('created_at', 'desc')->first();
        //  $name = $buyer->name; 

        // $order = Order::where('buyersName', '=', $name)->get(); 
        // $cakes = Cake::all();
        //$order = DB::SELECT(DB::RAW("SELECT * FROM order"));
        $orders = Order::all();
        // var_dump($order);
        return View::make('myaccountBuyer', ['orders'=>$orders]);
    }
    public function listOfBuyerCakes()
    {
        $cakes = Cake::all(); 
        $user = User::where('fbId','=',$_SESSION['userFbID'])->get();
        return View::make('productsBuyer', ['cakes'=>$cakes,'user'=>$user]);
    }
    public function listOfSellers(){
    	$seller = Seller::all();
    	$user = User::where('fbId','=',$_SESSION['userFbID'])->get();
    	return View::make('singlepageSeller',['seller'=>$seller,'user'=>$user]);
    }
}
