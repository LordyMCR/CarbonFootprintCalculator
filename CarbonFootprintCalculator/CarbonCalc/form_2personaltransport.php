<?php

require_once "header.php";

if (isset($_POST['region']) && isset($_POST['postcode'])) {

    $_SESSION['region'] = $_POST['region'];
    $_SESSION['postcode'] = $_POST['postcode'];

    echo<<<_END
    <br>
    <div class="container">
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 34%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100">34%</div>
        </div>
    </div>
    <div class="text-center" id="form">
        <form class="form-group" action="form_3publictransport.php" method="post">
            <div id="section">
                <div class="container">
                    <h4 class="h4 mb-3 font-weight-normal" id="formHeader">Personal Transport</h4>
                    <label for="driveQuestion">Do you drive a car or motorbike?</label><br>
                    <small id="driveQuestionSmallText" class="form-text text-muted">Select an option from the drop-down box</small>
                    <select class="form-select" id="driveQuestion" name="driveQuestion" aria-describedby="driveQuestionSmallText" required>
                        <option hidden>Option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select><br>
                    <label for="vehicleType">What type of car / motorbike do you drive?</label><br>
                    <small id="vehicleTypeSmallText" class="form-text text-muted">Select an option from the drop-down box</small>
                    <select class="form-select" id="vehicleType" name="vehicleType" aria-describedby="vehicleTypeSmallText" required disabled>
                        <option value="default" hidden>Type of vehicle</option>
                        <option value="Car Petrol">Car (petrol)</option>
                        <option value="Car Diesel">Car (diesel)</option>
                        <option value="Car Hybrid">Car (hybrid)</option>
                        <option value="Car Electric">Car (electric)</option>
                        <option value="Motorbike">Motorbike</option>
                    </select><br>
                    <label for="vehicleMiles">How many miles do you drive?</label><br>
                    <small id="vehicleMilesSmallText" class="form-text text-muted">Enter your mileage in ONE of the below boxes</small>
                    <div class="row">
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Weekly" min="1" max="5000" id="vehicleMilesWeekly" name="vehicleMilesWeekly" aria-describedby="vehicleMilesSmallText" disabled>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Monthly" min="1" max="50000" id="vehicleMilesMonthly" name="vehicleMilesMonthly" aria-describedby="vehicleMilesSmallText" disabled>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Yearly" min="1" max="100000" id="vehicleMilesYearly" name="vehicleMilesYearly" aria-describedby="vehicleMilesSmallText" disabled>
                        </div>
                    </div><br>
                    <input type="submit" class="btn btn-lg btn-success btn-block" value="Next">
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