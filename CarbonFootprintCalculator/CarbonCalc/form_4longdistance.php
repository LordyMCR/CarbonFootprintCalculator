<?php

require_once "header.php";

if(isset($_POST['busQuestion'])) {
    $busmiles = $trammiles = $londonmiles = $trainmiles = $coachmiles = $publictransportsubtotal = $publictransportsubtotal = "";

    $busMultiplier = 0.10227;
    $tramMultiplier = 0.02861;
    $londonMultiplier = 0.02781;
    $trainMultiplier = 0.03549;
    $coachMultiplier = 0.02684;

    $_SESSION['busQuestion'] = $_POST['busQuestion'];
    $_SESSION['tramQuestion'] = $_POST['tramQuestion'];
    $_SESSION['londonQuestion'] = $_POST['londonQuestion'];
    $_SESSION['trainQuestion'] = $_POST['trainQuestion'];
    $_SESSION['coachQuestion'] = $_POST['coachQuestion'];

    if($_SESSION['busQuestion'] == "Yes") {
        if (isset($_POST['busMilesWeekly']) && $_POST['busMilesWeekly'] >= 0) {
            $_SESSION['busMilesWeekly'] = $_POST['busMilesWeekly'];
            $busmiles = ($_POST['busMilesWeekly']*52)*$busMultiplier;
        } else {
            $_SESSION['busMilesWeekly'] = 0;
        }
        if (isset($_POST['busMilesMonthly']) && $_POST['busMilesMonthly'] >= 0) {
            $_SESSION['busMilesMonthly'] = $_POST['busMilesMonthly'];
            $busmiles = ($_POST['busMilesMonthly']*12)*$busMultiplier;
        } else {
            $_SESSION['busMilesMonthly'] = 0;
        }
        if (isset($_POST['busMilesYearly']) && $_POST['busMilesYearly'] >= 0) {
            $_SESSION['busMilesYearly'] = $_POST['busMilesYearly'];
            $busmiles = ($_POST['busMilesYearly'])*$busMultiplier;
        } else {
            $_SESSION['busMilesYearly'] = 0;
        }
    } else {
        $busmiles = 0;
        $_SESSION['busMilesWeekly'] = 0;
        $_SESSION['busMilesMonthly'] = 0;
        $_SESSION['busMilesYearly'] = 0;
    }
    if($_SESSION['tramQuestion'] == "Yes") {
        if (isset($_POST['tramMilesWeekly']) && $_POST['tramMilesWeekly'] >= 0) {
            $_SESSION['tramMilesWeekly'] = $_POST['tramMilesWeekly'];
            $trammiles = ($_POST['tramMilesWeekly']*52)*$tramMultiplier;
        } else {
            $_SESSION['tramMilesWeekly'] = 0;
        }
        if (isset($_POST['tramMilesMonthly']) && $_POST['tramMilesMonthly'] >= 0) {
            $_SESSION['tramMilesMonthly'] = $_POST['tramMilesMonthly'];
            $trammiles = ($_POST['tramMilesMonthly']*12)*$tramMultiplier;
        } else {
            $_SESSION['tramMilesMonthly'] = 0;
        }
        if (isset($_POST['tramMilesYearly']) && $_POST['tramMilesYearly'] >= 0) {
            $_SESSION['tramMilesYearly'] = $_POST['tramMilesYearly'];
            $trammiles = ($_POST['tramMilesYearly'])*$tramMultiplier;
        } else {
            $_SESSION['tramMilesYearly'] = 0;
        }
    } else {
        $trammiles = 0;
        $_SESSION['tramMilesWeekly'] = 0;
        $_SESSION['tramMilesMonthly'] = 0;
        $_SESSION['tramMilesYearly'] = 0;
    }
    if($_SESSION['londonQuestion'] == "Yes") {
        if (isset($_POST['londonMilesWeekly']) && $_POST['londonMilesWeekly'] >= 0) {
            $_SESSION['londonMilesWeekly'] = $_POST['londonMilesWeekly'];
            $londonmiles = ($_POST['londonMilesWeekly']*52)*$londonMultiplier;
        } else {
            $_SESSION['londonMilesWeekly'] = 0;
        }
        if (isset($_POST['londonMilesMonthly']) && $_POST['londonMilesMonthly'] >= 0) {
            $_SESSION['londonMilesMonthly'] = $_POST['londonMilesMonthly'];
            $londonmiles = ($_POST['londonMilesMonthly']*12)*$londonMultiplier;
        } else {
            $_SESSION['londonMilesMonthly'] = 0;
        }
        if (isset($_POST['londonMilesYearly']) && $_POST['londonMilesYearly'] >= 0) {
            $_SESSION['londonMilesYearly'] = $_POST['londonMilesYearly'];
            $londonmiles = ($_POST['londonMilesYearly'])*$londonMultiplier;
        } else {
            $_SESSION['londonMilesYearly'] = 0;
        }
    } else {
        $londonmiles = 0;
        $_SESSION['londonMilesWeekly'] = 0;
        $_SESSION['londonMilesMonthly'] = 0;
        $_SESSION['londonMilesYearly'] = 0;
    }
    if($_SESSION['trainQuestion'] == "Yes") {
        if (isset($_POST['trainMilesWeekly']) && $_POST['trainMilesWeekly'] >= 0) {
            $_SESSION['trainMilesWeekly'] = $_POST['trainMilesWeekly'];
            $trainmiles = ($_POST['trainMilesWeekly']*52)*$trainMultiplier;
        } else {
            $_SESSION['trainMilesWeekly'] = 0;
        }
        if (isset($_POST['trainMilesMonthly']) && $_POST['trainMilesMonthly'] >= 0) {
            $_SESSION['trainMilesMonthly'] = $_POST['trainMilesMonthly'];
            $trainmiles = ($_POST['trainMilesMonthly']*12)*$trainMultiplier;
        } else {
            $_SESSION['trainMilesMonthly'] = 0;
        }
        if (isset($_POST['trainMilesYearly']) && $_POST['trainMilesYearly'] >= 0) {
            $_SESSION['trainMilesYearly'] = $_POST['trainMilesYearly'];
            $trainmiles = ($_POST['trainMilesYearly'])*$trainMultiplier;
        } else {
            $_SESSION['trainMilesYearly'] = 0;
        }
    } else {
        $trainmiles = 0;
        $_SESSION['trainMilesWeekly'] = 0;
        $_SESSION['trainMilesMonthly'] = 0;
        $_SESSION['trainMilesYearly'] = 0;
    }
    if($_SESSION['coachQuestion'] == "Yes") {
        if (isset($_POST['coachMilesWeekly']) && $_POST['coachMilesWeekly'] >= 0) {
            $_SESSION['coachMilesWeekly'] = $_POST['coachMilesWeekly'];
            $coachmiles = ($_POST['coachMilesWeekly']*52)*$coachMultiplier;
        } else {
            $_SESSION['coachMilesWeekly'] = 0;
        }
        if (isset($_POST['coachMilesMonthly']) && $_POST['coachMilesMonthly'] >= 0) {
            $_SESSION['coachMilesMonthly'] = $_POST['coachMilesMonthly'];
            $coachmiles = ($_POST['coachMilesMonthly']*12)*$coachMultiplier;
        } else {
            $_SESSION['coachMilesMonthly'] = 0;
        }
        if (isset($_POST['coachMilesYearly']) && $_POST['coachMilesYearly'] >= 0) {
            $_SESSION['coachMilesYearly'] = $_POST['coachMilesYearly'];
            $coachmiles = ($_POST['coachMilesYearly'])*$coachMultiplier;
        } else {
            $_SESSION['coachMilesYearly'] = 0;
        }
    } else {
        $coachmiles = 0;
        $_SESSION['coachMilesWeekly'] = 0;
        $_SESSION['coachMilesMonthly'] = 0;
        $_SESSION['coachMilesYearly'] = 0;
    }

    $publictransportsubtotal = $busmiles+$trammiles+$londonmiles+$trainmiles+$coachmiles;

    //  convert results from kg to tonnes
    $publictransportsubtotal = $publictransportsubtotal/1000;

    $_SESSION['publictransportsubtotal'] = $publictransportsubtotal;

        echo<<<_END
        <br>
        <div class="container">
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 68%;" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">68%</div>
            </div>
        </div>
        <div class="text-center" id="form">    
            <form class="form-group" action="form_5utilities.php" method="post">
                <div id="section">
                    <div class="container">
                        <h4 class="h4 mb-3 font-weight-normal" id="formHeader">Long Distance</h4>
                        <label for="flightsTotal">In the last year, how many return flights have you made to the below zones?</label><br>
                        <small id="flightsTotalSmallText" class="form-text text-muted">Enter the total number of RETURN flights to each zone. If none, enter 0.</small><br>
                        <small id="flightsTotalSmallText" class="form-text text-muted"><a class="link-success" href="#" data-bs-toggle="modal" data-bs-target="#countryModal">Click here to display example list of countries in each zone.</a></small><br><br>
                        <img src="flightMap.jpg" class="img-fluid" alt="Flight Map Zones">
                        <div class="row" id="flightQ">
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="Domestic (UK-UK)" min="0" max="365" id="flightsTotalDomestic" name="flightsTotalDomestic" aria-describedby="flightsTotalSmallText" required>
                            </div>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="Red" min="0" max="365" id="flightsTotalRed" name="flightsTotalRed" aria-describedby="flightsTotalSmallText" required>
                            </div>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="Yellow" min="0" max="365" id="flightsTotalYellow" name="flightsTotalYellow" aria-describedby="flightsTotalSmallText" required>
                            </div>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="Green" min="0" max="365" id="flightsTotalGreen" name="flightsTotalGreen" aria-describedby="flightsTotalSmallText" required>
                            </div>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="Blue" min="0" max="365" id="flightsTotalBlue" name="flightsTotalBlue" aria-describedby="flightsTotalSmallText" required>
                            </div>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" placeholder="Purple" min="0" max="365" id="flightsTotalPurple" name="flightsTotalPurple" aria-describedby="flightsTotalSmallText" required>
                            </div>
                        </div><br>
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Next">
                    </div>
                </div>
            </form>
        </div>

        <div id="countryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 id="myModalLabel">Example Countries</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>
                    <div class="modal-body">
                        <p><u>Domestic</u><br>
                        Flights departing from the UK and arriving within the UK, for example Edinburgh to London Heathrow.</p>
                        <p><u>Red Zone (under 1500km)</u><br>
                        France, Spain, Belgium, Netherlands, Germany, Denmark, Austria, Czechia</p>
                        <p><u>Yellow Zone (1500km-3000km)</u><br>
                        Portugal, Italy, Croatia, Sweden, Finland, Greece, Hungary, Poland, Bulgaria, Romania, Algeria, Morocco, Tunisia</p>
                        <p><u>Green Zone (3000km-6000km)</u><br>
                        Eastern USA, Eastern Canada, Cuba, Puerto Rica, Northern/Central Africa, Middle East, India, Bangladesh, Mongolia</p>
                        <p><u>Blue Zone (6000km-9000km)</u><br>
                        Western USA, Western Canada, Mexico, Columbia, Brazil, Venezuela, Southern Africa, Madagascar, China, Thailand, Cambodia, Vietnam, Myanmar (Burma), Sri Lanka</p>
                        <p><u>Purple Zone (over 9000km)</u><br>
                        Chile, Argentina, Paraguay, Uruguay, South Africa, Malaysia, Philippines, Indonesia, Papua New Guinea, Australia, New Zealand, South Korea, Japan</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    _END;
}
else
{
    echo<<<_END
    <div class="text-center">    
    <h4 class="h4 mb-3 font-weight-normal">Error</h4>
    <p>Required calculator details not completed, try again.</p>
    </div>
_END;
    $_SESSION = array();

    setcookie(session_name(), "", time() - 2592000, '/');

    session_destroy();
}
require_once "footer.php";

?>