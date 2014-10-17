
<!doctype html>
<html lang="en">
<head>

    <title>Cal Community Music</title>

    <link rel="shortcut icon" href="icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css">

    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="menu.js"></script>
    <script src="jquery.cycle.all.js"></script>

    <script type="text/javascript">
            $(document).ready(function() {
                $('#photos').cycle({
                            fx: 'fade',
                            random: true
                    });
            });
    </script>

    <style>

        #photos {
            position: relative;
            height: 100vh;
            width: 100%;
            z-index: 0;
            top: 0;
            left: 0;
        }

        .photo {
            width: 100% !important;
            height: 100% !important;
            overflow: hidden;
            position: fixed;
            background: #fff no-repeat 50% 50%;
            background-size: cover;
        }

        #nav {
            z-index: 1;
        }

        #event {
            width: 16em;
            position: absolute;
            right: 1.5625em;
            bottom: 1.2em;
            color: #222;
        }

        #info {
            background-color: #fff;
            width: 14.9em;
            float: left;
            padding: 1.2em;
            margin: 0 0 .5em 0;
        }

        #info p {
            margin-bottom: 0.5em;
        }

        #info p:last-child {
            margin-bottom: 0;
        }

        #full p {
            padding: 0 1.75em;
            font: 0.75em 'new_ciclesemi';
            text-transform: uppercase;  
            text-align: right;
            -webkit-transition: padding-right 0.1s;
            transition: padding-right 0.1s;
        }

        #full p:hover {
            padding-right: 2.4em;
        }

        #full a:link, a:visited {
            color: #fff;
            text-decoration: none;
            display: block;
        }

        #triangle {
            float: left;
            width: 1.1em;
            height: 100%;
            padding-top: 2em;
        }

        @media only screen and (min-device-width : 320px) and (max-device-width : 480px) , all and (max-width: 600px) {
            #photos {
                height: 50vh;
            }

            #event {
                width: 100%;
                position: relative;
                float: left;
                left: 0;
                top: 0;
            }

            #info {
                width: 100%;
                margin: 0;
                padding: 1.5em 1.5em 0 1.5em;
            }

            #info h2 {
                font-size: 2em;
            }

            #full {
                background-color: #fff;
                padding: 0 0 1.5em 0.125em;
                width: 100%;
            }

            #full a:link, #full a {
                color: #000;
            }

            #triangle {
                display: none;
            }
        }

        @media only screen and (min-device-width : 320px) and (max-device-width : 480px) {

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

        <div id="content">

            <div id="photos">
                <div class="photo" style="background-image: url(photos/1.jpg)"></div>
                <div class="photo" style="background-image: url(photos/2.jpg)"></div>
                <div class="photo" style="background-image: url(photos/3.jpg)"></div>
                <div class="photo" style="background-image: url(photos/4.jpg)"></div>
                <div class="photo" style="background-image: url(photos/5.jpg)"></div>
                <div class="photo" style="background-image: url(photos/6.jpg)"></div>
                <div class="photo" style="background-image: url(photos/7.jpg)"></div>
                <div class="photo" style="background-image: url(photos/8.jpg)"></div>
                <div class="photo" style="background-image: url(photos/9.jpg)"></div>
                <div class="photo" style="background-image: url(photos/10.jpg)"></div>
                <div class="photo" style="background-image: url(photos/11.jpg)"></div>
                <div class="photo" style="background-image: url(photos/12.jpg)"></div>
                <div class="photo" style="background-image: url(photos/13.jpg)"></div>
                <div class="photo" style="background-image: url(photos/14.jpg)"></div>
                <div class="photo" style="background-image: url(photos/15.jpg)"></div>
                <div class="photo" style="background-image: url(photos/16.jpg)"></div>
            </div>

            <div id="event">

                    <div id="info">
                            <h2>Upcoming Event</h2>
                            <p>
                                    Saturday, 5/17
                            </p>
                            <p>
                                    Jam Session @ 12:00<br>
                                    Morrison Hall Lounge</p>
                            <p>
                                    Concert @ 2:30<br>
                                    Kyakameena
                            </p>
                    </div>

                    <div id="triangle"><img src="triangle.png" /></div>

                    <div id="full"><p><a href="events.php">See full event list &rarr;</a></p></div>
            </div>

        </div>

    </div>

</body>
</html>
