<?php
namespace App\Data;

use App\Data\Subject;
use App\Display\Observer;
use App\Config\JmaConnectConfig;
use App\File\CsvFile;

/**
 * Description of PrecipitationData
 *
 * @author t-yoshikawa
 */
class PrecipitationData extends Subject {
    
    public $data = [];

    public function getLatestAllData($url) {
        $file = new CsvFile($url);
        $this->data = $file->getRecords();
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}
