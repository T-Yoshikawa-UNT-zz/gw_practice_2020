<?php
namespace App\Data;

use App\Display\Observer;

/**
 * Description of Subject
 *
 */
abstract class SingletonSubject {

    private static $subject;

    /**
     * @var array
     */
    protected $observers = [];

    private function __construct() {
    }

    public static function getInstance() {
        if (!isset(self::$subject)) {
            self::$subject = new PrecipitationData();
        }

        return self::$subject;
    }

    public function addObserver(Observer $observer) {
        $this->observers[get_class($observer)] = $observer;
    }

    public function removeObserver(Observer $observer) {
        unset($this->observers[get_class($observer)]);
    }
}
