<?php
namespace App\Data;

use App\Data\SingletonSubject;
use App\Display\Observer;
use App\Config\JmaConnectConfig;
use App\File\CsvFile;

/**
 * Description of PrecipitationData
 *
 * @author t-yoshikawa
 */
class PrecipitationData extends SingletonSubject {
    
    public $data = [];
    
    public function getLatestAllData($url) {
        $file = new CsvFile($url);
        $this->data = $file->getRecords();
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}
