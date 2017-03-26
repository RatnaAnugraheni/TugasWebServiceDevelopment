<h1>1. History di San Fransisco</h1>
<?php
	$json_string = file_get_contents("http://api.wunderground.com/api/8933eac1e54aee69/history_20060405/q/CA/San_Francisco.json");
	$parsed_json = json_decode ($json_string);
	$pretty = $parsed_json->{'history'}->{'date'}->{'pretty'};
	$tz = $parsed_json->{'history'}->{'date'}->{'tzname'};
	$year = $parsed_json->{'history'}->{'date'}->{'year'};
	
	echo "Tanggal : ${pretty} <br>
	Nama Zona Waktu di : ${tz} <br>
	Tahun : ${year}";
?>
<h1>2. Temperatur Suhu Tinggi</h1>
<?php
$json_string = file_get_contents("http://api.wunderground.com/api/8933eac1e54aee69/almanac/q/CA/San_Francisco.json");
$parsed_json = json_decode ($json_string);
$code = $parsed_json->{'almanac'}->{'airport_code'};
$farenheit = $parsed_json->{'almanac'}->{'temp_high'}->{'record'}->{'F'};
$celcius = $parsed_json->{'almanac'}->{'temp_high'}->{'record'}->{'C'};

echo "Kode Bandara San Fransisco : ${code} <br>
Suhu dalam Farenheit : ${farenheit}<sup>o</sup>F<br>
Suhu dalam Celcius : ${celcius}<sup>o</sup>C";
?>
<h1>3. Ramalan fase bulan di Sidney, Australia</h1>
<?php
$json_string = file_get_contents("http://api.wunderground.com/api/8933eac1e54aee69/astronomy/q/Australia/Sydney.json");
$parsed_json = json_decode ($json_string);
$moon = $parsed_json->{'moon_phase'}->{'ageOfMoon'};
$moon2 = $parsed_json->{'moon_phase'}->{'phaseofMoon'};
$moon3 = $parsed_json->{'moon_phase'}->{'current_time'}->{'hour'};

echo "Umur Bulan : ${moon} thn<br>
Fase Bulan : ${moon2}<br>
Arus Waktu: ${moon3}";
?>