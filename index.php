<?php
require_once('cURLclass.php');

$get 	= 	new cURL('http://bayuu.net/api/klasemen-premier/');
$data 	= 	$get->getData();


if($data['status'] == 'Gagal') { echo "<h1 align='center'>Terjadi kesalahan..</h1>"; exit; }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Klasemen Liga Inggris | bayyu.me</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Klasemen Liga Inggris | bayyu.me" />
	<meta property="og:description" content="Cek klasemen kompetisi liga Inggris." />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
	<style>
		#cntr {text-align: center;}
		#c-merah {background: #F03629; border-radius: 3px; padding: 6px 6px; color: #fff;}
		#c-ijo 	 {background: #34A853; border-radius: 3px; padding: 6px 9px; color: #fff;}
		body {color: #555555; font-size: 9.9999pt;}
	</style>
</head>
<body>
<div class="container" style="margin-top: 40px;margin-bottom: 30px;">
<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th colspan="2"><h4 style="color: #27A1F2;">KLASEMEN PREMIER</h4></th>
      <th id="cntr"><abbr title="Main">M</abbr></th>
      <th id="cntr"><abbr title="Menang">M</abbr></th>
      <th id="cntr"><abbr title="Seri">S</abbr></th>
      <th id="cntr"><abbr title="Kalah">K</abbr></th>
      <th id="cntr"><abbr title="Poin">P</abbr></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach ($data['klasemen'] as $key => $val) {
    	$pos  = ($key > 16 && $key <= 20) ? 'c-merah' : '';
    	$pos .= ($key < 3) ? 'c-ijo'   : '';
    	?>
<tr>
      <th scope="row" id="cntr" width="5"><span id="<?php echo $pos; ?>"><?php echo $val['posisi']; ?></span></th>
      <th><?php echo $val['klub']; ?></th>
      <td id="cntr" width="10"><?php echo $val['main']; ?></td>
      <td id="cntr" width="10"><?php echo $val['menang']; ?></td>
      <td id="cntr" width="10"><?php echo $val['seri']; ?></td>
      <td id="cntr" width="10"><?php echo $val['kalah']; ?></td>
      <th id="cntr" width="10"><?php echo $val['poin']; ?></th>
    </tr>

    <?php } ?>
  </tbody>
</table>

</div>

<div class="footer">
	<div class="container"><p style="color:#A3A3A3; font-size:9pt;">by bayyu.me</p></div>
</div>
</body>
</html>
