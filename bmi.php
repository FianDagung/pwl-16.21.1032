class bmi{
	
var $height;
var $weight;

function calculate_bmi(){

if (isset($this->height) && isset($this->weight) && is_numeric($this->height) && is_numeric($this->weight)){
$height = $this->height;
$weight = $this->weight;
$height = str_replace(",", ".", $height);
$weight = str_replace(",", ".", $weight);
$pembagi = $height*$height;
$bmi = $weight/$pembagi;
$bmi = round($bmi, "0");
}
if($bmi < 18){
echo "BMI anda adalah $bmi";
echo "<br/>";
echo "Anda masuk kategori Underweight ";
}
else if($bmi < 26 && $bmi > 17){
echo "BMI anda adalah $bmi";
echo "<br/>";
echo "Anda masuk kategori Normalweight ";
}
else if($bmi < 31 && $bmi > 25){
echo "BMI anda adalah $bmi";
echo "<br/>";
echo "Anda masuk kategori Overweight ";
}
else if($bmi > 30){
echo "BMI anda adalah $bmi";
echo "<br/>";
echo "Anda masuk kategori HeavyOverweight, Danger for your health";
}
else{
exit();
}
}// End of function
}//End of class
?>
