<?php

require_once "header.php";


    echo<<<_END
    <div class="text-center" id="form">    
        <form class="form-group" action="results.php" method="post">
            <div id="section">
            <h4 class="h4 mb-3 font-weight-normal" id="formHeader">Details</h4>
            <label for="region">Which region of the UK do you live in?</label><br>
            <small id="regionSmallText" class="form-text text-muted">Select an option from the drop-down box</small>
            <select class="form-select" id="region" name="region" aria-describedby="regionSmallText" required autofocus>
                <option hidden>Regions</option>
                <option value="North East">North East</option>
                <option value="North West">North West</option>
                <option value="Yorkshire & The Humber">Yorkshire & The Humber</option>
                <option value="East Midlands">East Midlands</option>
                <option value="West Midlands">West Midlands</option>
                <option value="East">East</option>
                <option value="London">London</option>
                <option value="South East">South East</option>
                <option value="South West">South West</option>
                <option value="Wales">Wales</option>
                <option value="Scotland">Scotland</option>
            </select><br>
            <label for="postcode">What is your postcode?</label><br>
            <small id="postcodeSmallText" class="form-text text-muted">Enter your postcode</small>
            <input type="text" class="form-control" placeholder="e.g M4 6AP" minlength="1" maxlength="8" id="postcode" name="postcode" aria-describedby="postcodeSmallText" required>
            </div><br>

            <div id="section">
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
            <select class="form-select" id="vehicleType" name="vehicleType" aria-describedby="vehicleTypeSmallText" required>
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
                    <input type="number" class="form-control" placeholder="Weekly" min="1" max="5000" id="vehicleMilesWeekly" name="vehicleMilesWeekly" aria-describedby="vehicleMilesSmallText">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Monthly" min="1" max="50000" id="vehicleMilesMonthly" name="vehicleMilesMonthly" aria-describedby="vehicleMilesSmallText">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Yearly" min="1" max="100000" id="vehicleMilesYearly" name="vehicleMilesYearly" aria-describedby="vehicleMilesSmallText">
                </div>
            </div>
            </div><br>

            <div id="section">
            <h4 class="h4 mb-3 font-weight-normal" id="formHeader">Public Transport</h4>
            <label for="busMiles">How many miles do you travel by bus?</label><br>
            <small id="busMilesSmallText" class="form-text text-muted">Enter your distance, in miles, in ONE of the below boxes</small>
            <div class="row">
                <div class="col">
                    <input type="number" class="form-control" placeholder="Weekly" min="0" max="5000" id="busMilesWeekly" name="busMilesWeekly" aria-describedby="busMilesSmallText">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Monthly" min="0" max="50000" id="busMilesMonthly" name="busMilesMonthly" aria-describedby="busMilesSmallText">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Yearly" min="0" max="100000" id="busMilesYearly" name="busMilesYearly" aria-describedby="busMilesSmallText">
                </div>
            </div><br>
            <label for="tramMiles">How many miles do you travel by tram / light rail?</label><br>
            <small id="tramMilesSmallText" class="form-text text-muted">Enter your distance, in miles, in ONE of the below boxes</small>
            <div class="row">
                <div class="col">
                    <input type="number" class="form-control" placeholder="Weekly" min="0" max="5000" id="tramMilesWeekly" name="tramMilesWeekly" aria-describedby="tramMilesSmallText">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Monthly" min="0" max="50000" id="tramMilesMonthly" name="tramMilesMonthly" aria-describedby="tramMilesSmallText">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Yearly" min="0" max="100000" id="tramMilesYearly" name="tramMilesYearly" aria-describedby="tramMilesSmallText">
                </div>
            </div><br>
            <label for="londonMiles">How many miles do you travel by London Underground?</label><br>
            <small id="londonMilesSmallText" class="form-text text-muted">Enter your distance, in miles, in ONE of the below boxes</small>
            <div class="row">
                <div class="col">
                    <input type="number" class="form-control" placeholder="Weekly" min="0" max="5000" id="londonMilesWeekly" name="londonMilesWeekly" aria-describedby="londonMilesSmallText">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Monthly" min="0" max="5000" id="londonMilesMonthly" name="londonMilesMonthly" aria-describedby="londonMilesSmallText">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Yearly" min="0" max="5000" id="londonMilesYearly" name="londonMilesYearly" aria-describedby="londonMilesSmallText">
                </div>
            </div><br>
            <label for="trainMiles">How many miles do you travel by train?</label><br>
            <small id="trainMilesSmallText" class="form-text text-muted">Enter your distance, in miles, in ONE of the below boxes</small>
            <div class="row">
                <div class="col">
                    <input type="number" class="form-control" placeholder="Weekly" min="0" max="5000" id="trainMilesWeekly" name="trainMilesWeekly" aria-describedby="trainMilesSmallText">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Monthly" min="0" max="5000" id="trainMilesMonthly" name="trainMilesMonthly" aria-describedby="trainMilesSmallText">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Yearly" min="0" max="5000" id="trainMilesYearly" name="trainMilesYearly" aria-describedby="trainMilesSmallText">
                </div>
            </div><br>
            <label for="coachMiles">How many miles do you travel by coach?</label><br>
            <small id="coachMilesSmallText" class="form-text text-muted">Enter your distance, in miles, in ONE of the below boxes</small>
            <div class="row">
                <div class="col">
                    <input type="number" class="form-control" placeholder="Weekly" min="0" max="5000" id="coachMilesWeekly" name="coachMilesWeekly" aria-describedby="coachMilesSmallText">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Monthly" min="0" max="5000" id="coachMilesMonthly" name="coachMilesMonthly" aria-describedby="coachMilesSmallText">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Yearly" min="0" max="5000" id="coachMilesYearly" name="coachMilesYearly" aria-describedby="coachMilesSmallText">
                </div>
            </div>
            </div><br>

            <div id="section">
            <h4 class="h4 mb-3 font-weight-normal" id="formHeader">Long Distance</h4>
            <label for="flightsTotal">In the last year, how many return flights have you made to the below zones?</label><br>
            <small id="flightsTotalSmallText" class="form-text text-muted">Enter the total number of RETURN flights to each zone. If none, enter 0</small>
            <div class="row">
                <div class="col">
                    <input type="number" class="form-control" placeholder="Domestic" min="0" max="365" id="flightsTotalDomestic" name="flightsTotalDomestic" aria-describedby="flightsTotalSmallText">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Red" min="0" max="365" id="flightsTotalRed" name="flightsTotalRed" aria-describedby="flightsTotalSmallText">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Yellow" min="0" max="365" id="flightsTotalYellow" name="flightsTotalYellow" aria-describedby="flightsTotalSmallText">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Green" min="0" max="365" id="flightsTotalGreen" name="flightsTotalGreen" aria-describedby="flightsTotalSmallText">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Blue" min="0" max="365" id="flightsTotalBlue" name="flightsTotalBlue" aria-describedby="flightsTotalSmallText">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Purple" min="0" max="365" id="flightsTotalPurple" name="flightsTotalPurple" aria-describedby="flightsTotalSmallText">
                </div>
            </div>
            </div><br>

            <div id="section">
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
            </div>
            </div><br>

            <input type="submit" class="btn btn-lg btn-success btn-block" value="Calculate">

        </form>
    </div>
_END;

require_once "footer.php";

?>