<?php


class Weather_Api
{

    private $program_service = null;

    private function _service($city)
    {
        $api_url = "http://api.openweathermap.org/data/2.5/weather?q=".$city."&units=metric&APPID=16d496fc6c65f5fb6e96fd53a86c7cab";

        $ch = curl_init($api_url);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);

        $res = json_decode($response);

        curl_close($ch);

        return $res;

    }


    /**
     * Metoda koja vraca vremensku prognozu
     *
     * @param string $city
     */
    public function getWeatherData($city)
    {



    if ($weatherData = $this->_service($city))
        {

            header('Content-type: application-json; charset=utf8;');
            echo json_encode($weatherData);
        }



    }
}
?>