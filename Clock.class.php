<?php

class Clock {
    
    protected static $hour;
    protected static $minute;
    
    public function __construct() {
        self::$hour = date("g");
        self::$minute = date("i");
    }

    public function currentAngle() {
        $h = self::$hour;
        $m = self::$minute;
        
        return $this->angle($h, $m);
    }

    protected function angle($h, $m) {
        $angle = abs((0.5 * ((($h % 12) * 60) + $m)) - 6 * $m);
        return ($angle > 180) ? (180 - $angle % 180) : $angle;
    }
    
    public static function factory() {
        return new self;
    }
    
    public function getTimeString() {
        $h = self::$hour;
        $m = self::$minute;
        
        $time_strong = $h . ":" . $m;
        return $time_strong;
    }
    
}