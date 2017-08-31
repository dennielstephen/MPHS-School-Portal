<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Announcements</title>
    <?php include('link.php'); ?>
	<script type="text/javascript">
	$(window).load(function() {
		$(".preloader").fadeOut("slow");
	})
	</script>
</head><!--/head-->
<body>
	<div class="preloader"></div>
    <header class="navbar navbar-inverse navbar-fixed-top abcdefg" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/ico/android-icon-48x48.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="aboutus.php"><i class="icon-book"></i> About Us</a></li>
                    <li class="active"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bullhorn fa-fw"></i> <b>Announcements</b>&nbsp;<span class="fa fa-chevron-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="selected a">
                            <a href="announcements.php"><i class="fa fa-calendar"></i> <b>Events</b></a>
                        </li>
                        <li>
                            <a href="gallery.php"><i class="fa fa-picture-o"></i> Gallery</a>
                        </li>
                    </ul>
                    </li>
                    <li><a href="achievers.php"><i class="fa fa-trophy"></i> Achievements</a></li>
                    <li><a href="contactus.php"><i class="fa fa-phone"></i> Contact Us</a></li>
                    <!--Log-in/Log-out-->
					<?php if(!isset($_SESSION['user_email'])){?>
					<li><a href="login.php"><i class="fa fa-sign-in"></i> Log-in</a></li>
					<?php } else { ?>
					<li><a href="login.php"><?php include('check2.php'); ?></a></li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-chevron-down"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="logout.php?logout=true"><i class="fa fa-sign-out"></i> Log-out</a></li>
					</ul>
					</li>
					<?php } ?>
                </ul>
            </div>
        </div>
    </header><!--/header-->
	
	<link rel="stylesheet" type="text/css" href="ach.css" />
    <div class="container">
    <div class="content">
        <section class="main">
            <div class="custom-calendar-wrap">
                <div id="custom-inner" class="custom-inner">
                    <div class="custom-header clearfix">
                        <nav>
                            <span id="custom-prev" class="custom-prev"></span>
                            <span id="custom-next" class="custom-next"></span>
                        </nav>
                        <h2 id="custom-month" class="custom-month"></h2>
                        <h3 id="custom-year" class="custom-year"></h3>
                    </div>
                    <div id="calendar" class="fc-calendar-container">
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
    <section id="about-us" class="container">
        <div class="row">
            <h2>ANNOUNCEMENTS: </h2>
			<b><?php
				include_once 'connection.php';
                    $Today = date('y:m:d');
                    $new = date('l, F d, Y', strtotime($Today));
                    echo $new;
                    ?></b>
			<br>
			<font size="5">
			<?php
			    $getUsers = $db_con->prepare("SELECT Announcement FROM announcements");
				$getUsers->execute();
				$users = $getUsers->fetchAll();
				foreach ($users as $user) {
				    echo $user['Announcement'];
				}
			?>
			</font>
        </div>
    </div>
    </section>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.calendario.js"></script>
        <script type="text/javascript" src="js/data.js"></script>
        <script type="text/javascript"> 
                    $(function() {
            
                var transEndEventNames = {
                        'WebkitTransition' : 'webkitTransitionEnd',
                        'MozTransition' : 'transitionend',
                        'OTransition' : 'oTransitionEnd',
                        'msTransition' : 'MSTransitionEnd',
                        'transition' : 'transitionend'
                    },
                    transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
                    $wrapper = $( '#custom-inner' ),
                    $calendar = $( '#calendar' ),
                    cal = $calendar.calendario( {
                        onDayClick : function( $el, $contentEl, dateProperties ) {

                            if( $contentEl.length > 0 ) {
                                showEvents( $contentEl, dateProperties );
                            }

                        },
                        caldata : codropsEvents,
                        displayWeekAbbr : true
                    } ),
                    $month = $( '#custom-month' ).html( cal.getMonthName() ),
                    $year = $( '#custom-year' ).html( cal.getYear() );

                $( '#custom-next' ).on( 'click', function() {
                    cal.gotoNextMonth( updateMonthYear );
                } );
                $( '#custom-prev' ).on( 'click', function() {
                    cal.gotoPreviousMonth( updateMonthYear );
                } );

                function updateMonthYear() {                
                    $month.html( cal.getMonthName() );
                    $year.html( cal.getYear() );
                }

                // just an example..
                function showEvents( $contentEl, dateProperties ) {

                    hideEvents();
                    
                    var $events = $( '<div id="custom-content-reveal" class="custom-content-reveal"><h4>Events for ' + dateProperties.monthname + ' ' + dateProperties.day + ', ' + dateProperties.year + '</h4></div>' ),
                        $close = $( '<span class="custom-content-close"></span>' ).on( 'click', hideEvents );

                    $events.append( $contentEl.html() , $close ).insertAfter( $wrapper );
                    
                    setTimeout( function() {
                        $events.css( 'top', '0%' );
                    }, 25 );

                }
                function hideEvents() {

                    var $events = $( '#custom-content-reveal' );
                    if( $events.length > 0 ) {
                        
                        $events.css( 'top', '100%' );
                        Modernizr.csstransitions ? $events.on( transEndEventName, function() { $( this ).remove(); } ) : $events.remove();
                    }
                }
            }
        );
        </script>  
    <div class="clear"></div>
	<footer id="footer" class="abcdefg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    © 1990 Mother of Perpetual Help School, Inc. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
	
	<a id="gototop" class="gototop" href="#"><i class="fa fa-angle-up fa-3x"></i></a>
	
</body>
</html>