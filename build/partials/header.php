<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- TITLE -->
        <title>Rocket - Demo</title>

        <meta name="description" content="Description du site" />

        <!-- FAVICON -->
        <!-- <link rel="icon" href="<?php echo $app->baseUrl() ?>img/favicon.png" type="image/png"> -->

        <!-- CSS -->
        <link href="<?php echo $app->baseUrl() ?>css/main.css" rel="stylesheet">
    </head>
    <body>
        <div class="app-wrapper"> <!-- do not delete this node -->
            <div class="c-loader">
                <div class="c-loader__content">
                    <div class="c-loader__content__logo">
                        <svg version="1.1"
                        	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                        	 x="0px" y="0px" width="69.9px" height="150px" viewBox="0 0 69.9 150" style="enable-background:new 0 0 69.9 150;"
                        	 xml:space="preserve">
                            <style type="text/css">
                            	.st0{fill:#FFFFFF;}
                            </style>
                            <defs>
                            </defs>
                            <path class="st0" d="M41.9,117.5c1.3,4.1,2.3,8.3,3,12.5l0.6,3.5c-3.3,0.4-6.6,0.6-10,0.6c-3.3,0-6.7-0.2-10-0.6l0.6-3.5
                            	c0.7-4.2,1.7-8.4,3-12.5H41.9 M44.5,113.9h-18c-1.8,5.1-3.1,10.3-3.9,15.5l-1.1,7.1c4.6,0.8,9.4,1.2,14.1,1.2s9.4-0.4,14.1-1.2
                            	l-1.1-7.1C47.6,124.2,46.3,119,44.5,113.9L44.5,113.9z"/>
                            <circle class="st0" cx="35" cy="32.9" r="7.5"/>
                            <circle class="st0" cx="35" cy="48.6" r="5.3"/>
                            <circle class="st0" cx="35" cy="80.2" r="3"/>
                            <path class="st0" d="M50.1,124.1H20.7c-0.7,0-1.2,0.5-1.2,1.2c0,0.7,0.5,1.2,1.2,1.2h29.5c0.7,0,1.2-0.5,1.2-1.2
                            	C51.3,124.6,50.8,124.1,50.1,124.1L50.1,124.1z"/>
                            <path class="st0" d="M69.9,111.6c-0.9-11.1-6.5-21.2-15.3-27.8l3.6-23.3c1-6.4,1-12.9-0.1-19.3C56.6,32,53,23.1,47.5,14.9L38.9,2.1
                            	C37.9,0.7,36.5,0,35,0c-1.5,0-3,0.7-3.9,2.1l-8.6,12.8c-5.5,8.2-9.1,17.1-10.6,26.3v0c-1,6.4-1.1,12.9-0.1,19.3l3.6,23.3
                            	C6.5,90.5,0.9,100.6,0,111.6L0.8,150l20.5-37.3c0.3-0.6,0.9-1,1.6-1H47c0.7,0,1.3,0.4,1.6,1l20.5,37.2L69.9,111.6z M4.1,136.7
                            	l-0.5-24.9c0.7-8.6,4.5-16.5,10.7-22.4l4,21.6L4.1,136.7z M46.5,107.3h-23l-7.3-47.6c-0.9-5.9-0.9-11.9,0.1-17.8
                            	c1.4-8.6,4.8-16.8,9.9-24.5l8.6-12.8c0,0,0.1-0.1,0.2-0.1c0.1,0,0.2,0.1,0.2,0.1l8.6,12.8c5.2,7.7,8.5,16,9.9,24.6
                            	c1,5.9,1,11.8,0.1,17.8L46.5,107.3z M65.9,136.7L51.7,111l4-21.6c6.1,5.9,9.9,13.8,10.7,22.4L65.9,136.7z"/>
                            <path class="st0" d="M39.6,73.3c0.7,0,1.2,0.6,1.2,1.2v24.9c0,0.7-0.6,1.2-1.2,1.2h-9.3c-0.7,0-1.2-0.6-1.2-1.2V74.5
                            	c0-0.7,0.6-1.2,1.2-1.2H39.6 M39.6,70.6h-9.3c-2.2,0-3.9,1.7-3.9,3.9v24.9c0,2.2,1.7,3.9,3.9,3.9h9.3c2.2,0,3.9-1.7,3.9-3.9V74.5
                            	C43.5,72.4,41.8,70.6,39.6,70.6L39.6,70.6z"/>
                        </svg>
                    </div>
                    <div class="c-loader__content__text">
                        <h1>
                            Rocket
                        </h1>
                        <span>
                            Another ES6 starter made to do good shit.
                        </span>
                    </div>
                </div>
                <div class="c-loader__after"></div>
            </div>

            <header class="c-header">
                <ul>
                    <li><a href="<?php echo $app->urlFor('home'); ?>">Home</a></li>
                    <li><a href="<?php echo $app->urlFor('about'); ?>">About</a></li>
                </ul>
            </header>

            <div class="application-container"> <!-- do not delete this node -->
                <!-- view -->
                <div class="page-content"> <!-- do not delete this node -->
