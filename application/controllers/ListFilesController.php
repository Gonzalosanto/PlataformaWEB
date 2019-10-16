<?php

class ListFilesController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        header("Access-Control-Allow-Origin: *");
        $this->load->helper('url');
    }

    public function listFiles() {

        $datosAutorizacion = $this->autorization();
        $session = curl_init($datosAutorizacion->apiUrl . $this->config->item('url_list_file'));

        // Add post fields
        $data = array("bucketId" => $this->config->item('bucket_id')); // The ID of the bucket you want to upload to
        $post_fields = json_encode($data);
        curl_setopt($session, CURLOPT_POSTFIELDS, $post_fields);

        // Add headers
        $headers = array();
        $headers[] = "Authorization: " . $datosAutorizacion->authorizationToken;
        curl_setopt($session, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($session, CURLOPT_POST, true); // HTTP POST
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);  // Receive server response
        $server_output = curl_exec($session); // Let's do this!
        curl_close($session); // Clean up
        header('Content-Type: application/json');
        echo $server_output; // Tell me about the rabbits, George!
        die();

    }

    public function autorization() {
        $credentials = base64_encode($this->config->item('application_key_id') . ":" . $this->config->item('application_key'));
        $session = curl_init($this->config->item('url_authorization'));

        // Add headers
        $headers = array();
        $headers[] = "Accept: application/json";
        $headers[] = "Authorization: Basic " . $credentials;
        curl_setopt($session, CURLOPT_HTTPHEADER, $headers);  // Add headers

        curl_setopt($session, CURLOPT_HTTPGET, true);  // HTTP GET
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true); // Receive server response
        $datosAutorizacion = json_decode(curl_exec($session));
        curl_close($session);
        return $datosAutorizacion;
    }

//    function formatSizeUnits($bytes) {
//        if ($bytes >= 1073741824) {
//            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
//        } elseif ($bytes >= 1048576) {
//            $bytes = number_format($bytes / 1048576, 2) . ' MB';
//        } elseif ($bytes >= 1024) {
//            $bytes = number_format($bytes / 1024, 2) . ' KB';
//        } elseif ($bytes > 1) {
//            $bytes = $bytes . ' bytes';
//        } elseif ($bytes == 1) {
//            $bytes = $bytes . ' byte';
//        } else {
//            $bytes = '0 bytes';
//        }
//
//        return $bytes;
//    }

}

?>