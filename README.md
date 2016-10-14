# klasemen-premier

<p>Penggunaan API untuk Cek Klasemen PREMIER LEAGUE</p>




<pre>&lt;?php
require_once('cURLclass.php');

$get 	 = 	new cURL('http://bayuu.net/api/klasemen-premier/');
$data 	= 	$get->getData();

$data // Output dalam bentuk Array
</pre>


<a href="http://bayuu.net/demo/cek-klasemen/" target="_blank"><h3>DEMO</h3></a>
