<?php
/* @var $this DiagnosticoController */
/* @var $model Diagnostico */

$this->breadcrumbs=array(
	'Diagnosticos'=>array('index'),
	'Create',
);
?>
<script type="text/javascript">

	var oseoDD = "";
	var aereoDD = "";
	var aOseoD = new Array("","","","","","","","");
	var aAereoD = new Array("","","","","","","","");
	
	var oseoID = "";
	var aereoID = "";
	var aOseoI = new Array("","","","","","","","");
	var aAereoI = new Array("","","","","","","","");

	var posS, typeS;

	var f = new Array(0,1,2,3,4,5,6,7);

	function loadData(oseoD, aereoD, oseoI, aereoI){

		oseoDD=oseoD.split(",");
		aereoDD=aereoD.split(",");

		oseoID = oseoI.split(",");
		aereoID = aereoI.split(",");
	}



	function graphOidoDerecho() {

		
		var oseoA = orderArray(oseoDD,3);
		var aereoA = orderArray(aereoDD,2);

		//alert(oseoA):


    $('#oidoDerecho').highcharts({
        chart: {
            type: 'spline'
        },
        title: {
            text: 'Monthly Average Temperature'
        },
        subtitle: {
            text: 'Source: WorldClimate.com'
        },
        xAxis: {gridLineWidth: 1,
            align: 'right',
            categories: ['250', '500', '1000', '2000', '3000',
                '4000', '6000', '8000']
        },
        yAxis: {
            min: -101,

            labels: {
                formatter: function () {
                    return this.value;
                }
            }
        },

        tooltip: {
            crosshairs: true,
            shared: true
        },
        plotOptions: {
            spline: {
                marker: {
                    radius: 4,
                    lineColor: '#666666',
                    lineWidth: 1
                }
            }
        },
        series: [{
            name: 'Aereo',
            marker: {
                symbol: 'square'
            },
            data: aereoA


        }, {
            name: 'Oseo',
            marker: {
                symbol: 'diamond'
            },
            data: oseoA
            }]
    });
}

function orderArray(dataA, type){

	var a = new Array();
	var an;

	if(type == 0)
		an = aAereoI;
	else if(type == 1)
		an = aOseoI;
	else if(type == 2)
		an = aAereoD;
	else if(type == 3)
		an = aOseoD;



	var i =0;

	for(i=0; i< dataA.length; i++){
			var index = f[i];
			if(an[i] != ""){

				console.log("Entro en 1");
				a[i] = {y:parseInt(dataA[i]),  marker: {
                    symbol: 'url('+an[i]+')'
                },posicion:i,tipo:type, onclick:function (){onClickPoint(this.posicion, this.tipo);}};

                
			}else{
				a[i] = {y:parseInt(dataA[i]),posicion:i,tipo:type, onclick:function (){onClickPoint(this.posicion, this.tipo);}};
				
			}


	}

	return a;
}

function onClickPoint(index, type){
	posS= index;
	typeS=type;
}

function setConvetion(img){

	if(typeS==0){

		aAereoI[posS]=img;

	}else if(typeS==1){
		aOseoI[posS]=img;
	}else if(typeS==2){
		aAereoD[posS]=img;
	}else if(typeS==3){
		aOseoD[posS]=img;
	}


	graphOidoDerecho();
}

</script>



<h1>Oido Derecho</h1>

<!-- <img width="615px" height="450px" src="<php echo Yii::app()->request->baseUrl; ?>/index.php/diagnostico/graphI/<php echo $id;?>?type=Izq&?sel=<php echo $sel;?>"  /> -->
<!--<script src="../../js/highcharts.js"></script>
<script src="../../js/modules/exporting.js"></script>-->

<script src="<?PHP echo Yii::app()->theme->baseUrl;?>/js/highcharts.js"></script>
<script src="<?PHP echo Yii::app()->theme->baseUrl;?>/js/modules/exporting.js"></script>
<div id="oidoDerecho" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


<div>  
<img  src="https://cdn3.iconfinder.com/data/icons/virtual-notebook/16/button_shape_oval-32.png" onclick="setConvetion('https://cdn3.iconfinder.com/data/icons/virtual-notebook/16/button_shape_oval-32.png')"/>
<img  src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-arrow-left-48.png" onclick="setConvetion('https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-arrow-left-48.png')"/>
<img  src="https://cdn4.iconfinder.com/data/icons/vectory-symbols/40/triangle-32.png" onclick="setConvetion('https://cdn4.iconfinder.com/data/icons/vectory-symbols/40/triangle-32.png')"/>
<img  src="https://cdn2.iconfinder.com/data/icons/crystalproject/Open-Office-Icons/lc_symbolshapes.left-bracket.png" onclick="setConvetion('https://cdn2.iconfinder.com/data/icons/crystalproject/Open-Office-Icons/lc_symbolshapes.left-bracket.png')"/>
</div>



<h1>Promedio de Perdida:</h1>

<pre><H1><?php echo $prompe; ?></h1></pre>

<h1>Oido Derecho</h1>

<img width="615px" height="450px" src="<?php echo Yii::app()->request->baseUrl; ?>/index.php/diagnostico/graphD/<?php echo $id;?>?type=Der"  />
<div>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/diagnostico/DiagnosticoController/<?php echo $id;?>?sel=2"><img  src="https://cdn3.iconfinder.com/data/icons/virtual-notebook/16/button_close-32.png"></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/diagnostico/DiagnosticoController/<?php echo $id;?>?sel=4"><img  src="https://cdn2.iconfinder.com/data/icons/lightly-icons/24/chevron-right-48.png"></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/diagnostico/DiagnosticoController/<?php echo $id;?>?sel=5"><img  src="https://cdn4.iconfinder.com/data/icons/vectory-symbols/40/square-32.png"></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/diagnostico/DiagnosticoController/<?php echo $id;?>?sel=8"><img  src="https://cdn2.iconfinder.com/data/icons/crystalproject/Open-Office-Icons/lc_symbolshapes.right-bracket.png"></a>

<!-- <a href="<php echo Yii::app()->request->baseUrl; ?>/index.php/diagnostico/DiagnosticoController/<php echo $id;?>?sel=9"><img  src="http://mat.ucsb.edu/glv/gfx/IconTriangleD.png"></a> -->
</div>
<h1>Promedio de Perdida:</h1> 

<pre><H1><?php echo $prompe2; ?></h1></pre> 

<?php
	echo "<script type='text/javascript'>
			loadData('".$doDer."','".$daDer."','".$doIzq."','".$daIzq."')
			graphOidoDerecho();
		  </script>";
?>




