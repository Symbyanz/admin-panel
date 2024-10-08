<?php

namespace application\controllers;
use application\core\Controller;

class LeadsController extends Controller {


	public function leadsAction(){
		if(!empty($_POST)){
			if(!empty($this->model->deleteLead($_POST))) {
				echo(true);
			} else {
				echo(false);
			}
		}

		$this->view->redirect('leads/ketodieta');
	}


	public function ketodietaAction(){
		$vars = $this->model->getLeads('ketodieta_leads');
		$title = $this->route['controller'].'/'.$this->route['action'];
		$this->view->render($title, $vars);
	}


	public function artoninAction(){
		$vars = $this->model->getLeads('artonin_leads');
		$title = $this->route['controller'].'/'.$this->route['action'];
		$this->view->render($title, $vars);
	}


	public function alkostopAction(){
		$vars = $this->model->getLeads('alkostop_leads');
		$title = $this->route['controller'].'/'.$this->route['action'];
		$this->view->render($title, $vars);
	}


	public function ketoformAction(){
		$vars = $this->model->getLeads('ketoform_leads');
		$title = $this->route['controller'].'/'.$this->route['action'];
		$this->view->render($title, $vars);
	}

	public function ketogeneticAction(){
		$vars = $this->model->getLeads('ketogenetic_leads');
		$title = $this->route['controller'].'/'.$this->route['action'];
		$this->view->render($title, $vars);
	}

	public function extraslimAction(){
		$vars = $this->model->getLeads('extraslim_leads');
		$title = $this->route['controller'].'/'.$this->route['action'];
		$this->view->render($title, $vars);
	}

	public function neyrosistemaAction(){
		$vars = $this->model->getLeads('neyrosistema_leads');
		$title = $this->route['controller'].'/'.$this->route['action'];
		$this->view->render($title, $vars);
	}

	public function ketolightAction(){
		$vars = $this->model->getLeads('ketolight_leads');
		$title = $this->route['controller'].'/'.$this->route['action'];
		$this->view->render($title, $vars);
	}

	public function alkozeroksAction(){
		$vars = $this->model->getLeads('alkozeroks_leads');
		$title = $this->route['controller'].'/'.$this->route['action'];
		$this->view->render($title, $vars);
	}

	public function articulatAction(){
		$vars = $this->model->getLeads('articulat_leads');
		$title = $this->route['controller'].'/'.$this->route['action'];
		$this->view->render($title, $vars);
	}

	public function artroforceAction(){
		$vars = $this->model->getLeads('artroforce_leads');
		$title = $this->route['controller'].'/'.$this->route['action'];
		$this->view->render($title, $vars);
	}

	public function imosteonAction(){
		$vars = $this->model->getLeads('imosteon_leads');
		$title = $this->route['controller'].'/'.$this->route['action'];
		$this->view->render($title, $vars);
	}
	// new
		public function ketoform2Action(){
		$vars = $this->model->getLeads('ketoform2_leads');
		$title = $this->route['controller'].'/'.$this->route['action'];
		$this->view->render($title, $vars);
	}
		public function ketopillsAction(){
		$vars = $this->model->getLeads('ketopills_leads');
		$title = $this->route['controller'].'/'.$this->route['action'];
		$this->view->render($title, $vars);
	}
		public function ketoburnAction(){
		$vars = $this->model->getLeads('ketoburn_leads');
		$title = $this->route['controller'].'/'.$this->route['action'];
		$this->view->render($title, $vars);
	}
		public function lipozeneAction(){
		$vars = $this->model->getLeads('lipozene_leads');
		$title = $this->route['controller'].'/'.$this->route['action'];
		$this->view->render($title, $vars);
	}
		public function garciniaAction(){
		$vars = $this->model->getLeads('garcinia_leads');
		$title = $this->route['controller'].'/'.$this->route['action'];
		$this->view->render($title, $vars);
	}
		public function ketobhbAction(){
		$vars = $this->model->getLeads('ketobhb_leads');
		$title = $this->route['controller'].'/'.$this->route['action'];
		$this->view->render($title, $vars);
	}
		public function ketodetoxAction(){
		$vars = $this->model->getLeads('ketodetox_leads');
		$title = $this->route['controller'].'/'.$this->route['action'];
		$this->view->render($title, $vars);
	}
		public function ketogeneticultraAction(){
		$vars = $this->model->getLeads('ketogeneticultra_leads');
		$title = $this->route['controller'].'/'.$this->route['action'];
		$this->view->render($title, $vars);
	}
		public function ketodietaplusAction(){
		$vars = $this->model->getLeads('ketodietaplus_leads');
		$title = $this->route['controller'].'/'.$this->route['action'];
		$this->view->render($title, $vars);
	}
		public function extraslim2Action(){
		$vars = $this->model->getLeads('extraslim2_leads');
		$title = $this->route['controller'].'/'.$this->route['action'];
		$this->view->render($title, $vars);
	}



	public function exportAction(){
		if(!empty($_POST)){
			$vars = $this->model->getLeads($_POST['database']);
			$headers = array_keys($vars[0]);

			$csv_header = '';
			foreach($headers as $item){
				$csv_header .= $item.';';
			}
			$csv_header .= "\n";
			
			$csv_row ='';
			foreach($vars as $var){
				foreach($var as $item){
					$csv_row .= $item.';';
				}
				$csv_row .= "\n";
			}

			// addd
			header('Content-type: application/csv');
			header('Content-Disposition: attachment; filename=toy_csv.csv');
			echo $csv_header.$csv_row;
			exit;
		} else {
			echo "";
		}
	}
}