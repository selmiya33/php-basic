<?php


trait Loggable
{
    private $dataFile = 'data.txt';

    private function log($message)
    {
        file_put_contents($this->dataFile, $message. "\n", FILE_APPEND);
    }
}
