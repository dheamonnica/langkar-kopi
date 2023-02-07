<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Notification Controller
*| --------------------------------------------------------------------------
*| Notification site
*|
*/
class Notification extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_notification');
		$this->load->model('group/model_group');
		$this->lang->load('web_lang', $this->current_lang);
	}

	/**
	* show all Notifications
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('notification_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['notifications'] = $this->model_notification->get($filter, $field, $this->limit_page, $offset);
		$this->data['notification_counts'] = $this->model_notification->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/notification/index/',
			'total_rows'   => $this->data['notification_counts'],
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Notification List');
		$this->render('backend/standart/administrator/notification/notification_list', $this->data);
	}
	
	/**
	* Add new notifications
	*
	*/
	public function add()
	{
		$this->is_allowed('notification_add');

		$this->template->title('Notification New');
		$this->render('backend/standart/administrator/notification/notification_add', $this->data);
	}

	/**
	* Add New Notifications
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('notification_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		

		$this->form_validation->set_rules('title', 'Title', 'trim|required|max_length[200]');
		

		$this->form_validation->set_rules('content', 'Content', 'trim|required');
		

		$this->form_validation->set_rules('url', 'Url', 'trim|required');
		

		$this->form_validation->set_rules('read', 'Read', 'trim|required|max_length[11]');
		

		$this->form_validation->set_rules('user_id', 'User Id', 'trim|required|max_length[11]');
		

		

		if ($this->form_validation->run()) {
		
			$save_data = [
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content'),
				'url' => $this->input->post('url'),
				'read' => $this->input->post('read'),
				'user_id' => $this->input->post('user_id'),
				'created_at' => date('Y-m-d H:i:s'),
			];

			
			



			
			
			$save_notification = $id = $this->model_notification->store($save_data);
            

			if ($save_notification) {
				
				
					
				
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_notification;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/notification/edit/' . $save_notification, 'Edit Notification'),
						anchor('administrator/notification', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/notification/edit/' . $save_notification, 'Edit Notification')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/notification');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/notification');
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
	* Update view Notifications
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('notification_update');

		$this->data['notification'] = $this->model_notification->find($id);

		$this->template->title('Notification Update');
		$this->render('backend/standart/administrator/notification/notification_update', $this->data);
	}

	/**
	* Update Notifications
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('notification_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
				$this->form_validation->set_rules('title', 'Title', 'trim|required|max_length[200]');
		

		$this->form_validation->set_rules('content', 'Content', 'trim|required');
		

		$this->form_validation->set_rules('url', 'Url', 'trim|required');
		

		$this->form_validation->set_rules('read', 'Read', 'trim|required|max_length[11]');
		

		$this->form_validation->set_rules('user_id', 'User Id', 'trim|required|max_length[11]');
		

		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content'),
				'url' => $this->input->post('url'),
				'read' => $this->input->post('read'),
				'user_id' => $this->input->post('user_id'),
				'created_at' => date('Y-m-d H:i:s'),
			];

			

			


			
			
			$save_notification = $this->model_notification->change($id, $save_data);

			if ($save_notification) {

				

				
				
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/notification', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/notification');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/notification');
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
	* delete Notifications
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('notification_delete');

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
            set_message(cclang('has_been_deleted', 'notification'), 'success');
        } else {
            set_message(cclang('error_delete', 'notification'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Notifications
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('notification_view');

		$this->data['notification'] = $this->model_notification->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Notification Detail');
		$this->render('backend/standart/administrator/notification/notification_view', $this->data);
	}
	
	/**
	* delete Notifications
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$notification = $this->model_notification->find($id);

		
		
		return $this->model_notification->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('notification_export');

		$this->model_notification->export(
			'notification', 
			'notification',
			$this->model_notification->field_search
		);
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('notification_export');

		$this->model_notification->pdf('notification', 'notification');
	}


	public function single_pdf($id = null)
	{
		$this->is_allowed('notification_export');

		$table = $title = 'notification';
		$this->load->library('HtmlPdf');
      
        $config = array(
            'orientation' => 'p',
            'format' => 'a4',
            'marges' => array(5, 5, 5, 5)
        );

        $this->pdf = new HtmlPdf($config);
        $this->pdf->setDefaultFont('stsongstdlight'); 

        $result = $this->db->get($table);
       
        $data = $this->model_notification->find($id);
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


/* End of file notification.php */
/* Location: ./application/controllers/administrator/Notification.php */