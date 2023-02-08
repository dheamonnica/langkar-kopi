<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Kategori Controller
*| --------------------------------------------------------------------------
*| Kategori site
*|
*/
class Kategori extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_kategori');
		$this->load->model('group/model_group');
		$this->lang->load('web_lang', $this->current_lang);
	}

	/**
	* show all Kategoris
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('kategori_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['kategoris'] = $this->model_kategori->get($filter, $field, $this->limit_page, $offset);
		$this->data['kategori_counts'] = $this->model_kategori->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/kategori/index/',
			'total_rows'   => $this->data['kategori_counts'],
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Kategori List');
		$this->render('backend/standart/administrator/kategori/kategori_list', $this->data);
	}
	
	/**
	* Add new kategoris
	*
	*/
	public function add()
	{
		$this->is_allowed('kategori_add');

		$this->template->title('Kategori New');
		$this->render('backend/standart/administrator/kategori/kategori_add', $this->data);
	}

	/**
	* Add New Kategoris
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('kategori_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		

		$this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'trim|required|max_length[255]');
		

		

		if ($this->form_validation->run()) {
		
			$save_data = [
				'nama_kategori' => $this->input->post('nama_kategori'),
			];

			
			



			
			
			$save_kategori = $id = $this->model_kategori->store($save_data);
            

			if ($save_kategori) {
				
				
					
				
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_kategori;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/kategori/edit/' . $save_kategori, 'Edit Kategori'),
						anchor('administrator/kategori', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/kategori/edit/' . $save_kategori, 'Edit Kategori')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/kategori');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/kategori');
				}
			}

		} else {
			$this->data['success'] = false;
			$this->data['message'] = 'Opss validation failed';
			$this->data['errors'] = $this->form_validation->error_array();
		}

		$this->response($this->data);
	}
	
		/**
	* Update view Kategoris
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('kategori_update');

		$this->data['kategori'] = $this->model_kategori->find($id);

		$this->template->title('Kategori Update');
		$this->render('backend/standart/administrator/kategori/kategori_update', $this->data);
	}

	/**
	* Update Kategoris
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('kategori_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
				$this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'trim|required|max_length[255]');
		

		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'nama_kategori' => $this->input->post('nama_kategori'),
			];

			

			


			
			
			$save_kategori = $this->model_kategori->change($id, $save_data);

			if ($save_kategori) {

				

				
				
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/kategori', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/kategori');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/kategori');
				}
			}
		} else {
			$this->data['success'] = false;
			$this->data['message'] = 'Opss validation failed';
			$this->data['errors'] = $this->form_validation->error_array();
		}

		$this->response($this->data);
	}
	
	/**
	* delete Kategoris
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('kategori_delete');

		$this->load->helper('file');

		$arr_id = $this->input->get('id');
		$remove = false;

		if (!empty($id)) {
			$remove = $this->_remove($id);
		} elseif (count($arr_id) >0) {
			foreach ($arr_id as $id) {
				$remove = $this->_remove($id);
			}
		}

		if ($remove) {
            set_message(cclang('has_been_deleted', 'kategori'), 'success');
        } else {
            set_message(cclang('error_delete', 'kategori'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Kategoris
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('kategori_view');

		$this->data['kategori'] = $this->model_kategori->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Kategori Detail');
		$this->render('backend/standart/administrator/kategori/kategori_view', $this->data);
	}
	
	/**
	* delete Kategoris
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$kategori = $this->model_kategori->find($id);

		
		
		return $this->model_kategori->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('kategori_export');

		$this->model_kategori->export(
			'kategori', 
			'kategori',
			$this->model_kategori->field_search
		);
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('kategori_export');

		$this->model_kategori->pdf('kategori', 'kategori');
	}


	public function single_pdf($id = null)
	{
		$this->is_allowed('kategori_export');

		$table = $title = 'kategori';
		$this->load->library('HtmlPdf');
      
        $config = array(
            'orientation' => 'p',
            'format' => 'a4',
            'marges' => array(5, 5, 5, 5)
        );

        $this->pdf = new HtmlPdf($config);
        $this->pdf->setDefaultFont('stsongstdlight'); 

        $result = $this->db->get($table);
       
        $data = $this->model_kategori->find($id);
        $fields = $result->list_fields();

        $content = $this->pdf->loadHtmlPdf('core_template/pdf/pdf_single', [
            'data' => $data,
            'fields' => $fields,
            'title' => $title
        ], TRUE);

        $this->pdf->initialize($config);
        $this->pdf->pdf->SetDisplayMode('fullpage');
        $this->pdf->writeHTML($content);
        $this->pdf->Output($table.'.pdf', 'H');
	}

	
}


/* End of file kategori.php */
/* Location: ./application/controllers/administrator/Kategori.php */