<?php 

class DataPasien extends CI_Controller
{
	public function index()
	{
		check_not_login();

        $data['pasien'] = $this->pasien_m->get_data_pasien();
        $data['hitung_antri'] = $this->pasien_m->hitung_antri();
        $data['antri_obat'] = $this->pasien_m->antri_obat();
        $data['invoice']=$this->pasien_m->get_no_invoice();

        $data['title'] = " Data Pasien ";

        $this->load->view('template/header');
        $this->load->view('template/sidebar',$data);
        $this->load->view('admin/v_data_pasien',$data);
        $this->load->view('template/footer');
	}



    public function detail_pasien($id)
    {
        check_not_login();

        $data['riwayat'] = $this->pasien_m->riwayat_periksa();
        $data['detail'] = $this->pasien_m->get_id_pasien($id);
        $data['detailpasien'] = $this->pasien_m->get_data_pasien_personal($id);
        $data['pasien'] = $this->pasien_m->get_data_keluhan($id);
        $data['hitung_antri'] = $this->pasien_m->hitung_antri();
        $data['antri_obat'] = $this->pasien_m->antri_obat(); 

        $data['title'] = " Detail Pasien ";

        $this->load->view('template/header');
        $this->load->view('template/sidebar',$data);
        $this->load->view('admin/v_data_detail_pasien',$data);
        $this->load->view('template/footer');
    }


    public function riwayat_periksa($id)
    {
        check_not_login();

        $data['riwayat'] = $this->pasien_m->riwayat_periksa();
        $data['detail'] = $this->pasien_m->get_id_pasien($id);
        $data['detailpasien'] = $this->pasien_m->get_data_pasien_personal($id);
        $data['pasien'] = $this->pasien_m->get_data_keluhan($id);
        $data['hitung_antri'] = $this->pasien_m->hitung_antri();
        $data['antri_obat'] = $this->pasien_m->antri_obat(); 

        $data['title'] = " Detail Pasien ";

        $this->load->view('template/header');
        $this->load->view('template/sidebar',$data);
        $this->load->view('admin/v_data_riwayat_pasien',$data);
        $this->load->view('template/footer');
    }


    public function tambah_data()
    {
        $no_rm          = $this->input->post('no_rm');
        $nama           = $this->input->post('nama');
        $gender         = $this->input->post('gender');
        $t_lahir        = $this->input->post('t_lahir');
        $tgl_lahir      = $this->input->post('tgl_lahir');
        $no_hp          = $this->input->post('no_hp');
        $agama          = $this->input->post('agama');
        $pekerjaan      = $this->input->post('pekerjaan');
        $alamat         = $this->input->post('alamat');
        
        $data = array(
            'no_rm'          => $no_rm,
            'nama'          => $nama,
            'gender'        => $gender,
            't_lahir'       => $t_lahir,
            'tgl_lahir'     => $tgl_lahir,
            'no_hp'         => $no_hp,
            'agama'         => $agama,
            'pekerjaan'     => $pekerjaan,
            'alamat'        => $alamat,
        );

        $this->master_m->insert_data($data,'data_pasien');
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('admin/DataPasien');  
    }



    public function update_data()
    {
        $id_pasien      = $this->input->post('id_pasien');
        $nama           = $this->input->post('nama');
        $gender         = $this->input->post('gender');
        $t_lahir        = $this->input->post('t_lahir');
        $tgl_lahir      = $this->input->post('tgl_lahir');
        $no_hp          = $this->input->post('no_hp');
        $agama          = $this->input->post('agama');
        $pekerjaan      = $this->input->post('pekerjaan');
        $alamat         = $this->input->post('alamat');
        
        $data = array(
            'nama'          => $nama,
            'gender'        => $gender,
            't_lahir'       => $t_lahir,
            'tgl_lahir'     => $tgl_lahir,
            'no_hp'         => $no_hp,
            'agama'         => $agama,
            'pekerjaan'     => $pekerjaan,
            'alamat'        => $alamat,
        );


        $where = array(
            'id_pasien'    => $id_pasien
        );

        $this->master_m->update_data('data_pasien',$data,$where);
        $this->session->set_flashdata('flash', 'Diupdate');
        redirect('admin/DataPasien/detail_pasien/'.$id_pasien);
    }



    public function update_data_keluhan()
    {
        $id_pasien      = $this->input->post('id_pasien');
        $id_periksa     = $this->input->post('id_periksa');
        $keluhan        = $this->input->post('keluhan');
        $bb             = $this->input->post('bb');
        $tb             = $this->input->post('tb');
        $status_gizi    = $this->input->post('status_gizi');

        date_default_timezone_set('Asia/Jakarta');
        
        $data = array(
            'keluhan'       => $keluhan,
            'bb'            => $bb,
            'tb'            => $tb,
            'status_gizi'   => $status_gizi,
            'update_at'     => date('Y-m-d H:i:s')
        );


        $where = array(
            'id_periksa'    => $id_periksa
        );

        $this->master_m->update_data('data_periksa',$data,$where);
        $this->session->set_flashdata('flash', 'Diupdate');
        redirect('admin/DataPasien/detail_pasien/'.$id_pasien);
    }


    public function tambah_keluhan()
    {
        $id_pasien      = $this->input->post('id_pasien');
        $keluhan        = $this->input->post('keluhan');
        $bb             = $this->input->post('bb');
        $tb             = $this->input->post('tb');
        $status_gizi    = $this->input->post('status_gizi');
        
        date_default_timezone_set('Asia/Jakarta');
                
        $data = array(
            'id_pasien'     => $id_pasien,
            'keluhan'       => $keluhan,
            'bb'            => $bb,
            'tb'            => $tb,
            'status_gizi'   => $status_gizi,
            'tgl_kunjungan' => date('Y-m-d H:i:s')
        );

        $this->master_m->insert_data($data,'data_periksa');
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('admin/DataPasien/detail_pasien/'.$id_pasien);  
    }



    public function BelumPeriksa()
    {
        check_not_login();

        $data['pasien'] = $this->pasien_m->get_data_periksa_pasien();
        $data['hitung_antri'] = $this->pasien_m->hitung_antri();
        $data['antri_obat'] = $this->pasien_m->antri_obat();
        

        $data['title'] = " Data Pemeriksaan Pasien ";

        $this->load->view('template/header');
        $this->load->view('template/sidebar',$data);
        $this->load->view('admin/v_data_periksa_pasien',$data);
        $this->load->view('template/footer');
    }


    public function PeriksaPasien()
    {
        check_not_login();

        $id_periksa         = $this->input->post('id_periksa');
        $anamnesis          = $this->input->post('anamnesis');
        $hasil_periksa      = $this->input->post('hasil_periksa');
        $diagnosis          = $this->input->post('diagnosis');
        $obat               = $this->input->post('obat');
        $update_at          = date('Y-m-d H:i:s');
        date_default_timezone_set('Asia/Jakarta');

        $data = array(
            'anamnesis'     => $anamnesis,
            'hasil_periksa' => $hasil_periksa,
            'diagnosis'     => $diagnosis,
            'obat'          => $obat,
            'status'        => '1',
            'update_at'     => date('Y-m-d H:i:s')
        );

        $where = array(
            'id_periksa'    => $id_periksa
        );

        $this->master_m->update_data('data_periksa',$data,$where);
        $this->session->set_flashdata('flash', 'Diupdate');
        redirect('admin/DataPasien/BelumPeriksa');
    }


    public function AntriObat()
    {
        check_not_login();

        $data['pasien'] = $this->pasien_m->get_data_antri_obat();
        $data['hitung_antri'] = $this->pasien_m->hitung_antri();
        $data['antri_obat'] = $this->pasien_m->antri_obat();
        
        $data['title'] = " Order Resep";

        $this->load->view('template/header');
        $this->load->view('template/sidebar',$data);
        $this->load->view('admin/v_data_antri_obat',$data);
        $this->load->view('template/footer');
    }



    public function UpdateObat()
    {
        check_not_login();

        $id_periksa         = $this->input->post('id_periksa');
        $obat               = $this->input->post('obat');
        $status             = $this->input->post('status');
        $update_at          = date('Y-m-d H:i:s');
        date_default_timezone_set('Asia/Jakarta');

        $data = array(
            'obat'          => $obat,
            'status'        => '2',
            'update_at'     => date('Y-m-d H:i:s')
        );

        $where = array(
            'id_periksa'    => $id_periksa
        );

        $this->master_m->update_data('data_periksa',$data,$where);
        $this->session->set_flashdata('flash', 'Diupdate');
        redirect('admin/DataPasien/AntriObat');
    }


    public function SelesaiPeriksa()
    {
        check_not_login();

        $data['pasien'] = $this->pasien_m->get_data_selesai_periksa();
        $data['hitung_antri'] = $this->pasien_m->hitung_antri();
        $data['antri_obat'] = $this->pasien_m->antri_obat();

        $data['title'] = " Pasien Selesai Periksa";

        $this->load->view('template/header');
        $this->load->view('template/sidebar',$data);
        $this->load->view('admin/v_data_pasien_selesai',$data);
        $this->load->view('template/footer');
    }



    public function delete_data($id)
    {
        $where = array('id_periksa' => $id);

        $this->master_m->delete_data($where, 'data_periksa');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/Profesi');

        }

}



?>