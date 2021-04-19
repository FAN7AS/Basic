<?php  
namespace app\components;
use yii\base\Widget;
class MyWidget1 extends Widget
{
	public $Hotel;
	public $Flight;
	public $Plane;
	public $Tour;
	public $Stock;
    public $add;
    public $dam;
	public function init()
	{
		parent::init();
		if($this->Hotel ===Null) $this->Hotel = array(1,2,3);
		if($this->Flight ===Null) $this->Flight = '0';
		
	}
	public function run()
	{
		$add=0;
		$dam=0;
		$Hotel=$this->Hotel;
		foreach ($Hotel as $Query) 
{ 
 $add+=$Query['TotalAdd'];
 $dam+=$Query['TotalDam']; 
}
        $Flight=$this->Flight;
		foreach ($Flight as $Query) 
{ 
 $add+=$Query['TotalAdd'];
}
        $Plane=$this->Plane;
		foreach ($Plane as $Query) 
{ 
 $dam+=$Query['TotalDam'];
}
        $Tour=$this->Tour;
		foreach ($Tour as $Query) 
{
 $add+=$Query['TotalAdd']; 
 $dam+=$Query['TotalDam'];
}
        $Stock=$this->Stock;
		foreach ($Stock as $Query) 
{
 $add+=$Query['TotalAdd']; 
 $dam+=$Query['TotalDam'];
}
   $tot=$add-$dam;
     echo  "<div class='mid'><h2><i>Общие доходы туристической фирмы: {$add}</h2>" ;
     echo "<hr></hr>";
     echo  "<h2><i>Общие расходы туритстической фирмы: {$dam}</h1>" ;
     echo "<hr></hr>";
     echo  "<h2><i>Общая прибыль туристической фирмы: {$tot}</h1></div>" ;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.mid
		{
			text-align: center;
            color: black;
			background-color: #8A5CA2FF;
			border-radius: 7px;
			padding: 2px;
			margin-left:250px;
			margin-right: 250px;
			border: 2px solid black;
		}
		hr
		{
			margin: 10px;

		 height: 2px;
			width: : 0px;
		}

	</style>
</head>
<body>

</body>
</html>