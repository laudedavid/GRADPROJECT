
<!DOCTYPE HTML>
<html>
    <head>
        <title>CAKEOLOGY</title>
        <link href="bootstrap/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="bootstrap/js/jquery.min.js"></script>
         <!-- Custom Theme files -->
        <link href="bootstrap/css/style.css" rel='stylesheet' type='text/css' />
         <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        </script>
        
    </head>
    <body>
    {{ HTML::script('bootstrap/js/jquery.min.js') }}
    {{ HTML::style('bootstrap/css/style.css') }}
    {{ HTML::script('bootstrap/css/bootstrap.css') }}
    <!-- container -->
        <!-- top-header -->
        <div class="top-header">
            <div class="container">
                <div class="top-header-left">
                    <ul>
                        <li>{{HTML::link('/myaccountSeller','My Account', array('style' => 'color:white, hover: pink'))}}</li>
                        <li>{{HTML::link('/logoutUser','Logout', array('style' => 'color:white, hover: pink'))}}</li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
                <div class="top-header-center">
                    <p><span class="cart"> </span>SELLER'S PAGE</p>
                </div>
                <div class="top-header-right">
                    <ul>
                    
                        <li style="margin-top:1px; margin-left:135px; color:white"><h4>&nbsp;&nbsp;Welcome, &nbsp;</h4></li>
                        <li style="margin-top:1px; color:white"><h4><?php $select= Seller::orderBy('created_at','desc')->first();

                         $name=$select['name'];
                         echo $name;  ?></h4></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- /top-header -->
        <!-- main-menu -->
        <div class="main-menu">
            <div class="container">
            <div class="head-nav">
                <span class="menu"> </span>
                <ul>
                    <li>{{HTML::link('/homeSeller','Home', array('style' =>                     'color:white, hover: pink'))}}</li>
                    <li>{{HTML::link('/productsSeller','Products', array('style' => 'color:white, hover: pink'))}}</li>
                    <li>{{HTML::link('/flavours','Flavours', array('style' => 'color:white, hover: pink'))}}</li>
                    <li class="active">{{HTML::link('/addCake','Add a Cake', array('style' => 'color:white, hover: pink'))}}</li>
                    <div class="clearfix"> </div>
                </ul>
            </div>  
                <!-- script-for-nav -->
                    <script>
                        $( "span.menu" ).click(function() {
                          $( ".head-nav ul" ).slideToggle(300, function() {
                            // Animation complete.
                          });
                        });
                    </script>
                <!-- script-for-nav -->

                <!-- logo -->
                <div class="logo">
                    <a href="index.html"><img src="bootstrap/images/logo1.png" title="Sweetcake" /></a>
                </div>
                <!-- logo -->
            </div>
        </div>
        <!-- /main-menu -->
        <!-- banner -->
        <div class="container">
                <div class="img-slider">
                        <!----start-slider-script---->
                    <script src="js/responsiveslides.min.js"></script>
                     <script>
                        // You can also use "$(window).load(function() {"
                        $(function () {
                          // Slideshow 4
                          $("#slider4").responsiveSlides({
                            auto: true,
                            pager: true,
                            nav: true,
                            speed: 500,
                            namespace: "callbacks",
                            before: function () {
                              $('.events').append("<li>before event fired.</li>");
                            },
                            after: function () {
                              $('.events').append("<li>after event fired.</li>");
                            }
                          });
                    
                        });
                      </script>


<h1>Edit Cake!</h1>

<!-- if there are creation errors, they will show here -->


{{ Form::open(array('url' => 'updateCake','files'=>true)) }}

    <div class="form-group">
         <input id="id" name="id" value="{{$editCake['id']}}" type="text" class="form-control" readonly>
                <label for="id">ID</label>
    </div>
    <div class="form-group">
        <input id="name" name="name" value="{{$editCake['name']}}" type="text" class="form-control" required>
                <label for="name">Name</label>
    </div>

    <div class="form-group">
        <input id="price" name="price" value="{{$editCake['price']}}" type="text" class="form-control" required>
                <label for="price">Price</label>
    </div>
    <div class="form-group">
        {{ Form::label('category', 'Category') }}
        {{ Form::select('category', array('0' => 'Select a category', 'Birthday' => 'Birthday', 'Wedding' => 'Wedding'), Input::old('category'), array('class' => 'form-control')) }}
    </div>
                   
    </div>
    <div class="form-group">
        <input id="description" name="description"  value="{{$editCake['description']}}" type="text" class="form-control" required>
                <label for="description">Address</label>
    </div>
    <div class="form-group">
        {{ Form::label('image', 'IMAGE', array('class' => 'col-sm-2 control-label')) }}
        {{ Form::file('image') }}
    </div>


    {{ Form::submit('Update Cake!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
</li>
                          </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
