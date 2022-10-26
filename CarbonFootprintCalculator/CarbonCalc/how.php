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
        <div>
            <h2 id="homeHeader">How we calculate your carbon footprint</h2>
            <p>Our Carbon Footprint Calculator asks you questions regarding your Personal Transportation, Public Transport Usage, Long Distance Flights and Electric/Gas Usage. Using your provided figures, it will: calculate your total estimated CO2e carbon emissions, identify the highest contributor to your total footprint, and compare your results to your regional and UK averages.</p>
        </div><br>
        <div>
            <h2 id="homeHeader">How we calculate your travel emissions</h2>
            <p>In order to provide a more accurate estimate of your carbon emissions, we have split the travel questions into the following sections: Personal Transport, Public Transport and Long Distance.</p>
            <h4 id="homeHeader">Personal Transport</h4>
            <p>The Personal Transport section asks the user whether they drive a vehicle, requiring a selection of either Yes or No. If No is selected, all of the following questions in the Personal Transport section are disabled as this means 0 carbon emissions are emitted. If Yes is selected, the following two questions asks the user to select the vehicle type driven, and the total number of miles the user drives on average.
            We multiply the number of miles driven by the relevant <a href="https://www.gov.uk/government/publications/greenhouse-gas-reporting-conversion-factors-2021">2021 UK government emissions factors</a> for petrol cars, diesel cars, hybrid cars, electric cars and motorbikes.<br>
            An emissions factor calculates how much CO2e is emitted per unit of activity, therefore this calculator takes the number of miles driven and multiplies it by the emissions factor to give an estimated carbon footprint.<br>
            For example, a diesel car emits 0.2711kg of CO2e per mile. If a user drives 12000 miles a year, the user's carbon footprint estimate will be 3252.2kg CO2e a year, or 3.2532 tonnes CO2e a year - 12000*0.2711 = 3252.2kg.</p>
            <h4 id="homeHeader">Public Transport</h4>
            <p>The Public Transport section follows a similar format to the Personal Transport section - the user is asked to submit, on average, the total number of miles travelled via: bus, tram/light rail, London Underground, train and coach.
            The number of miles travelled is multiplied by the relevant <a href="https://www.gov.uk/government/publications/greenhouse-gas-reporting-conversion-factors-2021">2021 UK government emissions factors</a> to generate an estimated carbon emissions total.<br>
            For example, travelling via train emits 0.03549kg CO2e per mile. Therefore if a user travels 150 miles a week via train, the user's carbon footprint estimate will be 276.822kg CO2e a year, or 0.276822 tonnes CO2e a year - (150*52)*0.03549 = 276.822kg.</p>
            <h4 id="homeHeader">Long Distance</h4>
            <p>The Long Distance section asks the user how many return flights they have taken in six zones across the world - Domestic (UK to UK), Red Zone (under 1500km), Yellow Zone (1500km-3000km), Green Zone (3000km-6000km), Blue Zone (6000km-9000km) and Purple Zone (over 9000km). The map image provided has been created using a radius tool to measure the coloured zones. A median kilometer distance is used for each zone, and is then multiplied by the relevant <a href="https://www.gov.uk/government/publications/greenhouse-gas-reporting-conversion-factors-2021">2021 UK government emissions factors</a> to calculate the estimated carbon emissions total.<br>
            For example, a return flight to a country in the Yellow Zone emits an estimated 690.885kg CO2e, or 0.690885 tonnes CO2e - 2*(2250*0.15353) = 690.885kg.</p>
        </div><br>
        <div>
            <h2 id="homeHeader">How we calculate your energy emissions</h2>
            <p>The Utilities section asks the user to input their electric and gas energy usage in kWh. Similar to the other sections, this number is multiplied by the relevant <a href="https://www.gov.uk/government/publications/greenhouse-gas-reporting-conversion-factors-2021">2021 UK government emissions factors</a> to generate the estimated carbon emissions total.<br>
            For example, the 2021 emissions factor for electricity is 0.21233kg CO2e per kWh. Therefore if a user is consuming 4000kWh a year of electricity, the user's carbon footprint estimate will be 849.32kg CO2e a year, or 0.84932 tonnes CO2e a year - 4000*0.21233 = 849.32kg.</p>
        </div><br>
        <div>
            <h2 id="homeHeader">Understanding your results</h2>
            <p>Upon completion of the calculator, you will be directed to your results which will display your total carbon footprint estimate in tonnes. In order to help you understand your total, the results page will display your total and compare it to your regional average carbon emissions and the UK average carbon emissions. The regional and overall UK emissions estimates are the 2019 figures from the <a href="https://www.gov.uk/government/statistics/uk-local-authority-and-regional-carbon-dioxide-emissions-national-statistics-2005-to-2019">2005-2019 UK Local and Regional CO2 Emissions Data Table</a>.<br>
            There is an ongoing debate that the regional and overall UK estimates quoted by the UK Government are misleading as the estimates do not include aviation and other metrics. Due to this, an additional 1.2 tonnes CO2e has been added to each region and UK average totals to reflect the aviation emissions.
            <a href="https://www.carbonindependent.org/22.html">CarbonIndependent.org</a> has estimated that the total UK CO2 emissions are about 80 million tonnes per year. Divide this by the UK population of 67 million, and it will be 1.194 tonnes per person (rounded up to 1.2 tonnes per person).<br>
            The chart are the bottom of the page displays a graph showing the regional and overall UK carbon emissions.</p>
            <p>The total carbon footprint emissions estimate and the chart displaying your personalised breakdown of your estimate will also add a "baseline" figure to the total. These are emissions which you have little control over, such as: production and distribution of food, use of government services, household waste and water usage.</p>
        </div>
        <div class="container" id="comparisonChart">

        <canvas id="chart"></canvas>

        <script>
        new Chart(document.getElementById("chart"), {
            type: 'bar',
            data: {
              labels: ["North East", "North West", "Yorkshire & The Humber", "East Midlands", "West Midlands", "East", "London", "South East", "South West", "Wales", "Scotland", "Northern Ireland", "UK"],
              datasets: [
                {
                  label: "Carbon Emissions (CO2 per capita)",
                  backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850", "#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850", "#3e95cd", "#8e5ea2","#3cba9f"],
                  data: [6.7,6.5,7.5,7.2,6.3, 6.6, 5.4, 5.6, 5.8, 8.8, 6.9, 8.5, 6.4]
                }
              ]
            },
            options: {
              legend: { display: false },
              title: {
                display: true,
                text: 'Regional and UK Average Carbon Emissions 2019'
              }
            }
        });
        </script>

        </div>

    </div>

</main>

_END;

require_once "footer.php";

?>