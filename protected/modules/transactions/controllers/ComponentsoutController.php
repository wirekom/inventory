<?php

class ComponentsoutController extends Controller
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
				'actions'=>array('index','view','addtrans','addbuild','cekgoods'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	
	public function actionCekgoods(){
		if(strpos($_GET['term'], "(") === false ){
			$condition = $_GET['term'];
			$criteria = new CDbCriteria();
			$criteria->condition = " goods_name like '%$condition%'";
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
	/**public function actionCreate()
	{
		$model=new TComponentsOut;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TComponentsOut']))
		{
			$model->attributes=$_POST['TComponentsOut'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_trans));
		}

		$this->render('index',array(
			'model'=>$model,
		));
	}**/

	
	public function actionCreate()
	{
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TComponentsOut']))
		{
			$err = 0;
			foreach($_POST['TComponentsOut'] as $postrans){
				$model=new TComponentsOut;
				//id_trans, qty, date_time, decsription, balance_history, component_id, user_id
				$model->component_id=$postrans['component_id'];
				$model->transaction_type=$postrans['transaction_type'];
				$model->warehouse_from=$postrans['warehouse_from'];
				$model->warehouse_to=$postrans['warehouse_to'];
				$model->decsription=$postrans['decsription'];
				$model->balance_history=0;
				$model->qty=$postrans['qty'];
				$model->date_time=date("Y-m-d H:i:s");
				$model->user_id=1;
				if(!$model->save()){
					$errors = $model->getErrors();
					foreach ($errors as $e){					
						$messageError .= '
						<p id="error" class="info">
							<span class="info_inner">'.$e[0].'</span>
						</p>';
					}
					Yii::app()->user->setFlash('error', $messageError); 
					$err++;
				}
				else{
					
						$stock_input = StockComponents::model()->findByAttributes(array('component_id'=> $model->component_id, 'warehouse_id'=> $model->warehouse_to));
						//echo $model->warehouse_to;
						//var_dump($stock_input);
						
						if($stock_input != null){
							$stock_input->stock=$stock_input->stock-$model->qty;
							$stock_input->save();
							
						}
						else{
							$stock_input=new StockComponents();
							$stock_input->component_id = $model->component_id;
							$stock_input->warehouse_id = $model->warehouse_to;
							//var_dump ($stock_input->warehouse_id);
							//var_dump ($model->warehouse_to);
							$stock_input->stock=$model->qty;
							$stock_input->save();
							//var_dump($stock_input->attributes);
							//break;
						}
						
						$stock_output=StockComponents::model()->findByAttributes(array('component_id'=>$model->component_id,'warehouse_id'=>$model->warehouse_from));
						if($stock_output != null){
							$stock_output->stock=$stock_output->stock-$model->qty;
							$stock_output->save();
							
						}
					}
			}
			if ($err == 0) Yii::app()->user->setFlash('success', '<p id="success" class="info">
							<span class="info_inner">Your transaction has been save successfully</span>
						</p>');
			//echo "kookokokok";
			//$this->redirect(array('create')); 
		}

		$this->render('index');
	}
	
	
	public function actionAddbuild()
	{	
		if(isset($_POST['goods_id'])){
		
			$components = GoodsBuild::model()->findAllByAttributes(array('goods_id'=>$_POST['goods_id']));	
			$type = TransactionType::model()->findByPk(1);
			$arModels =array();
			foreach ($components as $model){
				$arModels[] = array(
                    'component_id' => $model->component_id,
                    'component_name' => $model->component->component_name,
                    'warehouse_from' => $model->warehouse->warehouse_from,
                    'warehouse_to' => $model->warehouse->warehouse_to,
                    'component_qty' => $model->component_qty,
                    'type' => $type->type,
                );
			
			}		
			echo CJSON::encode($arModels);
		}		
		
	}
	
	public function actionAddtrans()
	{	
		if(isset($_POST['component_id'])){
			//print_r($_POST['id']);
			/*
			$criteria = new CDbCriteria();			
			$criteria->join = "JOIN angkutan on(angkutan.id_angkutan = t.id_angkutan)";
			$criteria->condition = "id_detail = ".$_POST['id'][0];			*/
			$components = Components::model()->findByPk($_POST['component_id']);
			//{"id_detail":"1","nama":"Boeng 757 Jakarta - Surabaya","harga":"350","id_angkutan":"1"}
			
			$data["component_id"] = $components->id;
			
			echo CJSON::encode($data);
		}		
		
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

		if(isset($_POST['TComponentsOut']))
		{
			$model->attributes=$_POST['TComponentsOut'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_trans));
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
		/*$dataProvider=new CActiveDataProvider('TComponentsOut');
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
		$model=new TComponentsOut('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TComponentsOut']))
			$model->attributes=$_GET['TComponentsOut'];

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
		$model=TComponentsOut::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='tcomponents-out-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
