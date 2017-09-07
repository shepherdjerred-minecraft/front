<?php
	define( 'MQ_SERVER_ADDR1', 'ts-mc.net' );
	define( 'MQ_SERVER_PORT1', 25565 );
    define( 'MQ_SERVER_ADDR2', 'ts-mc.net' );
	define( 'MQ_SERVER_PORT2', 25565 );
    define( 'MQ_SERVER_ADDR3', 'ts-mc.net' );
	define( 'MQ_SERVER_PORT3', 25565 );
	define( 'MQ_SERVER_ADDR4', 'ts-mc.net' );
	define( 'MQ_SERVER_PORT4', 25565 );
    define( 'MQ_SERVER_ADDR5', 'ts-mc.net' );
	define( 'MQ_SERVER_PORT5', 25565 );
    define( 'MQ_SERVER_ADDR6', 'ts-mc.net' );
	define( 'MQ_SERVER_PORT6', 25565 );
	define( 'MQ_TIMEOUT', 1 );

    
	Error_Reporting( E_ALL | E_STRICT );
	Ini_Set( 'display_errors', true );

	require __DIR__ . '/php/MinecraftQuery.class.php';

	$Timer = MicroTime( true );


	$Query1 = new MinecraftQuery( );

	try
	{
		$Query1->Connect( MQ_SERVER_ADDR1, MQ_SERVER_PORT1, MQ_TIMEOUT );
	}
	catch( MinecraftQueryException $e )
	{
		$Exception = $e;
	}

	$Timer = Number_Format( MicroTime( true ) - $Timer, 4, '.', '' );
    
	$Query2 = new MinecraftQuery( );

	try
	{
		$Query2->Connect( MQ_SERVER_ADDR2, MQ_SERVER_PORT2, MQ_TIMEOUT );
	}
	catch( MinecraftQueryException $e )
	{
		$Exception = $e;
	}

	$Query3 = new MinecraftQuery( );

	try
	{
		$Query3->Connect( MQ_SERVER_ADDR3, MQ_SERVER_PORT3, MQ_TIMEOUT );
	}
	catch( MinecraftQueryException $e )
	{
		$Exception = $e;
	}
    
	$Query4 = new MinecraftQuery( );

	try
	{
		$Query4->Connect( MQ_SERVER_ADDR4, MQ_SERVER_PORT4, MQ_TIMEOUT );
	}
	catch( MinecraftQueryException $e )
	{
		$Exception = $e;
	}

	$Timer = Number_Format( MicroTime( true ) - $Timer, 4, '.', '' );
    
	$Query5 = new MinecraftQuery( );

	try
	{
		$Query5->Connect( MQ_SERVER_ADDR5, MQ_SERVER_PORT5, MQ_TIMEOUT );
	}
	catch( MinecraftQueryException $e )
	{
		$Exception = $e;
	}

	$Query6 = new MinecraftQuery( );

	try
	{
		$Query6->Connect( MQ_SERVER_ADDR6, MQ_SERVER_PORT6, MQ_TIMEOUT );
	}
	catch( MinecraftQueryException $e )
	{
		$Exception = $e;
	}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Metadata, Stylesheet, Title -->

<!-- Front Version 7.2
Created by Jerred Shepherd (RiotShielder) -->

<head>
    <title>Play | Minecraft Server</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Minecraft Server">
    <meta name="author" content="Jerred Shepherd">
    <link rel="shortcut icon" href="img/favicon.ico">

    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700" rel='stylesheet' type='text/css'>

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>

<!-- Navbar Start -->

<body>
    <div class="navbar-wrapper">
            <div class="navbar navbar-default navbar-static-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand accent" href="">Minecraft Server</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="index.html"><i class="fa fa-home"></i> Home</a>
                            </li>
                            <li class="active"><a href="play.php"><i class="fa fa-gamepad"></i> Play</a>
                            </li>
                            <li><a href="forum"><i class="fa fa-comments-o"></i> Forum</a>
                            </li>
                            <li><a href="shop.html"><i class="fa fa-shopping-cart"></i> Shop</a>
                            </li>
                            <li><a href="vote.html"><i class="fa fa-check-square-o"></i> Vote</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Account <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Login</a>
                                    </li>
                                    <li><a href="#">Register</a>
                                    </li>
                                </ul>
                            </li>
                            <a href="play.php" class="btn btn-info navbar-btn navbar-right hidden-sm hidden-xs">IP:
Server.com</a>
                        </ul>
                    </div>
                </div>
            </div>
    </div>

    <!-- Here is the actual page -->

    <div class="container">
        <center>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1>Join us at <div class="accent">Server.com</div>!</h1>
            <br>
            <br>
            <button class="btn btn-lg btn-info" data-toggle="modal" data-target="#joinHelp">Need help joining?</button>
            </br>
        </center>

        <!-- Help Modal -->

        <div class="modal fade" id="joinHelp" tabindex="-1" role="dialog" aria-labelledby="joinHelpLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="joinHelpLabel">Join Minecraft Server</h4>
                    </div>

                    <div class="modal-body">
                        <p>Load the most recent version of the Minecraft client, go to the multiplayer menu</p>
                        <img class="img-responsive center-block" src="img/help/multiplayer.jpg">
                        <hr>

                        <p>Next, click on "Add Server"</p>
                        <img class="img-responsive center-block" src="img/help/addserver.jpg">
                        <hr>

                        <p>Enter a Server Name, such as <b>Minecraft Server</b>, and enter our server IP: <b>Server.com</b>, then hit <b>Done</b>
                        </p>
                        <img class="img-responsive center-block" src="img/help/done.jpg">
                        <hr>

                        <p>Now double-click on the server you just added, or select it and click <b>Join Server</b>
                            <img class="img-responsive center-block" src="img/help/joinserver.jpg">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>

        <!-- Thumbnails -->

        <div class="row">

            <div class="col-md-4 clearfix">
                <div class="thumbnail">
                    <h2 class="text-center play-servertitle">Server 1</h2>
                    <img src="img/servers/server1.jpg" class="img-rounded" alt="Server 1">
                    <div class="text-center">
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a nulla sit amet risus dignissim placerat. Proin scelerisque sit amet quam vel rhoncus. Maecenas elementum leo eu ultrices sodales. Nullam non nisi lectus. Duis pretium euismod ante quis vulputate. Vivamus cursus elit dui, ac tempor est elementum vel. Donec bibendum tincidunt ipsum id bibendum.</p>
                        <h3><?php
                    $info = $Query1->GetInfo();
echo $info['Players'];
                    ?> /                    <?php
                    $info = $Query1->GetInfo();
echo $info['MaxPlayers'];
                    ?> online</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4 clearfix">
                <div class="thumbnail">
                    <h2 class="text-center play-servertitle">Server 2</h2>
                    <img src="img/servers/server2.jpg" class="img-rounded" alt="Server 2">
                    <div class="text-center">
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a nulla sit amet risus dignissim placerat. Proin scelerisque sit amet quam vel rhoncus. Maecenas elementum leo eu ultrices sodales. Nullam non nisi lectus. Duis pretium euismod ante quis vulputate. Vivamus cursus elit dui, ac tempor est elementum vel. Donec bibendum tincidunt ipsum id bibendum.</p>
                        <h3><?php
                    $info = $Query2->GetInfo();
echo $info['Players'];
                    ?> /                    <?php
                    $info = $Query2->GetInfo();
echo $info['MaxPlayers'];
                    ?> online</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4 clearfix">
                <div class="thumbnail">
                    <h2 class="text-center play-servertitle">Server 3</h2>
                    <img src="img/servers/server3.jpg" class="img-rounded" alt="Server 3">
                    <div class="text-center">
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a nulla sit amet risus dignissim placerat. Proin scelerisque sit amet quam vel rhoncus. Maecenas elementum leo eu ultrices sodales. Nullam non nisi lectus. Duis pretium euismod ante quis vulputate. Vivamus cursus elit dui, ac tempor est elementum vel. Donec bibendum tincidunt ipsum id bibendum.</p>
                        <h3><?php
                    $info = $Query3->GetInfo();
echo $info['Players'];
                    ?> /                    <?php
                    $info = $Query3->GetInfo();
echo $info['MaxPlayers'];
                    ?> online</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4 clearfix">
                <div class="thumbnail">
                    <h2 class="text-center play-servertitle">Server 4</h2>
                    <img src="img/servers/server4.jpg" class="img-rounded" alt="Server 4">
                    <div class="text-center">
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a nulla sit amet risus dignissim placerat. Proin scelerisque sit amet quam vel rhoncus. Maecenas elementum leo eu ultrices sodales. Nullam non nisi lectus. Duis pretium euismod ante quis vulputate. Vivamus cursus elit dui, ac tempor est elementum vel. Donec bibendum tincidunt ipsum id bibendum.</p>
                        <h3><?php
                    $info = $Query4->GetInfo();
echo $info['Players'];
                    ?> /                    <?php
                    $info = $Query4->GetInfo();
echo $info['MaxPlayers'];
                    ?> online</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4 clearfix">
                <div class="thumbnail">
                    <h2 class="text-center play-servertitle">Server 5</h2>
                    <img src="img/servers/server5.jpg" class="img-rounded" alt="Server 5">
                    <div class="text-center">
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a nulla sit amet risus dignissim placerat. Proin scelerisque sit amet quam vel rhoncus. Maecenas elementum leo eu ultrices sodales. Nullam non nisi lectus. Duis pretium euismod ante quis vulputate. Vivamus cursus elit dui, ac tempor est elementum vel. Donec bibendum tincidunt ipsum id bibendum.</p>
                        <h3><?php
                    $info = $Query5->GetInfo();
echo $info['Players'];
                    ?> /                    <?php
                    $info = $Query5->GetInfo();
echo $info['MaxPlayers'];
                    ?> online</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4 clearfix">
                <div class="thumbnail">
                    <h2 class="text-center play-servertitle">Server 6</h2>
                    <img src="img/servers/server6.jpg" class="img-rounded" alt="Server 6">
                    <div class="text-center">
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a nulla sit amet risus dignissim placerat. Proin scelerisque sit amet quam vel rhoncus. Maecenas elementum leo eu ultrices sodales. Nullam non nisi lectus. Duis pretium euismod ante quis vulputate. Vivamus cursus elit dui, ac tempor est elementum vel. Donec bibendum tincidunt ipsum id bibendum.</p>
                        <h3><?php
                    $info = $Query6->GetInfo();
echo $info['Players'];
                    ?> /                    <?php
                    $info = $Query6->GetInfo();
echo $info['MaxPlayers'];
                    ?> online</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <div class="container hidden-sm hidden-xs">
        <hr>
        <ul class='nav nav-pills'>
            <li class='pull-left'><a href="http://shepherdjerred.com/">Design by Jerred Shepherd
      </a>
            </li>

                <li class="pull-right">
                    <a href="terms.html">Terms</a>
                </li>

                <li class="pull-right">
                    <a href="staff.html">Staff</a>
                </li>
                    
                <li class="pull-right">
                    <a href="help.html">Help</a>
                </li>

        </ul>
        <br>
    </div>
<script src="http://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript">
</script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript">
</script>
</body>

</html>