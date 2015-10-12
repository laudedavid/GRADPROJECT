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

    <style>
     a{
        color:white;
     }
     a.hover{
        color:pink;
     }
    </style>
    <body>
    <!-- html -->
    {{ HTML::script('bootstrap/js/jquery.min.js') }}
    {{ HTML::style('bootstrap/css/style.css') }}
    {{ HTML::style('bootstrap/css/bootstrap.css') }}

    <!-- cakemaker -->
    {{ HTML::style('css/style.css') }}
    {{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}
    {{ HTML::script('bootstrap/js/jquery.min.js') }}
    {{ HTML::script('http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js') }}
    {{ HTML::script('scripts/dragndrop.js') }}
    {{ HTML::script('scripts/generateModel.js') }}
    {{ HTML::script('build/three.min.js') }}
    {{ HTML::script('jsModel/libs/stats.min.js') }}
    {{ HTML::script('jsModel/Detector.js') }}


 <!--  -->
 {{ HTML::script('hidingNav/hidingnav.js') }}
  {{ HTML::style('hidingNav/hidingnav.css') }}


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
                    <p><span class="cart"> </span>BUYER'S PAGE</p>
                </div>
                <div class="top-header-right">
                    <ul>
                    
                        <li style="margin-top:1px; margin-left:135px; color:white"><h4>&nbsp;&nbsp;Welcome, &nbsp;</h4></li>
                        <li style="margin-top:1px; color:white">
                            <h4>
                                @foreach($user as $users)
                                     {{$name=$users['name'];}}
                                @endforeach
                            </h4></li>
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
                    <li class="active"><a href="index.html">Home</a></li>
                    <li>{{HTML::link('/productsSeller','Products', array('style' => 'color:white, hover: pink'))}}</li>
                    <li>{{HTML::link('/flavours','Flavours', array('style' => 'color:white, hover: pink'))}}</li>
                    <li>{{HTML::link('/addCake','Add a Cake', array('style' => 'color:white, hover: pink'))}}</li>
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
                    <img src="bootstrap/images/logo1.png" title="Sweetcake" />
                </div>
                <!-- logo -->
            </div>
        </div>
        <!-- /main-menu -->
        <!-- banner -->
     <input required  type = "text" id ="layer1" name = "layer1" hidden=true value="{{$findCaketogenerateModel->layer1}}" />
    <input required  type = "text" id ="layer2" name = "layer2" hidden=true value="{{$findCaketogenerateModel->layer2}}" />
    <input required  type = "text" id ="layer3" name = "layer3" hidden=true value="{{$findCaketogenerateModel->layer3}}" />  
     

    


<!-- hiding shit -->
<nav class="navbar navbar-fixed-left navbar-minimal animate" role="navigation" style="width:90px; position:fixed;">
        <div class="navbar-toggler">
            <span class="menu-icon"></span>
        </div>
        <ul class="navbar-menu animate">
            <li>
                <a href="#about-us" class="animate">
                   Layers
                  
<!-- <span class="desc animate"> Layers  -->
 <select name="ChooseLayer" id="ChooseLayer" style="height:50px; background-color:gray;" class="desc animate"  onchange="report(this.value)">
  <option value="BaseLayer">BaseLayer</option>
  <option value="Toppers">Toppers</option>
  <option value="Borders">Borders</option>
  </select> 
<!-- </span> -->
                </a>
            </li>
            <li>
                <a href="#blog" class="animate">
                    <span class="desc animate"> What We Say </span>
                    <span class="glyphicon glyphicon-info-sign"></span>
                </a>
            </li>
            <li>
                <a href="#contact-us" class="animate">
                    <span class="desc animate"> How To Reach Us </span>
                    <span class="glyphicon glyphicon-comment"></span>
                </a>
            </li>
        </ul>
    </nav>


<!-- modelmaker -->
<script>

         

            var container, stats;

            var camera, scene, renderer;

            var group;

            var targetRotation = 0;
            var targetRotationOnMouseDown = 0;

            var mouseX = 0;
            var mouseXOnMouseDown = 0;

            var windowHalfX = window.innerWidth / 2;
            var windowHalfY = window.innerHeight / 2;

            init();
            animate();

            function init() {

                container = document.createElement( 'div' );
                document.body.appendChild( container );

                var info = document.createElement( 'div' );
                info.style.position = 'absolute';
                info.style.top = '10px';
                info.style.width = '100%';
                info.style.textAlign = 'center';
              
                container.appendChild( info );

                scene = new THREE.Scene();

                camera = new THREE.PerspectiveCamera( 30, window.innerWidth / window.innerHeight, 20, 1000 );
                camera.position.set( 0, 150, 800 );
                scene.add( camera );

                var light = new THREE.PointLight( 0xffffff, 0.8 );
                camera.add( light );

                group = new THREE.Group();
                group.position.y = 0;
                group.position.x = 0;


                scene.add( group );



                //var material = new THREE.MeshPhongMaterial( {  color: 0xffffff, transparent: true, opacity: 0.5 } );
                //var 2material = new THREE.MeshPhongMaterial( { map: THREE.ImageUtils.loadTexture('textures/rope.jpg') } );


                function addShape( shape, extrudeSettings, color, x, y, z, rx, ry, rz, s ) {

                    //var points = shape.createPointsGeometry();
                    //var spacedPoints = shape.createSpacedPointsGeometry( 50 );

                     var texture = THREE.ImageUtils.loadTexture('textures/top3.png');
                    texture.wrapS = texture.wrapT = THREE.RepeatWrapping; 
                    texture.repeat.set( 0.007, 0.007 );


                    // 3d shape

                    
                    var geometry = new THREE.ExtrudeGeometry( shape, extrudeSettings );

                    var mesh = new THREE.Mesh( geometry, new THREE.MeshPhongMaterial( {  side: THREE.DoubleSide, color: color, map: texture, ambient: color } ) );
                    mesh.position.set( x, y, z  );
                    mesh.rotation.set( rx, ry, rz );
                    mesh.scale.set( s, s, s );
                    group.add( mesh );



                        // flat shape with texture
                    // note: default UVs generated by ShapeGemoetry are simply the x- and y-coordinates of the vertices
                    //var texture = THREE.ImageUtils.loadTexture( "textures/top2.jpg" );
                   /* var geometry = new THREE.ShapeGeometry( shape );

                    var mesh = new THREE.Mesh( geometry, new THREE.MeshPhongMaterial( {  side: THREE.DoubleSide, map: texture,transparent: true } ) );
                    mesh.position.set( x, y, z - 175 );
                    mesh.rotation.set( rx, ry, rz );
                    mesh.scale.set( s, s, s );
                    group.add( mesh );*/

                    //toper
                                                    // l    h   w
               /* var geometry = new THREE.CubeGeometry( 40, 40, 1);
                var material = new THREE.MeshPhongMaterial( { map: THREE.ImageUtils.loadTexture(
                   'textures/trypic.png'),transparent: true } );
                mesh = new THREE.Mesh(geometry, material );
                mesh.position.x = -75;
                mesh.position.y = 75;
                mesh.position.z = -75;
                group.add( mesh );*/



                }


                // Heart
/*
                heartShape.moveTo( x + 25, y + 25 );
                heartShape.bezierCurveTo( x + 25, y + 25, x + 20, y, x, y );
                heartShape.bezierCurveTo( x - 30, y, x - 30, y + 35,x - 30,y + 35 );
                heartShape.bezierCurveTo( x - 30, y + 55, x - 10, y + 77, x + 25, y + 95 );
                heartShape.bezierCurveTo( x + 60, y + 77, x + 80, y + 55, x + 80, y + 35 );
                heartShape.bezierCurveTo( x + 80, y + 35, x + 80, y, x + 50, y );
                heartShape.bezierCurveTo( x + 35, y, x + 25, y + 25, x + 25, y + 25 );*/

                var x = 0, y = 0;
                //heart
                var heartShape = new THREE.Shape(); // From http://blog.burlock.org/html5/130-paths
                heartShape.moveTo( x + 25, y + 25 );
                heartShape.bezierCurveTo( x + 25, y + 25, x + 20, y, x, y );
                heartShape.bezierCurveTo( x - 30, y, x - 30, y + 35,x - 30,y + 35 );
                heartShape.bezierCurveTo( x - 30, y + 55, x - 10, y + 77, x + 25, y + 95 );
                heartShape.bezierCurveTo( x + 60, y + 77, x + 80, y + 55, x + 80, y + 35 );
                heartShape.bezierCurveTo( x + 80, y + 35, x + 80, y, x + 50, y );
                heartShape.bezierCurveTo( x + 35, y, x + 25, y + 25, x + 25, y + 25 );
                var extrudeSettingsheart = { amount: 8, bevelEnabled: true, bevelSegments: 2, steps: 2, bevelSize: 1, bevelThickness: 1 };

                //cirlce
                var circleRadius = 80;
                var circleShape = new THREE.Shape();
                circleShape.moveTo( 0, circleRadius );
                circleShape.quadraticCurveTo( circleRadius, circleRadius, circleRadius, 0 );
                circleShape.quadraticCurveTo( circleRadius, -circleRadius, 0, -circleRadius );
                circleShape.quadraticCurveTo( -circleRadius, -circleRadius, -circleRadius, 0 );
                circleShape.quadraticCurveTo( -circleRadius, circleRadius, 0, circleRadius );
                var extrudeSettingsCircleL = { amount: 8, bevelEnabled: true, bevelSegments: 2, steps: 2, bevelSize: 1, bevelThickness: 10 };

                var circleRadiusmid = 60;
                var circleShapemid = new THREE.Shape();
                circleShapemid.moveTo( 0, circleRadiusmid );
                circleShapemid.quadraticCurveTo( circleRadiusmid, circleRadiusmid, circleRadiusmid, 0 );
                circleShapemid.quadraticCurveTo( circleRadiusmid, -circleRadiusmid, 0, -circleRadiusmid );
                circleShapemid.quadraticCurveTo( -circleRadiusmid, -circleRadiusmid, -circleRadiusmid, 0 );
                circleShapemid.quadraticCurveTo( -circleRadiusmid, circleRadiusmid, 0, circleRadiusmid );
                var extrudeSettingsCircleM = { amount: 8, bevelEnabled: true, bevelSegments: 2, steps: 2, bevelSize: 1, bevelThickness: 8 };

                 var circleRadiusS = 40;
                var circleShapeS = new THREE.Shape();
                circleShapeS.moveTo( 0, circleRadiusS );
                circleShapeS.quadraticCurveTo( circleRadiusS, circleRadiusS, circleRadiusS, 0 );
                circleShapeS.quadraticCurveTo( circleRadiusS, -circleRadiusS, 0, -circleRadiusS );
                circleShapeS.quadraticCurveTo( -circleRadiusS, -circleRadiusS, -circleRadiusS, 0 );
                circleShapeS.quadraticCurveTo( -circleRadiusS, circleRadiusS, 0, circleRadiusS );
                var extrudeSettingsCircleS = { amount: 8, bevelEnabled: true, bevelSegments: 2, steps: 2, bevelSize: 1, bevelThickness: 5 };



                    //Rounded rectanglesmall
                    var roundedRectShapesmall = new THREE.Shape();

                ( function roundedRect( ctx, x, y, width, height, radius ){

                    ctx.moveTo( x, y + radius );
                    ctx.lineTo( x, y + height - radius );
                    ctx.quadraticCurveTo( x, y + height, x + radius, y + height );
                    ctx.lineTo( x + width - radius, y + height) ;
                    ctx.quadraticCurveTo( x + width, y + height, x + width, y + height - radius );
                    ctx.lineTo( x + width, y + radius );
                    ctx.quadraticCurveTo( x + width, y, x + width - radius, y );
                    ctx.lineTo( x + radius, y );
                    ctx.quadraticCurveTo( x, y, x, y + radius );

                } )( roundedRectShapesmall, 0, 0, 80, 80, 20 );

                var extrudeSettingssmall = { amount: 8, bevelEnabled: true, bevelSegments: 2, steps: 2, bevelSize: 1, bevelThickness: 5 };
                    


                //Rounded rectanglemid
                var roundedRectShapemid = new THREE.Shape();

                ( function roundedRect( ctx, x, y, width, height, radius ){

                    ctx.moveTo( x, y + radius );
                    ctx.lineTo( x, y + height - radius );
                    ctx.quadraticCurveTo( x, y + height, x + radius, y + height );
                    ctx.lineTo( x + width - radius, y + height) ;
                    ctx.quadraticCurveTo( x + width, y + height, x + width, y + height - radius );
                    ctx.lineTo( x + width, y + radius );
                    ctx.quadraticCurveTo( x + width, y, x + width - radius, y );
                    ctx.lineTo( x + radius, y );
                    ctx.quadraticCurveTo( x, y, x, y + radius );

                } )( roundedRectShapemid, 0, 0, 100, 100, 20 );

                var extrudeSettingsmid = { amount: 8, bevelEnabled: true, bevelSegments: 2, steps: 2, bevelSize: 1, bevelThickness: 8 };
                    
    

                // Rounded rectangle Large

                var roundedRectShape = new THREE.Shape();

                ( function roundedRect( ctx, x, y, width, height, radius ){

                    ctx.moveTo( x, y + radius );
                    ctx.lineTo( x, y + height - radius );
                    ctx.quadraticCurveTo( x, y + height, x + radius, y + height );
                    ctx.lineTo( x + width - radius, y + height) ;
                    ctx.quadraticCurveTo( x + width, y + height, x + width, y + height - radius );
                    ctx.lineTo( x + width, y + radius );
                    ctx.quadraticCurveTo( x + width, y, x + width - radius, y );
                    ctx.lineTo( x + radius, y );
                    ctx.quadraticCurveTo( x, y, x, y + radius );

                } )( roundedRectShape, 0, 0, 150, 150, 20 );

                var extrudeSettings = { amount: 8, bevelEnabled: true, bevelSegments: 2, steps: 2, bevelSize: 1, bevelThickness: 10 };



              

         




                // addShape( shape, color, x, y, z, rx, ry,rz, s );

                
                //   addShape( shape, extrudeSettings,            color,  x,   y, z, rx, ry, rz,s ) 

               


                 
   

              /*  addShape( roundedRectShape, extrudeSettings,  0x804000, -150, 0, 0, 300, 0, 0, 1 );

                addShape( roundedRectShapemid,extrudeSettingsmid, 0x804000,-125,26, -26, 300, 0, 0, 1 );
                
                addShape( roundedRectShapesmall,extrudeSettingssmall, 0x804000,-115,50, -36, 300, 0, 0, 1 );*/

                //addShape( heartShape,       extrudeSettingsheart, 0xf00000,   -50,  160, -80, 0, 0, Math.PI, 1 );
                
                //

                   /* if(atay=2)
                    {   alert('This is an alert from JavaScript!');
                          addShape( roundedRectShape, extrudeSettings,  0x804000, -150, 0, 0, 300, 0, 0, 1 );
                    }


*/                 
                         //addShape( circleShapeS, extrudeSettingsCircleS, 0x804000,  -75,  50, -75, 300, 0, 0, 1 );
                     //addShape( circleShape,      extrudeSettingsCircleL, 0x804000,  -75,  0, -75, 300, 0, 0, 1 );
                    var layer1 = document.getElementById("layer1").value;
                     var layer2 = document.getElementById("layer2").value;
                      var layer3 = document.getElementById("layer3").value;
                                    //darkwhite:#FFFF99 brown:0x804000
                                //addShape( shape, extrudeSettings,       color,  x,   y, z, rx, ry, rz,s )   
                        if(layer1==1)//large
                    {  
                          addShape( roundedRectShape, extrudeSettings,  0xFFFF99,-150, 0, 0, 300, 0, 0, 1 );
                    }
                        else if(layer1==2)
                   {
                        addShape( circleShape, extrudeSettingsCircleL, 0x804000,  -75,  0, -75, 300, 0, 0, 1 );
                   }else{}

                          if(layer2==1)//Mid
                    {       
                           addShape( roundedRectShapemid,extrudeSettingsmid, 0xFFFF99,-125,26, -26, 300, 0, 0, 1 );
                    }
                        else if(layer2==2)
                    {
                         addShape( circleShapemid, extrudeSettingsCircleM, 0x804000,  -75,  26, -75, 300, 0, 0, 1 );
                    }else{}
                    

                          if(layer3==1)//smalL
                    {  
                         addShape( roundedRectShapesmall,extrudeSettingssmall, 0xFFFF99,-115,50, -36, 300, 0, 0, 1 );
                    } else if(layer3==2)
                    {
                            addShape( circleShapeS, extrudeSettingsCircleS, 0x804000,  -75,  50, -75, 300, 0, 0, 1 );
                    }else{}
                                    
                        

                renderer = new THREE.WebGLRenderer( { antialias: true } );
                renderer.setClearColor( 0xf0f0f0 );
                renderer.setPixelRatio( window.devicePixelRatio );
                renderer.setSize( window.innerWidth, window.innerHeight );
                container.appendChild( renderer.domElement );

                stats = new Stats();
                stats.domElement.style.position = 'absolute';
                stats.domElement.style.top = '0px';
                container.appendChild( stats.domElement );

                document.addEventListener( 'mousedown', onDocumentMouseDown, false );
                document.addEventListener( 'touchstart', onDocumentTouchStart, false );
                document.addEventListener( 'touchmove', onDocumentTouchMove, false );

                //

                window.addEventListener( 'resize', onWindowResize, false );

            }

            function onWindowResize() {

                windowHalfX = window.innerWidth / 2;
                windowHalfY = window.innerHeight / 2;

                camera.aspect = window.innerWidth / window.innerHeight;
                camera.updateProjectionMatrix();

                renderer.setSize( window.innerWidth, window.innerHeight );

            }

            //ako gi comment ky d mo dagan ang dropdownbox

            function onDocumentMouseDown( event ) {
                
                //event.preventDefault(); 
                document.addEventListener( 'mousemove', onDocumentMouseMove, false );
                document.addEventListener( 'mouseup', onDocumentMouseUp, false );
                document.addEventListener( 'mouseout', onDocumentMouseOut, false );

                mouseXOnMouseDown = event.clientX - windowHalfX;
                targetRotationOnMouseDown = targetRotation;

            }

            function onDocumentMouseMove( event ) {

                mouseX = event.clientX - windowHalfX;

                targetRotation = targetRotationOnMouseDown + ( mouseX - mouseXOnMouseDown ) * 0.02;

            }

            function onDocumentMouseUp( event ) {

                document.removeEventListener( 'mousemove', onDocumentMouseMove, false );
                document.removeEventListener( 'mouseup', onDocumentMouseUp, false );
                document.removeEventListener( 'mouseout', onDocumentMouseOut, false );

            }

            function onDocumentMouseOut( event ) {

                document.removeEventListener( 'mousemove', onDocumentMouseMove, false );
                document.removeEventListener( 'mouseup', onDocumentMouseUp, false );
                document.removeEventListener( 'mouseout', onDocumentMouseOut, false );

            }

            function onDocumentTouchStart( event ) {

                if ( event.touches.length == 1 ) {

                    event.preventDefault();

                    mouseXOnMouseDown = event.touches[ 0 ].pageX - windowHalfX;
                    targetRotationOnMouseDown = targetRotation;

                }

            }

            function onDocumentTouchMove( event ) {

                if ( event.touches.length == 1 ) {

                    event.preventDefault();

                    mouseX = event.touches[ 0 ].pageX - windowHalfX;
                    targetRotation = targetRotationOnMouseDown + ( mouseX - mouseXOnMouseDown ) * 0.05;

                }

            }

            //

            function animate() {

                requestAnimationFrame( animate );

                render();
                stats.update();

            }

            function render() {

                group.rotation.y += ( targetRotation - group.rotation.y ) * 0.05;
                renderer.render( scene, camera );

            }


</script>
     
                
<!-- script para querylayerdragdrop -->
<script>

$(function() {
  $("#ChooseLayer").on("change",function() {
     var getit = $("#ChooseLayer").val();
     document.getElementsByName('ChooseLayer')[0].value = getit;
    alert($("#ChooseLayer").val());

      }); 
});
    </script>



<?php is_array($layers = array('choosebox', 'layer1', 'layer2', 'layer3')) ?>
  <?php $count=0; ?>
 @foreach ($layers as $layer) 
 <div class="box" id="{{$layer}}">
{{Helper::Display($layer);}}    
    <?php $count++;?>
 </div>
@endforeach



                    
        <!-- /banner -->
        
        <!-- top-grids -->
        <div class="top-grids">
            <div class="container">
                <div class="col-md-4 top-grid">
                    <div class="top-grid-head">
                        <h3>OUR CAKES</h3>
                    </div>
                    <div class="top-grid-info">
                        <img src="bootstrap/images/img1.jpg" class="img-responsive" title="name"/>
                        <div class="clearfix"> </div>
                        <div class="btn">{{HTML::link('/productsSeller','View More', array('style' => 'color:white, hover: pink'))}}</div>
                    </div>
                </div>
                <div class="col-md-4 top-grid">
                    <div class="top-grid-head">
                        <h3>OUR CAKES</h3>
                    </div>
                    <div class="top-grid-info">
                        <img src="bootstrap/images/img2.jpg" class="img-responsive" title="name"/>
                        <div class="clearfix"> </div>
                        <div class="btn">{{HTML::link('/productsSeller','View More', array('style' => 'color:white, hover: pink'))}}</div>
                    </div>
                </div>
                <div class="col-md-4 top-grid">
                    <div class="top-grid-head">
                        <h3>OUR CAKES</h3>
                    </div>
                    <div class="top-grid-info">
                        <img src="bootstrap/images/img3.jpg" class="img-responsive" title="name"/>
                        <div class="clearfix"> </div>
                        <div class="btn">{{HTML::link('/productsSeller','View More', array('style' => 'color:white, hover: pink'))}}</div>
                    </div>
                </div>
            </div>
            <!-- top-grids-bg -->
            <div class="top-grids-bg">
                <span> </span>
            </div>
            <!-- top-grids-bg -->
        </div>
        <!-- top-grids -->
        <!-- bottom-grids -->
        <div class="bottom-grids">
            <div class="container">
                <div class="col-md-8 bottom-grid-left">
                    <div class="col-md-3 bottom-grid-left-grid text-center">
                        <img src="bootstrap/images/pic2.jpg" title="name"/>
                        <h4>kids birthday cake</h4>
                        <p>$40</p>
                    </div>
                    <div class="col-md-3 bottom-grid-left-grid text-center">
                        <img src="bootstrap/images/pic1.jpg" title="name"/>
                        <h4>kids birthday cake</h4>
                        <p>$40</p>
                    </div>
                    <div class="col-md-3 bottom-grid-left-grid text-center">
                        <img src="bootstrap/images/pic3.jpg" title="name"/>
                        <h4>kids birthday cake</h4>
                        <p>$40</p>
                    </div>
                    <div class="col-md-3 bottom-grid-left-grid text-center">
                        <img src="bootstrap/images/pic4.jpg" title="name"/>
                        <h4>kids birthday cake</h4>
                        <p>$40</p>
                    </div>
                    <div class="clearfix"> </div>
                    <span class="best-sale">Best sellers</span>
                    <a href="#" class="order"> </a>
                </div>
                <div class="col-md-4 bottom-grid-right">
                    <h3><span class="tweet"> </span> latest tweet</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                    <label>1 day ago</label>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- bottom-grids -->
    <!-- /container -->
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="col-md-3 location">
                    <h4>location</h4>
                    <p>#04 Dist.City,State,PK</p>
                    <h4>hours</h4>
                    <p>Weekdays 7 a.m.-7 p.m.</p>
                    <p>Weekends 8 a.m.-7 p.m.</p>
                    <p>Call for Holidays Hours.</p>
                </div>
                <div class="col-md-3 customer">
                    <h4>customer service</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod. </p>
                    <h4>phone</h4>
                    <h6>1(234)567-8910</h6>
                    <h4>contact us</h4>
                    <h6>contact us page.</h6>
                </div>
                <div class="col-md-3 social">
                    <h4>get social</h4>
                    <div class="face-b">
                        <img src="bootstrap/images/foot.png" title="name"/>
                        <a href="#"><i class="fb"> </i></a>
                    </div>
                    <div class="twet">      
                        <img src="bootstrap/images/foot.png" title="name"/>
                            <a href="#"><i class="twt"> </i></a>
                    </div>  
                </div>
                <div class="col-md-3 sign">
                    <h4>sign up for news later</h4> 
                        <form>
                        <input type="text" class="text" value="YOUR EMAIL" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'YOUR EMAIL ';}">
                        </form>
                </div>
                    <div class="clearfix"> </div>
            </div>
            <div class="footer-bottom">
                <p>DEVELOPERS: CARULASAN, KIMBERLY JEAN && LAUDE, DAVID</p>
            </div>
        </div>
    </div>
    <!-- /footer -->

    <!-- colorpicker -->

    </body>
</html>

