<?php

namespace App\Display;
use App\Data\Subject;

/**
 *
 */
interface Observer {
    public function update($subject);
}
