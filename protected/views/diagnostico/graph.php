<?php
/* @var $this DiagnosticoController */
/* @var $model Diagnostico */

$this->breadcrumbs=array(
	'Diagnosticos'=>array('index'),
	'Create',
);
?>
<h1>Oido Izquierdo</h1>

<!-- <img width="615px" height="450px" src="<php echo Yii::app()->request->baseUrl; ?>/index.php/diagnostico/graphI/<php echo $id;?>?type=Izq&?sel=<php echo $sel;?>"  /> -->
<img width="615px" height="450px" src="<?php echo Yii::app()->request->baseUrl; ?>/index.php/diagnostico/graphI/<?php echo $id;?>?type=Izq"  />

<div>  
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/diagnostico/DiagnosticoController/<?php echo $id;?>?sel=1"><img  src="https://cdn3.iconfinder.com/data/icons/virtual-notebook/16/button_shape_oval-32.png"></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/diagnostico/DiagnosticoController/<?php echo $id;?>?sel=3"><img  src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-arrow-left-48.png"></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/diagnostico/DiagnosticoController/<?php echo $id;?>?sel=6"><img  src="https://cdn4.iconfinder.com/data/icons/vectory-symbols/40/triangle-32.png"></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/diagnostico/DiagnosticoController/<?php echo $id;?>?sel=7"><img  src="https://cdn2.iconfinder.com/data/icons/crystalproject/Open-Office-Icons/lc_symbolshapes.left-bracket.png"></a>
</div>

<div>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/diagnostico/DiagnosticoController/<?php echo $id;?>?sel=2"><img  src="https://cdn3.iconfinder.com/data/icons/virtual-notebook/16/button_close-32.png"></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/diagnostico/DiagnosticoController/<?php echo $id;?>?sel=4"><img  src="https://cdn2.iconfinder.com/data/icons/lightly-icons/24/chevron-right-48.png"></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/diagnostico/DiagnosticoController/<?php echo $id;?>?sel=5"><img  src="https://cdn4.iconfinder.com/data/icons/vectory-symbols/40/square-32.png"></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/diagnostico/DiagnosticoController/<?php echo $id;?>?sel=8"><img  src="https://cdn2.iconfinder.com/data/icons/crystalproject/Open-Office-Icons/lc_symbolshapes.right-bracket.png"></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/diagnostico/DiagnosticoController/<?php echo $id;?>?sel=9"><img  src="http://icons.iconarchive.com/icons/weer/weather/128/sun-icon.png"></a>
<!-- <a href="<php echo Yii::app()->request->baseUrl; ?>/index.php/diagnostico/DiagnosticoController/<php echo $id;?>?sel=9"><img  src="http://mat.ucsb.edu/glv/gfx/IconTriangleD.png"></a> -->
</div>

<h1>Promedio de Perdida:</h1>

<pre><H1><?php echo $prompe; ?></h1></pre>

<h1>Oido Derecho</h1>

<img width="615px" height="450px" src="<?php echo Yii::app()->request->baseUrl; ?>/index.php/diagnostico/graphD/<?php echo $id;?>?type=Der"  />

<h1>Promedio de Perdida:</h1> 

<pre><H1><?php echo $prompe2; ?></h1></pre> 





