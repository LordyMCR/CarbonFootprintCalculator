<?php

require_once "header.php";

echo <<<_END

<main role="main">

      <div class="jumbotron">
        <div class="container text-center">
            <br>
            <h1 class="display-3">Carbon Footprint Calculator</h1>
          <p>Use our carbon footprint calculator to estimate your annual carbon footprint</p><br>
        </div>
      </div>

      <div class="container text-center">
        <div class="row">
          <div class="col-md-6">
            <h2 id="homeHeader">How big is your carbon footprint?</h2>
            <p>Climate change is happening now. Carbon emissions from your lifestyle choices, transportation and energy usage impact the climate. This is a global problem, but you can be a part of the solution. Solving climate change requires reducing carbon emissions - use our Calculator to identify your emissions and start your journey into building a better tomorrow.</p>
            <p><a class="btn btn-success" href="form_1details.php" role="button">Calculator &raquo;</a></p>
          </div>
          <div class="col-md-6">
            <h2 id="homeHeader">How do we calculate your results?</h2>
            <p>Our Carbon Footprint Calculator asks you questions regarding your Personal Transportation, Public Transport Usage, Long Distance Flights and Electric/Gas Usage. Using your provided figures, it will calculate your total estimated CO2e carbon emissions. See how we use your inputted details to create your estimated total emissions.</p>
            <p><a class="btn btn-secondary" href="how.php" target="_blank" role="button">View details &raquo;</a></p>
          </div>
        </div>
      </div>

</main>

_END;

require_once "footer.php";

?>