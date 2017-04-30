
<!DOCTYPE html>
<html>
<head>

    <title>Weather Widget By Srki</title>

</head>

<body onload="dateMonth();">

<article class="weather_widget">

    <div id="changeIcon"></div>

    <div class="weatherIcon"></div>
    <div class="humidity"></div>
    <div class="wind"></div>
    <div class="pressure"></div>
    <div class="temp_min"></div>
    <div class="temp_max"></div>


    <div class="weatherData">
        <h2 class="description"></h2>
        <h1 class="temperature"> </h1>

        <h3 class="city"> </h3>
    </div>
    <div class="weather_date">
        <span id="weather_month"></span>
        <span id="weather_day"></span>
    </div>



</article>


</body>
</html>

<script>
    $(document).ready(function() {
        userData();


    });
</script>

