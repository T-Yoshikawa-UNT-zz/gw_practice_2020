<?php
namespace App\Data;

use App\Display\Observer;

/**
 * Description of Subject
 *
 */
abstract class Subject {

    /**
     * @var array
     */
    private $observers = [];

    public function addObserver(Observer $observer) {
        $this->observers[get_class($observer)] = $observer;
    }

    public function removeObserver(Observer $observer) {
        unset($this->observers[get_class($observer)]);
    }


}
