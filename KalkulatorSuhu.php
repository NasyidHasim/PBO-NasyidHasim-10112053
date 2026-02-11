<?php 
Class suhu{
    public $celcius ;
    public $fahrenheit ;
    public $kelvin ;
public function toFahrenheit()    {
    return $this->fahrenheit = ($this->celcius * 9/5) + 32;
}
public function toKelvin(){
    return $this->kelvin = $this->celcius + 273.15;
}
}
$suhu1 = new suhu;
$suhu1->celcius = 37;
echo "<pre>";
echo "kalulator suhu". "\n";
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~". "\n";
echo "satuan : Celcius (C)". "\n";
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~". "\n";
echo "Suhu dalam Celcius : " . $suhu1->celcius . " C" . "\n";
echo "Suhu dalam Fahrenheit : " . $suhu1->toFahrenheit() . " F" . "\n";
echo "Suhu dalam Kelvin : " . $suhu1->toKelvin() . " K" . "\n";
echo "</pre>";

?>