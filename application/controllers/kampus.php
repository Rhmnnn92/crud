<?php
class Kampus extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('M_data');
        $this->load->helper('url');
    }
	function index()
	{
        $data['mahasiswa'] = $this->M_data->tampil_data()->result();
        $this->load->view('tampil_data',$data);
	}
    function tambah(){
        $this->load->view('input_data');
    }
    function tambah_aksi(){
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');
        $data = array(
            'nim' => $nim,
            'nama' => $nama,
            'alamat' => $alamat,
            'pekerjaan' => $pekerjaan
            );
        $this->M_data->input_data($data,'mahasiswa');
        redirect('kampus');
    }
    function edit($id){
        $where = array('id' => $id);
        $data['mahasiswa'] = $this->M_data->edit_data($where,'mahasiswa')->result();
        $this->load->view('edit_data',$data);
    }

    function update(){
        $id = $this->input->post('id');
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');
        $data = array(
            'nim' => $nim,
            'nama' => $nama,
            'alamat' => $alamat,
            'pekerjaan' => $pekerjaan
            );
        $where = array(
            'id' => $id
        );
        $this->M_data->update_data($where,$data,'mahasiswa');
        redirect('kampus');
    }
    function hapus($id){
        $where = array('id' => $id);
        $this->M_data->hapus_data($where,'mahasiswa');
        redirect('kampus');
    }
}
?>