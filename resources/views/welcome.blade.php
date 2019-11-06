<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Your Constructor</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #1653f6;
                color: #fcfcfc;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fcfcfc;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            html,html a {
	-webkit-font-smoothing: antialiased;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.004);
}

body {
	font-family: 'Open Sans', sans-serif;
	background: #875A7B;
}

#plans,#plans ul,#plans ul li {
	margin: 0;
	padding: 0;
	list-style: none;
}

#pricePlans:after {
	content: '';
	display: table;
	clear: both;
}

#pricePlans {
	zoom: 1;
}

#pricePlans {
	max-width: 69em;
	margin: 0 auto;
}

#pricePlans #plans .plan {
	background: #fff;
	float: left;
	width: 100%;
	text-align: center;
	border-radius: 5px;
	margin: 0 0 20px 0;

	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.1);
	box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}

.planContainer .title h2 {
	font-size: 2.125em;
	font-weight: 300;
	color: #3e4f6a;
	margin: 0;
	padding: .6em 0;
}

.planContainer .title h2.bestPlanTitle {
	background: #F9F9F9;

	background: -webkit-linear-gradient(top, #475975, #364761);
	background: -moz-linear-gradient(top, #475975, #364761);
	background: -o-linear-gradient(top, #475975, #364761);
	background: -ms-linear-gradient(top, #475975, #364761);
	background: linear-gradient(top, #475975, #364761);
	color: #fff;
	border-radius: 5px 5px 0 0;
}


.planContainer .price p {
	background: #3e4f6a;

	background: -webkit-linear-gradient(top, #475975, #364761);
	background: -moz-linear-gradient(top, #475975, #364761);
	background: -o-linear-gradient(top, #475975, #364761);
	background: -ms-linear-gradient(top, #475975, #364761);
	background: linear-gradient(top, #475975, #364761);
	color: #fff;
	font-size: 1.2em;
	font-weight: 700;
	height: 2.6em;
	line-height: 2.6em;
	margin: 0 0 1em;
}

.planContainer .price p.bestPlanPrice {
	background: #f7814d;
}

.planContainer .price p span {
	color: #8394ae;
}

.planContainer .options {
	margin-top: 10em;
}

.planContainer .options li {
	font-weight: 700;
	color: #364762;
	line-height: 2.5;
}

.planContainer .options li span {
	font-weight: 400;
	color: #979797;
}

.planContainer .button a {
	text-transform: uppercase;
	text-decoration: none;
	color: #3e4f6a;
	font-weight: 700;
	letter-spacing: 3px;
	line-height: 2.8em;
	border: 2px solid #3e4f6a;
	display: inline-block;
	width: 80%;
	height: 2.8em;
	border-radius: 4px;
	margin: 1.5em 0 1.8em;
}

.planContainer .button a.bestPlanButton {
	color: #fff;
	background: #f7814d;
	border: 2px solid #f7814d;
}

#credits {
	text-align: center;
	font-size: .8em;
	font-style: italic;
	color: #777;
}

#credits a {
	color: #333;
}

#credits a:hover {
	text-decoration: none;
}

@media screen and (min-width: 481px) and (max-width: 768px) {

#pricePlans #plans .plan {
	width: 49%;
	margin: 0 2% 20px 0;
}

#pricePlans #plans > li:nth-child(2n) {
	margin-right: 0;
}

}

@media screen and (min-width: 769px) and (max-width: 1024px) {

#pricePlans #plans .plan {
	width: 49%;
	margin: 0 2% 20px 0;
}

#pricePlans #plans > li:nth-child(2n) {
	margin-right: 0;
}

}

@media screen and (min-width: 1025px) {

#pricePlans {
	margin: 2em auto;
}

#pricePlans #plans .plan {
	width: 24%;
	margin: 0 1.33% 20px 0;

	-webkit-transition: all .25s;
	   -moz-transition: all .25s;
	    -ms-transition: all .25s;
	     -o-transition: all .25s;
	        transition: all .25s;
}

#pricePlans #plans > li:last-child {
	margin-right: 0;
}

#pricePlans #plans .plan:hover {
	-webkit-transform: scale(1.04);
	   -moz-transform: scale(1.04);
	    -ms-transform: scale(1.04);
	     -o-transform: scale(1.04);
	        transform: scale(1.04);
}

.planContainer .button a {
	-webkit-transition: all .25s;
	   -moz-transition: all .25s;
	    -ms-transition: all .25s;
	     -o-transition: all .25s;
	        transition: all .25s;
}

.planContainer .button a:hover {
	background: #3e4f6a;
	color: #fff;
}

.planContainer .button a.bestPlanButton:hover {
	background: #ff9c70;
	border: 2px solid #ff9c70;
}

}

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
         
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                    <a href="{{ url('/home') }}">ABOUT US</a>
         <a href="{{ url('/home') }}">HOW IT WORKS</a>
         <a href="{{ url('/home') }}">PRICING</a>
         <a href="{{ url('/home') }}">CONTACT US</a>
                    
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
                <div class="top-left links">
        
         
                </div>
            @endif
        

            <div class="content">
                <div class="title m-b-md">
                   <img src="images/web.png" alt="Italian Trulli" height="450" width="1450">

                   Welcome to Your Constructor!
                </div>

                <div class="links">
                    
                </div>
            </div>
        </div>
        <div>
        
        </div>
    </body>
</html>
