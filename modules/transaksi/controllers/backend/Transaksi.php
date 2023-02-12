<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Transaksi Controller
*| --------------------------------------------------------------------------
*| Transaksi site
*|
*/
class Transaksi extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_transaksi');
		$this->load->model('group/model_group');
		$this->lang->load('web_lang', $this->current_lang);
	}

	/**
	* show all Transaksis
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('transaksi_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['transaksis'] = $this->model_transaksi->get($filter, $field, $this->limit_page, $offset);
		$this->data['transaksi_counts'] = $this->model_transaksi->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/transaksi/index/',
			'total_rows'   => $this->data['transaksi_counts'],
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Transaksi List');
		$this->render('backend/standart/administrator/transaksi/transaksi_list', $this->data);
	}
	
	/**
	* Add new transaksis
	*
	*/
	public function add()
	{
		$this->is_allowed('transaksi_add');

		$this->template->title('Transaksi New');
		$this->render('backend/standart/administrator/transaksi/transaksi_add', $this->data);
	}

	/**
	* Add New Transaksis
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('transaksi_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		

		// $this->form_validation->set_rules('produk_id', 'Produk Id', 'trim|required|max_length[11]');
		

		// $this->form_validation->set_rules('harga', 'Harga', 'trim|required|max_length[12]');
		

		// $this->form_validation->set_rules('qty', 'Qty', 'trim|required|max_length[12]');
		

		// $this->form_validation->set_rules('total', 'Total', 'trim|required|max_length[12]');
		

		// $this->form_validation->set_rules('nama_cust', 'Nama Cust', 'trim|required|max_length[255]');
		

		// $this->form_validation->set_rules('status', 'Status', 'trim|required');
		

		

		// if ($this->form_validation->run()) {
		
			$save_data = [
				'produk_id' => $this->input->post('id'),
				'harga' => $this->input->post('price'),
				'qty' => $this->input->post('quantity'),
				'total' => $this->input->post('total'),
				'nama_cust' => $this->input->post('nama_cust'),
				'status' => $this->input->post('status'),
				'kasir_id' => get_user_data('id'),				'created_at' => date('Y-m-d H:i:s'),
			];

			
			



			
			
			$save_transaksi = $id = $this->model_transaksi->store($save_data);
            

			if ($save_transaksi) {
				
				
					
				
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_transaksi;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/transaksi/edit/' . $save_transaksi, 'Edit Transaksi'),
						anchor('administrator/transaksi', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/transaksi/edit/' . $save_transaksi, 'Edit Transaksi')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/transaksi');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/transaksi');
				}
			}

		// } else {
		// 	$this->data['success'] = false;
		// 	$this->data['message'] = 'Opss validation failed';
		// 	$this->data['errors'] = $this->form_validation->error_array();
		// }

		$this->response($this->data);
	}
	
		/**
	* Update view Transaksis
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('transaksi_update');

		$this->data['transaksi'] = $this->model_transaksi->find($id);

		$this->template->title('Transaksi Update');
		$this->render('backend/standart/administrator/transaksi/transaksi_update', $this->data);
	}

	/**
	* Update Transaksis
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('transaksi_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
				$this->form_validation->set_rules('produk_id', 'Produk Id', 'trim|required|max_length[11]');
		

		$this->form_validation->set_rules('harga', 'Harga', 'trim|required|max_length[12]');
		

		$this->form_validation->set_rules('qty', 'Qty', 'trim|required|max_length[12]');
		

		$this->form_validation->set_rules('total', 'Total', 'trim|required|max_length[12]');
		

		$this->form_validation->set_rules('nama_cust', 'Nama Cust', 'trim|required|max_length[255]');
		

		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		

		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'produk_id' => $this->input->post('produk_id'),
				'harga' => $this->input->post('harga'),
				'qty' => $this->input->post('qty'),
				'total' => $this->input->post('total'),
				'nama_cust' => $this->input->post('nama_cust'),
				'status' => $this->input->post('status'),
				'kasir_id' => get_user_data('id'),				'created_at' => date('Y-m-d H:i:s'),
			];

			

			


			
			
			$save_transaksi = $this->model_transaksi->change($id, $save_data);

			if ($save_transaksi) {

				

				
				
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/transaksi', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/transaksi');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/transaksi');
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
	* delete Transaksis
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('transaksi_delete');

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
            set_message(cclang('has_been_deleted', 'transaksi'), 'success');
        } else {
            set_message(cclang('error_delete', 'transaksi'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Transaksis
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('transaksi_view');

		$this->data['transaksi'] = $this->model_transaksi->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Transaksi Detail');
		$this->render('backend/standart/administrator/transaksi/transaksi_view', $this->data);
	}
	
	/**
	* delete Transaksis
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$transaksi = $this->model_transaksi->find($id);

		
		
		return $this->model_transaksi->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('transaksi_export');

		$this->model_transaksi->export(
			'transaksi', 
			'transaksi',
			$this->model_transaksi->field_search
		);
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('transaksi_export');

		$this->model_transaksi->pdf('transaksi', 'transaksi');
	}


	public function single_pdf($id = null)
	{
		$this->is_allowed('transaksi_export');

		$table = $title = 'transaksi';
		$this->load->library('HtmlPdf');
      
        $config = array(
            'orientation' => 'p',
            'format' => 'a4',
            'marges' => array(5, 5, 5, 5)
        );

        $this->pdf = new HtmlPdf($config);
        $this->pdf->setDefaultFont('stsongstdlight'); 

        $result = $this->db->get($table);
       
        $data = $this->model_transaksi->find($id);
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


/* End of file transaksi.php */
/* Location: ./application/controllers/administrator/Transaksi.php */