<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set('implicit_flush', 1);
ob_implicit_flush(true);
set_time_limit(-1);
?>

<style type="text/css">
	body{
		display: none;
	}
	.url{
		display: block !important;
	}
</style>

<?php
$lstDomains = file_get_contents("adikteev.csv");
// print_r($lstDomains);
$arrLines = explode("\n", $lstDomains);
$arrUrls = [];
foreach ($arrLines as $value) {
	$arrBuf = explode(";", $value);
	$url = $arrBuf[0];
	$arrUrls[] = $url;
}

foreach ($arrUrls as $url) {
	$contents = @file_get_contents($url);
	echo "<div class='url'>" . $url . "</div>";
	echo "<br>";
	if( $contents != ""){
		echo "<div style='display:none'>";
		print_r($contents);
		echo "</div>";
	}
}

?>

<script type="text/javascript">
	
</script>