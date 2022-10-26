<?php

require_once "header.php";

if(isset($_POST['driveQuestion'])) {
    $vehiclemiles = $personaltransportsubtotal = "";

    $petrolCarMultiplier = 0.2805;
    $dieselCarMultiplier = 0.2711;
    $hybridCarMultiplier = 0.19275;
    $electricCarMultiplier = 0.08814;
    $motorbikeMultiplier = 0.18274;

    $_SESSION['driveQuestion'] = $_POST['driveQuestion'];

    if($_SESSION['driveQuestion'] == "Yes") {
        $_SESSION['vehicleType'] = $_POST['vehicleType'];
        if(isset($_POST['vehicleMilesWeekly']) && $_POST['vehicleMilesWeekly'] >= 0) {
            $_SESSION['vehicleMilesWeekly'] = $_POST['vehicleMilesWeekly'];
            $vehiclemiles = $_POST['vehicleMilesWeekly']*52;
        } else {
            $_SESSION['vehicleMilesWeekly'] = 0;
        }
        if(isset($_POST['vehicleMilesMonthly']) && $_POST['vehicleMilesMonthly'] >= 0) {
            $_SESSION['vehicleMilesMonthly'] = $_POST['vehicleMilesMonthly'];
            $vehiclemiles = $_POST['vehicleMilesMonthly']*12;
        } else {
            $_SESSION['vehicleMilesMonthly'] = 0;
        }
        if(isset($_POST['vehicleMilesYearly']) && $_POST['vehicleMilesYearly'] >= 0) {
            $_SESSION['vehicleMilesYearly'] = $_POST['vehicleMilesYearly'];
            $vehiclemiles = $_POST['vehicleMilesYearly'];
        } else {
            $_SESSION['vehicleMilesYearly'] = 0;
        }
        if ($_POST['vehicleType'] == "Car Petrol") {
            $personaltransportsubtotal = $vehiclemiles*$petrolCarMultiplier;
        } elseif ($_POST['vehicleType'] == "Car Diesel") {
            $personaltransportsubtotal = $vehiclemiles*$dieselCarMultiplier;
        } elseif ($_POST['vehicleType'] == "Car Hybrid") {
            $personaltransportsubtotal = $vehiclemiles*$hybridCarMultiplier;
        } elseif ($_POST['vehicleType'] == "Car Electric") {
            $personaltransportsubtotal = $vehiclemiles*$electricCarMultiplier;
        } elseif ($_POST['vehicleType'] == "Motorbike") {
            $personaltransportsubtotal = $vehiclemiles*$motorbikeMultiplier;
        }
    
        //  convert results from kg to tonnes
        $personaltransportsubtotal = $personaltransportsubtotal/1000;
    
        $_SESSION['personaltransportsubtotal'] = $personaltransportsubtotal;
    
    } else {
        $_SESSION['vehicleType'] = NULL;
        $_SESSION['vehicleMilesWeekly'] = 0;
        $_SESSION['vehicleMilesMonthly'] = 0;
        $_SESSION['vehicleMilesYearly'] = 0;
        $_SESSION['personaltransportsubtotal'] = 0;
    }

        echo<<<_END
        <br>
        <div class="container">
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 51%;" aria-valuenow="51" aria-valuemin="0" aria-valuemax="100">51%</div>
            </div>
        </div>
        <div class="text-center" id="form">    
            <form class="form-group" action="form_4longdistance.php" method="post">
                <div id="section">
                    <div class="container">
                        <h4 class="h4 mb-3 font-weight-normal" id="formHeader">Public Transport</h4>
                        <small id="publicTransportModalSmallText" class="form-text text-muted"><a class="link-success" href="#" data-bs-toggle="modal" data-bs-target="#distanceModal">Click here to view guidance on how to calculate distances travelled for each Public Transport type.</a></small><br><br>
                        <label for="busQuestion">Do you travel by <b>bus</b>?</label><br>
                        <small id="busQuestionSmallText" class="form-text text-muted">Select an option from the drop-down box</small>
                        <select class="form-select" id="busQuestion" name="busQuestion" aria-describedby="busQuestionSmallText" required>
                            <option hidden>Option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select><br>
                        <label for="busMiles">How many miles do you travel by bus?</label><br>
                        <small id="busMilesSmallText" class="form-text text-muted">Enter your distance, in miles, in ONE of the below boxes</small>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Weekly" min="0" max="5000" id="busMilesWeekly" name="busMilesWeekly" aria-describedby="busMilesSmallText" disabled>
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Monthly" min="0" max="50000" id="busMilesMonthly" name="busMilesMonthly" aria-describedby="busMilesSmallText" disabled>
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Yearly" min="0" max="100000" id="busMilesYearly" name="busMilesYearly" aria-describedby="busMilesSmallText" disabled>
                            </div>
                        </div><br><hr><br>
                        <label for="tramQuestion">Do you travel by <b>tram / light rail</b>?</label><br>
                        <small id="tramQuestionSmallText" class="form-text text-muted">Select an option from the drop-down box</small>
                        <select class="form-select" id="tramQuestion" name="tramQuestion" aria-describedby="tramQuestionSmallText" required>
                            <option hidden>Option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select><br>
                        <label for="tramMiles">How many miles do you travel by tram / light rail?</label><br>
                        <small id="tramMilesSmallText" class="form-text text-muted">Enter your distance, in miles, in ONE of the below boxes</small>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Weekly" min="0" max="5000" id="tramMilesWeekly" name="tramMilesWeekly" aria-describedby="tramMilesSmallText" disabled>
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Monthly" min="0" max="50000" id="tramMilesMonthly" name="tramMilesMonthly" aria-describedby="tramMilesSmallText" disabled>
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Yearly" min="0" max="100000" id="tramMilesYearly" name="tramMilesYearly" aria-describedby="tramMilesSmallText" disabled>
                            </div>
                        </div><br><hr><br>
                        <label for="londonQuestion">Do you travel by <b>London Underground</b>?</label><br>
                        <small id="londonQuestionSmallText" class="form-text text-muted">Select an option from the drop-down box</small>
                        <select class="form-select" id="londonQuestion" name="londonQuestion" aria-describedby="londonQuestionSmallText" required>
                            <option hidden>Option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select><br>
                        <label for="londonMiles">How many miles do you travel by London Underground?</label><br>
                        <small id="londonMilesSmallText" class="form-text text-muted">Enter your distance, in miles, in ONE of the below boxes</small>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Weekly" min="0" max="5000" id="londonMilesWeekly" name="londonMilesWeekly" aria-describedby="londonMilesSmallText" disabled>
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Monthly" min="0" max="5000" id="londonMilesMonthly" name="londonMilesMonthly" aria-describedby="londonMilesSmallText" disabled>
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Yearly" min="0" max="5000" id="londonMilesYearly" name="londonMilesYearly" aria-describedby="londonMilesSmallText" disabled>
                            </div>
                        </div><br><hr><br>
                        <label for="trainQuestion">Do you travel by <b>train</b>?</label><br>
                        <small id="trainQuestionSmallText" class="form-text text-muted">Select an option from the drop-down box</small>
                        <select class="form-select" id="trainQuestion" name="trainQuestion" aria-describedby="trainQuestionSmallText" required>
                            <option hidden>Option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select><br>
                        <label for="trainMiles">How many miles do you travel by train?</label><br>
                        <small id="trainMilesSmallText" class="form-text text-muted">Enter your distance, in miles, in ONE of the below boxes</small>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Weekly" min="0" max="5000" id="trainMilesWeekly" name="trainMilesWeekly" aria-describedby="trainMilesSmallText" disabled>
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Monthly" min="0" max="5000" id="trainMilesMonthly" name="trainMilesMonthly" aria-describedby="trainMilesSmallText" disabled>
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Yearly" min="0" max="5000" id="trainMilesYearly" name="trainMilesYearly" aria-describedby="trainMilesSmallText" disabled>
                            </div>
                        </div><br><hr><br>
                        <label for="coachQuestion">Do you travel by <b>coach</b>?</label><br>
                        <small id="coachQuestionSmallText" class="form-text text-muted">Select an option from the drop-down box</small>
                        <select class="form-select" id="coachQuestion" name="coachQuestion" aria-describedby="coachQuestionSmallText" required>
                            <option hidden>Option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select><br>
                        <label for="coachMiles">How many miles do you travel by coach?</label><br>
                        <small id="coachMilesSmallText" class="form-text text-muted">Enter your distance, in miles, in ONE of the below boxes</small>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Weekly" min="0" max="5000" id="coachMilesWeekly" name="coachMilesWeekly" aria-describedby="coachMilesSmallText" disabled>
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Monthly" min="0" max="5000" id="coachMilesMonthly" name="coachMilesMonthly" aria-describedby="coachMilesSmallText" disabled>
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Yearly" min="0" max="5000" id="coachMilesYearly" name="coachMilesYearly" aria-describedby="coachMilesSmallText" disabled>
                            </div>
                        </div><br>
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Next">
                    </div>
                </div>
            </form>
        </div>
        <div id="distanceModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 id="myModalLabel">Calculating Distances</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <p>In order to get a rough estimate of the distance between two locations, we recommend to use <a href="https://www.google.co.uk/maps/dir/" target="_blank">Google Maps Directions</a>. Enter your start location and end location, and it will suggest routes to get you to the end location. Ensure you are looking at the <u>driving</u> directions, and find the suggested route with the <u>lowest</u> distance.
                    <br><br>For example, if you travelled by train from Manchester Piccadilly Station to Liverpool Lime Street Station, the below image shows the suggested driving routes. <u>Use the route with the lowest distance, therefore the first suggested route in the image below (33.9 miles).</u> 
                    </p>
                    <img src="distanceCalcExample.png" id="distanceScreenshot">
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
_END;
    $_SESSION = array();

    setcookie(session_name(), "", time() - 2592000, '/');

    session_destroy();
}
require_once "footer.php";

?>