<?php
        class StopWatch
        {
            private $startTime;
            private $endTime;
            function __constructor()
            {
                $this->startTime = microtime(true);
            }
            function getStartTime()
            {
                return $this->startTime;
            }
            function getEndTime()
            {
                return $this->endTime;
            }
            function start()
            {
                $this->startTime = microtime(true);
            }
            function stop()
            {
                $this->endTime = microtime(true);
            }
            function getElapsedTime()
            {
                $delta =  $this->endTime - $this->startTime;
                return number_format($delta,2);
            }
        }

?>