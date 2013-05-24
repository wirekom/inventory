<?php

class ComponentSuplierController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='/layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
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
				'actions'=>array('index','view', 'cekcomponents', 'ceksuplier'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
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

	public function actionCeksuplier(){
		if(strpos($_GET['term'], "(") === false ){
			$condition = $_GET['term'];
			$criteria = new CDbCriteria();
			$criteria->condition = " suplier_name like '%$condition%'";
			$criteria->limit = 7;
			$info = Suplier::model()->findAll($criteria);
			
			$arModels =array();
			foreach ($info as $model){
				$arModels[] = array(
                    'id' => $model->id,
                    'label' => $model->suplier_name,
                    'value' => $model->suplier_name, 
                );
			
			}		
		
			echo CJSON::encode($arModels);
		}
	}
	
	public function actionCekcomponents(){
		if(strpos($_GET['term'], "(") === false ){
			$condition = $_GET['term'];
			$criteria = new CDbCriteria();
			$criteria->condition = " component_name like '%$condition%'";
			$criteria->limit = 7;
			$info = Components::model()->findAll($criteria);
			
			$arModels =array();
			foreach ($info as $model){
				$arModels[] = array(
                    'id' => $model->id,
                    'label' => $model->component_name,
                    'value' => $model->component_name, 
                );
			
			}		
		
			echo CJSON::encode($arModels);
		}
	}
	
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new ComponentSuplier;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ComponentSuplier']))
		{
			$model->attributes=$_POST['ComponentSuplier'];
			if($model->save()){		
				$price = ComponentSuplier::model()->findAllByAttributes(array('component_id'=> $model->component_id));
				if($price != null){
						$i = 0;
						$price_inc = 0;
						$rate_price = 0;
						foreach($price as $dataprice){
							$price_inc = $price_inc + floatval($dataprice->price); 
							$i++;
							//var_dump($dataprice->price)."<br><br>";
						}
						$rate_price = intval($price_inc/$i);
						Components::model()->updateByPk($model->component_id,array('rate_price'=>$rate_price));
					}
					else{
						$rate_price = $model->price;
						Components::model()->updateByPk($model->component_id,array('rate_price'=>$rate_price));
					}
				//var_dump($price); 
				$this->redirect(array('view','id'=>$model->id));
			}	
		}
			
		$this->render('index',array(
			'model'=>$model,
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

		if(isset($_POST['ComponentSuplier']))
		{
			$model->attributes=$_POST['ComponentSuplier'];
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
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	 public function actionIndex()
	{
		/*$dataProvider=new CActiveDataProvider('TComponentsIn');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));*/
		$this->redirect(array('create'));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ComponentSuplier('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ComponentSuplier']))
			$model->attributes=$_GET['ComponentSuplier'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=ComponentSuplier::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='component-suplier-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
