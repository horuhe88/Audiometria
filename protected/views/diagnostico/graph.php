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
            type: 'line'
        },
        title: {
            text: 'Audiograma'
        },

        xAxis: {
        	//Color borde grafica en eje X
            lineColor: '#666666',
            lineWidth: 1,

			tickmarkPlacement: 'on',//Colocando ticks para completar cuadricula
        	gridLineWidth: 1,
            align: 'right',
            categories: ['250', '500', '1000', '2000', '3000',
                '4000', '6000', '8000']
        },
        yAxis: {
            min: -110,max: 10,
            //Color borde grafica en eje Y
            lineColor: '#666666',
            lineWidth: 1,

            tickInterval: 10,//Intervalo de 10 en 10

        //Metodo para quitar signos menos
        labels: {
            formatter: function() {
                return Math.abs(this.value);
            }
        },
        //Linea de -20 db
        plotLines: [{
                value: -20,
                width: 4,
                color: '#000000'
            }]
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
                    lineWidth: 1,
                }
            }
        },
        series: [{
            name: 'Aereo',
            color: '#F80000',
            marker: {
//                symbol: 'triangle'
				  symbol: 'url(https://cdn4.iconfinder.com/data/icons/6x16-free-application-icons/16/Red_mark.png)'
            },
            data: aereoA


        }, {
            name: 'Oseo',
            color: '#F80000',
            dashStyle: 'Dash',//Estilo linea
            marker: {
                symbol: 'circle'
            },
            data: oseoA
            }]
    });
}


    function graphOidoIzquierdo() {

        
        var oseoA = orderArray(oseoID,1);
        var aereoA = orderArray(aereoID,0);


    $('#oidoIzquierdo').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'Audiograma'
        },

        xAxis: {
            //Color borde grafica en eje X
            lineColor: '#666666',
            lineWidth: 1,

            tickmarkPlacement: 'on',//Colocando ticks para completar cuadricula
            gridLineWidth: 1,
            align: 'right',
            categories: ['250', '500', '1000', '2000', '3000',
                '4000', '6000', '8000']
        },
        yAxis: {
            min: -110,max: 10,
            //Color borde grafica en eje Y
            lineColor: '#666666',
            lineWidth: 1,

            tickInterval: 10,//Intervalo de 10 en 10

        //Metodo para quitar signos menos
        labels: {
            formatter: function() {
                return Math.abs(this.value);
            }
        },
        //Linea de -20 db
        plotLines: [{
                value: -20,
                width: 4,
                color: '#000000'
            }]
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
                    lineWidth: 1,
                }
            }
        },
        series: [{
            name: 'Aereo',
            color: '#3E5F8A',
            marker: {
//                symbol: 'triangle'
                  symbol: 'url(https://cdn1.iconfinder.com/data/icons/silk2/resultset_next.png)'
            },
            data: aereoA


        }, {
            name: 'Oseo',
            color: '#3E5F8A',
            dashStyle: 'Dash',//Estilo linea
            marker: {
                symbol: 'circle'
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
				a[i] = {y:parseInt(dataA[i])*(-1),  marker: {
                    symbol: 'url('+an[i]+')'
                },posicion:i,tipo:type, onclick:function (){onClickPoint(this.posicion, this.tipo);}};
			}else{
				a[i] = {y:parseInt(dataA[i])*(-1),posicion:i,tipo:type, onclick:function (){onClickPoint(this.posicion, this.tipo);}};
				
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
    graphOidoIzquierdo();

}

</script>


<table style="width:100%">
    <tr>
            <script src="<?PHP echo Yii::app()->theme->baseUrl;?>/js/highcharts.js"></script>
            <script src="<?PHP echo Yii::app()->theme->baseUrl;?>/js/modules/exporting.js"></script>

     <td>
            <h1>Oido Derecho</h1>
            <div id="oidoDerecho" style="min-width: 310px; height: 400px; max-width: 450px ; margin: 0 auto"></div>

            <div>  
            <img  src="https://cdn1.iconfinder.com/data/icons/material-core/20/check-circle-outline-blank-16.png"onclick="setConvetion('https://cdn1.iconfinder.com/data/icons/material-core/20/check-circle-outline-blank-16.png')"/>
            <!-- <img  src="https://www.iconfinder.com/icons/8030/arrow_back_blue_last_icon#size=16" width="16" height="12" onclick="setConvetion('https://www.iconfinder.com/icons/8030/arrow_back_blue_last_icon#size=16')" /> -->
            <img  src="https://cdn3.iconfinder.com/data/icons/google-material-design-icons/48/ic_keyboard_arrow_left_48px-32.png" onclick="setConvetion('https://cdn3.iconfinder.com/data/icons/google-material-design-icons/48/ic_keyboard_arrow_left_48px-32.png')" />
            <img  src="https://www.avistautilities.com/_layouts/avista/images/icons/outageRedTriangle.png" onclick="setConvetion('https://www.avistautilities.com/_layouts/avista/images/icons/outageRedTriangle.png')"/>
            <img  src="https://cdn2.iconfinder.com/data/icons/crystalproject/Open-Office-Icons/lc_symbolshapes.left-bracket.png" onclick="setConvetion('https://cdn2.iconfinder.com/data/icons/crystalproject/Open-Office-Icons/lc_symbolshapes.left-bracket.png')"/>
            <img  src="https://cdn0.iconfinder.com/data/icons/feather/96/591279-arrow-down-16.png" onclick="setConvetion('https://cdn0.iconfinder.com/data/icons/feather/96/591279-arrow-down-16.png')"/>
            </div>

            <h1> <font face="small fonts">Promedio de Perdida:</h1>
            <pre><h1><font size=5.5 face="Comic Sans MS"><?php echo  $prompe2; ?></h1></pre>
            <h1>Grado:</h1>
           <?php 
            if ($grade2 == "Audicion Normal" ) { $bgr2 = 'green';}

            if ($grade2 == "Hipoacusia leve" ) { $bgr2 = 'purple'; }

            if ($grade2 == "Hipoacusia Moderada" ) { $bgr2 = 'pink'; }

            if ($grade2 == "Hipoacusia Moderada a Severa" ) {$bgr2 = 'pink'; }

            if ($grade2 == "Hipoacusia Severa" ) { $bgr2 = 'orange'; }

            if ($grade2 == "Hipoacusia profunda" ) { $bgr2 = 'yellow'; }
            ?>            
            <!-- <pre><h1><font size=5.5 face="times new roman"><php echo $grade2; ?></h1></pre> -->
            <pre body style='background-color:<?php echo $bgr2?>' ><H1><font size=5.5 face="times new roman"><?php echo $grade2; ?></h1></pre>
            <h1>Valor GAP:</h1>
            <pre><h1><font size=5.5 face="courier new"><?php echo 'val gap(cd): '.$cd; ?></h1></pre>
            <h1>Tipo:</h1>
            <pre><h1><font size=5.5 face="courier"><?php echo $gapD; ?></h1></pre>
            <pre><h1><font size=5.5 face="roman"><?php echo 'val < de 20(cgd): '.$probd; ?></h1></pre>

            <!-- PARA IMPRIMIR UN ARRAY -->
<!--             <pre><h1><php echo "<PRE>";
            var_dump($difD);
            echo "</PRE>"; ?></h1></pre> -->
     </td>

     <td style="width:5%">  </td>

     <td>
            <h1>Oido Izquierdo</h1>
            <div id="oidoIzquierdo" style="min-width: 310px; height: 400px; max-width: 450px; margin: 0 auto"></div>

            <div>
            <img  src="https://cdn0.iconfinder.com/data/icons/web/512/e52-16.png" onclick="setConvetion('https://cdn0.iconfinder.com/data/icons/web/512/e52-16.png')">
            <img  src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-right-01-16.png" onclick="setConvetion('https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-right-01-16.png')">
            <img  src="https://cdn4.iconfinder.com/data/icons/vectory-symbols/40/square-16.png" onclick="setConvetion('https://cdn4.iconfinder.com/data/icons/vectory-symbols/40/square-16.png')">
            <img  src="https://cdn2.iconfinder.com/data/icons/crystalproject/Open-Office-Icons/lc_symbolshapes.right-bracket.png" onclick="setConvetion('https://cdn2.iconfinder.com/data/icons/crystalproject/Open-Office-Icons/lc_symbolshapes.right-bracket.png')">
            <img  src="https://cdn0.iconfinder.com/data/icons/feather/96/591279-arrow-down-16.png" onclick="setConvetion('https://cdn0.iconfinder.com/data/icons/feather/96/591279-arrow-down-16.png')"/>
            </div>

            <h1>Promedio de Perdida:</h1> 
            <pre><H1><font size=5.5 face="Comic Sans MS"><?php echo $prompe; ?></h1></pre> 
            <h1>Grado:</h1>
           <?php 
            if ($grade == "Audicion Normal" ) { $bgr = 'green';}

            if ($grade == "Hipoacusia leve" ) { $bgr = 'purple'; }

            if ($grade == "Hipoacusia Moderada" ) { $bgr = 'pink'; }

            if ($grade == "Hipoacusia Moderada a Severa" ) {$bgr = 'pink'; }

            if ($grade == "Hipoacusia Severa" ) { $bgr = 'orange'; }

            if ($grade == "Hipoacusia profunda" ) { $bgr = 'yellow'; }
            ?>
            <pre body style='background-color:<?php echo $bgr?>' ><H1><font size=5.5 face="Comic Sans MS"><?php echo $grade; ?></h1></pre>
            <!-- <pre body style='background-color:pink'><H1><font size=5.5 face="Comic Sans MS"><php echo $grade; ?></h1></pre> -->
            <h1>Valor GAP:</h1>
            <pre><H1><font size=5.5 face="Comic Sans MS"><?php echo $c; ?></h1></pre>
            <h1>Tipo:</h1>
            <pre><H1><font size=5.5 face="Comic Sans MS"><?php echo $gapI; ?></h1></pre>
            <pre><H1><font size=5.5 face="Comic Sans MS"><?php echo 'val < de 20(cgd): '.$prob; ?></h1></pre>
<!--             <pre><H1><php echo "<PRE>";
            var_dump($difI);
            echo "</PRE>"; ?></h1></pre> -->
     </td>

    </tr>
            <!-- <pre><h1><php echo 'Nivel de Exposición a Ruido: '.$eRuido; ?></h1></pre> -->

</table>

    <pre><h1><?php echo 'Nivel de Exposición a Ruido: '.$eRuido; ?></h1></pre>

<?php
	echo "<script type='text/javascript'>
			loadData('".$doDer."','".$daDer."','".$doIzq."','".$daIzq."')
			graphOidoDerecho();graphOidoIzquierdo();
		  </script>";
?>




