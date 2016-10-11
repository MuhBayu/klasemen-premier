# klasemen-premier

<p>Penggunaan API untuk Cek Klasemen PREMIER LEAGUE</p>




<pre>&lt;?php
require_once('cURLclass.php');

$get 	 = 	new cURL('http://bayyu.me/api/klasemen-premier/');
$data 	= 	$get->getData();

$data // Output dalam bentuk Array
</pre>


<a href="http://bayyu.me/demo/cek-klasemen/" target="_blank"><h2>DEMO</h2></a>
