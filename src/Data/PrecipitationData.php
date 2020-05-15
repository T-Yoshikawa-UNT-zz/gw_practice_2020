<?php
namespace App\Data;

use App\Data\Subject;
use App\Display\Observer;
use SplFileObject;

/**
 * Description of PrecipitationData
 *
 * @author t-yoshikawa
 */
class PrecipitationData extends Subject {


    public function getLatestData($url) {
        $data = file_get_contents($url);
        // SJISをUTF8に変換
        $data = mb_convert_encoding($data, 'UTF-8', 'SJIS-win');




    }

}
