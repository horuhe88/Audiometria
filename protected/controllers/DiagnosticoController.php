<?php

class DiagnosticoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','adminPaciente','graphI','graphD','results'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($id)
	{
		$this->layout="column1";
		$model=new Diagnostico;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Diagnostico']))
		{
			$model->attributes=$_POST['Diagnostico'];
			$model->id_paciente=$id;
			$model->fecha=date("Y-m-d H:i:s");
			if($model->save())
				$this->redirect(array('results','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
			'id'=>$id
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Diagnostico']))
		{
			$model->attributes=$_POST['Diagnostico'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Diagnostico');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$this->layout="column1";
		$model=new Diagnostico('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Diagnostico']))
			$model->attributes=$_GET['Diagnostico'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}


	public function actionVector($id)
	{
		# code...
		$this->layout="column1";

		$sql="SELECT * FROM diagnostico WHERE id=".$id;
		$d=Yii::app()->db
				->createCommand($sql)
				->queryAll();

		$dataA = array();
		$dataO = array();

		//DATOS VIA AEREA
		$dataA[] = $d[0]["AIzq250"];	
		$dataA[] = $d[0]["ADer250"];

		$dataA[] = $d[0]["AIzq500"];	
		$dataA[] = $d[0]["ADer500"];

		$dataA[] = $d[0]["AIzq1000"];	
		$dataA[] = $d[0]["ADer1000"];
		
		$dataA[] = $d[0]["AIzq2000"];	
		$dataA[] = $d[0]["ADer2000"];

		$dataA[] = $d[0]["AIzq3000"];	
		$dataA[] = $d[0]["ADer3000"];

		$dataA[] = $d[0]["AIzq4000"];	
		$dataA[] = $d[0]["ADer4000"];

		$dataA[] = $d[0]["AIzq6000"];	
		$dataA[] = $d[0]["ADer6000"];

		$dataA[] = $d[0]["AIzq8000"];	
		$dataA[] = $d[0]["ADer8000"];


		//DATOS VIA OSEA
		$dataO[] = $d[0]["OIzq250"];	
		$dataO[] = $d[0]["ODer250"];

		$dataO[] = $d[0]["OIzq500"];	
		$dataO[] = $d[0]["ODer500"];

		$dataO[] = $d[0]["OIzq1000"];	
		$dataO[] = $d[0]["ODer1000"];
		
		$dataO[] = $d[0]["OIzq2000"];	
		$dataO[] = $d[0]["ODer2000"];

		$dataO[] = $d[0]["OIzq3000"];	
		$dataO[] = $d[0]["ODer3000"];

		$dataO[] = $d[0]["OIzq4000"];	
		$dataO[] = $d[0]["ODer4000"];

		//$dataO[] = $d[0]["OIzq6000"];	
		$dataO[] = $d[0]["ODer6000"];

		$dataO[] = $d[0]["OIzq8000"];	
		//$dataO[] = $d[0]["ODer8000"];

		for ($v=0; $v <8 ; $v++) { 

			//OIDO IZQUIERDO
			$cpar = 2 * $v;
			$acum = $dataA[$cpar];
			$sum1 = $sum1 + $acum;
			
			//OIDO DERECHO
			$cpar = 2 * $v + 1;
			$acum = $dataA[$cpar];
			$sum2 = $sum2 + $acum;

			$vector1 =  $dataA[$v];
		}


		for ($v=0; $v <7 ; $v++) { 

			//OIDO IZQUIERDO
			$cpar = 2 * $v;
			$acum = $dataO[$cpar];
			$sum1 = $sum1 + $acum;
			
			//OIDO DERECHO
			$cpar = 2 * $v + 1;
			$acum = $dataO[$cpar];
			$sum2 = $sum2 + $acum;

			$vector2 =  $dataO[$v];
		}
	}

	public function actionResults($id){  //,$sel){
		$this->layout="column1";

		$sql="SELECT * FROM diagnostico WHERE id=".$id;
		$d=Yii::app()->db
				->createCommand($sql)
				->queryAll();

		$dataA = array();
		$dataO = array();
		//$A = array();
		
		//DATOS VIA AEREA
		$dataA[] = $d[0]["AIzq250"];	
		$dataA[] = $d[0]["ADer250"];

		$dataA[] = $d[0]["AIzq500"];	
		$dataA[] = $d[0]["ADer500"];

		$dataA[] = $d[0]["AIzq1000"];	
		$dataA[] = $d[0]["ADer1000"];
		
		$dataA[] = $d[0]["AIzq2000"];	
		$dataA[] = $d[0]["ADer2000"];

		$dataA[] = $d[0]["AIzq3000"];	
		$dataA[] = $d[0]["ADer3000"];

		$dataA[] = $d[0]["AIzq4000"];	
		$dataA[] = $d[0]["ADer4000"];

		$dataA[] = $d[0]["AIzq6000"];	
		$dataA[] = $d[0]["ADer6000"];

		$dataA[] = $d[0]["AIzq8000"];	
		$dataA[] = $d[0]["ADer8000"];


		//DATOS VIA OSEA
		$dataO[] = $d[0]["OIzq250"];	
		$dataO[] = $d[0]["ODer250"];

		$dataO[] = $d[0]["OIzq500"];	
		$dataO[] = $d[0]["ODer500"];

		$dataO[] = $d[0]["OIzq1000"];	
		$dataO[] = $d[0]["ODer1000"];
		
		$dataO[] = $d[0]["OIzq2000"];	
		$dataO[] = $d[0]["ODer2000"];

		$dataO[] = $d[0]["OIzq3000"];	
		$dataO[] = $d[0]["ODer3000"];

		$dataO[] = $d[0]["OIzq4000"];	
		$dataO[] = $d[0]["ODer4000"];

		//$dataO[] = $d[0]["OIzq6000"];	
		$dataO[] = $d[0]["ODer6000"];

		$dataO[] = $d[0]["OIzq8000"];	
		//$dataO[] = $d[0]["ODer8000"];

		$sum1=0;//SUMA VALORES PARES
		$sum2=0;//SUMA VALORES IMPARES
		$c=0;//CONTADOR DE DIFERENCIA DE VALORES MAYORES QUE 10 OIDO IZQ
		$cg=0;//CONTADOR DE VALORES OSEOS MENORES  QUE 20 OIDO IZQ
		$cd=0;//CONTADOR DE DIFERENCIA DE VALORES MAYORES QUE 10 OIDO DER
		$cgd=0;//CONTADOR DE VALORES OSEOS MENORES  QUE 20 OIDO DER
		$prob=0;
		$probd=0;

		
		//-------PROMEDIO DE PERDIDA IZQ Y DER-------------------------------------------------------------------
		for($i=0;$i<=7; $i++){

			//OIDO IZQUIERDO
			$cpar = 2 * $i;
			$acum = $dataA[$cpar];
			$sum1 = $sum1 + $acum;
			
			//OIDO DERECHO
			$cpar = 2 * $i + 1;
			$acum = $dataA[$cpar];
			$sum2 = $sum2 + $acum;

		}


		$prompe = $sum1 / 8;
		$prompe2 = $sum2 / 8;

		//-------------------------------------------------------------------------------------------------------

		//-----------------COMPARACION GAP------------------------------------------------------------------------

		for ($i=0; $i<=6 ; $i++) { 


			$cpar = $i*2;
			$AI = $dataA[$cpar];
			$OI = $dataO[$cpar];

			$difI[$cpar] = abs(intval($AI) - intval($OI));// DIF AEREA Y OSEA IZQ

			$cipar = 1 + $i*2;
			$AD = $dataA[$cipar];
			$OD = $dataO[$cipar];
			$difD[$cipar] = abs(intval($AD) - intval($OD)); //DIF AEREA Y OSEA DER


			$datgapOabs[$cpar] = intval($dataO[$cpar]);//VALORES <20 OIDO IZQ
			$datgapOabs1[$cipar] = intval($dataO[$cipar]);//VALORES <20 OIDO DER

			//GAP OIDO IZQUIERDO

/*			if ($difI[$cpar] > 10  && $datgapOabs[$cpar]  < 20) {
			# code...
				$c++;
				$cg++;
				$prob = $cg;

				if ($c >= 5 && $cg < 7 ) {
					
					$gapI = 'Conductiva';

				}

			}else {
				# code...
				$gapI = 'Sensorial';
			}*/

//-----------------------------------------INICIO2------------------------------------------------------------------------

				//$c++;
/*				$cg++;

			if ( $cg <= 7 && $datgapOabs[$cpar]  <= 20) {
			# code...
				//$cg++;
//				$prob = $cg;

						switch ($cg) {

						    case 0:
						        $gapI = 'Mixta';
						        break;

						    case 1:
						        $gapI = 'Mixta';
						        //$prob = $c;
						        break;
						    case 2:
						        $gapI = 'Mixta';
						        break;
						    case 3:
						        $gapI = 'Mixta';
						        break;
						    case 4:
						        $gapI = 'Mixta';
						        break;
						    case 5:
						        $gapI = 'Mixta';
						        break;

						}

				$c++;		

				if ($c >= 5 && $difI[$cpar] > 10 ) {
					//$prob = $cg;
					//$gapI = 'Conductiva';
					switch ($cg) {
						     case 6:
						        $gapI = 'Conductiva';
						        break;
						    case 7:
						        $gapI = 'Conductiva';
						        $prob = $cg;
						        break;

						    default:
						    	$gapI = 'Sensorial';
						    	break;
					}



			}

			}else {
				# code...
				$gapI = 'Sensorial';
			}*/
//---------------------------------------------FIN2----------------------------------------------------------------------------

//---------------------------------------------INICIO3-------------------------------------------------------------------------


/*				$c++;
				$cg++;
			if ($difI[$cpar] > 10  && $datgapOabs[$cpar]  < 20) {
			# code...
/*				$c++;
				$cg++;/

				if ($c >= 5 && $cg < 7 ) {
					
					//$gapI = 'Conductiva';

						switch ($cg) {

						    case 0:
						        $gapI = 'Mixta';
						        break;
						    case 1:
						        $gapI = 'Mixta';
						        break;
						    case 2:
						        $gapI = 'Mixta';
						        break;
						    case 3:
						        $gapI = 'Mixta';
						        break;
						    case 4:
						        $gapI = 'Mixta';
						        break;
						    case 5:
						        $gapI = 'Mixta';
						        break;

						     case 6:
						        $gapI = 'Conductiva';
						        break;

						    case 7:
						        $gapI = 'Conductiva';
						        break;

/*						    default:
						    	$gapI = 'Sensorial';
						    	break;/
						}

			}

			}else {
				# code...
				$gapI = 'Sensorial';
			}*/

//----------------------------------------FIN3---------------------------------------------------------------


//--------------------------------------------INICIO4-------------------------------------------------------

/*			if ($difI[$cpar] > 10  && $datgapOabs[$cpar]  < 20) {
			# code...
				$c++;
				$cg++;
//				$prob = 'entra';
//				$prob = $cg;

				if ($c >= 5 && $cg < 7 ) {
					
					$gapI = 'Conductiva';

				}elseif ($c < 4 && $cg < 4) {
					# code...
					//$prob = 'entra';
					$gapI = 'Mixta';
				}

			}else {
				# code...
				$gapI = 'Sensorial';
			}
*/

//--------------------------------------------FIN4---------------------------------------------------------		


//--------------------//------------------OIDO IZQUIERDO----------------------//---------------------------------------

			if ($difI[$cpar] > 10) {
				# code...
				$c++;
			}

			if ($datgapOabs[$cpar]  < 20) {
				# code...
				$cg++;
			}


			if ($c == 0 ) {
					$gapI = 'Sensorial';
				}

			if ($c >= 8 && $cg >7  && $cg != 0 && $cg >0) {
					$gapI = 'Conductiva';
					
				}else {
					$gapI = 'Mixta';
			}


			$prob= $cg;
//-------------------------//-------------FIN OIDO IZQUIERDO--------------//----------------------------------------			

//------------------//-------------------OIDO DERECHO------------------------------------------//------------------

			if ($difD[$cipar] > 10) {
				# code...
				$cd++;
			}

			if ($datgapOabs1[$cipar]  < 20) {
				# code...
				$cgd++;
			}


			if ($cd == 0 ) {
					$gapD = 'Sensorial';
				}

			if ($cd >= 8 && $cgd >7  && $cgd != 0 && $cgd >0) {
					$gapD = 'Conductiva';
					
				}else {
					$gapD = 'Mixta';
			}

			$probd= $cgd;

//------------------//-------------------FIN OIDO DERECHO------------------------------------------//------------------
/*			//GAP OIDO DERECHO
			if ($difD[$cipar] >= 10 ) {
			# code...
				$cd++;

				if ($cd >= 7) {
					
					$gapD = 'Conductiva';
				}
				else{
					$gapD = 'Mixta';

				}
			}*/
			
		}

//----------------------------------------------------------------------------------------------

		$this->render('graph',array(
			'id'=>$id,'prompe'=>$prompe,'prompe2'=>$prompe2,
			'difI'=> $difI, 'difD'=> $difD,'gapI'=>$gapI,'gapD'=>$gapD,
			'c'=>$c , 'cd'=>$cd, 'datgapOabs'=>$datgapOabs,'prob'=>$prob, 'probd'=>$probd, //'sel'=>$sel,
		));
	}


	public function actionGraphD($id,$type){
		require_once ('/../extensions/jpgraph/src/jpgraph.php');
		require_once ('/../extensions/jpgraph/src/jpgraph_line.php');

		// Callback to negate the argument
		function _cb_negate($aVal) {
		    return round(-$aVal);
		}


		$sql="SELECT A".$type."250,O".$type."250,A".$type."500,O".$type."500,A".$type."1000,O".$type."1000,A".$type."2000,O".$type."2000,A".$type."3000,O".$type."3000,A".$type."4000,O".$type."4000,A".$type."6000,O".$type."6000,A".$type."8000,O".$type."8000 FROM diagnostico WHERE id=".$id;
		$d=Yii::app()->db
				->createCommand($sql)
				->queryAll();

		$dataX = array(1);	
		$dataA = array();
		$dataO = array();
		$data20 = array(-20,-20,-20,-20,-20,-20,-20,-20,-20);

		//$dataX[] = null;	
		$dataA[] = null;	
		$dataO[] = null;

		$dataA[] = $d[0]["A".$type."250"]*(-1);	
		$dataO[] = $d[0]["O".$type."250"]*(-1);

		$dataA[] = $d[0]["A".$type."500"]*(-1);	
		$dataO[] = $d[0]["O".$type."500"]*(-1);

		$dataA[] = $d[0]["A".$type."1000"]*(-1);	
		$dataO[] = $d[0]["O".$type."1000"]*(-1);

		$dataA[] = $d[0]["A".$type."2000"]*(-1);	
		$dataO[] = $d[0]["O".$type."2000"]*(-1);

		$dataA[] = $d[0]["A".$type."3000"]*(-1);	
		$dataO[] = $d[0]["O".$type."3000"]*(-1);

		$dataA[] = $d[0]["A".$type."4000"]*(-1);	
		$dataO[] = $d[0]["O".$type."4000"]*(-1);

		$dataA[] = $d[0]["A".$type."6000"]*(-1);	
		//$dataO[] = $d[0]["O".$type."6000"]*(-1);

		$dataA[] = $d[0]["A".$type."8000"]*(-1);	
		//$dataO[] = $d[0]["O".$type."8000"]*(-1);


		$labels = array("       125","       250","       500","       1000","       2000","       3000","       4000","       6000","       8000");


		// Setup the graph
		$graphD = new Graph(615,450);
		//$graphD = new Graph(1025,750,"auto");
		//$graphD->SetScale("textlin",0,"8000",0,0);
		$graphD->SetScale("textlin");

		$theme_class=new UniversalTheme;

		$graphD->SetTheme($theme_class);
		$graphD->img->SetAntiAliasing(false);
		$graphD->SetBox(false);

		//$graphD->img->SetAntiAliasing();

		$graphD->yaxis->SetLabelFormatCallback("_cb_negate");
		//$graphD->yaxis->HideZeroLabel();
		$graphD->yaxis->HideLine(false);
		//$graphD->yaxis->SetPos('max');// Locate x-axis at the top
		$graphD->yaxis->HideTicks(false,false);

		$graphD->xgrid->Show();
		$graphD->xgrid->SetLineStyle("solid");
		$graphD->xaxis->SetTickLabels($labels);
		$graphD->xaxis->HideLine(true);
		//$graphD->xaxis->SetPos('max');// Locate x-axis at the top
		$graphD->xaxis->SetLabelAngle(90);//cambiar el angulo de los labels del eje x
		$graphD->xaxis->SetLabelSide(SIDE_UP);//Para colocar los labels encima del eje x
		$graphD->xgrid->SetColor('#E3E3E3');


		$p1 = new LinePlot($dataA);// Si comento se pierden las graficas
		$graphD->Add($p1);
		$p1->SetColor("#B22222");
		$p1->SetLegend('Aereo');
		$p1->mark->SetWeight(4);
		$p1->mark->SetType(MARK_CIRCLE,'',1.0);
		

		$p2 = new LinePlot($dataO);
		$graphD->Add($p2);
		$p2->SetColor("#B22222");
		$p2->SetLegend('Oseo');
		$p2->SetStyle("dotted");
		$p2->mark->SetWeight(2);
		$p2->mark->SetType(MARK_UTRIANGLE,'',1.0);
		$p2->mark->SetFillColor('black');


		$p3 = new LinePlot($data20);
		//$p3->mark->SetSize(15);
		$p3->mark->SetWeight(2);
		//$p3->mark->SetWidth(50);  En pixeles
		$graphD->Add($p3);
		$p3->SetColor("black");
		$p3->SetStyle("solid");

		$p = new LinePlot($dataX);
		$graphD->Add($p);
		$p->SetColor("black");
		$p->SetStyle("solid");


		$graphD->legend->SetFrameWeight(1);

		// Output line
		$graphD->Stroke();


	}


	public function actionGraphI($id,$type){//,$sel){
		require_once ('/../extensions/jpgraph/src/jpgraph.php');
		require_once ('/../extensions/jpgraph/src/jpgraph_line.php');
		require_once ('/../extensions/jpgraph/src/jpgraph_scatter.php');


		// Callback to negate the argument
		function _cb_negate($aVal) {
		    return round(-$aVal);
		}


		$sql="SELECT A".$type."250,O".$type."250,A".$type."500,O".$type."500,A".$type."1000,O".$type."1000,A".$type."2000,O".$type."2000,A".$type."3000,O".$type."3000,A".$type."4000,O".$type."4000,A".$type."6000,O".$type."6000,A".$type."8000,O".$type."8000 FROM diagnostico WHERE id=".$id;
		$d=Yii::app()->db
				->createCommand($sql)
				->queryAll();

		$dataX = array(1);				
		$data110 = array(-101);
		$dataA = array();
		$dataO = array();
		$data20 = array(-20,-20,-20,-20,-20,-20,-20,-20,-20);


		//$dataX[] = null;	

		$dataA[] = null;	
		$dataO[] = null;

		$dataA[] = $d[0]["A".$type."250"]*(-1);	
		$dataO[] = $d[0]["O".$type."250"]*(-1);

		$dataA[] = $d[0]["A".$type."500"]*(-1);	
		$dataO[] = $d[0]["O".$type."500"]*(-1);

		$dataA[] = $d[0]["A".$type."1000"]*(-1);	
		$dataO[] = $d[0]["O".$type."1000"]*(-1);

		$dataA[] = $d[0]["A".$type."2000"]*(-1);	
		$dataO[] = $d[0]["O".$type."2000"]*(-1);

		$dataA[] = $d[0]["A".$type."3000"]*(-1);	
		$dataO[] = $d[0]["O".$type."3000"]*(-1);

		$dataA[] = $d[0]["A".$type."4000"]*(-1);	
		$dataO[] = $d[0]["O".$type."4000"]*(-1);

		$dataA[] = $d[0]["A".$type."6000"]*(-1);	
		//$dataO[] = $d[0]["O".$type."6000"]*(-1);

		$dataA[] = $d[0]["A".$type."8000"]*(-1);	
		//$dataO[] = $d[0]["O".$type."8000"]*(-1);



		$labels = array("       125","       250","       500","       1000","       2000","       3000","       4000","       6000","       8000");


		// Setup the graph
		$graphI = new Graph(615,450);
		$graphI->SetScale("textlin");


		$theme_class=new UniversalTheme;

		$graphI->SetTheme($theme_class);
		$graphI->img->SetAntiAliasing(false);
		$graphI->SetBox(false);

		//$graphI->img->SetAntiAliasing();

		$graphI->yaxis->SetLabelFormatCallback("_cb_negate");
		//$graphI->yaxis->HideZeroLabel(false);
		$graphI->yaxis->HideLine(false);
		$graphI->yaxis->HideTicks(false,false);

		$graphI->xgrid->Show();
		$graphI->xgrid->SetLineStyle("solid");
		$graphI->xaxis->HideLine(true);
		$graphI->xaxis->SetTickLabels($labels);
		$graphI->xaxis->SetLabelAngle(90);//cambiar el angulo de los labels del eje x
		$graphI->xaxis->SetLabelSide(SIDE_UP);//Para colocar los labels encima del eje x
		$graphI->xgrid->SetColor('#E3E3E3');


		$p1 = new LinePlot($dataA);// Si comento se pierden las graficas
		$graphI->Add($p1);
/*		$p1->SetColor("#6495ED");
		$p1->SetLegend('Aereo');
		$p1->mark->SetType(MARK_X,'',1.0);*/
		

		$p2 = new LinePlot($dataO);
		$graphI->Add($p2);
/*		$p2->SetColor("#6495ED");
		$p2->SetLegend('Oseo');
		$p2->SetStyle("dotted");
		$p2->mark->SetType(MARK_DTRIANGLE,'',1.0);
		$p2->mark->SetFillColor('black');
*/

/*		if ($sel==0) {
			# code...
			$icon1 = 'https://cdn0.iconfinder.com/data/icons/free_windows7_icons_emoticons/64/flower.png';
		}

		if ($sel==1) {
			# code...
			$icon1 = '/xampp/htdocs/yiiframework/audiometria/protected/extensions/jpgraph/src/iconJPGraph/markCircle.png';
		}

		if ($sel==3) {
			# code...
			$icon1 = '/xampp/htdocs/yiiframework/audiometria/protected/extensions/jpgraph/src/iconJPGraph/markLeft.png';
		}

		if ($sel==6) {
			# code...
			$icon1 = '/xampp/htdocs/yiiframework/audiometria/protected/extensions/jpgraph/src/iconJPGraph/markTriangle.png';
		}

		if ($sel==7) {
			# code...
			$icon1 = '/xampp/htdocs/yiiframework/audiometria/protected/extensions/jpgraph/src/iconJPGraph/markLeftbracket.png';
		}

		*/
		
		$p1->mark->SetType(MARK_FLAG1,  27 );
		$p1->SetLegend('Aereo');
		$p1->SetColor("#6495ED");

/*C:\xampp\htdocs\yiiframework\audiometria\protected\controllers\rose.gif*/
		$p2->mark->SetType(MARK_IMG,'/xampp/htdocs/yiiframework/audiometria/protected/extensions/jpgraph/src/iconJPGraph/markCircle.png',0.5);
		$p2->SetColor("#6495ED");
		$p2->SetLegend('Oseo');
		$p2->SetStyle("dotted");
		/*$p2->mark->SetWeight(1);*/
		//$p2->mark->Show(); 

		$p3 = new LinePlot($data20);
		//$p3->SetWeight(105);
		//$p3->SetLineWidth(5);
		$graphI->Add($p3);
		$p3->SetColor("black");
		$p3->SetStyle("solid");

		$p = new LinePlot($dataX);
		$graphI->Add($p);
		$p->SetColor("black");
		$p->SetStyle("solid");

		$p110 = new LinePlot($data110);
		$graphI->Add($p110);
		$p110->SetColor("black");
		$p110->SetStyle("solid");


		$graphI->legend->SetFrameWeight(1);

		// Output line
		$graphI->Stroke();


	}

	public function actionAdminPaciente($id){
		$this->layout="column1";
		$model=new Diagnostico('search');
		$model->unsetAttributes();  // clear any default values
		$model->id_paciente=$id;
		if(isset($_GET['Diagnostico']))
			$model->attributes=$_GET['Diagnostico'];

		$this->render('admin',array(
			'model'=>$model,
			'id'=>$id,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Diagnostico the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Diagnostico::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Diagnostico $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='diagnostico-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
