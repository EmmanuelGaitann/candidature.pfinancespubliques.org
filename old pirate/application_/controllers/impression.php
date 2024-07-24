<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Impression extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            //	$this->load->view('welcome_message');
            $data = array();
            $this->template->layout('candidature', $data);
	}
	
	function imprimer_fiche($id_candidat){
	
	 $this->load->helper(array('dompdf', 'file'));
	 $this->load->model('impression_model', '', TRUE);
     // page info here, db calls, etc. 
	 
	 $data['candidat'] = $this->Impression_model->get_fiche($id_candidat)->row();

     $html = $this->load->view('impression/fiche_candidature', $data, true);
     pdf_create($html, 'fiche_candidature');
	
	}	
	
	function imprimer_liste($specialite=null){
	
		 $this->load->helper(array('dompdf', 'file'));
		 $this->load->model('impression_model', '', TRUE);
		 // page info here, db calls, etc. 
		 
		$data['candidats'] = $this->Impression_model->get_liste($specialite)->result();
		
		switch ($specialite) {
		  case 1:
				$data['titre'] = ' Liste des candidats preinscrits : Comptabilité Publique';
			break;
		  case 2:
				$data['titre'] = ' Liste des candidats preinscrits : Gestion Budgétaire';
			break;
		  case 3:
				$data['titre'] = ' Liste des candidats preinscrits : Finances Publiques Locales';
			break;
		default:
				$data['titre'] = ' Liste des candidats preinscrits';
		}
		
		if($specialite==null){
			 $html = $this->load->view('impression/liste_candidats_all', $data, true);
		}else{
			 $html = $this->load->view('impression/liste_candidats', $data, true);
		}
		
		 pdf_create($html, 'liste_candidats');
	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */