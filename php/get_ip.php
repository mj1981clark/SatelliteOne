    <?php
        $clientIp = null;
        $apikey = "PUT_YOUR_API_KEY_HERE";
        $response = get_location($apikey, $clientIp);
        $json = array();
        $json = json_decode($response, true);
        
        echo "<pre>";
        print_r($json);
        echo "</pre>";
     
        function get_location($apiKey, $ip = null) {
	    $server_ip="134.209.95.120";
            $url = "https://api.ipgeolocation.io/ipgeo?apiKey=".$apiKey."&ip=".$ip;
            $cURL = curl_init();
     
            curl_setopt($cURL, CURLOPT_URL, $url);
            curl_setopt($cURL, CURLOPT_HTTPGET, true);
            curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Accept: application/json'
            ));
            return curl_exec($cURL);
        }
	/*TODO: https://drive.google.com/open?id=1fIMR5BERCZr9gaFfwkog4t36ZS-icAT8y5gV1Mg5x8w*/
    ?>
