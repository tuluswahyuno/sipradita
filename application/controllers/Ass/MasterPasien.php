<?php 

class MasterPasien extends CI_Controller
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
        $this->load->view('Masterpasien/v_data_pasien',$data);
        $this->load->view('template/footer');
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
        $this->load->view('template/footer');
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


    public function tambah_pemeriksaan_aksi()
    {
        check_not_login();

        $id_anamnesis           = $this->input->post('id_anamnesis');
        $e                      = $this->input->post('e');
        $v                      = $this->input->post('v');
        $m                      = $this->input->post('m');
        $bb                     = $this->input->post('bb');
        $tb                     = $this->input->post('tb');
        $kesadaran              = $this->input->post('kesadaran');
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

        if ($pola_nafas == "Tachipneu" && $irama_nafas == "Tidak Teratur" && $retraksi == "Ya" && $kesulitan_bernafas == "Ya" && $kesulitan_bernafas_ya == "Dispneu" && $suara_nafas == "Whizing" && $perkusi == "Sonor" && $agd == "PH 7,35-7,45") {
            $diagnosa_penafasan = 'Pola Nafas Tidak Efektif';
        }elseif ($pola_nafas == "Tachipneu" && $irama_nafas == "Tidak Teratur" && $retraksi == "Ya" && $kesulitan_bernafas == "Ya" && $kesulitan_bernafas_ya == "Dispneu" && $batukdansekresi == "Ya" && $batukdansekresi_ya == "Produktif" || "Non Produktif" && $warna_sputum == "Putih" || "Kuning" || "Merah" && $perkusi == "Redup") {
            $diagnosa_penafasan = 'Bersihan Jalan Nafas Tidak Efektif';
        }else{ 
            echo "$diagnosa_penafasan = 'Tidak Terdiagnosa Masalah Pernafasan;";
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


    public function tambah_moskuloskelental_aksi()
    {
        check_not_login();

        $id_anamnesis           = $this->input->post('id_anamnesis');
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
        {
            $diagnosa_moskuloskelental = "Gangguan Mobilitas Fisik";
        }else{
            $diagnosa_moskuloskelental = "Tidak Terdiagnosa Moskuloskelental";
        }
     
        $data = array(
            'id_anamnesis'              => $id_anamnesis,
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

        $this->pasien_m->insert_data($data,'sistem_moskuloskelental');
        $this->session->set_flashdata('flash', 'Ditambahkan');
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
        // $diagnosa_proteksi  = $this->input->post('diagnosa_proteksi');

        if ($suhu = ">37,5" && $nilai_leokosit>"10000") {
            $diagnosa_penafasan = 'Hipertermia';
        }else{ 
            echo "$diagnosa_penafasan = 'Tidak Terdiagnosa Masalah Proteksi dan Perlindungan;";
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
        $hasil          = $this->input->post('hasil');
        $waktu          = $this->input->post('waktu');
        // $diagnosa_proteksi  = $this->input->post('diagnosa_proteksi');

        if ($nyeri == "Ya" && $deskripsi == "Benturan" || "Tindakan" || "Proses Penyakit" && $quality == "Seperti tertusuk-tusuk benda tajam/tumpul" || "Berdenyut" || "Terbakar" || "Diremas" || "Teriris" || "Terindih benda berat" && $menyebar == "Tidak" && $hasil < "6" && $waktu == "< 6 Bulan") {
            $diagnosa_nyeri = 'Nyeri Akut ';
        }else{ 
            echo "$diagnosa_nyeri = 'Tidak Terdiagnosa Nyeri Akut";
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

        // $data['pemeriksaan'] = $this->pasien_m->detail_pemeriksaan($idanamnesis);
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
        // $this->load->view('Masterpasien/v_input_pemeriksaan',$data);
        $this->load->view('Masterpasien/v_detail_pemeriksaan',$data);
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
        $this->load->view('template/footer');
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


    public function hasil($idanamnesis)
    {
        check_not_login();

        $data['detail'] = $this->pasien_m->get_id_anamnesis($idanamnesis);
        $data['hasil'] = $this->pasien_m->hasil_diagnosa($idanamnesis);
        $data['anamnesis'] = $this->pasien_m->detail_anamnesis($idanamnesis);
        
        $data['title'] = " Hasil Diagnosa ";

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('Masterpasien/v_hasil_diagnosa',$data);
        $this->load->view('template/footer');
    }


    public function moskuloskelentall($idanamnesis)
    {
        check_not_login();

        $data['detail'] = $this->pasien_m->get_id_anamnesis($idanamnesis);
        
        $data['title'] = " Sistem Moskuloskelental ";

        $this->load->view('template/header');
        $this->load->view('template/sidebar',$data);
        $this->load->view('Masterpasien/v_input_moskuloskelental',$data);
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
        redirect('Ass/MasterPasien');  
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
        redirect('Ass/MasterPasien/detail_pasien/'.$id_pasien);
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