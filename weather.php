<?php
  
  if($_GET['why'] === "city")
    echo file_get_contents('http://api.wunderground.com/auto/wui/geo/GeoLookupXML/index.xml?query='.$_GET['lat'].','.$_GET['lng']);

  if($_GET['why'] === "weather")
    echo file_get_contents('http://api.wunderground.com/auto/wui/geo/ForecastXML/index.xml?query='.$_GET['city']);
?>