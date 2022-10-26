<?php

require_once "header.php";

if (isset($_POST['gasUsageWeekly']) || isset($_POST['gasUsageMonthly']) || isset($_POST['gasUsageYearly'])) {

    $electricalusage = $gasusage = $utilitiessubtotal = $grandtotal = "";

    $electricUsageMultiplier = 0.21233;
    $gasUsageMultiplier = 0.20297;

    if (isset($_POST['electricalUsageWeekly']) && $_POST['electricalUsageWeekly'] >= 0) {
        $_SESSION['electricalUsageWeekly'] = $_POST['electricalUsageWeekly'];
        $electricalusage = ($_POST['electricalUsageWeekly']*52)*$electricUsageMultiplier;
    } else {
        $_SESSION['electricalUsageWeekly'] = 0;
    }
    if (isset($_POST['electricalUsageMonthly']) && $_POST['electricalUsageMonthly'] >= 0) {
        $_SESSION['electricalUsageMonthly'] = $_POST['electricalUsageMonthly'];
        $electricalusage = ($_POST['electricalUsageMonthly']*12)*$electricUsageMultiplier;
    } else {
        $_SESSION['electricalUsageMonthly'] = 0;
    }
    if (isset($_POST['electricalUsageYearly']) && $_POST['electricalUsageYearly'] >= 0) {
        $_SESSION['electricalUsageYearly'] = $_POST['electricalUsageYearly'];
        $electricalusage = ($_POST['electricalUsageYearly'])*$electricUsageMultiplier;
    } else {
        $_SESSION['electricalUsageYearly'] = 0;
    }
    if (isset($_POST['gasUsageWeekly']) && $_POST['gasUsageWeekly'] >= 0) {
        $_SESSION['gasUsageWeekly'] = $_POST['gasUsageWeekly'];
        $gasusage = ($_POST['gasUsageWeekly']*52)*$gasUsageMultiplier;
    } else {
        $_SESSION['gasUsageWeekly'] = 0;
    }
    if (isset($_POST['gasUsageMonthly']) && $_POST['gasUsageMonthly'] >= 0) {
        $_SESSION['gasUsageMonthly'] = $_POST['gasUsageMonthly'];
        $gasusage = ($_POST['gasUsageMonthly']*12)*$gasUsageMultiplier;
    } else {
        $_SESSION['gasUsageMonthly'] = 0;
    }
    if (isset($_POST['gasUsageYearly']) && $_POST['gasUsageYearly'] >= 0) {
        $_SESSION['gasUsageYearly'] = $_POST['gasUsageYearly'];
        $gasusage = ($_POST['gasUsageYearly'])*$gasUsageMultiplier;
    } else {
        $_SESSION['gasUsageYearly'] = 0;
    }

    $utilitiessubtotal = $electricalusage+$gasusage;

    //  convert results from kg to tonnes
    $utilitiessubtotal = $utilitiessubtotal/1000;

    $_SESSION['utilitiessubtotal'] = $utilitiessubtotal;
    
    $grandtotal = $_SESSION['personaltransportsubtotal']+$_SESSION['publictransportsubtotal']+$_SESSION['longdistancesubtotal']+$_SESSION['utilitiessubtotal'];

    $grandtotal = $grandtotal+1.7;
    
    $calculationdate = date('Y-m-d H:i:s');
    
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if (!$connection)
    {
        die("Connection to database failed: " . $mysqli_connect_error);
    }
    
        $query = "INSERT INTO results (calculation_date, region_name, postcode, q_drive_vehicle, q_vehicle_type, q_vehicle_mileage_weekly, q_vehicle_mileage_monthly, q_vehicle_mileage_yearly, personal_transport_subtotal, q_travel_bus, q_bus_mileage_weekly, q_bus_mileage_monthly, q_bus_mileage_yearly, q_travel_tram, q_tram_lightrail_mileage_weekly, q_tram_lightrail_mileage_monthly, q_tram_lightrail_mileage_yearly, q_travel_london_underground, q_london_underground_mileage_weekly, q_london_underground_mileage_monthly, q_london_underground_mileage_yearly, q_travel_train, q_train_mileage_weekly, q_train_mileage_monthly, q_train_mileage_yearly, q_travel_coach, q_coach_mileage_weekly, q_coach_mileage_monthly, q_coach_mileage_yearly, public_transport_subtotal, q_domestic_flights, q_0_1500km_flights, q_1500_3000km_flights, q_3000_6000km_flights, q_6000_9000km_flights, q_9000km_plus_flights, long_distance_subtotal, q_home_electrical_usage_weekly, q_home_electrical_usage_monthly, q_home_electrical_usage_yearly, q_home_gas_usage_weekly, q_home_gas_usage_monthly, q_home_gas_usage_yearly, utilities_subtotal, grand_total_emissions)
        VALUES ('$calculationdate', '" . $_SESSION['region'] . "', '" . $_SESSION['postcode'] . "', '" . $_SESSION['driveQuestion'] . "', '" . $_SESSION['vehicleType'] . "', '" . $_SESSION['vehicleMilesWeekly'] . "', '" . $_SESSION['vehicleMilesMonthly'] . "', '" . $_SESSION['vehicleMilesYearly'] . "', '" . $_SESSION['personaltransportsubtotal'] . "', '" . $_SESSION['busQuestion'] . "', '" . $_SESSION['busMilesWeekly'] . "', '" . $_SESSION['busMilesMonthly'] . "', '" . $_SESSION['busMilesYearly'] . "', '" . $_SESSION['tramQuestion'] . "', '" . $_SESSION['tramMilesWeekly'] . "', '" . $_SESSION['tramMilesMonthly'] . "', '" . $_SESSION['tramMilesYearly'] . "', '" . $_SESSION['londonQuestion'] . "', '" . $_SESSION['londonMilesWeekly'] . "', '" . $_SESSION['londonMilesMonthly'] . "', '" . $_SESSION['londonMilesYearly'] . "', '" . $_SESSION['trainQuestion'] . "', '" . $_SESSION['trainMilesWeekly'] . "', '" . $_SESSION['trainMilesMonthly'] . "', '" . $_SESSION['trainMilesYearly'] . "', '" . $_SESSION['coachQuestion'] . "', '" . $_SESSION['coachMilesWeekly'] . "', '" . $_SESSION['coachMilesMonthly'] . "', '" . $_SESSION['coachMilesYearly'] . "', '" . $_SESSION['publictransportsubtotal'] . "', '" . $_SESSION['flightsTotalDomestic'] . "', '" . $_SESSION['flightsTotalRed'] . "', '" . $_SESSION['flightsTotalYellow'] . "', '" . $_SESSION['flightsTotalGreen'] . "', '" . $_SESSION['flightsTotalBlue'] . "', '" . $_SESSION['flightsTotalPurple'] . "', '" . $_SESSION['longdistancesubtotal'] . "', '" . $_SESSION['electricalUsageWeekly'] . "', '" . $_SESSION['electricalUsageMonthly'] . "', '" . $_SESSION['electricalUsageYearly'] . "', '" . $_SESSION['gasUsageWeekly'] . "', '" . $_SESSION['gasUsageMonthly'] . "', '" . $_SESSION['gasUsageYearly'] . "', '" . $_SESSION['utilitiessubtotal'] . "', '$grandtotal')";

        if (mysqli_query($connection, $query))
        {
        }
        else
        {
            die("Error: " . mysqli_error($connection));
        }
   
    mysqli_close($connection);

    $region = $_SESSION['region'];

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

    $personaltransportsubtotal = round(($_SESSION['personaltransportsubtotal']),2);
    $publictransportsubtotal = round(($_SESSION['publictransportsubtotal']),2);
    $longdistancesubtotal = round(($_SESSION['longdistancesubtotal']),2);
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
        <div class="row" id="mainResultsTitle">
            <div class="col text-center" id="mainResultsText">
                <h5 class="h5 mb-3 font-weight-normal">Your estimated annual carbon footprint is</h5>
                <h1 class="h1 mb-3 font-weight-normal" id="grandTotal">{$grandtotal} tonnes CO2e</h1>
            </div>
        </div><hr>
        <div class="row" id="mainResults">
            <div class="col text-center" id="resultsRegional">
_END;
            if ($grandtotal < $regionEstimate) {
                echo <<<_END
                <h5 class="h5 mb-3 font-weight-normal">Your footprint is</h5>
                <h2 class="h2 mb-3 font-weight-normal" id="grandTotal">{$regionComparison}% smaller than your regional average</h2>
                
                <canvas id="regionalChartSmaller" style="width:40%;max-width:600px"></canvas>

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
                </div>
_END;
            }
            else {
                $regionComparison = abs($regionComparison);
                echo <<<_END
                <h5 class="h5 mb-3 font-weight-normal">Your carbon footprint is</h5>
                <h2 class="h2 mb-3 font-weight-normal" id="grandTotal">{$regionComparison}% larger than your regional average</h2>

                <canvas id="regionalChartLarger" style="width:40%;max-width:600px"></canvas>

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
            </div>
_END;
            }
        echo <<<_END
            <div class="col text-center" id="resultsUK">
_END;
        if ($grandtotal < $ukEstimate) {
            echo <<<_END
            <h5 class="h5 mb-3 font-weight-normal">Your footprint is</h5>
            <h2 class="h2 mb-3 font-weight-normal" id="grandTotal">{$ukComparison}% smaller than the UK average</h2>
            
            <canvas id="ukChartSmaller" style="width:40%;max-width:600px"></canvas>

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

            <canvas id="ukChartLarger" style="width:40%;max-width:600px"></canvas>

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
        </div>
        <hr>
        <div class="row" id="mainResults">
            <div class="col-xl-6 col-lg-6 col-sm-12 text-center" id="breakdownText">
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
            <div class="col-xl-6 col-lg-6 col-sm-12" id="breakdownChart">
                <canvas id="resultsBreakdown" style="width:38%;max-width:450px"></canvas>

                <script>
                var xValues = ["Personal Transport", "Public Transport", "Long Distance", "Utilities", "Baseline"];
                var yValues = [{$personaltransportsubtotal}, {$publictransportsubtotal}, {$longdistancesubtotal}, {$utilitiessubtotal}, 1.7];
                var barColors = [
                "#b91d47",
                "#00aba9",
                "#2b5797",
                "#1e7145",
                "#d9901a"
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
        </div>
        
_END;
}
else
{
    echo '<div class="text-center">    
    <h4 class="h4 mb-3 font-weight-normal">Error</h4>
    <p>No results found, try the calculator again.</p>';
    $_SESSION = array();

    setcookie(session_name(), "", time() - 2592000, '/');

    session_destroy();
}

require_once "footer.php";

?>