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
			//'postOnly + delete', // we only allow deletion via POST request
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
		$this->layout="column1";
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
		$model = $this->loadModel($id);
		$idPaciente = $model->id_paciente;
		$model->delete();	
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(array('adminPaciente','id'=>$idPaciente));
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

	public function actionResults($id){  //,$sel){
		$this->layout="column1";

		$sql="SELECT * FROM diagnostico WHERE id=".$id;
		$d=Yii::app()->db
				->createCommand($sql)
				->queryAll();

		$dataA = array();
		$dataO = array();

		$eRuido = $d[0]["nvl_exp_ruido"];
		
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

		$dataO[] = $d[0]["OIzq6000"];	
		$dataO[] = $d[0]["ODer6000"];

		$dataO[] = $d[0]["OIzq8000"];	
		$dataO[] = $d[0]["ODer8000"];

		$sum1=0;//SUMA VALORES PARES
		$sum2=0;//SUMA VALORES IMPARES
		$c=0;//CONTADOR DE DIFERENCIA DE VALORES MAYORES QUE 10 OIDO IZQ
		$cg=0;//CONTADOR DE VALORES OSEOS MENORES  QUE 20 OIDO IZQ
		$cd=0;//CONTADOR DE DIFERENCIA DE VALORES MAYORES QUE 10 OIDO DER
		$cgd=0;//CONTADOR DE VALORES OSEOS MENORES QUE 20 OIDO DER
		$prob=0;
		$probd=0;


		$daIzq = "".$dataA[0].",".$dataA[2].",".$dataA[4].",".$dataA[5].",".$dataA[8].",".$dataA[10].",".$dataA[12].",".$dataA[14];
		$daDer = "".$dataA[1].",".$dataA[3].",".$dataA[5].",".$dataA[7].",".$dataA[9].",".$dataA[11].",".$dataA[13].",".$dataA[15];

		$doIzq = "".$dataO[0].",".$dataO[2].",".$dataO[4].",".$dataO[5].",".$dataO[8].",".$dataO[10];//.",".$dataO[12].",".$dataO[14];
		$doDer = "".$dataO[1].",".$dataO[3].",".$dataO[5].",".$dataO[7].",".$dataO[9].",".$dataO[11];//.",".$dataO[13].",".$dataO[15];
		
		//-------PROMEDIO DE PERDIDA IZQ Y DER-------------------------------------------------------------------
		for($i=0;$i<=7; $i++){

			//OIDO IZQUIERDO
			$cpar = 2 * $i;
			$acum = $dataA[$cpar];
			
			if ($cpar != 0 && $cpar != 8 && $cpar != 12 && $cpar != 14) {
				$sum1 = $sum1 + $acum;
			}

			//OIDO DERECHO
			$cpar = 2 * $i + 1;
			$acum = $dataA[$cpar];

			if ($cpar != 1 && $cpar != 9 && $cpar != 13 && $cpar != 15) {
				$sum2 = $sum2 + $acum;
			}

		}


		$prompe = $sum1 / 4;
		$prompe2 = $sum2 / 4;

		if ($prompe <= 25.5) {
			$grade = "Audicion Normal";
		}elseif (25.6 <= $prompe && $prompe <= 40.5) {
			$grade = "Hipoacusia leve";
		}elseif (40.6 <= $prompe && $prompe <= 55.5) {
			$grade = "Hipoacusia Moderada";
		}elseif (55.6 <= $prompe && $prompe <= 70.5) {
			$grade = "Hipoacusia Moderada a Severa";
		}elseif (70.6 <= $prompe && $prompe <= 90.5) {
			$grade = "Hipoacusia Severa";
		}elseif (90.6 <= $prompe) {
			$grade = "Hipoacusia profunda";
		}


		if ($prompe2 <= 25.5) {
			$grade2 = "Audicion Normal";
		}elseif (25.6 <= $prompe2 && $prompe2 <= 40.5) {
			$grade2 = "Hipoacusia leve";
		}elseif (40.6 <= $prompe2 && $prompe2 <= 55.5) {
			$grade2 = "Hipoacusia Moderada";
		}elseif (55.6 <= $prompe2 && $prompe2 <= 70.5) {
			$grade2 = "Hipoacusia Moderada a Severa";
		}elseif (70.6 <= $prompe2 && $prompe2 <= 90.5) {
			$grade2 = "Hipoacusia Severa";
		}elseif (90.6 <= $prompe2) {
			$grade2 = "Hipoacusia profunda";
		}


		//-------------------------------------------------------------------------------------------------------

		//-----------------COMPARACION GAP------------------------------------------------------------------------

		for ($i=0; $i<6 ; $i++) { 


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

			
//--------------------//------------------OIDO IZQUIERDO----------------------//---------------------------------------

			if ($difI[$cpar] > 10) {
				$c++;
			}

			//echo "oseo Izq _".$OI;

			if ($datgapOabs[$cpar]  < 20) {
				$cg++;
			}


			if ($c >= 6 && $cg >=6  && $cg != 0 && $cg >0) {
					$gapI = 'Conductiva';
					
				}elseif ($c == 0 ) {
					$gapI = 'Sensorial';
				}else {
					$gapI = 'Mixta';
			}


			$prob= $cg;
//-------------------------//-------------FIN OIDO IZQUIERDO--------------//----------------------------------------			

//------------------//-------------------OIDO DERECHO------------------------------------------//------------------

			if ($difD[$cipar] > 10) {
				$cd++;
			}

			if ($datgapOabs1[$cipar]  < 20) {
				$cgd++;
			}

			if ($cd >= 6 && $cgd >=6  && $cgd != 0 && $cgd >0) {
					$gapD = 'Conductiva';
					
				}elseif ($cd == 0 ) {
					$gapD = 'Sensorial';
				}else {
					$gapD = 'Mixta';
			}

			$probd= $cgd;

//------------------//-------------------FIN OIDO DERECHO------------------------------------------//------------------
		
		}

//---------------------------------------------------------------------------------------------------------------------

//-------------------//----------------------ALARMA--------------------------------//----------------------------------

//----------------------------------Audiometria de Seguimiento---------------------------------------------------------

		$inc = 0;
		$inc2 = 0;

		
			# code...
			$idPaciente = $d[0]["id_paciente"];


			$sqlDiagnostico = "SELECT * FROM diagnostico WHERE id_paciente = ".$idPaciente." AND id <= ".$id." ORDER BY id DESC LIMIT 2";	

			$diagnosticos = Yii::app()->db
				->createCommand($sqlDiagnostico)
				->queryAll();
		if (count($diagnosticos) > 1) {		

			//$sql="SELECT * FROM diagnostico WHERE id=".$id;

			$dataAnow = array();
			$dataAbef = array();
			$restaIzq = array();
			$restaDer = array();

			$eRuido = $diagnosticos[0]["nvl_exp_ruido"];

			//Datos Actuales de audiometria

			$datAnow[] = $diagnosticos[0]["AIzq250"];	
			$datAnow[] = $diagnosticos[0]["ADer250"];

			$datAnow[] = $diagnosticos[0]["AIzq500"];	
			$datAnow[] = $diagnosticos[0]["ADer500"];

			$datAnow[] = $diagnosticos[0]["AIzq1000"];	
			$datAnow[] = $diagnosticos[0]["ADer1000"];
			
			$datAnow[] = $diagnosticos[0]["AIzq2000"];	
			$datAnow[] = $diagnosticos[0]["ADer2000"];

			$datAnow[] = $diagnosticos[0]["AIzq3000"];	
			$datAnow[] = $diagnosticos[0]["ADer3000"];

			$datAnow[] = $diagnosticos[0]["AIzq4000"];	
			$datAnow[] = $diagnosticos[0]["ADer4000"];

			$datAnow[] = $diagnosticos[0]["AIzq6000"];	
			$datAnow[] = $diagnosticos[0]["ADer6000"];

			$datAnow[] = $diagnosticos[0]["AIzq8000"];	
			$datAnow[] = $diagnosticos[0]["ADer8000"];


			//Datos Audiometria anterior

			$datAbef[] = $diagnosticos[1]["AIzq250"];	
			$datAbef[] = $diagnosticos[1]["ADer250"];

			$datAbef[] = $diagnosticos[1]["AIzq500"];	
			$datAbef[] = $diagnosticos[1]["ADer500"];

			$datAbef[] = $diagnosticos[1]["AIzq1000"];	
			$datAbef[] = $diagnosticos[1]["ADer1000"];
			
			$datAbef[] = $diagnosticos[1]["AIzq2000"];	
			$datAbef[] = $diagnosticos[1]["ADer2000"];

			$datAbef[] = $diagnosticos[1]["AIzq3000"];	
			$datAbef[] = $diagnosticos[1]["ADer3000"];

			$datAbef[] = $diagnosticos[1]["AIzq4000"];	
			$datAbef[] = $diagnosticos[1]["ADer4000"];

			$datAbef[] = $diagnosticos[1]["AIzq6000"];	
			$datAbef[] = $diagnosticos[1]["ADer6000"];

			$datAbef[] = $diagnosticos[1]["AIzq8000"];	
			$datAbef[] = $diagnosticos[1]["ADer8000"];


			for($i=0;$i<=7; $i++){

				//OIDO IZQUIERDO
				$cpar = 2 * $i;
				$restaIzq[$i] = $datAnow[$cpar] - $datAbef[$cpar];

				//OIDO DERECHO
				$cpar = 2 * $i + 1;
				$restaDer[$i] = $datAnow[$cpar] - $datAbef[$cpar];

				if ($restaIzq[$i] >= 15 || $restaIzq[$i] <= -15) {		
					$inc++;		
				}

				if ($restaDer[$i] >= 15 || $restaDer[$i] <= -15) {
					$inc2++;
				}

			}

			// echo "val mayores de 15:  ".$inc2;

		}else{
			$inc = 0;
			$inc2 = 0;

		}


		// if ($eRuido <=80 || $eRuido <=82) {
		// 	# code...
		// 	echo "Próximo diagnostico dentro de 5 años";
		// }elseif (82 < $eRuido && $eRuido <= 99) {
		// 	# code...
		// 	echo "Próximo diagnostico dentro de 1 año";
		// }elseif (100<$eRuido) {
		// 	# code...
		// 	echo "Próximo diagnostico dentro de 6 meses";
		// }

//----------------------------------Fin Audiometria de Seguimiento----------------------------------------------------



//-------------------//----------------------FIN ALARMA--------------------------------//----------------------------

		$this->render('graph',array(
			'id'=>$id,'prompe'=>$prompe,'prompe2'=>$prompe2,
			'difI'=> $difI, 'difD'=> $difD,'gapI'=>$gapI,'gapD'=>$gapD,
			'c'=>$c , 'cd'=>$cd, 'datgapOabs'=>$datgapOabs,
			'prob'=>$prob, 'probd'=>$probd,	'daIzq'=>$daIzq,'doIzq'=>$doIzq, 
			'daDer'=>$daDer, 'doDer'=>$doDer , 'grade' => $grade, 'grade2' => $grade2, 
			'eRuido'=> $eRuido , 'inc' => $inc, 'inc2' => $inc2
		));
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
