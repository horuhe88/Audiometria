<?php

class PacienteController extends Controller
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
				'actions'=>array('create','update', 'admin', 'delete', 'deletepaciente'),
				'users'=>array('@'),
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
		$this->layout="column1";

		$empresa = IdentEmpresa::model()->find("id_Paciente=:id_Paciente",array(':id_Paciente'=>''.$id));
		//$exposicionLaboral = HLaboralExpA::model()->find('id_empresa=:id_empresa',array(':id_empresa'=>$empresa->id));
		$exposicionActual = HLaboralExpA::model()->find('id_empresa=:id_empresa',array(':id_empresa'=>$empresa->id));
		//$exposicionRuidoExtra = HLaboralExpA::model()->find('id_Paciente=:id_Paciente',array(':id_Paciente'=>$id));
		//$antecedentes = HLaboralExpA::model()->find('id_Pacientes=:id_Pacientes',array(':id_Pacientes'=>$id));
		//$antecedentesMorbidos = HLaboralExpA::model()->find('id_Pacientes=:id_Pacientes',array(':id_Pacientes'=>$id));
		//$antecedentesOtologicos = HLaboralExpA::model()->find('id_Paciente=:id_Paciente',array(':id_Paciente'=>$id));
		//$antAudioAnter = HLaboralExpA::model()->find('id_Paciente=:id_Paciente',array(':id_Paciente'=>$id));


		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'empresa'=>$empresa,
			'exposicionActual'=>$exposicionActual,
		//	'exposicionLaboral'=>$exposicionLaboral,
		//	'exposicionRuidoExtra'=>$exposicionRuidoExtra,
		//	'antecedentes'=>$antecedentes,
		//	'antecedentesMorbidos'=>$antecedentesMorbidos,
		//	'antecedentesOtologicos'=>$antecedentesOtologicos,
		//	'antAudioAnter'=>$antAudioAnter
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$this->layout="column1";
		

		$model=new Paciente;
		$empresa = new IdentEmpresa;
		$exposicionActual =  new HLaboralExpA;
		$exposicionLaboral = new ExpLabOtotoxicos;
		$exposicionRuidoExtra = new ExRuidoELaboral;
		$antecedentes = new AntPersonales;
		$antecedentesMorbidos = new AntMorbidos;
		$antecedentesOtologicos = new AntOtologicos;
		$antAudioAnter = new AntAudioAnter;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Paciente']))
		{
			$model->attributes=$_POST['Paciente'];
			$model->Fecha_Realizacion = date("y-m-d");

			echo "Entro2";

			if($model->save()){
				//$this->redirect(array('view','id'=>$model->id));

				echo "Entro3";

				$empresa->attributes=$_POST['IdentEmpresa'];
				$empresa->id_Paciente = $model->id;
				$empresa->Fecha = date("y-m-d");
				$empresa->save();

				$exposicionActual->attributes=$_POST['HLaboralExpA'];
				$exposicionActual->id_empresa = $empresa->id;
				$exposicionActual->fecha = date("y-m-d");
				$exposicionActual->save();

				$exposicionLaboral->attributes=$_POST['ExpLabOtotoxicos'];
				$exposicionLaboral->id_empresa = $empresa->id;
				$exposicionLaboral->save();

				$exposicionRuidoExtra->attributes=$_POST['ExRuidoELaboral'];
				$exposicionRuidoExtra->id_Paciente = $model->id;
				$exposicionRuidoExtra->save();

				$antecedentes->attributes=$_POST['AntPersonales'];
				$antecedentes->id_Pacientes=$model->id;
				$antecedentes->save();

				$antecedentesMorbidos->attributes=$_POST['AntMorbidos'];
				$antecedentesMorbidos->id_Pacientes = $model->id;
				$antecedentesMorbidos->save();

				$antecedentesOtologicos->attributes=$_POST['AntOtologicos'];
				$antecedentesOtologicos->id_Paciente = $model->id;
				$antecedentesOtologicos->save();

				$antAudioAnter->attributes=$_POST['AntAudioAnter'];
				$antAudioAnter->id_Paciente = $model->id;
				$antAudioAnter->save();


				$this->actionAdmin();

			}
		}

		$this->render('create',array(
			'model'=>$model,
			'empresa'=>$empresa,
			'exposicionActual'=>$exposicionActual,
			'exposicionLaboral'=>$exposicionLaboral,
			'exposicionRuidoExtra'=>$exposicionRuidoExtra,
			'antecedentes'=>$antecedentes,
			'antecedentesMorbidos'=>$antecedentesMorbidos,
			'antecedentesOtologicos'=>$antecedentesOtologicos,
			'antAudioAnter'=>$antAudioAnter
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
		echo "Entro5";

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Paciente']))
		{
			$model->attributes=$_POST['Paciente'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->$id));
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
		//$this->loadModel($id)->delete();

		/*echo "id = ".$id;	

		$model = $this->loadModel($id);
		$empresa = IdentEmpresa::model()->find('id_Paciente=:id_Paciente', array(':id_Paciente'=>$id));
		$exposicionActual = HLaboralExpA::model()->find('id_empresa=:id_empresa',array('id_empresa'=>$empresa->id));
		$exposicionLaboral = ExpLabOtotoxicos::model()->find('id_empresa=:id_empresa',array('id_empresa'=>$empresa->id));
		$exposicionRuidoExtra = ExRuidoELaboral::model()->find('id_Paciente=:id_Paciente', array(':id_Paciente'=>$id));
		$antecedentes = AntPersonales::model()->find('id_Pacientes=:id_Pacientes', array(':id_Pacientes'=>$id));
		$antecedentesMorbidos = AntMorbidos::model()->find('id_Pacientes=:id_Pacientes', array(':id_Pacientes'=>$id));
		$antecedentesOtologicos = AntOtologicos::model()->find('id_Paciente=:id_Paciente', array(':id_Paciente'=>$id));
		$antAudioAnter = AntAudioAnter::model()->find('id_Paciente=:id_Paciente', array(':id_Paciente'=>$id));

		
		$antAudioAnter->delete();
		$antecedentesOtologicos->delete();
		$antecedentesMorbidos->delete();
		$antecedentes->delete();
		$exposicionRuidoExtra->delete();
		$exposicionLaboral->delete();
		$exposicionActual->delete();
		$empresa->delete();
		$model->delete();*/

		//$this->actionAdmin();
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Paciente');
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
		$model=new Paciente('search');
		$model->unsetAttributes();  // clear any default values
		$modelE = new PacienteEmpresa();
		$modelE->unsetAttributes();
		if(isset($_GET['Paciente']))
			$model->attributes=$_GET['Paciente'];
		
		if(isset($_GET['PacienteEmpresa']))
			$modelE->attributes=$_GET['PacienteEmpresa'];

		$model->setFilterEmpresa($modelE);
		
		$this->render('admin',array(
			'model'=>$model,
			
		));
	}


	public function actionDeletepaciente($id){
		

		$model = $this->loadModel($id);
		$empresa = IdentEmpresa::model()->find('id_Paciente=:id_Paciente', array(':id_Paciente'=>$id));
		$exposicionActual = HLaboralExpA::model()->find('id_empresa=:id_empresa',array('id_empresa'=>$empresa->id));
		$exposicionLaboral = ExpLabOtotoxicos::model()->find('id_empresa=:id_empresa',array('id_empresa'=>$empresa->id));
		$exposicionRuidoExtra = ExRuidoELaboral::model()->find('id_Paciente=:id_Paciente', array(':id_Paciente'=>$id));
		$antecedentes = AntPersonales::model()->find('id_Pacientes=:id_Pacientes', array(':id_Pacientes'=>$id));
		$antecedentesMorbidos = AntMorbidos::model()->find('id_Pacientes=:id_Pacientes', array(':id_Pacientes'=>$id));
		$antecedentesOtologicos = AntOtologicos::model()->find('id_Paciente=:id_Paciente', array(':id_Paciente'=>$id));
		$antAudioAnter = AntAudioAnter::model()->find('id_Paciente=:id_Paciente', array(':id_Paciente'=>$id));	

		$antAudioAnter->delete();
		$antecedentesOtologicos->delete();
		$antecedentesMorbidos->delete();
		$antecedentes->delete();
		$exposicionRuidoExtra->delete();
		$exposicionLaboral->delete();
		$exposicionActual->delete();
		$empresa->delete();
		$model->delete();
		$this->actionAdmin();


	
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Paciente the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Paciente::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Paciente $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='paciente-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


}
