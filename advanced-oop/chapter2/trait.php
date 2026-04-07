<?php 
 trait Log 
 {
    protected function log($message){
        echo "$message"
    }

 }

 $new Table 
 {
    use Log;
    public function save()
    {
        $this->log("created log")
    }
 }

?>