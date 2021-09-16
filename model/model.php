<?php

class Model {
 
    public function data() {

        $suspectIndo = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia'), true);
        $suspectDataIndo = $suspectIndo;

        $suspectProvinsi = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi'), true);
        $suspectDataProvinsi = $suspectProvinsi;

        $suspectPositif = json_decode(file_get_contents('https://api.kawalcorona.com/positif'), true);
        $suspectDataPositif = $suspectPositif;
        
        $suspectMeninggal = json_decode(file_get_contents('https://api.kawalcorona.com/meninggal'), true);
        $suspectDataMeninggal = $suspectMeninggal;
        

        $labelPositif = $suspectDataIndo[0]['positif'];
        $labelSembuh = $suspectDataIndo[0]['sembuh'];
        $labelMeninggal = $suspectDataIndo[0]['meninggal'];
        $labelDirawat = $suspectDataIndo[0]['dirawat'];

        // var_dump($labelGlobalPositif);

        
        return array(
            'positif' => $labelPositif,
            'sembuh' => $labelSembuh,
            'meninggal' => $labelMeninggal,
            'dirawat' => $labelDirawat,
            'dataProvinsi' => $suspectDataProvinsi,
            'dataPositif' => $suspectDataPositif,
            'dataMeninggal' => $suspectDataMeninggal
        );
    }
 
}