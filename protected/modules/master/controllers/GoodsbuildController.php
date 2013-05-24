<?php

class GoodsbuildController extends Controller
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
				'actions'=>array('index','view','cekcomponents', 'cekgoods'),
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

	public function actionCekgoods(){
		if(strpos($_GET['term'], "(") === false ){
			$condition = $_GET['term'];
			$criteria = new CDbCriteria();
			$criteria->condition = "goods_name like '%$condition%'";
			$criteria->limit = 7;
			$info = Goods::model()->findAll($criteria);
			
			$arModels =array();
			foreach ($info as $model){
				$arModels[] = array(
                    'id' => $model->id,
                    'label' => $model->goods_name,
                    'value' => $model->goods_name, 
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
		$model=new GoodsBuild;
		$goods=new Goods;
		$goods=Goods::model()->findByPk($id);
		//var_dump($goods);
		//break;
		$criteria=new CDbCriteria;
		$criteria->compare('goods_id',$id);

		$dataGb = new CActiveDataProvider('GoodsBuild', array(
			'criteria'=>$criteria,
		));
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['GoodsBuild']))
		{
			$model->attributes=$_POST['GoodsBuild'];
			$model->goods_id=$id;
			if($model->save())
				$this->redirect(array('components','id'=>$id));
		}

		$this->render('components',array(
			'model'=>$model,			
			'goods'=>$goods,
			'dataGb'=>$dataGb,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=new GoodsBuild;
		$goods=new Goods;
		$goods=Goods::model()->findByPk($id);
	
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['GoodsBuild']))
		{
			$model->attributes=$_POST['GoodsBuild'];
			//var_dump($model->attributes);
			
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
			'goods'=>$goods,
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
		$model=new GoodsBuild('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['GoodsBuild']))
			$model->attributes=$_GET['GoodsBuild'];

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
		$model=GoodsBuild::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='goods-build-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
