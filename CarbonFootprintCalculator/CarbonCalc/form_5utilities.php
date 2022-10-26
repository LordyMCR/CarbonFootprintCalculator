<?php

require_once "header.php";

if (isset($_POST['flightsTotalDomestic'])) {
    $longdistancesubtotal = "";

    $domesticFlightMultiplier = 184.4025;
    $redFlightMultiplier = 230.295;
    $yellowFlightMultiplier = 690.885;
    $greenFlightMultiplier = 1737.81;
    $blueFlightMultiplier = 2896.35;
    $purpleFlightMultiplier = 5406.52;

    $_SESSION['flightsTotalDomestic'] = $_POST['flightsTotalDomestic'];
    $_SESSION['flightsTotalRed'] = $_POST['flightsTotalRed'];
    $_SESSION['flightsTotalYellow'] = $_POST['flightsTotalYellow'];
    $_SESSION['flightsTotalGreen'] = $_POST['flightsTotalGreen'];
    $_SESSION['flightsTotalBlue'] = $_POST['flightsTotalBlue'];
    $_SESSION['flightsTotalPurple'] = $_POST['flightsTotalPurple'];

    $longdistancesubtotal = (($_POST['flightsTotalDomestic'])*$domesticFlightMultiplier)+(($_POST['flightsTotalRed'])*$redFlightMultiplier)+(($_POST['flightsTotalYellow'])*$yellowFlightMultiplier)+(($_POST['flightsTotalGreen'])*$greenFlightMultiplier)+(($_POST['flightsTotalBlue'])*$blueFlightMultiplier)+(($_POST['flightsTotalPurple'])*$purpleFlightMultiplier);

    //  convert results from kg to tonnes
    $longdistancesubtotal = $longdistancesubtotal/1000;

    $_SESSION['longdistancesubtotal'] = $longdistancesubtotal;

        echo<<<_END
        <br>
        <div class="container">
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
            </div>
        </div>
        <div class="text-center" id="form">    
            <form class="form-group" action="resultsNEW.php" method="post">
                <div id="section">
                    <div class="container">
                        <h4 class="h4 mb-3 font-weight-normal" id="formHeader">Utilities</h4>
                        <label for="electricalUsage">What is your home electrical kWh usage?</label><br>
                        <small id="electricalUsageSmallText" class="form-text text-muted">Enter your usage in ONE of the below boxes</small>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Weekly" min="0" max="10000" id="electricalUsageWeekly" name="electricalUsageWeekly" aria-describedby="electricalUsageSmallText">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Monthly" min="0" max="10000" id="electricalUsageMonthly" name="electricalUsageMonthly" aria-describedby="electricalUsageSmallText">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Yearly" min="0" max="10000" id="electricalUsageYearly" name="electricalUsageYearly" aria-describedby="electricalUsageSmallText">
                            </div>
                        </div><br>
                        <label for="gasUsage">What is your home gas kWh usage?</label><br>
                        <small id="gasUsageSmallText" class="form-text text-muted">Enter your usage in ONE of the below boxes</small>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Weekly" min="0" max="10000" id="gasUsageWeekly" name="gasUsageWeekly" aria-describedby="gasUsageSmallText">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Monthly" min="0" max="10000" id="gasUsageMonthly" name="gasUsageMonthly" aria-describedby="gasUsageSmallText">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Yearly" min="0" max="10000" id="gasUsageYearly" name="gasUsageYearly" aria-describedby="gasUsageSmallText">
                            </div>
                        </div><br>
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Calculate">
                    </div>
                </div>
            </form>
        </div>
    _END;
}
else
{
    echo<<<_END
    <div class="text-center">    
    <h4 class="h4 mb-3 font-weight-normal">Error</h4>
    <p>Required calculator details not completed, try again.</p>
_END;
    $_SESSION = array();

    setcookie(session_name(), "", time() - 2592000, '/');

    session_destroy();
}
require_once "footer.php";

?>