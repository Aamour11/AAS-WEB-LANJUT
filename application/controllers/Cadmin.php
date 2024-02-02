<?php
class Cadmin extends CI_Controller {

  function __construct()
  {
      parent::__construct();
      $this->load->model('Admin_model');
      $this->load->library('form_validation');
  }

	public function index()
	{
    $data['list_admin'] = $this->Admin_model->get_all();
		$this->load->view('admin/admin_list', $data);
	}

  public function tambah() 
  {
    $data = array(
      'action' => site_url('Cadmin/tambah_action'),
      'id_admin' => set_value('id_admin'),
      'nama_admin' => set_value('nama_admin'),
      'no_tlp' => set_value('no_tlp'),
      'role' => set_value('role'),
      'password' => set_value('password'),
    );
    $this->load->view('admin/admin_form', $data);
  }  

  public function tambah_action() 
  {
    $data = array(
      'id_admin' => $this->input->post('id_admin',TRUE),
      'nama_admin' => $this->input->post('nama_admin',TRUE),
      'no_tlp' => $this->input->post('no_tlp',TRUE),
      'role' => $this->input->post('role',TRUE),
      'password' => $this->input->post('password',TRUE),
    );
    $this->Admin_model->insert($data);
    $this->session->set_flashdata('message', 'Create Record Success');
    redirect(site_url('Cadmin'));
  }

  // Update
  public function update($id_admin) 
    {
    $row = $this->Admin_model->get_by_id($id_admin);
    if ($row) {
        $data = array(
            'action' => site_url('Cadmin/update_action/'.$id_admin), // Sesuaikan dengan route yang benar
            'id_admin' => $row->id_admin, // Mengambil nilai dari database
            'nama_admin' => $row->nama_admin,
            'no_tlp' => $row->no_tlp,
            'role' => $row->role,
            'password' => $row->password,
        );
        $this->load->view('Admin/admin_form', $data);
        }
    }


    public function update_action() 
    {
        $data = array(
            'id_admin' => $this->input->post('id_admin', TRUE),
            'nama_admin' => $this->input->post('nama_admin', TRUE),
            'no_tlp' => $this->input->post('no_tlp', TRUE),
            'role' => $this->input->post('role', TRUE),
            'password' => $this->input->post('password', TRUE),
        );
    
        $this->Admin_model->update($this->input->post('id_admin', TRUE), $data);
        $this->session->set_flashdata('message', 'Update Record Success');
        redirect(site_url('Cadmin'));
    }
    

  // Delete
  public function delete($id_admin) 
  {
    $this->Admin_model->delete($id_admin);
    $this->session->set_flashdata('message', 'Delete Berhasil');
    redirect(site_url('Cadmin'));
  }  

}
