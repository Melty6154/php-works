<?php 


class counter {
private $file;
public function __construct($filename) {
    $this->file = $filename;
    if (!file_exists($this->file)) {
        file_put_contents($this->file, 0);
    }
}
public function addition() {
    $number = (int)file_get_contents($this->file, 1, NULL, 27, 2);
    $number++;
    file_put_contents($this->file, $number);
    return $number;
}
}
$counter = new counter("counter.txt");
$currentCount = $counter->addition();
$file = fopen("counter.txt", "w");
date_default_timezone_set("Iran");
$txt = "the code has been executed $currentCount times and the last time this code was executed was " . date("Y/m/d") . " at " . date("h:i:sa");
fwrite($file, $txt);