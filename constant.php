<?php
class test{
    public $kelas = __CLASS__;
    public function testing(){
        $this->kelas = __CLASS__;
        return "ini di class ".$this->kelas;   
    }
    
};

echo "ini di line ".__LINE__."<br>";
$obj = new test();
echo $obj->testing();

?>