<?php
namespace App\Data;

use App\Data\SingletonSubject;
use App\File\CsvFile;

/**
 * Description of PrecipitationData
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
