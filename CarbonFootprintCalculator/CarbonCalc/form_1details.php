<?php

require_once "header.php";

    echo<<<_END
    <br>
    <div class="container">
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 17%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="17">17%</div>
        </div>
    </div>
    <div class="text-center" id="form">    
        <form class="form-group" action="form_2personaltransport.php" method="post">
            <div id="section">
                <div class="container">
                    <h2 class="h2 mb-3 font-weight-normal" id="formHeader">Details</h2>
                    <label for="region">Which region of the UK do you live in?</label><br>
                    <small id="regionSmallText" class="form-text text-muted">Select an option from the drop-down box</small>
                    <select class="form-select w-40" id="region" name="region" aria-describedby="regionSmallText" required autofocus>
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
                        <option value="Northern Ireland">Northern Ireland</option>
                    </select><br>
                    <label for="postcode">What is your postcode?</label><br>
                    <small id="postcodeSmallText" class="form-text text-muted">Enter your postcode</small>
                    <input type="text" class="form-control" placeholder="e.g M4 6AP" minlength="1" maxlength="8" autocomplete="off" id="postcode" name="postcode" aria-describedby="postcodeSmallText" required><br>
                    <input type="submit" class="btn btn-lg btn-success btn-block" value="Next">
                </div>
            </div>
        </form>
    </div>
_END;

require_once "footer.php";

?>