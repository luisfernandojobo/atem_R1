<?php
/* @var $this Pruebax1Controller */

$this->breadcrumbs=array(
	'Pruebax1',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
<pre>
Welcome to Crematoria!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
The format of DSN depends on the PDO database driver in use. In general, a DSN consists
of the PDO driver name, followed by a colon, followed by the driver-specific connection
syntax. See PDO documentation for complete information. Below is a list of commonly
used DSN formats:
• SQLite: sqlite:/path/to/dbfile
• MySQL: mysql:host=localhost;dbname=testdb
• PostgreSQL: pgsql:host=localhost;port=5432;dbname=testdb
• SQL Server: mssql:host=localhost;dbname=testdb
• Oracle: oci:dbname=//localhost:1521/testdb
</pre>
<?php
$dsn = "mysql:host=localhost;dbname=prueba";
$connection = new CDbConnection($dsn,"root","stg");
$connection =Yii::app()->db;
echo "la id del controlador------------------------------------------------[<b>".$this->id."</b>]------------------";

echo "conectado a prueba y seleccionando todo de tbl_user<br>";

$list = Yii::app()->db->createCommand('select email from tbl_user')->queryAll();

$rs = array();
foreach($list as $item){
$rs[]=$item['email'];
echo $item['email']."<br>";
}/////foreach


?>

<br><br><br><br><br><br><br>ahora usando el modelo tenemos los siguientes datos:<br><br>
table name : tbl_user
Model_Class:TblUser
<br><br><br><br><br>
<?php



$post=new TblPost;

$post->title="sample post";
$post->content="content for the sample post";
$post->create_time=time();
$post->save();






?>
===============================================================================================================
<tt><?php echo __FILE__; ?></tt>.
</p>
