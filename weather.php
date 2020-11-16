<!DOCTYPE html>
<html>
    <title></title>
    <header>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </header>

    <body>
        <div class="container">
            <?php
                require_once("get_data.php");
                $access_key = "&appid=f80223657d51811d050fc307f2940afb";
                $ip_obj = sendJsontoServer();
                $country = $ip_obj->country_name;
                $region = $ip_obj->region_name;
                // if(!$region){
                //     $region = $ip_obj->location->capital;
                // }
                $current_obj = getCurrentData($region, $country, $access_key);
                $city_id = $current_obj->id;            
            ?>
            <div class="col-md-10 col-md-10 col-md-12 col-md-12">
                <div class="row">
                    <div class="col-md-5">Location: <?php echo $region.", ".$country ?></div>
                    <div class="col-md-5">Update Time: <?php echo date("d/m/Y H:i:s",$current_obj->dt); ?></div>
                </div>
                <div class="row">
                    <div class="col-md-5 text-center">
                        <div style="height:50px; width:50px; margin-left:auto;margin-right:auto;
                             background: url('http://openweathermap.org/img/w/<?php echo $current_obj->weather[0]->icon ?>.png');background-size: cover;"></div>
                        <div><?php echo $current_obj->main->temp." &#8451;" ?> - <?php echo  $current_obj->weather[0]->main ?></div>
                        <div>Cloudiness: <?php echo $current_obj->clouds->all."%" ?></div>
                    </div>
                    <div class="col-md-5">
                        <div>Pressure: <?php echo $current_obj->main->pressure."hPa" ?></div>
                        <div>Humidity: <?php echo $current_obj->main->humidity."%" ?></div>
                        <div>Max Temperature: <?php echo $current_obj->main->max_temp." &#8451;" ?></div>
                        <div>Min Temperature: <?php echo $current_obj->main->min_temp." &#8451;" ?></div>                                             
                    </div>
                </div>
            </div>
        </div>    
    </body>
</html>