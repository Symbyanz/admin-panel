<?php

namespace application\controllers;
use application\core\Controller;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;



class CodesController extends Controller {

	public function codesAction(){
		$this->view->redirect('codes/ketodieta');
	}


	public function ketodietaAction(){
		$vars = $this->model->getCodes('ketodieta_codes');
		$title = $this->route['controller'].'/'.$this->route['action'];

		$this->view->render($title, $vars);
	}
	public function artoninAction(){
		$vars = $this->model->getCodes('artonin_codes');
		$title = $this->route['controller'].'/'.$this->route['action'];

		$this->view->render($title, $vars);
	}
	public function alkostopAction(){
		$vars = $this->model->getCodes('alkostop_codes');
		$title = $this->route['controller'].'/'.$this->route['action'];

		$this->view->render($title, $vars);
	}
	public function ketoformAction(){
		$vars = $this->model->getCodes('ketoform_codes');
		$title = $this->route['controller'].'/'.$this->route['action'];

		$this->view->render($title, $vars);
	}
	public function ketogeneticAction(){
		$vars = $this->model->getCodes('ketogenetic_codes');
		$title = $this->route['controller'].'/'.$this->route['action'];

		$this->view->render($title, $vars);
	}
	public function extraslimAction(){
		$vars = $this->model->getCodes('extraslim_codes');
		$title = $this->route['controller'].'/'.$this->route['action'];

		$this->view->render($title, $vars);
	}
	public function neyrosistemaAction(){
		$vars = $this->model->getCodes('neyrosistema_codes');
		$title = $this->route['controller'].'/'.$this->route['action'];

		$this->view->render($title, $vars);
	}
	public function ketolightAction(){
		$vars = $this->model->getCodes('ketolight_codes');
		$title = $this->route['controller'].'/'.$this->route['action'];

		$this->view->render($title, $vars);
	}
	public function alkozeroksAction(){
		$vars = $this->model->getCodes('alkozeroks_codes');
		$title = $this->route['controller'].'/'.$this->route['action'];

		$this->view->render($title, $vars);
	}
	public function articulatAction(){
		$vars = $this->model->getCodes('articulat_codes');
		$title = $this->route['controller'].'/'.$this->route['action'];

		$this->view->render($title, $vars);
	}
	public function artroforceAction(){
		$vars = $this->model->getCodes('artroforce_codes');
		$title = $this->route['controller'].'/'.$this->route['action'];

		$this->view->render($title, $vars);
	}
	public function imosteonAction(){
		$vars = $this->model->getCodes('imosteon_codes');
		$title = $this->route['controller'].'/'.$this->route['action'];

		$this->view->render($title, $vars);
	}
	// new
	public function ketoform2Action(){
		$vars = $this->model->getCodes('ketoform2_codes');
		$title = $this->route['controller'].'/'.$this->route['action'];

		$this->view->render($title, $vars);
	}
	public function ketopillsAction(){
		$vars = $this->model->getCodes('ketopills_codes');
		$title = $this->route['controller'].'/'.$this->route['action'];

		$this->view->render($title, $vars);
	}
	public function ketoburnAction(){
		$vars = $this->model->getCodes('ketoburn_codes');
		$title = $this->route['controller'].'/'.$this->route['action'];

		$this->view->render($title, $vars);
	}
	public function lipozeneAction(){
		$vars = $this->model->getCodes('lipozene_codes');
		$title = $this->route['controller'].'/'.$this->route['action'];

		$this->view->render($title, $vars);
	}
	public function garciniaAction(){
		$vars = $this->model->getCodes('garcinia_codes');
		$title = $this->route['controller'].'/'.$this->route['action'];

		$this->view->render($title, $vars);
	}
	public function ketobhbAction(){
		$vars = $this->model->getCodes('ketobhb_codes');
		$title = $this->route['controller'].'/'.$this->route['action'];

		$this->view->render($title, $vars);
	}
	public function ketodetoxAction(){
		$vars = $this->model->getCodes('ketodetox_codes');
		$title = $this->route['controller'].'/'.$this->route['action'];

		$this->view->render($title, $vars);
	}
	public function ketogeneticultraAction(){
		$vars = $this->model->getCodes('ketogeneticultra_codes');
		$title = $this->route['controller'].'/'.$this->route['action'];

		$this->view->render($title, $vars);
	}
	public function ketodietaplusAction(){
		$vars = $this->model->getCodes('ketodietaplus_codes');
		$title = $this->route['controller'].'/'.$this->route['action'];

		$this->view->render($title, $vars);
	}
	public function extraslim2Action(){
		$vars = $this->model->getCodes('extraslim2_codes');
		$title = $this->route['controller'].'/'.$this->route['action'];

		$this->view->render($title, $vars);
	}








	public function createAction(){
		$allowedFileType = ['xls','csv', 'xlsx'];
		if(!empty($_POST)){
			if(strlen($_POST['add']) > 0 ){
				// check type code (on XXXX-XXXX-XXXX)
				if(substr($_POST['add'], -5) === "-____") {
					$_POST['add'] = substr($_POST['add'],0,-5);
					$res = $this->model->addCode($_POST);
					if(!$res){
						echo("Request processing error");
					} else {
						echo("Code have been added");
					}
				} else if (substr($_POST['add'], -1) === "_"){
					echo("The entered code is incorrect");
				} else{
					$res = $this->model->addCode($_POST);
					if(!$res){
						echo("Request processing error");
					} else {
						echo("Code have been added");
					}
				}
			} else if ($_FILES["file"]["name"] != '') {

				$allowed_extension = array('xls', 'csv', 'xlsx');
				$file_array = explode(".", $_FILES["file"]["name"]);
				$file_extension = end($file_array);

				if(in_array($file_extension, $allowed_extension)) {

					$file_name = time() . '.' . $file_extension;
					move_uploaded_file($_FILES['file']['tmp_name'], $file_name);
					$file_type = IOFactory::identify($file_name);
					$reader = IOFactory::createReader($file_type);

					$spreadsheet = $reader->load($file_name);
					unlink($file_name);
					$data = $spreadsheet->getActiveSheet()->toArray();
					
					$newData = array();

					foreach ($data as $arrKey => $arr) {
						foreach ($arr as $key => $val){
							if(preg_match('/(.{4,5}-.{4,5}-.{4})(-.{4})?/', $val)) array_push($newData, ['add' => $val]);
						}
					}
					if(empty($newData)){
						echo("The array does not satisfy the condition");
					} else {
							// debug($newData);
						foreach($newData as $key => $val){
							$val['database'] = $_POST['database'];
							$res = $this->model->addCode($val);
						};
						echo("Codes have been added");
					}
				} else {
					echo("File is not excel");
				}
			} else {
				echo("Request processing error");
			}
		} else {
			$this->view->errorCode(404);
		}
	}

	public function deleteAction(){
		if($_FILES["file"]["name"] != ''){
			$allowed_extension = array('xls', 'csv', 'xlsx');
			$file_array = explode(".", $_FILES["file"]["name"]);
			$file_extension = end($file_array);

			if(in_array($file_extension, $allowed_extension)) {

				$file_name = time() . '.' . $file_extension;
				move_uploaded_file($_FILES['file']['tmp_name'], $file_name);
				$file_type = IOFactory::identify($file_name);
				$reader = IOFactory::createReader($file_type);

				$spreadsheet = $reader->load($file_name);
				unlink($file_name);
				$data = $spreadsheet->getActiveSheet()->toArray();
				$newData = array();

				foreach ($data as $arrKey => $arr) {
					foreach ($arr as $key => $val){
						if(preg_match('/(.{5}-.{5}-.{4})(-.{4})?/', $val)) array_push($newData, ['value' => $val]);
					}
				}

				if(empty($newData)){
					echo("The array does not satisfy the condition");
				} else {
					foreach($newData as $key => $val){
						$val['database'] = $_POST['database'];
						$res = $this->model->deleteCode($val);
					};
					echo("Codes have been deleted");
				}
			} else {
				echo("File is not excel");
			}
		} else {
			echo("Request processing error");
		}
	}

	public function truncateAction(){
		if(!empty($_POST['database'])){
			$res = $this->model->truncateCodes($_POST['database']);
			echo true;
		} else {
			echo false;
		}
	}

}