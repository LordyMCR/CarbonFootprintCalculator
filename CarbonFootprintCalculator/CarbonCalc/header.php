<?php

date_default_timezone_set('Europe/London');

require_once "db_credentials.php";

session_start();

echo <<<_END

	<!DOCTYPE html>
	<html lang="en">
    <head>
        <title>Carbon Footprint Calculator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <link rel="stylesheet" href="styles.css">
	</head>

    <body>
    <div>
        <nav class="navbar navbar-custom navbar-dark navbar-expand-lg navbar-default">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" id="navText" href="home.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" id="navText" href="form_1details.php">Calculator</a></li>
                        <li class="nav-item"><a class="nav-link" id="navText" href="how.php">How We Calculate Your Footprint</a></li>    
                    </ul>
                </div>
            </div>
        </nav>    
        
_END;

?>