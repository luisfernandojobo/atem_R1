<?php
/* @var $this Xml_csvController */

$this->breadcrumbs=array(
	'Xml Csv',
);
?>
<!--<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>-->


<?php
$xml = simplexml_load_file("/var/www/w1/atem_R1/yii/yiip/protected/views/xml_csv/searchXml?as_categ_id=1459");


//echo $xml->listing->items->item[0]->image_url;

/*
foreach($xml->listing->items->item as $urls){
echo $urls->image_url."<br>";
}
*/

$direcciones = array();
echo "direcciones<br>";
foreach($xml->listing->items->item as $urls){
echo $urls->image_url."<br>";
$direcciones[] =$urls->image_url;

}
echo "direcciones <br>::";
//(($salida = shell_exec('ls -lart');
//echo "<pre>$salida</pre>";
$salida = shell_exec ("/var/www/w1/atem_R1/yii/yiip/protected/views/xml_csv/descargar.sh \"http://img1.mlstatic.com/jm/img?s=MLA&f=92206840_6276.jpg&v=I\" 1");
echo $salida;
/*
for($i=0;$i<count($direcciones);$i++){


exec ("/var/www/w1/atem_R1/yii/yiip/protected/views/xml_csv/descargar.sh \"".$direcciones[$i]."\" ".$i."<br>");

}
*/





?>
