<?php

class FirebaseDB
{

    private $databaseURL;
    private $apiKey;

    public function __construct($databaseURL, $apiKey)
    {
        $this->databaseURL = $databaseURL;
        $this->apiKey = $apiKey;
    }

    public function getData($path)
    {
        $url = $this->databaseURL . $path . '.json?auth=' . $this->apiKey;
        $response = $this->makeRequest($url, 'GET');
        return json_decode($response, true);
    }

    public function postData($path, $data)
    {
        $url = $this->databaseURL . $path . '.json?auth=' . $this->apiKey;
        $response = $this->makeRequest($url, 'PUT', json_encode($data));
        return json_decode($response, true);
    }

    private function makeRequest($url, $method, $data = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        if ($data) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}

// Initialize FirebaseDB with your Firebase Realtime Database URL and API key
$firebaseDB = new FirebaseDB('database URL, 'API key');
