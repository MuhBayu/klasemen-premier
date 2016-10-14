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

    function __construct($base_url) {
	$this->url = $base_url;
    }

    function getData() {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        	CURLOPT_URL => $this->url,
        	CURLOPT_RETURNTRANSFER 	=> true,
        	CURLOPT_SSL_VERIFYPEER 	=> false,
        	CURLOPT_ENCODING 	=> '',
        	CURLOPT_CUSTOMREQUEST 	=> 'GET',
        	CURLOPT_AUTOREFERER    	=> true,
        	CURLOPT_CONNECTTIMEOUT 	=> 120,
        	CURLOPT_TIMEOUT        	=> 120,
        	CURLOPT_MAXREDIRS      	=> 10,
        ));
        $respon = curl_exec($curl); // Response
        $err = curl_error($curl);
        curl_close($curl);

        if ($this->cekErr($respon) || $err) { 
          	$elor['status'] = 'Gagal';
		$hasil = json_encode($elor); // Kalo error ubah pesan error ke dalam JSON
			
        } else {
          	$hasil = $respon; 
        }
		
	return json_decode($hasil, true); // Langsung ubah ke ARRAY

    }

    // Cek Kalo terjadi ERROR
    function cekErr($str) {
    	if (!strrpos(strip_tags($str), "status")) {
    		return true;
    	} else {
    		return false;
    	}
    }



} // END CLASS

?>
