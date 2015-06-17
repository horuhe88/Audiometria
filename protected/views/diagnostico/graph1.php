<?php
/* @var $this DiagnosticoController */
/* @var $model Diagnostico */

$this->breadcrumbs=array(
	'Diagnosticos'=>array('index'),
	'Create',
);
?>
<table style="width:100%">

<tr>
<td>	

<h1>Oido Derecho</h1>

<img width="615px" height="450px" src="<?php echo Yii::app()->request->baseUrl; ?>/index.php/diagnostico/graphD/<?php echo $id;?>?type=Der"  />

<h1>Promedio de Perdida:</h1> 

<pre><h1><?php echo $prompe2; ?></h1></pre> 
<pre><h1><?php echo 'val gap(c): '.$cd; ?></h1></pre>
<pre><h1><?php echo $gapD; ?></h1></pre>
<pre><h1><?php echo 'val < de 20(cg): '.$probd; ?></h1></pre>

<pre><h1><?php echo "<PRE>";
var_dump($difD);
echo "</PRE>"; ?></h1></pre>

</td>

<td>

<h1>Oido Izquierdo</h1>

<img width="615px" height="450px" src="<?php echo Yii::app()->request->baseUrl; ?>/index.php/diagnostico/graphI/<?php echo $id;?>?type=Izq"  />

<h1>Promedio de Perdida:</h1>

<pre><h1><?php echo $prompe; ?></h1></pre>
<pre><h1><?php echo 'val gap(c): '.$c; ?></h1></pre>
<pre><h1><?php echo $gapI; ?></h1></pre>
<pre><h1><?php echo 'val < de 20(cg): '.$prob; ?></h1></pre>

<!-- <pre><h1><php echo $dif; ?></h1></pre> -->

<pre><h1><?php echo "<PRE>";
var_dump($difI);
echo "</PRE>"; ?></h1></pre>


</td>

</td>
</tr>
</table>