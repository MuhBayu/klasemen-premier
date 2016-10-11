<?php

/**
* cURL Class
* Class untuk ambil data JSON dari API
* bayyu.me
*/

class cURL
{
	private static $api_key; // 
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
          	return json_encode($elor);
        } else {
          	return json_decode($respon, true);
        }
    }
}

?>