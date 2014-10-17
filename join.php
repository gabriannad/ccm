<!doctype html>
<html lang="en">
<head>

    <title>Cal Community Music - Join CCM</title>

	<link rel="shortcut icon" href="icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="menu.js"></script>

	<script type="text/javascript">
		if( !(/iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) ) {
	        $(document).ready(function(){
	            if ($(window).width() > 584) {
	            	$('#bg').width($(window).width() - 240);
	            } else {
	            	$('#bg').width('100%');
	            }
	        });

	        $(window).resize(function(){
	            if ($(window).width() > 584) {
	            	$('#bg').width($(window).width() - 240);
	            } else {
	            	$('#bg').width('100%');
	            }
	        });
       	}
	</script>

    <style>

    	#bg {
            background: center center/cover no-repeat url('photos/16.jpg');
            height: 70vh;
            position: fixed;
            top: 0;
            left: 12em;
            z-index: -2;
    	}

        #join {
            width: 100%;
            margin-top: 70vh;
        }

        #faq {
        	width: 100%;
        }

        #events:hover {
        	color: #000;
        }

        @media only screen and (min-device-width : 320px) and (max-device-width : 480px) , all and (max-width: 600px) {

        	#bg {
        		top: 3.3em;
        		left: 0;
        		width: 100%;
        		height: 60vh;
        	}

        	#join {
        		margin-top: 60vh;
        	}

        }

        @media only screen and (min-device-width : 320px) and (max-device-width : 480px) {

        	#bg {
        		top: 3.25em;
        		height: 15em;
        	}

        	#join {
        		margin-top: 15em;
        	}

        }

    </style>
    
</head>
<body>

    <div id="container">

        <div id="nav">
            <img src="gradient-logo-white.png" id="logo"/>
            <div id="ccm">
                <div id="menu-toggle"></div>
                <p>Cal Community Music</p>
            </div>
            <div id="menu">
                <a href="http://ccm.berkeley.edu">Home</a>
                <a href="about.php">About Us</a>
                <a href="join.php">Join CCM</a>
                <a href="events.php">Events</a>
                <a href="resources.php">Resources</a>
                <a href="contact.php">Contact Us</a>
            </div>
        </div>

    <div id="bg"></div>

    <div id="content">

        <div id="join" class="first box">
            <h1>Join CCM</h1>
            <p>There are no forms or requirements to become a member of CCM! We invite musicians of all skill levels and music genres to come to our <a href="events.php">events</a>. Attendance is never mandatory; come when you're free! If you'd like to connect with other CCM musicians, feel free to add your information to our <a href="http://bit.ly/ccmdirectory">member directory</a>.</p>
            <p>To stay updated, join our <a href="http://bit.ly/ccmnewsletter">mailing list</a> or our <a href="http://bit.ly/ccmfbgroup">Facebook group</a> to receive weekly updates about upcoming club events.</p>
        </div>

        <div id="faq" class="box">

            <h1>Frequently Asked Questions</h1>
            <p>
            	<em>Q:</em> <a name="events" id="events">How do jam sessions and concerts work?</a>
            	<br>
            	<em>A:</em> Every weekend, CCM holds a two-hour jam session for members to meet and practice followed by a one-hour concert at a local senior home here in Berkeley. Jam sessions are held on the bottom floor of Morisson Hall (unless noted otherwise), which have several practice rooms for small ensembles or individuals to practice and a bigger lounge for larger groups. After the jam session, those attending the concert meet outside of Morrison Hall with the club officers and you will either walk or bus together to that week's nursing home (so bring your <a href="http://pt.berkeley.edu/getting-campus/public_transit/actransit/classpass">Class Pass</a> just in case!). At the concert, you can play as many songs as you'd like for the residents (as long as everyone else gets a chance to play) and will get to chat with the seniors afterward!
            </p>
            <p>
                <em>Q:</em> Are instruments provided?
                <br>
                <em>A:</em> We currently do not provide instruments for club members, so you must bring your own instrument(s). Our jam session and concert locations always have at least one piano, however, so fret not if you are a pianist!
            </p>
            <p>
                <em>Q:</em> How do I form an ensemble?
                <br>
                <em>A:</em> There are many ways to meet other musicians in the club. You can either come out to our weekly jam sessions and meet other club members face to face, make a post in our <a href="http://bit.ly/ccmfbgroup">Facebook group</a>, or hit up some people in our <a href="http://bit.ly/ccmdirectory">member directory</a>! Our club socials are also an awesome way to meet other musicians. You can join our <a href="http://bit.ly/ccmnewsletter">mailing list</a> to learn about upcoming socials.
            </p>
            <p>
                <em>Q:</em> Do you give music lessons?
                <br>
                <em>A:</em> Our club does not officially give music lessons. Some individual members, however, may be willing to help you if you ask nicely! Feel free to ask around on our <a href="http://bit.ly/ccmfbgroup">Facebook group</a>.
            </p>
        </div>

    </div>

</div>

</body>
</html>
