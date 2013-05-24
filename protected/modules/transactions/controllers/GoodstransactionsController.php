<?php

class GoodstransactionsController extends Controller
{
	public $layout='/layouts/column2';public function filters()
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
				'actions'=>array('index', 'exit', 'view', 'in', 'out', 'cekgoods', 'addtrans'),
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
	
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	
	public function actionAddtrans()
	{	
		if(isset($_POST['goods_id'])){
			//print_r($_POST['id']);
			/*
			$criteria = new CDbCriteria();			
			$criteria->join = "JOIN angkutan on(angkutan.id_angkutan = t.id_angkutan)";
			$criteria->condition = "id_detail = ".$_POST['id'][0];			*/
			$goods = Goods::model()->findByPk($_POST['goods_id']);
			//{"id_detail":"1","nama":"Boeng 757 Jakarta - Surabaya","harga":"350","id_angkutan":"1"}
			
			$data["goods_id"] = $goods->id;
			
			echo CJSON::encode($data);
		}		
		
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
	
	public function actionIndex()
	{
		throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	public function actionIn(){
		
		if(isset($_POST['GoodsTransaction']))
		{
			$err = 0;
			foreach($_POST['GoodsTransaction'] as $postrans){
				$model=new GoodsTransaction;
				//id_trans, qty, date_time, decsription, balance_history, goods_id, user_id
				$model->goods_id=$postrans['goods_id'];
				$model->decsription=$postrans['decsription'];
				$model->balance_history=0;
				$model->qty=$postrans['qty'];
				$model->in=$postrans['qty'];
				$model->out=0;
				$model->type_order=$postrans['order_name'];
				$model->warehouse_from=$postrans['warehouse_from'];
				
				$model->date_time=date("Y-m-d H:i:s");
				$model->user_id=1;
				$messageError="";
				
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
					
						$stock_input = StockGoods::model()->findByAttributes(array('goods_id'=> $model->goods_id, 'warehouse_id'=> $model->warehouse_from));
						//var_dump($stock_input);
						
						if($stock_input != null){
							$stock_input->stock=$stock_input->stock+$model->in;
							$stock_input->save();
							
						}
						else{
							$stock_input=new StockGoods();
							$stock_input->goods_id = $model->goods_id;
							$stock_input->warehouse_id = $model->warehouse_from;
							$stock_input->stock=$model->in;
							$stock_input->save();
							//var_dump($stock_input->attributes);
							//break;
						}
						
						$stock_output=StockGoods::model()->findByAttributes(array('goods_id'=>$model->goods_id,'warehouse_id'=>$model->warehouse_to));
						if($stock_output != null){
							$stock_output->stock=$stock_output->stock-$model->in;
								$stock_input->save();
						}
					}
			}
			if ($err == 0) Yii::app()->user->setFlash('success', '<p id="success" class="info">
							<span class="info_inner">Your transaction has been save successfully</span>
						</p>');
			//echo "kookokokok";
			$this->redirect(array('in')); 
		}

		$this->render('index');
	}
	
	public function actionExit()
	{
		throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}
	
	public function actionOut(){
		
		if(isset($_POST['GoodsTransaction']))
		{
			$err = 0;
			foreach($_POST['GoodsTransaction'] as $postrans){
				$model=new GoodsTransaction;
				//id_trans, qty, date_time, decsription, balance_history, goods_id, user_id
				$model->goods_id=$postrans['goods_id'];
				$model->decsription=$postrans['decsription'];
				$model->balance_history=0;
				$model->qty=$postrans['qty'];
				$model->in=0;
				$model->out=$postrans['qty'];
				$model->type_order=$postrans['order_name'];
				$model->warehouse_from=$postrans['warehouse_from'];
				$model->warehouse_to=$postrans['warehouse_to'];
				$model->date_time=date("Y-m-d H:i:s");
				$model->user_id=1;
				if(!$model->save()){
					$errors = $model->getErrors();
					foreach ($errors as $e){					
						$messageError .= '
						<p id="error" class="info">
							<span class="info_inner">'.$e[0].'</span>
						</p>';
					var_dum($model->save);
					}
					Yii::app()->user->setFlash('error', $messageError); 
					$err++;
					}
					else{
					
						$stock_input = StockGoods::model()->findByAttributes(array('goods_id'=> $model->goods_id, 'warehouse_id'=> $model->warehouse_to));
						//var_dump($stock_input);
						
						if($stock_input != null){
							$stock_input->stock=$stock_input->stock+$model->out;
							$stock_input->save();
							
						}
						else{
							$stock_input=new StockGoods();
							$stock_input->goods_id = $model->goods_id;
							$stock_input->warehouse_id = $model->warehouse_to;
							$stock_input->stock=$model->out;
							$stock_input->save();
							//var_dump($stock_input->save);
							//break;
						}
						
						$stock_output=StockGoods::model()->findByAttributes(array('goods_id'=>$model->goods_id,'warehouse_id'=>$model->warehouse_from));
						if($stock_output != null){
							$stock_output->stock=$stock_output->stock-$model->out;
							$stock_output->save();
						}
					}
			}
			if ($err == 0) Yii::app()->user->setFlash('success', '<p id="success" class="info">
							<span class="info_inner">Your transaction has been save successfully</span>
						</p>');
			//echo "kookokokok";
			$this->redirect(array('out')); 
		}

		$this->render('exit');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}