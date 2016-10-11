<?php

/**
* cURL Class
* Class untuk ambil data JSON dari API
* bayyu.me
*/

class cURL
{
	// private static $api_key; // 
	public $base_url;

	function __construct($base_url)
	{
		$this->url = $base_url;
	}

	function getData() {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => $this->url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_SSL_VERIFYPEER => false,
          CURLOPT_ENCODING => '',
          CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        $respon = curl_exec($curl); // Response
        //$err = curl_error($curl);
        curl_close($curl);

        if (!$respon) { 
          	$elor['status'] = 'Gagal';
			$hasil = json_encode($elor); // Kalo error ubah pesan error ke dalam JSON
        } else {
          	$hasil = $respon; 
        }
		
		return json_decode($hasil, true); // Langsung ubah ke ARRAY

    }
}

?>
