<?php

require_once "header.php";

if (isset($_POST['region'])) {

    $personaltransportsubtotal = $publictransportsubtotal = $longdistancesubtotal = $utilitiessubtotal = "";
    $personaltransportmessage = $busmessage = $trammessage = $londonmessage = $trainmessage = $coachmessage = $electricalUsagemessage = $gasUsagemessage = "";

    $calculationdate = date('Y-m-d H:i:s');
    $region = $_POST['region'];
    $postcode = $_POST['postcode'];
      
    $drivecar = $_POST['driveQuestion'];
    $vehicletype = "";
    $vehiclemilesvalueWeekly = $vehiclemilesvalueMonthly = $vehiclemilesvalueYearly  = "";

    //  PERSONAL TRANSPORT

    if ($drivecar == "Yes") {
        
        $vehicletype = $_POST['vehicleType'];
                
        $vehiclemilesvalueWeekly = $vehiclemilesvalueMonthly = $vehiclemilesvalueYearly = $vehiclemiles = "";

        if (isset($_POST['vehicleMilesWeekly']) && $_POST['vehicleMilesWeekly'] >= 0) {
            $vehiclemilesvalueWeekly = $_POST['vehicleMilesWeekly'];
            $vehiclemiles = $vehiclemilesvalueWeekly*52;
            $personaltransportmessage = "You drive $vehiclemilesvalueWeekly miles a week";
        } else {
            $vehiclemilesvalueWeekly = NULL;
        }

        if (isset($_POST['vehicleMilesMonthly']) && $_POST['vehicleMilesMonthly'] >= 0) {
            $vehiclemilesvalueMonthly = $_POST['vehicleMilesMonthly'];
            $vehiclemiles = $vehiclemilesvalueMonthly*12;
            $personaltransportmessage = "You drive $vehiclemilesvalueMonthly miles a month";
        } else {
            $vehiclemilesvalueMonthly = NULL;
        }

        if (isset($_POST['vehicleMilesYearly']) && $_POST['vehicleMilesYearly'] >= 0) {
            $vehiclemilesvalueYearly = $_POST['vehicleMilesYearly'];
            $vehiclemiles = $vehiclemilesvalueYearly;
            $personaltransportmessage = "You drive $vehiclemilesvalueYearly miles a year";
        } else {
            $vehiclemilesvalueYearly = NULL;
        }

        if ($vehicletype == "Car Petrol") {
            $personaltransportsubtotal = $vehiclemiles*0.2805;
        } elseif ($vehicletype == "Car Diesel") {
            $personaltransportsubtotal = $vehiclemiles*0.2711;
        } elseif ($vehicletype == "Car Hybrid") {
            $personaltransportsubtotal = $vehiclemiles*0.19275;
        } elseif ($vehicletype == "Car Electric") {
            $personaltransportsubtotal = $vehiclemiles*0.08814;
        } elseif ($vehicletype == "Motorbike") {
            $personaltransportsubtotal = $vehiclemiles*0.18274;
        }

        $personaltransportsubtotal = $personaltransportsubtotal/1000;
        
    } else {
        $vehicletype = NULL;
        $personaltransportsubtotal = 0;
    }

    //  PUBLIC TRANSPORT

    $busmilesvalueWeekly = $busmilesvalueMonthly = $busmilesvalueYearly = $busmilesvalue = "";
   
    if (isset($_POST['busMilesWeekly']) && $_POST['busMilesWeekly'] >= 0) {
        $busmilesvalueWeekly = $_POST['busMilesWeekly'];
        $busmilesvalue = ($busmilesvalueWeekly*52)*0.10227;
        $busmessage = "You ride $busmilesvalueWeekly miles a week via bus";
    } else {
        $busmilesvalueWeekly = NULL;
    }

    if (isset($_POST['busMilesMonthly']) && $_POST['busMilesMonthly'] >= 0) {
        $busmilesvalueMonthly = $_POST['busMilesMonthly'];
        $busmilesvalue = ($busmilesvalueMonthly*12)*0.10227;
        $busmessage = "You ride $busmilesvalueMonthly miles a month via bus";
    } else {
        $busmilesvalueMonthly = NULL;
    }

    if (isset($_POST['busMilesYearly']) && $_POST['busMilesYearly'] >= 0) {
        $busmilesvalueYearly = $_POST['busMilesYearly'];
        $busmilesvalue = $busmilesvalueYearly*0.10227;
        $busmessage = "You ride $busmilesvalueYearly miles a year via bus";
    } else {
        $busmilesvalueYearly = NULL;
    }

    $trammilesvalueWeekly = $trammilesvalueMonthly = $trammilesvalueYearly = $trammilesvalue = "";

    if (isset($_POST['tramMilesWeekly']) && $_POST['tramMilesWeekly'] >= 0) {
        $trammilesvalueWeekly = $_POST['tramMilesWeekly'];
        $trammilesvalue = ($trammilesvalueWeekly*52)*0.02861;
        $trammessage = "You ride $trammilesvalueWeekly miles a week via tram";
    } else {
        $trammilesvalueWeekly = NULL;
    }

    if (isset($_POST['tramMilesMonthly']) && $_POST['tramMilesMonthly'] >= 0) {
        $trammilesvalueMonthly = $_POST['tramMilesMonthly'];
        $trammilesvalue = ($trammilesvalueMonthly*12)*0.02861;
        $trammessage = "You ride $trammilesvalueMonthly miles a month via tram";
    } else {
        $trammilesvalueMonthly = NULL;
    }

    if (isset($_POST['tramMilesYearly']) && $_POST['tramMilesYearly'] >= 0) {
        $trammilesvalueYearly = $_POST['tramMilesYearly'];
        $trammilesvalue = $trammilesvalueYearly*0.02861;
        $trammessage = "You ride $trammilesvalueYearly miles a year via tram";
    } else {
        $trammilesvalueYearly = NULL;
    }

    $londonmilesvalueWeekly = $londonmilesvalueMonthly = $londonmilesvalueYearly = $londonmilesvalue = "";

    if (isset($_POST['londonMilesWeekly']) && $_POST['londonMilesWeekly'] >= 0) {
        $londonmilesvalueWeekly = $_POST['londonMilesWeekly'];
        $londonmilesvalue = ($londonmilesvalueWeekly*52)*0.02781;
        $londonmessage = "You ride $londonmilesvalueWeekly miles a week via London Underground";
    } else {
        $londonmilesvalueWeekly = NULL;
    }

    if (isset($_POST['londonMilesMonthly']) && $_POST['londonMilesMonthly'] >= 0) {
        $londonmilesvalueMonthly = $_POST['londonMilesMonthly'];
        $londonmilesvalue = ($londonmilesvalueMonthly*12)*0.02781;
        $londonmessage = "You ride $londonmilesvalueMonthly miles a month via London Underground";
    } else {
        $londonmilesvalueMonthly = NULL;
    }

    if (isset($_POST['londonMilesYearly']) && $_POST['londonMilesYearly'] >= 0) {
        $londonmilesvalueYearly = $_POST['londonMilesYearly'];
        $londonmilesvalue = $londonmilesvalueYearly*0.02781;
        $londonmessage = "You ride $londonmilesvalueYearly miles a year via London Underground";
    } else {
        $londonmilesvalueYearly = NULL;
    }

    $trainmilesvalueWeekly = $trainmilesvalueMonthly = $trainmilesvalueYearly = $trainmilesvalue = "";

    if (isset($_POST['trainMilesWeekly']) && $_POST['trainMilesWeekly'] >= 0) {
        $trainmilesvalueWeekly = $_POST['trainMilesWeekly'];
        $trainmilesvalue = ($trainmilesvalueWeekly*52)*0.03549;
        $trainmessage = "You ride $trainmilesvalueWeekly miles a week via train";
    } else {
        $trainmilesvalueWeekly = NULL;
    }

    if (isset($_POST['trainMilesMonthly']) && $_POST['trainMilesMonthly'] >= 0) {
        $trainmilesvalueMonthly = $_POST['trainMilesMonthly'];
        $trainmilesvalue = ($trainmilesvalueMonthly*12)*0.03549;
        $trainmessage = "You ride $trainmilesvalueMonthly miles a month via train";
    } else {
        $trainmilesvalueMonthly = NULL;
    }

    if (isset($_POST['trainMilesYearly']) && $_POST['trainMilesYearly'] >= 0) {
        $trainmilesvalueYearly = $_POST['trainMilesYearly'];
        $trainmilesvalue = $trainmilesvalueYearly*0.03549;
        $trainmessage = "You ride $trainmilesvalueYearly miles a year via train";
    } else {
        $trainmilesvalueYearly = NULL;
    }

    $coachmilesvalueWeekly = $coachmilesvalueMonthly = $coachmilesvalueYearly = $coachmilesvalue = "";

    if (isset($_POST['coachMilesWeekly']) && $_POST['coachMilesWeekly'] >= 0) {
        $coachmilesvalueWeekly = $_POST['coachMilesWeekly'];
        $coachmilesvalue = ($coachmilesvalueWeekly*52)*0.02684;
        $coachmessage = "You ride $coachmilesvalueWeekly miles a week via coach";
    } else {
        $coachmilesvalueWeekly = NULL;
    }

    if (isset($_POST['coachMilesMonthly']) && $_POST['coachMilesMonthly'] >= 0) {
        $coachmilesvalueMonthly = $_POST['coachMilesMonthly'];
        $coachmilesvalue = ($coachmilesvalueMonthly*12)*0.02684;
        $coachmessage = "You ride $coachmilesvalueMonthly miles a month via coach";
    } else {
        $coachmilesvalueMonthly = NULL;
    }

    if (isset($_POST['coachMilesYearly']) && $_POST['coachMilesYearly'] >= 0) {
        $coachmilesvalueYearly = $_POST['coachMilesYearly'];
        $coachmilesvalue = $coachmilesvalueYearly*0.02684;
        $coachmessage = "You ride $coachmilesvalueYearly miles a year via coach";
    } else {
        $coachmilesvalueYearly = NULL;
    }

    $publictransportsubtotal = $busmilesvalue+$trammilesvalue+$londonmilesvalue+$trainmilesvalue+$coachmilesvalue;
    
    $publictransportsubtotal = $publictransportsubtotal/1000;
    
    //  LONG DISTANCE

    $flightstotalDomestic = $_POST['flightsTotalDomestic'];
    $flightstotalRed = $_POST['flightsTotalRed'];
    $flightstotalYellow = $_POST['flightsTotalYellow'];
    $flightstotalGreen = $_POST['flightsTotalGreen'];
    $flightstotalBlue = $_POST['flightsTotalBlue'];
    $flightstotalPurple = $_POST['flightsTotalPurple'];

    $longdistancesubtotal = ($flightstotalDomestic*184.4025)+($flightstotalRed*230.295)+($flightstotalYellow*690.885)+($flightstotalGreen*1737.81)+($flightstotalBlue*2896.35)+($flightstotalPurple*5406.52);

    $longdistancesubtotal = $longdistancesubtotal/1000;
    
    //  UTILITIES

    $electricalUsageWeekly = $electricalUsageMonthly = $electricalUsageYearly = $electricalUsage = "";
   
    if (isset($_POST['electricalUsageWeekly']) && $_POST['electricalUsageWeekly'] >= 0) {
        $electricalUsageWeekly = $_POST['electricalUsageWeekly'];
        $electricalUsage = ($electricalUsageWeekly*52)*0.21233;
        $electricalUsagemessage = "You use $electricalUsageWeekly kWh electric a week";
    } else {
        $electricalUsageWeekly = NULL;
    }

    if (isset($_POST['electricalUsageMonthly']) && $_POST['electricalUsageMonthly'] >= 0) {
        $electricalUsageMonthly = $_POST['electricalUsageMonthly'];
        $electricalUsage = ($electricalUsageMonthly*12)*0.21233;
        $electricalUsagemessage = "You use $electricalUsageMonthly kWh electric a month";
    } else {
        $electricalUsageMonthly = NULL;
    }

    if (isset($_POST['electricalUsageYearly']) && $_POST['electricalUsageYearly'] >= 0) {
        $electricalUsageYearly = $_POST['electricalUsageYearly'];
        $electricalUsage = $electricalUsageYearly*0.21233;
        $electricalUsagemessage = "You use $electricalUsageYearly kWh electric a year";
    } else {
        $electricalUsageYearly = NULL;
    }

    $gasUsageWeekly = $gasUsageMonthly = $gasUsageYearly = $gasUsage = "";
   
    if (isset($_POST['gasUsageWeekly']) && $_POST['gasUsageWeekly'] >= 0) {
        $gasUsageWeekly = $_POST['gasUsageWeekly'];
        $gasUsage = ($gasUsageWeekly*52)*0.20297;
        $gasUsagemessage = "You use $gasUsageWeekly kWh gas a week";
    } else {
        $gasUsageWeekly = NULL;
    }

    if (isset($_POST['gasUsageMonthly']) && $_POST['gasUsageMonthly'] >= 0) {
        $gasUsageMonthly = $_POST['gasUsageMonthly'];
        $gasUsage = ($gasUsageMonthly*12)*0.20297;
        $gasUsagemessage = "You use $gasUsageMonthly kWh gas a month";
    } else {
        $gasUsageMonthly = NULL;
    }

    if (isset($_POST['gasUsageYearly']) && $_POST['gasUsageYearly'] >= 0) {
        $gasUsageYearly = $_POST['gasUsageYearly'];
        $gasUsage = $gasUsageYearly*0.20297;
        $gasUsagemessage = "You use $gasUsageYearly kWh gas a year";
    } else {
        $gasUsageYearly = NULL;
    }

    $utilitiessubtotal= $electricalUsage+$gasUsage;

    $utilitiessubtotal = $utilitiessubtotal/1000;
        
    $grandtotal = $personaltransportsubtotal+$publictransportsubtotal+$longdistancesubtotal+$utilitiessubtotal;

    // $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // if (!$connection)
    // {
    //     die("Connection to database failed: " . $mysqli_connect_error);
    // }

    //     $query = "INSERT INTO results (calculation_date, region_name, postcode, q_drive_vehicle, q_vehicle_type, q_vehicle_mileage_weekly, q_vehicle_mileage_monthly, q_vehicle_mileage_yearly, personal_transport_subtotal, q_bus_mileage_weekly, q_bus_mileage_monthly, q_bus_mileage_yearly, q_tram_lightrail_mileage_weekly, q_tram_lightrail_mileage_monthly, q_tram_lightrail_mileage_yearly, q_london_underground_mileage_weekly, q_london_underground_mileage_monthly, q_london_underground_mileage_yearly, q_train_mileage_weekly, q_train_mileage_monthly, q_train_mileage_yearly, q_coach_mileage_weekly, q_coach_mileage_monthly, q_coach_mileage_yearly, public_transport_subtotal, q_domestic_flights, q_0_1500km_flights, q_1500_3000km_flights, q_3000_6000km_flights, q_6000_9000km_flights, q_9000km_plus_flights, long_distance_subtotal, q_home_electrical_usage_weekly, q_home_electrical_usage_monthly, q_home_electrical_usage_yearly, q_home_gas_usage_weekly, q_home_gas_usage_monthly, q_home_gas_usage_yearly, utilities_subtotal, grand_total_emissions)
    //     VALUES ('$calculationdate', '$region', '$postcode', '$drivecar', '$vehicletype', '$vehiclemilesvalueWeekly', '$vehiclemilesvalueMonthly', '$vehiclemilesvalueYearly', '$personaltransportsubtotal', '$busmilesvalueWeekly', '$busmilesvalueMonthly', '$busmilesvalueYearly', '$trammilesvalueWeekly', '$trammilesvalueMonthly', '$trammilesvalueYearly', '$londonmilesvalueWeekly', '$londonmilesvalueMonthly', '$londonmilesvalueYearly', '$trainmilesvalueWeekly', '$trainmilesvalueMonthly', '$trainmilesvalueYearly', '$coachmilesvalueWeekly', '$coachmilesvalueMonthly', '$coachmilesvalueYearly', '$publictransportsubtotal', '$flightstotalDomestic', '$flightstotalRed', '$flightstotalYellow', '$flightstotalGreen', '$flightstotalBlue', '$flightstotalPurple', '$longdistancesubtotal', '$electricalUsageWeekly', '$electricalUsageMonthly', '$electricalUsageYearly', '$gasUsageWeekly', '$gasUsageMonthly', '$gasUsageYearly', '$utilitiessubtotal', '$grandtotal')";
    
    //     if (mysqli_query($connection, $query))
    //     {
    //         echo "<h1>Updated database!</h1>";
    //     }
    //     else
    //     {
    //         die("Error: " . mysqli_error($connection));
    //     }
   
    // mysqli_close($connection);

    // $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
    if (!$connection)
    {
        die("Connection to database failed: " . $mysqli_connect_error);
    }

    $query = "SELECT * FROM regional_data WHERE region_name = '$region';";

    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_assoc($result);

    $regionEstimate = $row["region_co2_estimate"];
   
    mysqli_close($connection);

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if (!$connection)
    {
        die("Connection to database failed: " . $mysqli_connect_error);
    }

    $query = "SELECT * FROM regional_data WHERE region_name = 'United Kingdom';";

    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_assoc($result);

    $ukEstimate = $row["region_co2_estimate"];
   
    mysqli_close($connection);

    $personaltransportsubtotal = round(($personaltransportsubtotal),2);
    $publictransportsubtotal = round(($publictransportsubtotal),2);
    $longdistancesubtotal = round(($longdistancesubtotal),2);
    $utilitiessubtotal = round(($utilitiessubtotal),2);
    $grandtotal = round(($grandtotal),2);
    
    $regionEstimate = round(($regionEstimate),2);
    $ukEstimate = round(($ukEstimate),2);

    $regionComparison = round((100-($grandtotal/$regionEstimate)*100), 2);
    $ukComparison = round((100-($grandtotal/$ukEstimate)*100), 2);

    $personaltransportPercent = round((($personaltransportsubtotal/$grandtotal)*100),2);
    $publictransportPercent = round((($publictransportsubtotal/$grandtotal)*100),2);
    $longdistancePercent = round((($longdistancesubtotal/$grandtotal)*100),2);
    $utilitiesPercent = round((($utilitiessubtotal/$grandtotal)*100),2);
    
    echo <<<_END
    <div class="container">
        <div class="row" id="mainResults">
            <div class="col text-center" id="mainResultsText">
                <h5 class="h5 mb-3 font-weight-normal">Your carbon footprint is</h5>
                <h2 class="h2 mb-3 font-weight-normal" id="grandTotal">{$grandtotal} tonnes CO2e</h2>
            </div>
        </div><br>
        <div class="row" id="mainResults">
            <div class="col text-center" id="resultsRegional">
_END;
            if ($grandtotal < $regionEstimate) {
                echo <<<_END
                <h5 class="h5 mb-3 font-weight-normal">Your footprint is</h5>
                <h2 class="h2 mb-3 font-weight-normal" id="grandTotal">{$regionComparison}% smaller than your regional average</h2>
                
                <canvas id="regionalChartSmaller" style="width:37%;max-width:400px"></canvas>

                <script>
                var regionalContext = document.getElementById("regionalChartSmaller").getContext("2d");
                var regionalData = {
                    labels: [
                        "Your Result",
                        "{$region}"
                    ],
                    datasets: [{
                        data: [{$grandtotal}, {$regionEstimate}],
                        backgroundColor: ["#669911", "#119966"],
                        hoverBackgroundColor: ["#66A2EB", "#FCCE56"]
                    }]
                };

                var regionalChart = new Chart(regionalContext, {
                    type: 'horizontalBar',
                    data: regionalData,
                    options: {
                        legend: {
                            display: false
                         },
                        scales: {
                            xAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }],
                            yAxes: [{
                                stacked: true
                            }]
                        }

                    }
                });
                </script>
                </div><br>
_END;
            }
            else {
                $regionComparison = abs($regionComparison);
                echo <<<_END
                <h5 class="h5 mb-3 font-weight-normal">Your carbon footprint is</h5>
                <h2 class="h2 mb-3 font-weight-normal" id="grandTotal">{$regionComparison}% larger than your regional average</h2>

                <canvas id="regionalChartLarger" style="width:37%;max-width:400px"></canvas>

                <script>
                var regionalContext = document.getElementById("regionalChartLarger").getContext("2d");
                var regionalData = {
                    labels: [
                        "Your Result",
                        "{$region}"
                    ],
                    datasets: [{
                        data: [{$grandtotal}, {$regionEstimate}],
                        backgroundColor: ["#669911", "#119966"],
                        hoverBackgroundColor: ["#66A2EB", "#FCCE56"]
                    }]
                };

                var regionalChart = new Chart(regionalContext, {
                    type: 'horizontalBar',
                    data: regionalData,
                    options: {
                        legend: {
                            display: false
                         },
                        scales: {
                            xAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }],
                            yAxes: [{
                                stacked: true
                            }]
                        }

                    }
                });
                </script>
            </div><br>
_END;
            }
        echo <<<_END
            <div class="col text-center" id="resultsUK">
_END;
        if ($grandtotal < $ukEstimate) {
            echo <<<_END
            <h5 class="h5 mb-3 font-weight-normal">Your footprint is</h5>
            <h2 class="h2 mb-3 font-weight-normal" id="grandTotal">{$ukComparison}% smaller than the UK average</h2>
            
            <canvas id="ukChartSmaller" style="width:37%;max-width:400px"></canvas>

            <script>
            var regionalContext = document.getElementById("ukChartSmaller").getContext("2d");
            var regionalData = {
                labels: [
                    "Your Result",
                    "United Kingdom"
                ],
                datasets: [{
                    data: [{$grandtotal}, {$ukEstimate}],
                    backgroundColor: ["#669911", "#119966"],
                    hoverBackgroundColor: ["#66A2EB", "#FCCE56"]
                }]
            };

            var regionalChart = new Chart(regionalContext, {
                type: 'horizontalBar',
                data: regionalData,
                options: {
                    legend: {
                        display: false
                        },
                    scales: {
                        xAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                        yAxes: [{
                            stacked: true
                        }]
                    }

                }
            });
            </script>
            </div>
_END;
        }
        else {
            $ukComparison = abs($ukComparison);
            echo <<<_END
            <h5 class="h5 mb-3 font-weight-normal">Your carbon footprint is</h5>
            <h2 class="h2 mb-3 font-weight-normal" id="grandTotal">{$ukComparison}% larger than the UK average</h2>

            <canvas id="ukChartLarger" style="width:37%;max-width:400px"></canvas>

            <script>
            var regionalContext = document.getElementById("ukChartLarger").getContext("2d");
            var regionalData = {
                labels: [
                    "Your Result",
                    "United Kingdom"
                ],
                datasets: [{
                    data: [{$grandtotal}, {$ukEstimate}],
                    backgroundColor: ["#669911", "#119966"],
                    hoverBackgroundColor: ["#66A2EB", "#FCCE56"]
                }]
            };

            var regionalChart = new Chart(regionalContext, {
                type: 'horizontalBar',
                data: regionalData,
                options: {
                    legend: {
                        display: false
                        },
                    scales: {
                        xAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                        yAxes: [{
                            stacked: true
                        }]
                    }

                }
            });
            </script>
            </div>
_END;
        }

        $highestSectionCO2NUMBER = max($personaltransportsubtotal, $publictransportsubtotal, $longdistancesubtotal, $utilitiessubtotal);

        $var_array = array(
            '$personaltransportsubtotal' => $personaltransportsubtotal,
            '$publictransportsubtotal' => $publictransportsubtotal,
            '$longdistancesubtotal' => $longdistancesubtotal,
            '$utilitiessubtotal' => $utilitiessubtotal,
        );

        $highestSectionCO2NAME = array_search($highestSectionCO2NUMBER, $var_array, true);

        echo <<<_END
        </div><br>

        <div class="row" id="mainResults">
            <div class="col text-center" id="breakdownText">
_END;
        if($highestSectionCO2NAME == '$personaltransportsubtotal') {
            echo '<h2 class="h2 mb-3 font-weight-normal" id="grandTotal">Personal Transport</h2>';
        } elseif($highestSectionCO2NAME == '$publictransportsubtotal') {
            echo '<h2 class="h2 mb-3 font-weight-normal" id="grandTotal">Public Transport</h2>';
        } elseif($highestSectionCO2NAME == '$longdistancesubtotal') {
            echo '<h2 class="h2 mb-3 font-weight-normal" id="grandTotal">Long Distance</h2>';
        } else {
            echo '<h2 class="h2 mb-3 font-weight-normal" id="grandTotal">Utilities</h2>';
        }
        echo <<<_END
            <h5 class="h5 mb-3 font-weight-normal">is the biggest contributor to your footprint</h5>
            </div>
            <div class="col text-center" id="breakdownChart">
            <canvas id="resultsBreakdown" style="width:38%;max-width:450px"></canvas>

            <script>
            var xValues = ["Personal Transport", "Public Transport", "Long Distance", "Utilities"];
            var yValues = [{$personaltransportsubtotal}, {$publictransportsubtotal}, {$longdistancesubtotal}, {$utilitiessubtotal}];
            var barColors = [
              "#b91d47",
              "#00aba9",
              "#2b5797",
              "#1e7145"
            ];
            
            new Chart("resultsBreakdown", {
              type: "pie",
              data: {
                labels: xValues,
                datasets: [{
                  backgroundColor: barColors,
                  data: yValues
                }]
              },
              options: {
                title: {
                  display: true,
                  text: "Results Breakdown (tonnes CO2e)"
                }
              }
            });
            </script>

            </div>
        </div><br>

        <!-- add button here to "View Full Results" -->

        <div class="row" id="detailedResults">
_END;
        if($drivecar == "Yes") {
            echo <<<_END
            <div class="col text-center" id="breakdownChart">
            <canvas id="resultsBreakdown2" style="width:38%;max-width:450px"></canvas>

            <script>
            var xValues = ["Personal Transport", "Public Transport", "Long Distance", "Utilities"];
            var yValues = [{$personaltransportsubtotal}, {$publictransportsubtotal}, {$longdistancesubtotal}, {$utilitiessubtotal}];
            var barColors = [
            "#b91d47",
            "#00aba9",
            "#2b5797",
            "#1e7145"
            ];
            
            new Chart("resultsBreakdown2", {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                backgroundColor: barColors,
                data: yValues
                }]
            },
            options: {
                title: {
                display: true,
                text: "Results Breakdown (tonnes CO2e)"
                }
            }
            });
            </script>
            </div>
            <div class="col text-center" id="breakdownText">
            <h2 class="h2 mb-3 font-weight-normal" id="grandTotal">Personal Transport</h2>
            <h5 class="h5 mb-3 font-weight-normal">You drive an estimated </h5>
            </div>
_END;
        } else {
            echo <<<_END

            <div class="col text-center" id="detailedResultsAlt">
            <h2 class="h2 mb-3 font-weight-normal" id="grandTotal">Personal Transport</h2>
            <h5 class="h5 mb-3 font-weight-normal">is the biggest contributor to your footprint</h5>
            </div>
        
        </div><br>
_END;
        }

}
else
{
    echo '<div class="text-center">    
    <h4 class="h4 mb-3 font-weight-normal">Error</h4>
    <p>No results found, try the calculator again.</p>';
}

require_once "footer.php";

?>