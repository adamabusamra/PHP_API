<html>

<head>
    <style>
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
        }
    </style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="city_list.json"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#city_id").change(function() {

                //get selected parent option 
                var city_id = $("#city_id").val();
                var apiKey = "ae3f50352cccbf28026b7f1643ff53b4";
                $.ajax({
                    type: "GET",
                    url: "http://api.openweathermap.org/data/2.5/weather?id=" + city_id + "&lang=en&units=metric&APPID=" + apiKey,
                    success: function(data) {
                        // console.log(data);
                        var iconcode = data.weather[0].icon;
                        var iconurl = "http://openweathermap.org/img/w/" + iconcode + ".png";
                        $("#weather").html("<h2>" + data.name + "</h2>" +
                            "<h3>" + data.weather[0].description + "</h3>" +
                            "<h2>" + data.main.temp + " °C" +
                            // "<img id='wicon' src='" + iconurl + "'>";
                            "<img id='wicon' src='" + iconurl + "'>" + "</h2>");
                        // $('#wicon').attr('src', iconurl);
                        var mydata = JSON.parse(data);
                        alert(mydata[0].id);
                    }
                });
            });

        });
    </script>
</head>

<body>
    <h1>Select City</h1>
    <form action="ajax.php" method="post">
        <select name='city_id' id='city_id'>
            <option value="" selected disabled hidden>Select City</option>
            <option value='250441'>Amman</option>
            <option value='250799'>Ajlun</option>
            <option value='250774'>Aqaba</option>
            <option value='250258'>Balqa</option>
            <option value='248944'>Irbid</option>
            <option value='248875'>Jarash</option>
            <option value='250625'>Karak</option>
            <option value='248380'>Ma`an</option>
            <option value='248370'>Madaba</option>
            <option value='250582'>Mafraq</option>
            <option value='250198'>Tafilah</option>
            <option value='250090'>Zarqa</option>
            <option value='250637'>Al Jubayhah</option>
            ?>
        </select>
    </form>
    <div id="weather">

    </div>
</body>

</html>