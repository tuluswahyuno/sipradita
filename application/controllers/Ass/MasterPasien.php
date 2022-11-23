<?php 

class MasterPasien extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('caramel', 'caramel');
    }

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
        $this->load->view('Masterpasien/v_data_pasien',$data);
        $this->load->view('template/footer');
    }

    public function cari_pasien()
    {
        check_not_login();

        $data['title'] = " Cari Pasien ";

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Masterpasien/v_cari_pasien',$data);
        $this->load->view('template/footer');

        
    }

    public function hasil_cari()
    {
        $data['cari'] = $this->pasien_m->cariOrangGos();

        $data['title'] = " Hasil Pencarian Pasien ";

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Masterpasien/v_data_pasien_result_gos', $data);
        $this->load->view('template/footer');
    }

	public function data_pasien_gos()
	{
		check_not_login();

        $data['pasien'] = $this->pasien_m->data_pasien_all();
        $data['hitung_antri'] = $this->pasien_m->hitung_antri();
        $data['antri_obat'] = $this->pasien_m->antri_obat();
        $data['invoice']=$this->pasien_m->get_no_invoice();

        $data['title'] = " Data Pasien ";

        $this->load->view('template/header');
        $this->load->view('template/sidebar',$data);
        $this->load->view('Masterpasien/v_data_pasien2',$data);
        $this->load->view('template/footer_pasien');
    }


    public function json_pasien()
    {   

        $plain_query  = "  
        select 
        pasien.nama,pasien.norm,pasien.tempat_lahir,pasien.tanggal_lahir,
        referensi.deskripsi as pekerjaan,pasien.jenis_kelamin,
        pasien.alamat,kontak_pasien.nomor as nohp,
        kartu_identitas_pasien.nomor as nik,
        pasien.agama
        from master.pasien pasien
        left outer join master.kartu_identitas_pasien kartu_identitas_pasien
        on kartu_identitas_pasien.norm = pasien.norm
        left outer join master.kontak_pasien kontak_pasien
        on kontak_pasien.norm = pasien.norm
        left outer join master.referensi referensi 
        on referensi.jenis = 4 and referensi.id = pasien.pekerjaan
        where pasien.status = 1
        AND pasien.norm = '$input';
        ";
        echo $this->caramel->get_json($plain_query);
    }

    


    public function tambah_anamnesis($id)
    {
        check_not_login();

        $data['detail'] = $this->pasien_m->get_id_pasien($id);
        // $data['detailpasien'] = $this->pasien_m->get_data_pasien_personal($id);

        $data['title'] = " Data Anamnesis Pasien ";

        $this->load->view('template/header');
        $this->load->view('template/sidebar',$data);
        $this->load->view('Masterpasien/v_input_anamnesis',$data);
        $this->load->view('template/footer', [
            'js' => <<< JS
                $('#id-pernah-dirawat').change(function(e) {
                    e.preventDefault();
                    let elem = $(this);
                    let disableInput = elem.val() == 'Tidak Pernah';

                    $('#id-diagnosa').prop('disabled', disableInput);
                    // $('#id-diagnosa').prop('readonly', disableInput);

                    $('#id-kapan').prop('disabled', disableInput);
                    // $('#id-kapan').prop('readonly', disableInput);

                    $('#id-di').prop('disabled', disableInput);
                    // $('#id-di').prop('readonly', disableInput);
                });

                $('#id-pernah-operasi').change(function(e) {
                    e.preventDefault();
                    let elem = $(this);
                    let disableInput = elem.val() == 'Tidak Pernah';

                    $('#id-operasi').prop('disabled', disableInput);
                    // $('#id-operasi').prop('readonly', disableInput);

                    $('#id-kapanoperasi').prop('disabled', disableInput);
                    // $('#id-kapanoperasi').prop('readonly', disableInput);

                    $('#id-operasidimana').prop('disabled', disableInput);
                    // $('#id-operasidimana').prop('readonly', disableInput);
                });

                $('#id-obat').change(function(e) {
                    e.preventDefault();
                    let elem = $(this);
                    let disableInput = elem.val() == 'Tidak';

                    $('#id-jenisobat').prop('disabled', disableInput);
                    // $('#id-jenisobat').prop('readonly', disableInput);
                });

                $('#id-penyakitkeluarga').change(function(e) {
                    e.preventDefault();
                    let elem = $(this);
                    let disableInput = elem.val() == 'Tidak';

                    $('#id-penyakitkeluargajenis').prop('disabled', disableInput);
                    // $('#id-penyakitkeluargajenis').prop('readonly', disableInput);

                    $('#id-penyakitkeluargalain').prop('disabled', disableInput);
                    // $('#id-penyakitkeluargalain').prop('readonly', disableInput);
                });

                $('#id-alergi').change(function(e) {
                    e.preventDefault();
                    let elem = $(this);
                    let disableInput = elem.val() == 'Tidak';

                    $('#id-alergimakanan').prop('disabled', disableInput);
                    // $('#id-alergimakanan').prop('readonly', disableInput);

                    $('#id-alergiobat').prop('disabled', disableInput);
                    // $('#id-alergiobat').prop('readonly', disableInput);

                    $('#id-alergilain').prop('disabled', disableInput);
                    // $('#id-alergilain').prop('readonly', disableInput);
                });
            JS,
        ]);
    }


    public function update_anamnesis($idanamnesis)
    {
        check_not_login();

        // $data['detail'] = $this->pasien_m->get_id_pasien($id);
        $data['detail'] = $this->pasien_m->get_id_anamnesis($idanamnesis);
        $data['anamnesis'] = $this->pasien_m->get_anamnesis($idanamnesis);

        $data['title'] = " Update Data Anamnesis Pasien ";

        $this->load->view('template/header');
        $this->load->view('template/sidebar',$data);
        $this->load->view('Masterpasien/v_update_anamnesis',$data);
        $this->load->view('template/footer', [
            'js' => <<< JS
                $('#id-pernah-dirawat').change(function(e) {
                    e.preventDefault();
                    let elem = $(this);
                    let disableInput = elem.val() == 'Tidak Pernah';

                    $('#id-diagnosa').prop('disabled', disableInput);
                    // $('#id-diagnosa').prop('readonly', disableInput);

                    $('#id-kapan').prop('disabled', disableInput);
                    // $('#id-kapan').prop('readonly', disableInput);

                    $('#id-di').prop('disabled', disableInput);
                    // $('#id-di').prop('readonly', disableInput);
                });

                $('#id-pernah-operasi').change(function(e) {
                    e.preventDefault();
                    let elem = $(this);
                    let disableInput = elem.val() == 'Tidak Pernah';

                    $('#id-operasi').prop('disabled', disableInput);
                    // $('#id-operasi').prop('readonly', disableInput);

                    $('#id-kapanoperasi').prop('disabled', disableInput);
                    // $('#id-kapanoperasi').prop('readonly', disableInput);

                    $('#id-operasidimana').prop('disabled', disableInput);
                    // $('#id-operasidimana').prop('readonly', disableInput);
                });

                $('#id-obat').change(function(e) {
                    e.preventDefault();
                    let elem = $(this);
                    let disableInput = elem.val() == 'Tidak';

                    $('#id-jenisobat').prop('disabled', disableInput);
                    // $('#id-jenisobat').prop('readonly', disableInput);
                });

                $('#id-penyakitkeluarga').change(function(e) {
                    e.preventDefault();
                    let elem = $(this);
                    let disableInput = elem.val() == 'Tidak';

                    $('#id-penyakitkeluargajenis').prop('disabled', disableInput);
                    // $('#id-penyakitkeluargajenis').prop('readonly', disableInput);

                    $('#id-penyakitkeluargalain').prop('disabled', disableInput);
                    // $('#id-penyakitkeluargalain').prop('readonly', disableInput);
                });

                $('#id-alergi').change(function(e) {
                    e.preventDefault();
                    let elem = $(this);
                    let disableInput = elem.val() == 'Tidak';

                    $('#id-alergimakanan').prop('disabled', disableInput);
                    // $('#id-alergimakanan').prop('readonly', disableInput);

                    $('#id-alergiobat').prop('disabled', disableInput);
                    // $('#id-alergiobat').prop('readonly', disableInput);

                    $('#id-alergilain').prop('disabled', disableInput);
                    // $('#id-alergilain').prop('readonly', disableInput);
                });
            JS,
        ]);
    }


    public function tambah_anamnesis_aksi()
    {
        check_not_login();

        $id_pasien                      = $this->input->post('id_pasien');
        $keluhan_utama                  = $this->input->post('keluhan_utama');
        $riw_penyakit_sekarang          = $this->input->post('riw_penyakit_sekarang');
        $pernah_rawat                   = $this->input->post('pernah_rawat');
        $pernah_rawat_diagnosa          = $this->input->post('pernah_rawat_diagnosa');
        $pernah_rawat_kapan             = $this->input->post('pernah_rawat_kapan');
        $pernah_rawat_di                = $this->input->post('pernah_rawat_di');
        $pernah_operasi                 = $this->input->post('pernah_operasi');
        $pernah_operasi_jenis           = $this->input->post('pernah_operasi_jenis');
        $pernah_operasi_kapan           = $this->input->post('pernah_operasi_kapan');
        $pernah_operasi_di              = $this->input->post('pernah_operasi_di');
        $obatygdikonsumsi               = $this->input->post('obatygdikonsumsi');
        $obatygdikonsumsi_jenis         = $this->input->post('obatygdikonsumsi_jenis');
        $riwayat_penyakit_keluarga      = $this->input->post('riwayat_penyakit_keluarga');
        $riwayat_penyakit_jenis         = $this->input->post('riwayat_penyakit_jenis');
        $penyakit_jenis_lainnya         = $this->input->post('penyakit_jenis_lainnya');
        $riwayat_alergi                 = $this->input->post('riwayat_alergi');
        $alergi_makanan                 = $this->input->post('alergi_makanan');
        $alergi_obat                    = $this->input->post('alergi_obat');
        $alergi_lainnya                 = $this->input->post('alergi_lainnya');
        $agama                          = $this->input->post('agama');
        $pendidikan                     = $this->input->post('pendidikan');
        $kewarganegaraan                = $this->input->post('kewarganegaraan');
        $pekerjaan                      = $this->input->post('pekerjaan');
        $status_pernikahan              = $this->input->post('status_pernikahan');
        $tinggal_bersama_keluarga       = $this->input->post('tinggal_bersama_keluarga');
        
        $data = array(
            'id_pasien'                 => $id_pasien,
            'keluhan_utama'             => $keluhan_utama,
            'riw_penyakit_sekarang'     => $riw_penyakit_sekarang,
            'pernah_rawat'              => $pernah_rawat,
            'pernah_rawat_diagnosa'     => $pernah_rawat_diagnosa,
            'pernah_rawat_kapan'        => $pernah_rawat_kapan,
            'pernah_rawat_di'           => $pernah_rawat_di,
            'pernah_operasi'            => $pernah_operasi,
            'pernah_operasi_jenis'      => $pernah_operasi_jenis,
            'pernah_operasi_kapan'      => $pernah_operasi_kapan,
            'pernah_operasi_di'         => $pernah_operasi_di,
            'obatygdikonsumsi'          => $obatygdikonsumsi,
            'obatygdikonsumsi_jenis'    => $obatygdikonsumsi_jenis,
            'riwayat_penyakit_keluarga' => $riwayat_penyakit_keluarga,
            'riwayat_penyakit_jenis'    => $riwayat_penyakit_jenis,
            'penyakit_jenis_lainnya'    => $penyakit_jenis_lainnya,
            'riwayat_alergi'            => $riwayat_alergi,
            'alergi_makanan'            => $alergi_makanan,
            'alergi_obat'               => $alergi_obat,
            'alergi_lainnya'            => $alergi_lainnya,
            'agama'                     => $agama,
            'pendidikan'                => $pendidikan,
            'kewarganegaraan'           => $kewarganegaraan,
            'pekerjaan'                 => $pekerjaan,
            'status_pernikahan'         => $status_pernikahan,
            'tinggal_bersama_keluarga'  => $tinggal_bersama_keluarga,
        );

        $this->pasien_m->insert_data($data,'data_anamnesis');
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('Ass/MasterPasien/detail_pasien/'.$id_pasien);
    }


    public function update_anamnesis_aksi()
    {
        check_not_login();

        $id_anamnesis                   = $this->input->post('id_anamnesis');
        $keluhan_utama                  = $this->input->post('keluhan_utama');
        $riw_penyakit_sekarang          = $this->input->post('riw_penyakit_sekarang');
        $pernah_rawat                   = $this->input->post('pernah_rawat');
        $pernah_rawat_diagnosa          = $this->input->post('pernah_rawat_diagnosa');
        $pernah_rawat_kapan             = $this->input->post('pernah_rawat_kapan');
        $pernah_rawat_di                = $this->input->post('pernah_rawat_di');
        $pernah_operasi                 = $this->input->post('pernah_operasi');
        $pernah_operasi_jenis           = $this->input->post('pernah_operasi_jenis');
        $pernah_operasi_kapan           = $this->input->post('pernah_operasi_kapan');
        $pernah_operasi_di              = $this->input->post('pernah_operasi_di');
        $obatygdikonsumsi               = $this->input->post('obatygdikonsumsi');
        $obatygdikonsumsi_jenis         = $this->input->post('obatygdikonsumsi_jenis');
        $riwayat_penyakit_keluarga      = $this->input->post('riwayat_penyakit_keluarga');
        $riwayat_penyakit_jenis         = $this->input->post('riwayat_penyakit_jenis');
        $penyakit_jenis_lainnya         = $this->input->post('penyakit_jenis_lainnya');
        $riwayat_alergi                 = $this->input->post('riwayat_alergi');
        $alergi_makanan                 = $this->input->post('alergi_makanan');
        $alergi_obat                    = $this->input->post('alergi_obat');
        $alergi_lainnya                 = $this->input->post('alergi_lainnya');
        $agama                          = $this->input->post('agama');
        $pendidikan                     = $this->input->post('pendidikan');
        $kewarganegaraan                = $this->input->post('kewarganegaraan');
        $pekerjaan                      = $this->input->post('pekerjaan');
        $status_pernikahan              = $this->input->post('status_pernikahan');
        $tinggal_bersama_keluarga       = $this->input->post('tinggal_bersama_keluarga');
        
        $data = array(
            'keluhan_utama'             => $keluhan_utama,
            'riw_penyakit_sekarang'     => $riw_penyakit_sekarang,
            'pernah_rawat'              => $pernah_rawat,
            'pernah_rawat_diagnosa'     => $pernah_rawat_diagnosa,
            'pernah_rawat_kapan'        => $pernah_rawat_kapan,
            'pernah_rawat_di'           => $pernah_rawat_di,
            'pernah_operasi'            => $pernah_operasi,
            'pernah_operasi_jenis'      => $pernah_operasi_jenis,
            'pernah_operasi_kapan'      => $pernah_operasi_kapan,
            'pernah_operasi_di'         => $pernah_operasi_di,
            'obatygdikonsumsi'          => $obatygdikonsumsi,
            'obatygdikonsumsi_jenis'    => $obatygdikonsumsi_jenis,
            'riwayat_penyakit_keluarga' => $riwayat_penyakit_keluarga,
            'riwayat_penyakit_jenis'    => $riwayat_penyakit_jenis,
            'penyakit_jenis_lainnya'    => $penyakit_jenis_lainnya,
            'riwayat_alergi'            => $riwayat_alergi,
            'alergi_makanan'            => $alergi_makanan,
            'alergi_obat'               => $alergi_obat,
            'alergi_lainnya'            => $alergi_lainnya,
            'agama'                     => $agama,
            'pendidikan'                => $pendidikan,
            'kewarganegaraan'           => $kewarganegaraan,
            'pekerjaan'                 => $pekerjaan,
            'status_pernikahan'         => $status_pernikahan,
            'tinggal_bersama_keluarga'  => $tinggal_bersama_keluarga,
        );


        $where = array(
            'id_anamnesis'    => $id_anamnesis
        );

        $this->pasien_m->update_data('data_anamnesis',$data,$where);
        $this->session->set_flashdata('flash', 'Diupdate');
        redirect('Ass/MasterPasien/detail_anamnesis/'.$id_anamnesis);
    }


    public function tambah_pemeriksaan_aksi()
    {
        check_not_login();

        $id_anamnesis           = $this->input->post('id_anamnesis');
        $e                      = $this->input->post('e');
        $v                      = $this->input->post('v');
        $m                      = $this->input->post('m');
        $bb                     = $this->input->post('bb');
        $tb                     = $this->input->post('tb');
        // $kesadaran              = $this->input->post('kesadaran');
        $td                     = $this->input->post('td');
        $rr                     = $this->input->post('rr');
        $n                      = $this->input->post('n');
        $s                      = $this->input->post('s');
        $spo                    = $this->input->post('spo');
        $keadaan_umum           = $this->input->post('keadaan_umum');
        $ivline_terpasangdi     = $this->input->post('ivline_terpasangdi');
        $lokasi                 = $this->input->post('lokasi');
        $tanggal                = $this->input->post('tanggal');
        $kateter_terpasang_tgl  = $this->input->post('kateter_terpasang_tgl');
        $ngtogt_terpasang_tgl   = $this->input->post('ngtogt_terpasang_tgl');

        $jumlah = $e+$v+$m;

        if ($jumlah == '14' || $jumlah == '15') {
            $kesadaran = ' Compos Mentis (GCS 14-15)';
        }elseif ($jumlah == '12' || $jumlah == '13') {
            $kesadaran = 'Apatis (GCS 12-13)';
        }elseif ($jumlah == '11' || $jumlah == '10') {
            $kesadaran = 'Somnolen (GCS 10-11)';
        }elseif ($jumlah == '9' || $jumlah == '8'|| $jumlah == '7') {
            $kesadaran = 'Delirium (GCS 9-7)';
        }elseif ($jumlah == '4' || $jumlah == '6'|| $jumlah == '5') {
            $kesadaran = 'Soporos Coma (GCS 4-6)';
        }elseif ($jumlah == '3' || $jumlah == '2'|| $jumlah == '1') {
            $kesadaran = 'Coma (GCS 3) ';
        }else{
            $kesadaran = 'Tidak sesuai';
        }

        
        $data = array(
            'id_anamnesis'          => $id_anamnesis,
            'e'                     => $e,
            'v'                     => $v,
            'm'                     => $m,
            'bb'                    => $bb,
            'tb'                    => $tb,
            'kesadaran'             => $kesadaran,
            'td'                    => $td,
            'rr'                    => $rr,
            'n'                     => $n,
            's'                     => $s,
            'spo'                   => $spo,
            'keadaan_umum'          => $keadaan_umum,
            'ivline_terpasangdi'    => $ivline_terpasangdi,
            'lokasi'                => $lokasi,
            'tanggal'               => $tanggal,
            'kateter_terpasang_tgl' => $kateter_terpasang_tgl,
            'ngtogt_terpasang_tgl'  => $ngtogt_terpasang_tgl,   
        );

        $this->pasien_m->insert_data($data,'data_pemeriksaan');
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('Ass/MasterPasien/pemeriksaan/'.$id_anamnesis);
    }


    public function update_pemeriksaan_aksi()
    {
        check_not_login();

        $id_anamnesis           = $this->input->post('id_anamnesis');
        $id_pemeriksaan         = $this->input->post('id_pemeriksaan');
        $e                      = $this->input->post('e');
        $v                      = $this->input->post('v');
        $m                      = $this->input->post('m');
        $bb                     = $this->input->post('bb');
        $tb                     = $this->input->post('tb');
        // $kesadaran              = $this->input->post('kesadaran');
        $td                     = $this->input->post('td');
        $rr                     = $this->input->post('rr');
        $n                      = $this->input->post('n');
        $s                      = $this->input->post('s');
        $spo                    = $this->input->post('spo');
        $keadaan_umum           = $this->input->post('keadaan_umum');
        $ivline_terpasangdi     = $this->input->post('ivline_terpasangdi');
        $lokasi                 = $this->input->post('lokasi');
        $tanggal                = $this->input->post('tanggal');
        $kateter_terpasang_tgl  = $this->input->post('kateter_terpasang_tgl');
        $ngtogt_terpasang_tgl   = $this->input->post('ngtogt_terpasang_tgl');

        $jumlah = $e+$v+$m;

        if ($jumlah == '14' || $jumlah == '15') {
            $kesadaran = ' Compos Mentis (GCS 14-15)';
        }elseif ($jumlah == '12' || $jumlah == '13') {
            $kesadaran = 'Apatis (GCS 12-13)';
        }elseif ($jumlah == '11' || $jumlah == '10') {
            $kesadaran = 'Somnolen (GCS 10-11)';
        }elseif ($jumlah == '9' || $jumlah == '8'|| $jumlah == '7') {
            $kesadaran = 'Delirium (GCS 9-7)';
        }elseif ($jumlah == '4' || $jumlah == '6'|| $jumlah == '5') {
            $kesadaran = 'Soporos Coma (GCS 4-6)';
        }elseif ($jumlah == '3' || $jumlah == '2'|| $jumlah == '1') {
            $kesadaran = 'Coma (GCS 3) ';
        }else{
            $kesadaran = 'Tidak sesuai';
        }
        
        $data = array(
            'e'                     => $e,
            'v'                     => $v,
            'm'                     => $m,
            'bb'                    => $bb,
            'tb'                    => $tb,
            'kesadaran'             => $kesadaran,
            'td'                    => $td,
            'rr'                    => $rr,
            'n'                     => $n,
            's'                     => $s,
            'spo'                   => $spo,
            'keadaan_umum'          => $keadaan_umum,
            'ivline_terpasangdi'    => $ivline_terpasangdi,
            'lokasi'                => $lokasi,
            'tanggal'               => $tanggal,
            'kateter_terpasang_tgl' => $kateter_terpasang_tgl,
            'ngtogt_terpasang_tgl'  => $ngtogt_terpasang_tgl,  
        );


        $where = array(
            'id_pemeriksaan'    => $id_pemeriksaan
        );

        $this->pasien_m->update_data('data_pemeriksaan',$data,$where);
        $this->session->set_flashdata('flash', 'Diupdate');
        redirect('Ass/MasterPasien/pemeriksaan/'.$id_anamnesis);
    }


    public function tambah_pernafasan_aksi()
    {
        check_not_login();

        $id_anamnesis           = $this->input->post('id_anamnesis');
        $pola_nafas             = $this->input->post('pola_nafas');
        $irama_nafas            = $this->input->post('irama_nafas');
        $retraksi               = $this->input->post('retraksi');
        $jenis_retraksi         = $this->input->post('jenis_retraksi');
        $jenis_pernafasan       = $this->input->post('jenis_pernafasan');
        $alat_bantu             = $this->input->post('alat_bantu');
        $alat_bantu_lainnya     = $this->input->post('alat_bantu_lainnya');
        $tekanan                = $this->input->post('tekanan');
        $terpasang_wsd          = $this->input->post('terpasang_wsd');
        $produksi               = $this->input->post('produksi');
        $kesulitan_bernafas     = $this->input->post('kesulitan_bernafas');
        $kesulitan_bernafas_ya  = $this->input->post('kesulitan_bernafas_ya');
        $lain_lain              = $this->input->post('lain_lain');
        $saat                   = $this->input->post('saat');
        $batukdansekresi        = $this->input->post('batukdansekresi');
        $batukdansekresi_ya     = $this->input->post('batukdansekresi_ya');
        $warna_sputum           = $this->input->post('warna_sputum');
        $suara_nafas            = $this->input->post('suara_nafas');
        $perkusi                = $this->input->post('perkusi');
        $agd                    = $this->input->post('agd');
        //$diagnosa_penafasan     = $this->input->post('diagnosa_penafasan');

        if ($irama_nafas == "Tidak Teratur" && $retraksi == "Ya" && $kesulitan_bernafas == "Ya" && $kesulitan_bernafas_ya == "Dispneu" && $agd == "PH 7,35-7,45") {
            $diagnosa_penafasan = 'Pola Nafas Tidak Efektif';
        }elseif ($batukdansekresi == "Ya" && $batukdansekresi_ya == "Produktif" || $batukdansekresi_ya == "Non Produktif" && $warna_sputum == "Putih" || $warna_sputum == "Kuning" || $warna_sputum == "Merah" && $perkusi == "Redup") {
            $diagnosa_penafasan = 'Bersihan Jalan Nafas Tidak Efektif';
        }else{ 
         $diagnosa_penafasan = 'Tidak Terdiagnosa Masalah Pernafasan';
     }

     $data = array(
        'id_anamnesis'              => $id_anamnesis,
        'pola_nafas'                => $pola_nafas,
        'irama_nafas'               => $irama_nafas,
        'retraksi'                  => $retraksi,
        'jenis_retraksi'            => $jenis_retraksi,
        'jenis_pernafasan'          => $jenis_pernafasan,
        'alat_bantu'                => $alat_bantu,
        'alat_bantu_lainnya'        => $alat_bantu_lainnya,
        'tekanan'                   => $tekanan,
        'terpasang_wsd'             => $terpasang_wsd,
        'produksi'                  => $produksi,
        'kesulitan_bernafas'        => $kesulitan_bernafas,
        'kesulitan_bernafas_ya'     => $kesulitan_bernafas_ya,
        'lain_lain'                 => $lain_lain,
        'saat'                      => $saat,
        'batukdansekresi'           => $batukdansekresi,
        'batukdansekresi_ya'        => $batukdansekresi_ya,
        'warna_sputum'              => $warna_sputum,
        'suara_nafas'               => $suara_nafas,
        'perkusi'                   => $perkusi,
        'agd'                       => $agd,
        'diagnosa_penafasan'        => $diagnosa_penafasan,
    );

     $this->pasien_m->insert_data($data,'sistem_pernafasan');
     $this->session->set_flashdata('flash', 'Ditambahkan');
     redirect('Ass/MasterPasien/pernafasan/'.$id_anamnesis);
 }


 public function update_pernafasan_aksi()
 {
    check_not_login();

    $id_anamnesis           = $this->input->post('id_anamnesis');
    $id_sistempernafasan    = $this->input->post('id_sistempernafasan');
    $pola_nafas             = $this->input->post('pola_nafas');
    $irama_nafas            = $this->input->post('irama_nafas');
    $retraksi               = $this->input->post('retraksi');
    $jenis_retraksi         = $this->input->post('jenis_retraksi');
    $jenis_pernafasan       = $this->input->post('jenis_pernafasan');
    $alat_bantu             = $this->input->post('alat_bantu');
    $alat_bantu_lainnya     = $this->input->post('alat_bantu_lainnya');
    $tekanan                = $this->input->post('tekanan');
    $terpasang_wsd          = $this->input->post('terpasang_wsd');
    $produksi               = $this->input->post('produksi');
    $kesulitan_bernafas     = $this->input->post('kesulitan_bernafas');
    $kesulitan_bernafas_ya  = $this->input->post('kesulitan_bernafas_ya');
    $lain_lain              = $this->input->post('lain_lain');
    $saat                   = $this->input->post('saat');
    $batukdansekresi        = $this->input->post('batukdansekresi');
    $batukdansekresi_ya     = $this->input->post('batukdansekresi_ya');
    $warna_sputum           = $this->input->post('warna_sputum');
    $suara_nafas            = $this->input->post('suara_nafas');
    $perkusi                = $this->input->post('perkusi');
    $agd                    = $this->input->post('agd');

    if ($irama_nafas == "Tidak Teratur" && $retraksi == "Ya" && $kesulitan_bernafas == "Ya" && $kesulitan_bernafas_ya == "Dispneu" && $agd == "PH 7,35-7,45") {
            $diagnosa_penafasan = 'Pola Nafas Tidak Efektif';
        }elseif ($batukdansekresi == "Ya" && $batukdansekresi_ya == "Produktif" || $batukdansekresi_ya == "Non Produktif" && $warna_sputum == "Putih" || $warna_sputum == "Kuning" || $warna_sputum == "Merah" && $perkusi == "Redup") {
            $diagnosa_penafasan = 'Bersihan Jalan Nafas Tidak Efektif';
        }else{ 
         $diagnosa_penafasan = 'Tidak Terdiagnosa Masalah Pernafasan';
     }

 $data = array(
    'pola_nafas'                => $pola_nafas,
    'irama_nafas'               => $irama_nafas,
    'retraksi'                  => $retraksi,
    'jenis_retraksi'            => $jenis_retraksi,
    'jenis_pernafasan'          => $jenis_pernafasan,
    'alat_bantu'                => $alat_bantu,
    'alat_bantu_lainnya'        => $alat_bantu_lainnya,
    'tekanan'                   => $tekanan,
    'terpasang_wsd'             => $terpasang_wsd,
    'produksi'                  => $produksi,
    'kesulitan_bernafas'        => $kesulitan_bernafas,
    'kesulitan_bernafas_ya'     => $kesulitan_bernafas_ya,
    'lain_lain'                 => $lain_lain,
    'saat'                      => $saat,
    'batukdansekresi'           => $batukdansekresi,
    'batukdansekresi_ya'        => $batukdansekresi_ya,
    'warna_sputum'              => $warna_sputum,
    'suara_nafas'               => $suara_nafas,
    'perkusi'                   => $perkusi,
    'agd'                       => $agd,
    'diagnosa_penafasan'        => $diagnosa_penafasan,
);

 $where = array(
    'id_sistempernafasan'    => $id_sistempernafasan
);

 $this->pasien_m->update_data('sistem_pernafasan',$data,$where);
 $this->session->set_flashdata('flash', 'Diupdate');
 redirect('Ass/MasterPasien/pernafasan/'.$id_anamnesis);
}


public function tambah_moskuloskelental_aksi()
{
    check_not_login();

    $id_anamnesis           = $this->input->post('id_anamnesis');
    $pergerakan_sendi       = $this->input->post('pergerakan_sendi');
    $mudah_lelah            = $this->input->post('mudah_lelah');
    $kekuatan_otot          = $this->input->post('kekuatan_otot');
    $atas                   = $this->input->post('atas');
    $bawah                  = $this->input->post('bawah');
    $hasil                  = $this->input->post('hasil');
    $fraktur                = $this->input->post('fraktur');
    $fraktur_lokasi         = $this->input->post('fraktur_lokasi');
    $postur_tubuh           = $this->input->post('postur_tubuh');
    $skore_resiko_jatuh     = $this->input->post('skore_resiko_jatuh');
    $aktivitas_seharihari   = $this->input->post('aktivitas_seharihari');
    $berjalan               = $this->input->post('berjalan');
    $alat_ambulasi          = $this->input->post('alat_ambulasi');
    $kebiasaan_tidur        = $this->input->post('kebiasaan_tidur');
    $jam_tidur_sebelumsakit = $this->input->post('jam_tidur_sebelumsakit');
    $jam_tidur_sesudahsakit = $this->input->post('jam_tidur_sesudahsakit');

    if ($pergerakan_sendi == "Terbatas" && $mudah_lelah =="Ya" && $kekuatan_otot < "4" && $fraktur == "Ada" && $aktivitas_seharihari == "Ketergantungan Total" && $berjalan == "Kelumpuhan")
    {
        $diagnosa_moskuloskelental = "Gangguan Mobilitas Fisik";
    }else{
        $diagnosa_moskuloskelental = "Tidak Terdiagnosa Moskuloskeletal";
    }

    $data = array(
        'id_anamnesis'              => $id_anamnesis,
        'pergerakan_sendi'          => $pergerakan_sendi,
        'mudah_lelah'               => $mudah_lelah,
        'kekuatan_otot'             => $kekuatan_otot,
        'atas'                      => $atas,
        'bawah'                     => $bawah,
        'hasil'                     => $hasil,
        'fraktur'                   => $fraktur,
        'fraktur_lokasi'            => $fraktur_lokasi,
        'postur_tubuh'              => $postur_tubuh,
        'skore_resiko_jatuh'        => $skore_resiko_jatuh,
        'aktivitas_seharihari'      => $aktivitas_seharihari,
        'berjalan'                  => $berjalan,
        'alat_ambulasi'             => $alat_ambulasi,
        'kebiasaan_tidur'           => $kebiasaan_tidur,
        'jam_tidur_sebelumsakit'    => $jam_tidur_sebelumsakit,
        'jam_tidur_sesudahsakit'    => $jam_tidur_sesudahsakit,
        'diagnosa_moskuloskelental' => $diagnosa_moskuloskelental,
    );

    $this->pasien_m->insert_data($data,'sistem_moskuloskelental');
    $this->session->set_flashdata('flash', 'Ditambahkan');
    redirect('Ass/MasterPasien/moskuloskelental/'.$id_anamnesis);
}


public function update_moskuloskelental_aksi()
{
    check_not_login();

    $id_anamnesis           = $this->input->post('id_anamnesis');
    $id_moskuloskelental    = $this->input->post('id_moskuloskelental');
    $pergerakan_sendi       = $this->input->post('pergerakan_sendi');
    $mudah_lelah            = $this->input->post('mudah_lelah');
    $kekuatan_otot          = $this->input->post('kekuatan_otot');
    $hasil                  = $this->input->post('hasil');
    $fraktur                = $this->input->post('fraktur');
    $fraktur_lokasi         = $this->input->post('fraktur_lokasi');
    $postur_tubuh           = $this->input->post('postur_tubuh');
    $skore_resiko_jatuh     = $this->input->post('skore_resiko_jatuh');
    $aktivitas_seharihari   = $this->input->post('aktivitas_seharihari');
    $berjalan               = $this->input->post('berjalan');
    $alat_ambulasi          = $this->input->post('alat_ambulasi');
    $kebiasaan_tidur        = $this->input->post('kebiasaan_tidur');
    $jam_tidur_sebelumsakit = $this->input->post('jam_tidur_sebelumsakit');
    $jam_tidur_sesudahsakit = $this->input->post('jam_tidur_sesudahsakit');

    if ($pergerakan_sendi == "Terbatas" && $mudah_lelah =="Ya" && $kekuatan_otot < "4" && $fraktur == "Ada" && $aktivitas_seharihari == "Ketergantungan Total" && $berjalan == "Kelumpuhan")
        {$diagnosa_moskuloskelental = "Gangguan Mobilitas Fisik";}
    else
    {
        $diagnosa_moskuloskelental = "Tidak Terdiagnosa Moskuloskeletal";
    }

    $data = array(
        'pergerakan_sendi'          => $pergerakan_sendi,
        'mudah_lelah'               => $mudah_lelah,
        'kekuatan_otot'             => $kekuatan_otot,
        'hasil'                     => $hasil,
        'fraktur'                   => $fraktur,
        'fraktur_lokasi'            => $fraktur_lokasi,
        'postur_tubuh'              => $postur_tubuh,
        'skore_resiko_jatuh'        => $skore_resiko_jatuh,
        'aktivitas_seharihari'      => $aktivitas_seharihari,
        'berjalan'                  => $berjalan,
        'alat_ambulasi'             => $alat_ambulasi,
        'kebiasaan_tidur'           => $kebiasaan_tidur,
        'jam_tidur_sebelumsakit'    => $jam_tidur_sebelumsakit,
        'jam_tidur_sesudahsakit'    => $jam_tidur_sesudahsakit,
        'diagnosa_moskuloskelental' => $diagnosa_moskuloskelental,
    );

    $where = array(
        'id_moskuloskelental'    => $id_moskuloskelental
    );

    $this->pasien_m->update_data('sistem_moskuloskelental',$data,$where);
    $this->session->set_flashdata('flash', 'Diupdate');
    redirect('Ass/MasterPasien/moskuloskelental/'.$id_anamnesis);
}



public function tambah_proteksi_aksi()
{
    check_not_login();

    $id_anamnesis       = $this->input->post('id_anamnesis');
    $suhu               = $this->input->post('suhu');
    $terdapat_luka      = $this->input->post('terdapat_luka');
    $lokasi_luka        = $this->input->post('lokasi_luka');
    $kondisi_luka       = $this->input->post('kondisi_luka');
    $kebersihan_luka    = $this->input->post('kebersihan_luka');
    $riwayat_alergi     = $this->input->post('riwayat_alergi');
    $nama_alergi        = $this->input->post('nama_alergi');
    $nilai_leokosit     = $this->input->post('nilai_leokosit');
    $gds                = $this->input->post('gds');

    if ($suhu == ">37,5" || $nilai_leokosit>="10000") {
        $diagnosa_proteksi = 'Hipertermia';
    }else{ 
        $diagnosa_proteksi = 'Tidak Terdiagnosa Masalah Proteksi dan Perlindungan';
    }

    $data = array(
        'id_anamnesis'     => $id_anamnesis,
        'suhu'             => $suhu,
        'terdapat_luka'    => $terdapat_luka,
        'lokasi_luka'      => $lokasi_luka,
        'kondisi_luka'     => $kondisi_luka,
        'kebersihan_luka'  => $kebersihan_luka,
        'riwayat_alergi'   => $riwayat_alergi,
        'nama_alergi'      => $nama_alergi,
        'nilai_leokosit'   => $nilai_leokosit,
        'gds'              => $gds,
        'diagnosa_proteksi'=> $diagnosa_proteksi,
    );

    $this->pasien_m->insert_data($data,'sistem_proteksi');
    $this->session->set_flashdata('flash', 'Ditambahkan');
    redirect('Ass/MasterPasien/proteksi/'.$id_anamnesis);
}


public function update_proteksi_aksi()
{
    check_not_login();

    $id_anamnesis       = $this->input->post('id_anamnesis');
    $id_proteksi        = $this->input->post('id_proteksi');
    $suhu               = $this->input->post('suhu');
    $terdapat_luka      = $this->input->post('terdapat_luka');
    $lokasi_luka        = $this->input->post('lokasi_luka');
    $kondisi_luka       = $this->input->post('kondisi_luka');
    $kebersihan_luka    = $this->input->post('kebersihan_luka');
    $riwayat_alergi     = $this->input->post('riwayat_alergi');
    $nama_alergi        = $this->input->post('nama_alergi');
    $nilai_leokosit     = $this->input->post('nilai_leokosit');
    $gds                = $this->input->post('gds');

    if ($suhu == ">37,5" || $nilai_leokosit>="10000") {
        $diagnosa_proteksi = 'Hipertermia';
    }else{ 
        $diagnosa_proteksi = 'Tidak Terdiagnosa Masalah Proteksi dan Perlindungan';
    }

    $data = array(
        'suhu'             => $suhu,
        'terdapat_luka'    => $terdapat_luka,
        'lokasi_luka'      => $lokasi_luka,
        'kondisi_luka'     => $kondisi_luka,
        'kebersihan_luka'  => $kebersihan_luka,
        'riwayat_alergi'   => $riwayat_alergi,
        'nama_alergi'      => $nama_alergi,
        'nilai_leokosit'   => $nilai_leokosit,
        'gds'              => $gds,
        'diagnosa_proteksi'=> $diagnosa_proteksi,
    );

    $where = array(
        'id_proteksi' => $id_proteksi
    );

    $this->pasien_m->update_data('sistem_proteksi',$data,$where);
    $this->session->set_flashdata('flash', 'Diupdate');
    redirect('Ass/MasterPasien/proteksi/'.$id_anamnesis);
}



public function tambah_nyeri_aksi()
{
    check_not_login();

    $id_anamnesis   = $this->input->post('id_anamnesis');
    $nyeri          = $this->input->post('nyeri');
    $deskripsi      = $this->input->post('deskripsi');
    $lainnya        = $this->input->post('lainnya');
    $quality        = $this->input->post('quality');
    $region         = $this->input->post('region');
    $menyebar       = $this->input->post('menyebar');
    $skala          = $this->input->post('skala');
    // $hasil          = $this->input->post('hasil');
    $waktu          = $this->input->post('waktu');
        // $diagnosa_proteksi  = $this->input->post('diagnosa_proteksi');

    if ($nyeri == "Ada") {
        $diagnosa_nyeri = 'Nyeri Akut ';
    }else{ 
        $diagnosa_nyeri = 'Tidak Terdiagnosa Nyeri Akut';
    }

    if ($skala == "0") {
      $hasil = "Tidak Sakit";
    }elseif($skala == "2"){
      $hasil = "Sedikit Sakit";
    }elseif($skala == "4"){
      $hasil = "Agak Mengganggu";
    }elseif($skala == "6"){
      $hasil = "Mengganggu Aktivitas";
    }elseif($skala == "8"){
      $hasil = "Sangat Mengganggu";
    }elseif($skala == "10"){
      $hasil = "Tak Tertahankan";
    }

    $data = array(
        'id_anamnesis'     => $id_anamnesis,
        'nyeri'            => $nyeri,
        'deskripsi'        => $deskripsi,
        'lainnya'          => $lainnya,
        'quality'          => $quality,
        'region'           => $region,
        'menyebar'         => $menyebar,
        'skala'            => $skala,
        'hasil'            => $hasil,
        'waktu'            => $waktu,
        'diagnosa_nyeri'   => $diagnosa_nyeri,
    );

    $this->pasien_m->insert_data($data,'pengkajian_nyeri');
    $this->session->set_flashdata('flash', 'Ditambahkan');
    redirect('Ass/MasterPasien/nyeri/'.$id_anamnesis);
}



public function update_nyeri_aksi()
{
    check_not_login();

    $id_anamnesis   = $this->input->post('id_anamnesis');
    $id_nyeri       = $this->input->post('id_nyeri');
    $nyeri          = $this->input->post('nyeri');
    $deskripsi      = $this->input->post('deskripsi');
    $lainnya        = $this->input->post('lainnya');
    $quality        = $this->input->post('quality');
    $region         = $this->input->post('region');
    $menyebar       = $this->input->post('menyebar');
    $skala          = $this->input->post('skala');
    // $hasil          = $this->input->post('hasil');
    $waktu          = $this->input->post('waktu');

    if ($nyeri == "Ada") {
        $diagnosa_nyeri = 'Nyeri Akut ';
    }else{ 
        $diagnosa_nyeri = 'Tidak Terdiagnosa Nyeri Akut';
    }


    if ($skala == "0") {
      $hasil = "Tidak Sakit";
    }elseif($skala == "2"){
      $hasil = "Sedikit Sakit";
    }elseif($skala == "4"){
      $hasil = "Agak Mengganggu";
    }elseif($skala == "6"){
      $hasil = "Mengganggu Aktivitas";
    }elseif($skala == "8"){
      $hasil = "Sangat Mengganggu";
    }elseif($skala == "10"){
      $hasil = "Tak Tertahankan";
    }

    $data = array(
        'nyeri'            => $nyeri,
        'deskripsi'        => $deskripsi,
        'lainnya'          => $lainnya,
        'quality'          => $quality,
        'region'           => $region,
        'menyebar'         => $menyebar,
        'skala'            => $skala,
        'hasil'            => $hasil,
        'waktu'            => $waktu,
        'diagnosa_nyeri'   => $diagnosa_nyeri,
    );

    $where = array(
        'id_nyeri' => $id_nyeri
    );

    $this->pasien_m->update_data('pengkajian_nyeri',$data,$where);
    $this->session->set_flashdata('flash', 'Diupdate');
    redirect('Ass/MasterPasien/nyeri/'.$id_anamnesis);
}



public function detail_pasien($id)
{
    check_not_login();

    $data['anamnesis'] = $this->pasien_m->data_anamnesis($id);
    $data['detail'] = $this->pasien_m->get_id_pasien($id);
    $data['detailpasien'] = $this->pasien_m->get_data_pasien_personal($id);


    $data['title'] = " Data Pasien ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar',$data);
    $this->load->view('Masterpasien/v_data_detail_pasien',$data);
    $this->load->view('template/footer');
}


// public function detail_pasien($id)
// {
//     check_not_login();

//     $data['anamnesis'] = $this->pasien_m->data_anamnesis($id);
//     $data['detail'] = $this->pasien_m->get_id_pasien($id);
//     $data['detailpasien'] = $this->pasien_m->get_data_pasien_personal($id);


//     $data['title'] = " Data Pasien ";

//     $this->load->view('template/header');
//     $this->load->view('template/sidebar',$data);
//     $this->load->view('Masterpasien/v_data_detail_pasien',$data);
//     $this->load->view('template/footer');
// }


public function tekanandarah($idanamnesis)
{
    check_not_login();

    $data['detail'] = $this->pasien_m->detail_anamnesis($idanamnesis);
    $data['tekanan'] = $this->pasien_m->get_data_tekanandarah($idanamnesis);

    $data['title'] = " Data Tekanan Darah dan Suhu ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar',$data);
    $this->load->view('Masterpasien/v_tekanandarah',$data);
    $this->load->view('template/footer');
}



public function detail_anamnesis($idanamnesis)
{
    check_not_login();

    $data['anamnesis'] = $this->pasien_m->detail_anamnesis($idanamnesis);
    $data['detail'] = $this->pasien_m->get_id_anamnesis($idanamnesis);
    $data['da'] = $this->pasien_m->data_anamnesis($idanamnesis);

    $data['title'] = " Data Anamnesis ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar',$data);
    $this->load->view('Masterpasien/v_detail_anamnesis',$data);
    $this->load->view('template/footer');
}


public function detail_anamnesis2($idanamnesis)
{
    check_not_login();

    $data['anamnesis'] = $this->pasien_m->detail_anamnesis($idanamnesis);
    $data['detail'] = $this->pasien_m->get_id_anamnesis($idanamnesis);
    $data['da'] = $this->pasien_m->data_anamnesis($idanamnesis);

    $data['title'] = " Data Anamnesis ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar',$data);
    $this->load->view('Masterpasien/v_detail_anamnesis1',$data);
    $this->load->view('template/footer');
}


public function pemeriksaan($idanamnesis)
{
    check_not_login();

    $data['detail'] = $this->pasien_m->get_id_anamnesis($idanamnesis);
    $data['anamnesis'] = $this->pasien_m->detail_anamnesis($idanamnesis);
    $data['aaaa'] = $this->pasien_m->data_pemeriksaan($idanamnesis);

    $a = $this->pasien_m->cek($idanamnesis);

    if ($a != null) {
        $hasil = 0;
    }else{
        $hasil = 1;
    }

    $data['cek'] = $hasil;

    $data['title'] = " pemeriksaan Umum ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('Masterpasien/v_detail_pemeriksaan',$data);
    $this->load->view('template/footer');
}


public function update_pemeriksaan($idanamnesis)
{
    check_not_login();

        // $data['anamnesis'] = $this->pasien_m->get_anamnesis($idanamnesis);
    $data['detail'] = $this->pasien_m->get_id_anamnesis($idanamnesis);
    $data['pemeriksaan'] = $this->pasien_m->data_pemeriksaan($idanamnesis);

    $data['title'] = " Update Data Pemeriksaan Pasien ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar',$data);
    $this->load->view('Masterpasien/v_update_pemeriksaan',$data);
    $this->load->view('template/footer');
}




public function tambah_pemeriksaan($idanamnesis)
{
    check_not_login();

    $data['detail'] = $this->pasien_m->get_id_anamnesis($idanamnesis);
    $data['anamnesis'] = $this->pasien_m->detail_anamnesis($idanamnesis);
    $data['aaaa'] = $this->pasien_m->data_pemeriksaan($idanamnesis);

    $data['title'] = "tambah data pemeriksaan umum ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('Masterpasien/v_input_pemeriksaan',$data);
    $this->load->view('template/footer');
}


public function pernafasann($idanamnesis)
{
    check_not_login();

    $data['detail'] = $this->pasien_m->get_id_anamnesis($idanamnesis);

    $data['title'] = " Sistem Pernafasan ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar',$data);
    $this->load->view('Masterpasien/v_input_pernafasan',$data);
    $this->load->view('template/footer', [
            'js' => <<< JS
                $('#id-retraksi').change(function(e) {
                    e.preventDefault();
                    let elem = $(this);
                    let disableInput = elem.val() == 'Tidak';

                    $('#id-jenisretraksi').prop('disabled', disableInput);
                    // $('#id-jenisretraksi').prop('readonly', disableInput);
                });

                $('#id-alatbantu').change(function(e) {
                    e.preventDefault();
                    let elem = $(this);
                    let disableInput = elem.val() == 'Tidak Ada';

                    $('#id-alatbantulain').prop('disabled', disableInput);
                    // $('#id-alatbantulain').prop('readonly', disableInput);

                    $('#id-tekanan').prop('disabled', disableInput);
                    // $('#id-tekanan').prop('readonly', disableInput);
                });

                $('#id-wsd').change(function(e) {
                    e.preventDefault();
                    let elem = $(this);
                    let disableInput = elem.val() == 'Tidak';

                    $('#id-produksi').prop('disabled', disableInput);
                    // $('#id-produksi').prop('readonly', disableInput);
                });


                $('#id-kesulitannafas').change(function(e) {
                    e.preventDefault();
                    let elem = $(this);
                    let disableInput = elem.val() == 'Tidak';

                    $('#id-kesulitannafasya').prop('disabled', disableInput);
                    // $('#id-kesulitannafasya').prop('readonly', disableInput);

                    $('#id-saat').prop('disabled', disableInput);
                    // $('#id-saat').prop('readonly', disableInput);
                });

                $('#id-batuk').change(function(e) {
                    e.preventDefault();
                    let elem = $(this);
                    let disableInput = elem.val() == 'Tidak';

                    $('#id-batukya').prop('disabled', disableInput);
                    // $('#id-batukya').prop('readonly', disableInput);

                    $('#id-sputum').prop('disabled', disableInput);
                    // $('#id-sputum').prop('readonly', disableInput);
                });
            JS,
        ]);
}


public function pernafasan($idanamnesis)
{
    check_not_login();

    $data['detail'] = $this->pasien_m->get_id_anamnesis($idanamnesis);
    $data['anamnesis'] = $this->pasien_m->detail_anamnesis($idanamnesis);
    $data['aaaa'] = $this->pasien_m->data_pernafasan($idanamnesis);

    $a = $this->pasien_m->cek_pernafasan($idanamnesis);

    if ($a != null) {
        $hasil = 0;
    }else{
        $hasil = 1;
    }

    $data['cek'] = $hasil;

    $data['title'] = " Sistem Pernafasan ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('Masterpasien/v_detail_pernafasan',$data);
    $this->load->view('template/footer');
}


public function update_pernafasan($idanamnesis)
{
    check_not_login();

    $data['detail'] = $this->pasien_m->get_id_anamnesis($idanamnesis);
    $data['anamnesis'] = $this->pasien_m->detail_anamnesis($idanamnesis);
    $data['pernafasan'] = $this->pasien_m->data_pernafasan($idanamnesis);

    $data['title'] = " Sistem Pernafasan ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar',$data);
    $this->load->view('Masterpasien/v_update_pernafasan',$data);
    $this->load->view('template/footer');
}


public function hasil($idanamnesis)
{
    check_not_login();

    $data['detail'] = $this->pasien_m->get_id_anamnesis($idanamnesis);
    $data['hasil_nafas'] = $this->pasien_m->hasil_pernafasan($idanamnesis);
    $data['hasil_mol'] = $this->pasien_m->hasil_mol($idanamnesis);
    $data['hasil_proteksi'] = $this->pasien_m->hasil_proteksi($idanamnesis);
    $data['hasil_nyeri'] = $this->pasien_m->hasil_nyeri($idanamnesis);
    $data['anamnesis'] = $this->pasien_m->detail_anamnesis($idanamnesis);

    $nafas = $this->pasien_m->cek_intervensipersafasan($idanamnesis);
    if ($nafas != null) {
        $hasil = 1;
    }else{
        $hasil = 0;
    }
    $data['nafas'] = $hasil;


    $kn = $this->pasien_m->cek_kriteriapersafasan($idanamnesis);
    if ($kn != null) {
        $hasilkn = 1;
    }else{
        $hasilkn = 0;
    }
    $data['kn'] = $hasilkn;


    $sistemnafas = $this->pasien_m->cek_sistempersafasan($idanamnesis);
    if ($sistemnafas != null) {
        $hasilnafas = 1;
    }else{
        $hasilnafas = 0;
    }
    $data['sistemnafas'] = $hasilnafas;


    $sistemmol = $this->pasien_m->cek_sistemmol($idanamnesis);
    if ($sistemmol != null) {
        $hasilmol = 1;
    }else{
        $hasilmol = 0;
    }
    $data['sistemmol'] = $hasilmol;


    $mol = $this->pasien_m->cek_intervensimos($idanamnesis);
    if ($mol != null) {
        $hasmol = 1;
    }else{
        $hasmol = 0;
    }
    $data['mol'] = $hasmol;

    
    $kmol = $this->pasien_m->cek_kriteriamol($idanamnesis);
    if ($kmol != null) {
        $hamol = 1;
    }else{
        $hamol = 0;
    }
    $data['kmol'] = $hamol;


    $sistempro = $this->pasien_m->cek_sistempro($idanamnesis);
    if ($sistempro != null) {
        $aa = 1;
    }else{
        $aa = 0;
    }
    $data['sistempro'] = $aa;


    $pro = $this->pasien_m->cek_intervensipro($idanamnesis);
    if ($pro != null) {
        $bb = 1;
    }else{
        $bb = 0;
    }
    $data['pro'] = $bb;


    $kpro = $this->pasien_m->cek_kriteriapro($idanamnesis);
    if ($kpro != null) {
        $cc = 1;
    }else{
        $cc = 0;
    }
    $data['kpro'] = $cc;


    $sistemnyeri = $this->pasien_m->cek_sistemnyeri($idanamnesis);
    if ($sistemnyeri != null) {
        $dd = 1;
    }else{
        $dd = 0;
    }
    $data['sistemnyeri'] = $dd;

    $nyeri = $this->pasien_m->cek_intervensinyeri($idanamnesis);
    if ($nyeri != null) {
        $ee = 1;
    }else{
        $ee = 0;
    }
    $data['nyeri'] = $ee;

    $knyeri = $this->pasien_m->cek_kriterianyeri($idanamnesis);
    if ($knyeri != null) {
        $ff = 1;
    }else{
        $ff = 0;
    }
    $data['knyeri'] = $ff;


    $data['nafass'] = $this->pasien_m->intervensi_nafas($idanamnesis);
    $data['kriterianafas'] = $this->pasien_m->kriteria_nafas($idanamnesis);
    $data['moll'] = $this->pasien_m->intervensi_mol($idanamnesis);
    $data['kriteriamoll'] = $this->pasien_m->kriteria_mol($idanamnesis);
    $data['protek'] = $this->pasien_m->intervensi_proteksi($idanamnesis);
    $data['kriteriapro'] = $this->pasien_m->kriteria_pro($idanamnesis);
    $data['nyerii'] = $this->pasien_m->intervensi_nyeri($idanamnesis);
    $data['kriterianyeri'] = $this->pasien_m->kriteria_nyeri($idanamnesis);

    $data['title'] = " Hasil Diagnosa ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('Masterpasien/v_hasil_diagnosa',$data);
    $this->load->view('template/footer');
}


public function evaluasi($idanamnesis)
{
    check_not_login();

    $data['title'] = " Evaluasi ";

    $data['detail'] = $this->pasien_m->get_id_anamnesis($idanamnesis);
    $data['anamnesis'] = $this->pasien_m->detail_anamnesis($idanamnesis);
    $data['hevaluasi'] = $this->pasien_m->get_data_soap($idanamnesis);

    $data['hasil_nafas'] = $this->pasien_m->hasil_pernafasan($idanamnesis);
    $data['hasil_mol'] = $this->pasien_m->hasil_mol($idanamnesis);
    $data['hasil_proteksi'] = $this->pasien_m->hasil_proteksi($idanamnesis);
    $data['hasil_nyeri'] = $this->pasien_m->hasil_nyeri($idanamnesis);

    $nafas = $this->pasien_m->cek_intervensipersafasan($idanamnesis);
    if ($nafas != null) {
        $hasil = 1;
    }else{
        $hasil = 0;
    }
    $data['nafas'] = $hasil;


    $kn = $this->pasien_m->cek_kriteriapersafasan($idanamnesis);
    if ($kn != null) {
        $hasilkn = 1;
    }else{
        $hasilkn = 0;
    }
    $data['kn'] = $hasilkn;


    $sistemnafas = $this->pasien_m->cek_sistempersafasan($idanamnesis);
    if ($sistemnafas != null) {
        $hasilnafas = 1;
    }else{
        $hasilnafas = 0;
    }
    $data['sistemnafas'] = $hasilnafas;


    $sistemmol = $this->pasien_m->cek_sistemmol($idanamnesis);
    if ($sistemmol != null) {
        $hasilmol = 1;
    }else{
        $hasilmol = 0;
    }
    $data['sistemmol'] = $hasilmol;


    $mol = $this->pasien_m->cek_intervensimos($idanamnesis);
    if ($mol != null) {
        $hasmol = 1;
    }else{
        $hasmol = 0;
    }
    $data['mol'] = $hasmol;

    
    $kmol = $this->pasien_m->cek_kriteriamol($idanamnesis);
    if ($kmol != null) {
        $hamol = 1;
    }else{
        $hamol = 0;
    }
    $data['kmol'] = $hamol;


    $sistempro = $this->pasien_m->cek_sistempro($idanamnesis);
    if ($sistempro != null) {
        $aa = 1;
    }else{
        $aa = 0;
    }
    $data['sistempro'] = $aa;


    $pro = $this->pasien_m->cek_intervensipro($idanamnesis);
    if ($pro != null) {
        $bb = 1;
    }else{
        $bb = 0;
    }
    $data['pro'] = $bb;


    $kpro = $this->pasien_m->cek_kriteriapro($idanamnesis);
    if ($kpro != null) {
        $cc = 1;
    }else{
        $cc = 0;
    }
    $data['kpro'] = $cc;


    $sistemnyeri = $this->pasien_m->cek_sistemnyeri($idanamnesis);
    if ($sistemnyeri != null) {
        $dd = 1;
    }else{
        $dd = 0;
    }
    $data['sistemnyeri'] = $dd;

    $nyeri = $this->pasien_m->cek_intervensinyeri($idanamnesis);
    if ($nyeri != null) {
        $ee = 1;
    }else{
        $ee = 0;
    }
    $data['nyeri'] = $ee;

    $knyeri = $this->pasien_m->cek_kriterianyeri($idanamnesis);
    if ($knyeri != null) {
        $ff = 1;
    }else{
        $ff = 0;
    }
    $data['knyeri'] = $ff;


    $data['nafass'] = $this->pasien_m->intervensi_nafas($idanamnesis);
    $data['kriterianafas'] = $this->pasien_m->kriteria_nafas($idanamnesis);
    $data['moll'] = $this->pasien_m->intervensi_mol($idanamnesis);
    $data['kriteriamoll'] = $this->pasien_m->kriteria_mol($idanamnesis);
    $data['protek'] = $this->pasien_m->intervensi_proteksi($idanamnesis);
    $data['kriteriapro'] = $this->pasien_m->kriteria_pro($idanamnesis);
    $data['nyerii'] = $this->pasien_m->intervensi_nyeri($idanamnesis);
    $data['kriterianyeri'] = $this->pasien_m->kriteria_nyeri($idanamnesis);

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('Masterpasien/v_evaluasi',$data);
    $this->load->view('template/footer');
}


public function grafik($idanamnesis)
{
    check_not_login();

    $data['title'] = " Dashboard ";

    $data['detail'] = $this->pasien_m->get_id_anamnesis($idanamnesis);
    $data['anamnesis'] = $this->pasien_m->detail_anamnesis($idanamnesis);


    $yes = $this->pasien_m->get_data_grafik($idanamnesis);
    $data['yes'] = array_column($yes, 'nadi');


    $suhu = $this->pasien_m->get_data_grafik_suhu($idanamnesis);
    $data['suhuy'] = array_column($suhu, 'suhu');

    $waktu = $this->pasien_m->get_data_grafik_waktu($idanamnesis);
    $data['waktuy'] = array_column($waktu, 'create_at');

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('Masterpasien/v_grafik',$data);
    $this->load->view('template/footer_grafik',$data);
}


public function moskuloskelentall($idanamnesis)
{
    check_not_login();

    $data['detail'] = $this->pasien_m->get_id_anamnesis($idanamnesis);

    $data['title'] = " Sistem Moskuloskelental ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar',$data);
    $this->load->view('Masterpasien/v_input_moskuloskelental',$data);
    $this->load->view('template/footer', [
            'js' => <<< JS
                $('#id-fraktur').change(function(e) {
                    e.preventDefault();
                    let elem = $(this);
                    let disableInput = elem.val() == 'Tidak';

                    $('#id_lokasi').prop('disabled', disableInput);
                    // $('#id-fraktur').prop('readonly', disableInput);
                });
            JS,
        ]);
}


public function update_moskuloskelental($idanamnesis)
{
    check_not_login();

    $data['detail'] = $this->pasien_m->get_id_anamnesis($idanamnesis);
    $data['anamnesis'] = $this->pasien_m->detail_anamnesis($idanamnesis);
    $data['mos'] = $this->pasien_m->data_moskuloskelental($idanamnesis);

    $data['title'] = " Sistem Moskuloskelental ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar',$data);
    $this->load->view('Masterpasien/v_update_moskuloskelental',$data);
    $this->load->view('template/footer');
}


public function moskuloskelental($idanamnesis)
{
    check_not_login();

    $data['detail'] = $this->pasien_m->get_id_anamnesis($idanamnesis);
    $data['anamnesis'] = $this->pasien_m->detail_anamnesis($idanamnesis);
    $data['aaaa'] = $this->pasien_m->data_moskuloskelental($idanamnesis);

    $a = $this->pasien_m->cek_moskuloskelental($idanamnesis);

    if ($a != null) {
        $hasil = 0;
    }else{
        $hasil = 1;
    }

    $data['cek'] = $hasil;

    $data['title'] = " Sistem Moskuloskelental ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('Masterpasien/v_detail_moskuloskelental',$data);
    $this->load->view('template/footer');
}


public function proteksii($idanamnesis)
{
    check_not_login();

    $data['detail'] = $this->pasien_m->get_id_anamnesis($idanamnesis);

    $data['title'] = " Proteksi dan Perlindungan ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('Masterpasien/v_input_proteksi',$data);
    $this->load->view('template/footer', [
            'js' => <<< JS
                $('#id-luka').change(function(e) {
                    e.preventDefault();
                    let elem = $(this);
                    let disableInput = elem.val() == 'Tidak';

                    $('#id-lokasi').prop('disabled', disableInput);
                    // $('#id-lokasi').prop('readonly', disableInput);

                    $('#id-kondisi').prop('disabled', disableInput);
                    // $('#id-kondisi').prop('readonly', disableInput);

                    $('#id-kebersihan').prop('disabled', disableInput);
                    // $('#id-kebersihan').prop('readonly', disableInput);
                });

                $('#id-alergi').change(function(e) {
                    e.preventDefault();
                    let elem = $(this);
                    let disableInput = elem.val() == 'Tidak';

                    $('#id-jenis').prop('disabled', disableInput);
                    // $('#id-jenis').prop('readonly', disableInput);
                });
            JS,
        ]);
}


public function update_proteksi($idanamnesis)
{
    check_not_login();

    $data['detail'] = $this->pasien_m->get_id_anamnesis($idanamnesis);
    $data['anamnesis'] = $this->pasien_m->detail_anamnesis($idanamnesis);
    $data['proteksi'] = $this->pasien_m->data_proteksi($idanamnesis);

    $data['title'] = " Proteksi dan Perlindungan ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('Masterpasien/v_update_proteksi',$data);
    $this->load->view('template/footer');
}


public function proteksi($idanamnesis)
{
    check_not_login();

    $data['detail'] = $this->pasien_m->get_id_anamnesis($idanamnesis);
    $data['anamnesis'] = $this->pasien_m->detail_anamnesis($idanamnesis);
    $data['aaaa'] = $this->pasien_m->data_proteksi($idanamnesis);

    $a = $this->pasien_m->cek_proteksi($idanamnesis);

    if ($a != null) {
        $hasil = 0;
    }else{
        $hasil = 1;
    }

    $data['cek'] = $hasil;

    $data['title'] = " Sistem Proteksi ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('Masterpasien/v_detail_proteksi',$data);
    $this->load->view('template/footer');
}


public function add_nyeri($idanamnesis)
{
    check_not_login();

    $data['detail'] = $this->pasien_m->get_id_anamnesis($idanamnesis);

    $data['title'] = " Pengkajian Nyeri ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('Masterpasien/v_input_nyeri',$data);
     $this->load->view('template/footer', [
            'js' => <<< JS
                $('#id-nyeri').change(function(e) {
                    e.preventDefault();
                    let elem = $(this);
                    let disableInput = elem.val() == 'Tidak';

                    $('#id-deskripsi').prop('disabled', disableInput);
                    // $('#id-deskripsi').prop('readonly', disableInput);

                    $('#id-lainnya').prop('disabled', disableInput);
                    // $('#id-lainnya').prop('readonly', disableInput);

                    $('#id-quality').prop('disabled', disableInput);
                    // $('#id-quality').prop('readonly', disableInput);

                    $('#id-region').prop('disabled', disableInput);
                    // $('#id-region').prop('readonly', disableInput);

                    $('#id-menyebar').prop('disabled', disableInput);
                    // $('#id-menyebar').prop('readonly', disableInput);

                    $('#id-skala').prop('disabled', disableInput);
                    // $('#id-skala').prop('readonly', disableInput);

                    $('#id-waktu').prop('disabled', disableInput);
                    // $('#id-waktu').prop('readonly', disableInput);
                });
            JS,
        ]);
}


public function update_nyeri($idanamnesis)
{
    check_not_login();

    $data['detail'] = $this->pasien_m->get_id_anamnesis($idanamnesis);
    $data['anamnesis'] = $this->pasien_m->detail_anamnesis($idanamnesis);
    $data['nyeri'] = $this->pasien_m->data_nyeri($idanamnesis);

    $data['title'] = " Pengkajian Nyeri ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('Masterpasien/v_update_nyeri',$data);
    $this->load->view('template/footer');
}


public function nyeri($idanamnesis)
{
    check_not_login();

    $data['detail'] = $this->pasien_m->get_id_anamnesis($idanamnesis);
    $data['anamnesis'] = $this->pasien_m->detail_anamnesis($idanamnesis);
    $data['aaaa'] = $this->pasien_m->data_nyeri($idanamnesis);

    $a = $this->pasien_m->cek_nyeri($idanamnesis);

    if ($a != null) {
        $hasil = 0;
    }else{
        $hasil = 1;
    }

    $data['cek'] = $hasil;

    $data['title'] = " Pengkajian Nyeri ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('Masterpasien/v_detail_nyeri',$data);
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
    $this->load->view('Masterpasien/v_data_riwayat_pasien',$data);
    $this->load->view('template/footer');
}


public function tambah_tekanandarah()
{
    $id_anamnesis   = $this->input->post('id_anamnesis');
    $tensi           = $this->input->post('tensi');
    $nadi           = $this->input->post('nadi');
    $suhu           = $this->input->post('suhu');


    $data = array(
        'id_anamnesis'  => $id_anamnesis,
        'tensi'          => $tensi,
        'nadi'          => $nadi,
        'suhu'          => $suhu,
    );

    $this->pasien_m->insert_data($data,'grafik');
    $this->session->set_flashdata('flash', 'Ditambahkan');
    redirect('Ass/MasterPasien/tekanandarah/'.$id_anamnesis);  
}


public function tambah_evaluasi()
{
    $id_anamnesis   = $this->input->post('id_anamnesis');
    $s              = $this->input->post('s');
    $o              = $this->input->post('o');


    $data = array(
        'id_anamnesis'  => $id_anamnesis,
        's'             => $s,
        'o'             => $o,
    );

    $this->pasien_m->insert_data($data,'soap');
    $this->session->set_flashdata('flash', 'Ditambahkan');
    redirect('Ass/MasterPasien/evaluasi/'.$id_anamnesis);  
}



public function update_evaluasi()
{
    $id_anamnesis   = $this->input->post('id_anamnesis');
    $id_soap        = $this->input->post('id_soap');
    $id_grafik      = $this->input->post('id_grafik');
    $s              = $this->input->post('s');
    $o              = $this->input->post('o');

    $data = array(
        's'             => $s,
        'o'             => $o,
    );

    $where = array(
        'id_soap' => $id_soap
    );

    $this->pasien_m->update_data('soap',$data,$where);
    $this->session->set_flashdata('flash', 'Diupdate');
    redirect('Ass/MasterPasien/evaluasi/'.$id_anamnesis);  
}


public function update_tekanandarah()
{
    $id_anamnesis   = $this->input->post('id_anamnesis');
    $id_grafik      = $this->input->post('id_grafik');
    $tensi           = $this->input->post('tensi');
    $nadi           = $this->input->post('nadi');
    $suhu           = $this->input->post('suhu');

    $data = array(
        'tensi'          => $tensi,
        'nadi'          => $nadi,
        'suhu'          => $suhu,
    );

    $where = array(
        'id_grafik' => $id_grafik
    );

    $this->pasien_m->update_data('grafik',$data,$where);
    $this->session->set_flashdata('flash', 'Diupdate');
    redirect('Ass/MasterPasien/tekanandarah/'.$id_anamnesis);  
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

    $this->pasien_m->insert_data($data,'data_pasien');
    $this->session->set_flashdata('flash', 'Ditambahkan');
    redirect('Ass/MasterPasien');  
}



public function tambah_intervensi()
{
    $id_anamnesis   = $this->input->post('id_anamnesis');
    $id_pernafasan  = $this->input->post('id_pernafasan');
    $satu           = $this->input->post('satu');
    $dua            = $this->input->post('dua');
    $tiga           = $this->input->post('tiga');
    $empat          = $this->input->post('empat');
    $lima           = $this->input->post('lima');
    $enam           = $this->input->post('enam');
    $tujuh          = $this->input->post('tujuh');
    $delapan        = $this->input->post('delapan');
    $sembilan       = $this->input->post('sembilan');
    $sepuluh        = $this->input->post('sepuluh');
    $sebelas        = $this->input->post('sebelas');
    $duabelas       = $this->input->post('duabelas');
    $tigabelas      = $this->input->post('tigabelas');
    $empatbelas     = $this->input->post('empatbelas');

    $data = array(
        'id_anamnesis'     => $id_anamnesis,
        'id_pernafasan'    => $id_pernafasan,
        'satu'             => $satu,
        'dua'              => $dua,
        'tiga'             => $tiga,
        'empat'            => $empat,
        'lima'             => $lima,
        'enam'             => $enam,
        'tujuh'            => $tujuh,
        'delapan'          => $delapan,
        'sembilan'         => $sembilan,
        'sepuluh'          => $sepuluh,
        'sebelas'          => $sebelas,
        'duabelas'         => $duabelas,
        'tigabelas'        => $tigabelas,
        'empatbelas'       => $empatbelas,
    );

    $this->pasien_m->insert_data($data,'intervensi_pernafasan');
    $this->session->set_flashdata('flash', 'Ditambahkan');
    redirect('Ass/MasterPasien/hasil/'.$id_anamnesis);
}


public function tambah_kriteriapernafasan()
{
    $id_anamnesis   = $this->input->post('id_anamnesis');
    $id_pernafasan  = $this->input->post('id_pernafasan');
    $satu           = $this->input->post('satu');
    $dua            = $this->input->post('dua');
    $tiga           = $this->input->post('tiga');
    $empat          = $this->input->post('empat');
    $lima           = $this->input->post('lima');
    $enam           = $this->input->post('enam');
    $tujuh          = $this->input->post('tujuh');
    $delapan        = $this->input->post('delapan');
    $sembilan       = $this->input->post('sembilan');
    $sepuluh        = $this->input->post('sepuluh');

    $data = array(
        'id_anamnesis'     => $id_anamnesis,
        'id_pernafasan'    => $id_pernafasan,
        'satu'             => $satu,
        'dua'              => $dua,
        'tiga'             => $tiga,
        'empat'            => $empat,
        'lima'             => $lima,
        'enam'             => $enam,
        'tujuh'            => $tujuh,
        'delapan'          => $delapan,
        'sembilan'         => $sembilan,
        'sepuluh'          => $sepuluh,
    );

    $this->pasien_m->insert_data($data,'kriteria_pernafasan');
    $this->session->set_flashdata('flash', 'Ditambahkan');
    redirect('Ass/MasterPasien/hasil/'.$id_anamnesis);
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

    $this->pasien_m->update_data('data_pasien',$data,$where);
    $this->session->set_flashdata('flash', 'Diupdate');
    redirect('Ass/MasterPasien/detail_pasien/'.$id_pasien);
}


public function delete_tekanandarah($id)
{
    $asdf = $this->pasien_m->get_data_tkd_by_id($id)->id_anamnesis;

    $where = array('id_grafik' => $id);

    $this->pasien_m->delete_data($where, 'grafik');
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('Ass/MasterPasien/tekanandarah/'.$asdf);
}



public function delete_soap($id)
{
    $asdf = $this->pasien_m->get_data_soap_by_id($id)->id_anamnesis;

    $where = array('id_soap' => $id);

    $this->pasien_m->delete_data($where, 'soap');
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('Ass/MasterPasien/evaluasi/'.$asdf);
}




public function update_intervensipernafasan($id)
{
    check_not_login();

    $data['detail'] = $this->pasien_m->get_data_innafas_by_id($id);
        // $data['innafas'] = $this->pasien_m->show_innafas($id);

    $data['title'] = " Update Intervensi Pernafasan ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('Masterpasien/v_update_innafas',$data);
    $this->load->view('template/footer');
}


public function update_intervensinyeri($id)
{
    check_not_login();

    $data['detail'] = $this->pasien_m->get_data_innyeri_by_id($id);

    $data['title'] = " Update Intervensi Nyeri ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('Masterpasien/v_update_innyeri',$data);
    $this->load->view('template/footer');
}


public function update_kriteriapernafasan($id)
{
    check_not_login();

    $data['detail'] = $this->pasien_m->get_data_kriterianafas_by_id($id);

    $data['title'] = " Update Kriteria Pernafasan ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('Masterpasien/v_update_kriterianafas',$data);
    $this->load->view('template/footer');
}


public function update_kriterianyeri($id)
{
    check_not_login();

    $data['detail'] = $this->pasien_m->get_data_kriterianyeri_by_id($id);

    $data['title'] = " Update Kriteria Nyeri ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('Masterpasien/v_update_kriterianyeri',$data);
    $this->load->view('template/footer');
}


public function update_intervensimol($id)
{
    check_not_login();

    $data['detail'] = $this->pasien_m->get_data_inmos_by_id($id);

    $data['title'] = " Update Intervensi Moskuloskeletal ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('Masterpasien/v_update_intervensimol',$data);
    $this->load->view('template/footer');
}


public function update_kriteriamol($id)
{
    check_not_login();

    $data['detail'] = $this->pasien_m->get_data_kriteriamol_by_id($id);

    $data['title'] = " Update Kriteria Hasil Moskuloskeletal ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('Masterpasien/v_update_kriteriamol',$data);
    $this->load->view('template/footer');
}


public function update_kriteriapro($id)
{
    check_not_login();

    $data['detail'] = $this->pasien_m->get_data_kriteriapro_by_id($id);

    $data['title'] = " Update Kriteria Hasil Proteksi ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('Masterpasien/v_update_kriteriapro',$data);
    $this->load->view('template/footer');
}



public function update_intervensipro($id)
{
    check_not_login();

    $data['detail'] = $this->pasien_m->get_data_inpro_by_id($id);

    $data['title'] = " Update Intervensi Proteksi ";

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('Masterpasien/v_update_intervensipro',$data);
    $this->load->view('template/footer');
}


public function update_intervensi_aksi()
{
    $id_anamnesis   = $this->input->post('id_anamnesis');
    $id_ip          = $this->input->post('id_ip');
    $satu           = $this->input->post('satu');
    $dua            = $this->input->post('dua');
    $tiga           = $this->input->post('tiga');
    $empat          = $this->input->post('empat');
    $lima           = $this->input->post('lima');
    $enam           = $this->input->post('enam');
    $tujuh          = $this->input->post('tujuh');
    $delapan        = $this->input->post('delapan');
    $sembilan       = $this->input->post('sembilan');
    $sepuluh        = $this->input->post('sepuluh');
    $sebelas        = $this->input->post('sebelas');
    $duabelas       = $this->input->post('duabelas');
    $tigabelas      = $this->input->post('tigabelas');
    $empatbelas     = $this->input->post('empatbelas');

    $data = array(
        'satu'             => $satu,
        'dua'              => $dua,
        'tiga'             => $tiga,
        'empat'            => $empat,
        'lima'             => $lima,
        'enam'             => $enam,
        'tujuh'            => $tujuh,
        'delapan'          => $delapan,
        'sembilan'         => $sembilan,
        'sepuluh'          => $sepuluh,
        'sebelas'          => $sebelas,
        'duabelas'         => $duabelas,
        'tigabelas'        => $tigabelas,
        'empatbelas'       => $empatbelas,
    );


    $where = array(
        'id_ip'     => $id_ip
    );

    $this->pasien_m->update_data('intervensi_pernafasan',$data,$where);
    $this->session->set_flashdata('flash', 'Diupdate');
    redirect('Ass/MasterPasien/hasil/'.$id_anamnesis);
}


public function update_kriteriapro_aksi()
{
    $id_anamnesis           = $this->input->post('id_anamnesis');
    $id_kriteriaproteksi    = $this->input->post('id_kriteriaproteksi');
    $satu                   = $this->input->post('satu');
    $dua                    = $this->input->post('dua');
    $tiga                   = $this->input->post('tiga');
    $empat                  = $this->input->post('empat');
    $lima                   = $this->input->post('lima');
    $enam                   = $this->input->post('enam');
    $tujuh                  = $this->input->post('tujuh');
    $delapan                = $this->input->post('delapan');
    $sembilan               = $this->input->post('sembilan');
    $sepuluh                = $this->input->post('sepuluh');
    $sebelas                = $this->input->post('sebelas');
    $duabelas               = $this->input->post('duabelas');
    $tigabelas              = $this->input->post('tigabelas');
    $empatbelas             = $this->input->post('empatbelas');
    $limabelas              = $this->input->post('limabelas');
    $enambelas              = $this->input->post('enambelas');
    $tujuhbelas             = $this->input->post('tujuhbelas');

    $data = array(
        'satu'             => $satu,
        'dua'              => $dua,
        'tiga'             => $tiga,
        'empat'            => $empat,
        'lima'             => $lima,
        'enam'             => $enam,
        'tujuh'            => $tujuh,
        'delapan'          => $delapan,
        'sembilan'         => $sembilan,
        'sepuluh'          => $sepuluh,
        'sebelas'          => $sebelas,
        'duabelas'         => $duabelas,
        'tigabelas'        => $tigabelas,
        'empatbelas'       => $empatbelas,
        'limabelas'        => $limabelas,
        'enambelas'        => $enambelas,
        'tujuhbelas'       => $tujuhbelas,
    );

    $where = array(
        'id_kriteriaproteksi'     => $id_kriteriaproteksi
    );

    $this->pasien_m->update_data('kriteria_proteksi',$data,$where);
    $this->session->set_flashdata('flash', 'Diupdate');
    redirect('Ass/MasterPasien/hasil/'.$id_anamnesis);
}


    public function update_kriterianfas_aksi()
    {
        $id_anamnesis       = $this->input->post('id_anamnesis');
        $id_kriterianafas   = $this->input->post('id_kriterianafas');
        $satu               = $this->input->post('satu');
        $dua                = $this->input->post('dua');
        $tiga               = $this->input->post('tiga');
        $empat              = $this->input->post('empat');
        $lima               = $this->input->post('lima');
        $enam               = $this->input->post('enam');
        $tujuh              = $this->input->post('tujuh');
        $delapan            = $this->input->post('delapan');
        $sembilan           = $this->input->post('sembilan');
        $sepuluh            = $this->input->post('sepuluh');

        $data = array(
            'satu'             => $satu,
            'dua'              => $dua,
            'tiga'             => $tiga,
            'empat'            => $empat,
            'lima'             => $lima,
            'enam'             => $enam,
            'tujuh'            => $tujuh,
            'delapan'          => $delapan,
            'sembilan'         => $sembilan,
            'sepuluh'          => $sepuluh,
        );


        $where = array(
            'id_kriterianafas'     => $id_kriterianafas
        );

        $this->pasien_m->update_data('kriteria_pernafasan',$data,$where);
        $this->session->set_flashdata('flash', 'Diupdate');
        redirect('Ass/MasterPasien/hasil/'.$id_anamnesis);
    }


    public function tambah_intervensimol()
    {
        $id_anamnesis           = $this->input->post('id_anamnesis');
        $id_moskuloskelental    = $this->input->post('id_moskuloskelental');
        $satu                   = $this->input->post('satu');
        $dua                    = $this->input->post('dua');
        $tiga                   = $this->input->post('tiga');
        $empat                  = $this->input->post('empat');
        $lima                   = $this->input->post('lima');
        $enam                   = $this->input->post('enam');
        $tujuh                  = $this->input->post('tujuh');
        $delapan                = $this->input->post('delapan');
        $sembilan               = $this->input->post('sembilan');

        $data = array(
            'id_anamnesis'          => $id_anamnesis,
            'id_moskuloskelental'   => $id_moskuloskelental,
            'satu'                  => $satu,
            'dua'                   => $dua,
            'tiga'                  => $tiga,
            'empat'                 => $empat,
            'lima'                  => $lima,
            'enam'                  => $enam,
            'tujuh'                 => $tujuh,
            'delapan'               => $delapan,
            'sembilan'              => $sembilan,
        );

        $this->pasien_m->insert_data($data,'intervensi_moskuloskelental');
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('Ass/MasterPasien/hasil/'.$id_anamnesis);
    }


    public function update_intervensimos_aksi()
    {
        $id_anamnesis   = $this->input->post('id_anamnesis');
        $id_imos        = $this->input->post('id_imos');
        $satu           = $this->input->post('satu');
        $dua            = $this->input->post('dua');
        $tiga           = $this->input->post('tiga');
        $empat          = $this->input->post('empat');
        $lima           = $this->input->post('lima');
        $enam           = $this->input->post('enam');
        $tujuh          = $this->input->post('tujuh');
        $delapan        = $this->input->post('delapan');
        $sembilan       = $this->input->post('sembilan');

        $data = array(
            'satu'             => $satu,
            'dua'              => $dua,
            'tiga'             => $tiga,
            'empat'            => $empat,
            'lima'             => $lima,
            'enam'             => $enam,
            'tujuh'            => $tujuh,
            'delapan'          => $delapan,
            'sembilan'         => $sembilan,
        );


        $where = array(
            'id_imos'     => $id_imos
        );

        $this->pasien_m->update_data('intervensi_moskuloskelental',$data,$where);
        $this->session->set_flashdata('flash', 'Diupdate');
        redirect('Ass/MasterPasien/hasil/'.$id_anamnesis);
    }


    public function tambah_kriteriamol()
    {
        $id_anamnesis           = $this->input->post('id_anamnesis');
        $id_moskuloskelental    = $this->input->post('id_moskuloskelental');
        $satu                   = $this->input->post('satu');
        $dua                    = $this->input->post('dua');
        $tiga                   = $this->input->post('tiga');
        $empat                  = $this->input->post('empat');
        $lima                   = $this->input->post('lima');
        $enam                   = $this->input->post('enam');
        $tujuh                  = $this->input->post('tujuh');
        $delapan                = $this->input->post('delapan');
        $sembilan               = $this->input->post('sembilan');

        $data = array(
            'id_anamnesis'          => $id_anamnesis,
            'id_moskuloskelental'   => $id_moskuloskelental,
            'satu'                  => $satu,
            'dua'                   => $dua,
            'tiga'                  => $tiga,
            'empat'                 => $empat,
            'lima'                  => $lima,
            'enam'                  => $enam,
            'tujuh'                 => $tujuh,
            'delapan'               => $delapan,
            'sembilan'              => $sembilan,
        );

        $this->pasien_m->insert_data($data,'kriteria_moskuloskelental');
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('Ass/MasterPasien/hasil/'.$id_anamnesis);
    }


    public function update_kriteriamol_aksi()
    {
        $id_anamnesis   = $this->input->post('id_anamnesis');
        $id_kriteriamos = $this->input->post('id_kriteriamos');
        $satu           = $this->input->post('satu');
        $dua            = $this->input->post('dua');
        $tiga           = $this->input->post('tiga');
        $empat          = $this->input->post('empat');
        $lima           = $this->input->post('lima');
        $enam           = $this->input->post('enam');
        $tujuh          = $this->input->post('tujuh');
        $delapan        = $this->input->post('delapan');
        $sembilan       = $this->input->post('sembilan');

        $data = array(
            'satu'             => $satu,
            'dua'              => $dua,
            'tiga'             => $tiga,
            'empat'            => $empat,
            'lima'             => $lima,
            'enam'             => $enam,
            'tujuh'            => $tujuh,
            'delapan'          => $delapan,
            'sembilan'         => $sembilan,
        );


        $where = array(
            'id_kriteriamos'     => $id_kriteriamos
        );

        $this->pasien_m->update_data('kriteria_moskuloskelental',$data,$where);
        $this->session->set_flashdata('flash', 'Diupdate');
        redirect('Ass/MasterPasien/hasil/'.$id_anamnesis);
    }


    public function tambah_intervensipro()
    {
        $id_anamnesis           = $this->input->post('id_anamnesis');
        $id_proteksi            = $this->input->post('id_proteksi');
        $satu                   = $this->input->post('satu');
        $dua                    = $this->input->post('dua');
        $tiga                   = $this->input->post('tiga');
        $empat                  = $this->input->post('empat');
        $lima                   = $this->input->post('lima');
        $enam                   = $this->input->post('enam');
        $tujuh                  = $this->input->post('tujuh');
        $delapan                = $this->input->post('delapan');
        $sembilan               = $this->input->post('sembilan');
        $sepuluh                = $this->input->post('sepuluh');
        $sebelas                = $this->input->post('sebelas');

        $data = array(
            'id_anamnesis'          => $id_anamnesis,
            'id_proteksi'           => $id_proteksi,
            'satu'                  => $satu,
            'dua'                   => $dua,
            'tiga'                  => $tiga,
            'empat'                 => $empat,
            'lima'                  => $lima,
            'enam'                  => $enam,
            'tujuh'                 => $tujuh,
            'delapan'               => $delapan,
            'sembilan'              => $sembilan,
            'sepuluh'               => $sepuluh,
            'sebelas'               => $sebelas,
        );

        $this->pasien_m->insert_data($data,'intervensi_proteksi');
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('Ass/MasterPasien/hasil/'.$id_anamnesis);
    }

    public function update_intervensipro_aksi()
    {
        $id_anamnesis   = $this->input->post('id_anamnesis');
        $id_ipro          = $this->input->post('id_ipro');
        $satu           = $this->input->post('satu');
        $dua            = $this->input->post('dua');
        $tiga           = $this->input->post('tiga');
        $empat          = $this->input->post('empat');
        $lima           = $this->input->post('lima');
        $enam           = $this->input->post('enam');
        $tujuh          = $this->input->post('tujuh');
        $delapan        = $this->input->post('delapan');
        $sembilan       = $this->input->post('sembilan');
        $sepuluh        = $this->input->post('sepuluh');
        $sebelas        = $this->input->post('sebelas');

        $data = array(
            'satu'             => $satu,
            'dua'              => $dua,
            'tiga'             => $tiga,
            'empat'            => $empat,
            'lima'             => $lima,
            'enam'             => $enam,
            'tujuh'            => $tujuh,
            'delapan'          => $delapan,
            'sembilan'         => $sembilan,
            'sepuluh'          => $sepuluh,
            'sebelas'          => $sebelas,
        );


        $where = array(
            'id_ipro'     => $id_ipro
        );

        $this->pasien_m->update_data('intervensi_proteksi',$data,$where);
        $this->session->set_flashdata('flash', 'Diupdate');
        redirect('Ass/MasterPasien/hasil/'.$id_anamnesis);
    }


    public function tambah_kriteriapro()
    {
        $id_anamnesis           = $this->input->post('id_anamnesis');
        $id_proteksi            = $this->input->post('id_proteksi');
        $satu                   = $this->input->post('satu');
        $dua                    = $this->input->post('dua');
        $tiga                   = $this->input->post('tiga');
        $empat                  = $this->input->post('empat');
        $lima                   = $this->input->post('lima');
        $enam                   = $this->input->post('enam');
        $tujuh                  = $this->input->post('tujuh');
        $delapan                = $this->input->post('delapan');
        $sembilan               = $this->input->post('sembilan');
        $sepuluh                = $this->input->post('sembilan');
        $sebelas                = $this->input->post('sebelas');
        $duabelas               = $this->input->post('duabelas');
        $tigabelas              = $this->input->post('tigabelas');
        $empatbelas             = $this->input->post('empatbelas');
        $limabelas              = $this->input->post('limabelas');
        $enambelas              = $this->input->post('enambelas');
        $tujuhbelas             = $this->input->post('tujuhbelas');

        $data = array(
            'id_anamnesis'          => $id_anamnesis,
            'id_proteksi'           => $id_proteksi,
            'satu'                  => $satu,
            'dua'                   => $dua,
            'tiga'                  => $tiga,
            'empat'                 => $empat,
            'lima'                  => $lima,
            'enam'                  => $enam,
            'tujuh'                 => $tujuh,
            'delapan'               => $delapan,
            'sembilan'              => $sembilan,
            'sepuluh'               => $sepuluh,
            'sebelas'               => $sebelas,
            'duabelas'              => $duabelas,
            'tigabelas'             => $tigabelas,
            'empatbelas'            => $empatbelas,
            'limabelas'             => $limabelas,
            'enambelas'             => $enambelas,
            'tujuhbelas'            => $tujuhbelas,
        );

        $this->pasien_m->insert_data($data,'kriteria_proteksi');
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('Ass/MasterPasien/hasil/'.$id_anamnesis);
    }


    public function tambah_intervensinyeri()
    {
        $id_anamnesis   = $this->input->post('id_anamnesis');
        $id_nyeri       = $this->input->post('id_nyeri');
        $satu           = $this->input->post('satu');
        $dua            = $this->input->post('dua');
        $tiga           = $this->input->post('tiga');
        $empat          = $this->input->post('empat');
        $lima           = $this->input->post('lima');
        $enam           = $this->input->post('enam');
        $tujuh          = $this->input->post('tujuh');
        $delapan        = $this->input->post('delapan');
        $sembilan       = $this->input->post('sembilan');
        $sepuluh        = $this->input->post('sepuluh');
        $sebelas        = $this->input->post('sebelas');
        $duabelas       = $this->input->post('duabelas');
        $tigabelas      = $this->input->post('tigabelas');
        $empatbelas     = $this->input->post('empatbelas');
        $limabelas     = $this->input->post('limabelas');
        $enambelas     = $this->input->post('enambelas');
        $tujuhbelas     = $this->input->post('tujuhbelas');
        $delapanbelas     = $this->input->post('delapanbelas');
        $sembilanbelas     = $this->input->post('sembilanbelas');

        $data = array(
            'id_anamnesis'     => $id_anamnesis,
            'id_nyeri'         => $id_nyeri,
            'satu'             => $satu,
            'dua'              => $dua,
            'tiga'             => $tiga,
            'empat'            => $empat,
            'lima'             => $lima,
            'enam'             => $enam,
            'tujuh'            => $tujuh,
            'delapan'          => $delapan,
            'sembilan'         => $sembilan,
            'sepuluh'          => $sepuluh,
            'sebelas'          => $sebelas,
            'duabelas'         => $duabelas,
            'tigabelas'        => $tigabelas,
            'empatbelas'       => $empatbelas,
            'limabelas'       => $limabelas,
            'enambelas'       => $enambelas,
            'tujuhbelas'       => $tujuhbelas,
            'delapanbelas'       => $delapanbelas,
            'sembilanbelas'       => $sembilanbelas,
        );

        $this->pasien_m->insert_data($data,'intervensi_nyeri');
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('Ass/MasterPasien/hasil/'.$id_anamnesis);
    }




    public function update_intervensinyeri_aksi()
    {
        $id_anamnesis   = $this->input->post('id_anamnesis');
        $id_inyeri      = $this->input->post('id_inyeri');
        $satu           = $this->input->post('satu');
        $dua            = $this->input->post('dua');
        $tiga           = $this->input->post('tiga');
        $empat          = $this->input->post('empat');
        $lima           = $this->input->post('lima');
        $enam           = $this->input->post('enam');
        $tujuh          = $this->input->post('tujuh');
        $delapan        = $this->input->post('delapan');
        $sembilan       = $this->input->post('sembilan');
        $sepuluh        = $this->input->post('sepuluh');
        $sebelas        = $this->input->post('sebelas');
        $duabelas       = $this->input->post('duabelas');
        $tigabelas      = $this->input->post('tigabelas');
        $empatbelas     = $this->input->post('empatbelas');
        $limabelas     = $this->input->post('limabelas');
        $enambelas     = $this->input->post('enambelas');
        $tujuhbelas     = $this->input->post('tujuhbelas');
        $delapanbelas     = $this->input->post('delapanbelas');
        $sembilanbelas     = $this->input->post('sembilanbelas');

        $data = array(
            'satu'             => $satu,
            'dua'              => $dua,
            'tiga'             => $tiga,
            'empat'            => $empat,
            'lima'             => $lima,
            'enam'             => $enam,
            'tujuh'            => $tujuh,
            'delapan'          => $delapan,
            'sembilan'         => $sembilan,
            'sepuluh'          => $sepuluh,
            'sebelas'          => $sebelas,
            'duabelas'         => $duabelas,
            'tigabelas'        => $tigabelas,
            'empatbelas'       => $empatbelas,
            'limabelas'       => $limabelas,
            'enambelas'       => $enambelas,
            'tujuhbelas'       => $tujuhbelas,
            'delapanbelas'       => $delapanbelas,
            'sembilanbelas'       => $sembilanbelas,
        );


        $where = array(
            'id_inyeri'     => $id_inyeri
        );

        $this->pasien_m->update_data('intervensi_nyeri',$data,$where);
        $this->session->set_flashdata('flash', 'Diupdate');
        redirect('Ass/MasterPasien/hasil/'.$id_anamnesis);
    }




    public function tambah_kriterianyeri()
    {
        $id_anamnesis   = $this->input->post('id_anamnesis');
        $id_nyeri       = $this->input->post('id_nyeri');
        $satu           = $this->input->post('satu');
        $dua            = $this->input->post('dua');
        $tiga           = $this->input->post('tiga');
        $empat          = $this->input->post('empat');
        $lima           = $this->input->post('lima');
        $enam           = $this->input->post('enam');

        $data = array(
            'id_anamnesis'     => $id_anamnesis,
            'id_nyeri'         => $id_nyeri,
            'satu'             => $satu,
            'dua'              => $dua,
            'tiga'             => $tiga,
            'empat'            => $empat,
            'lima'             => $lima,
            'enam'             => $enam,

        );

        $this->pasien_m->insert_data($data,'kriteria_nyeri');
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('Ass/MasterPasien/hasil/'.$id_anamnesis);
    }


    public function update_kriterianyeri_aksi()
    {
        $id_anamnesis   = $this->input->post('id_anamnesis');
        $id_kriterianyeri      = $this->input->post('id_kriterianyeri');
        $satu           = $this->input->post('satu');
        $dua            = $this->input->post('dua');
        $tiga           = $this->input->post('tiga');
        $empat          = $this->input->post('empat');
        $lima           = $this->input->post('lima');
        $enam           = $this->input->post('enam');

        $data = array(
            'satu'             => $satu,
            'dua'              => $dua,
            'tiga'             => $tiga,
            'empat'            => $empat,
            'lima'             => $lima,
            'enam'             => $enam,
        );


        $where = array(
            'id_kriterianyeri'     => $id_kriterianyeri
        );

        $this->pasien_m->update_data('kriteria_nyeri',$data,$where);
        $this->session->set_flashdata('flash', 'Diupdate');
        redirect('Ass/MasterPasien/hasil/'.$id_anamnesis);
    }




}



?>