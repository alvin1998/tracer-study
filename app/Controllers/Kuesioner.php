<?php
namespace App\Controllers;
use \App\Models\Kuesioner_Model;
use Exception;
use stdClass;

class Kuesioner extends BaseController
{
    private $kuesionerModel;
    private $session;

    public function __construct() {
        $this->kuesionerModel = new Kuesioner_Model();
        $this->session = \Config\Services::session();
        $this->session->start();
    }

    public function index()
    {
        return view('kuesioner');
    }

    public function attemp()
    {
    	// $personal['name'] = $this->session->get('personal_name');
    	// $personal['nim'] = $this->session->get('personal_nim');
    	// $personal['email'] = $this->session->get('personal_email');
    	// $personal['whatsapp'] = $this->session->get('personal_whatsapp');
		// $personal['created_at'] = date('Y-m-d H:i:s');
		// $personal_id = $this->kuesionerModel->requestPersonal($personal);

    	// $training['date'] = $this->session->get('training_date');
    	// $training['time'] = $this->session->get('training_time');
    	// $training['training'] = $this->session->get('training_training');
    	// $training['description'] = $this->session->get('training_description');
		// $training['created_at'] = date('Y-m-d H:i:s');
    	// $training_id = $this->kuesionerModel->requestTraining($training);

		// $data['personal_id'] = $personal_id;
		// $data['training_id'] = $training_id;
		$data['code'] = 'STIMATA-'.time();
		$data['nomor_mahasiswa'] = $this->request->getPost('nomor_mahasiswa');
		$data['nik_mahasiswa'] = $this->request->getPost('nik_mahasiswa');
		$data['nama_mahasiswa'] = $this->request->getPost('nama_mahasiswa');
		$data['email'] = $this->request->getPost('email');
		$data['phone'] = $this->request->getPost('phone');
		$data['kode_prodi'] = $this->request->getPost('kode_prodi');
		$data['tahun_lulus'] = $this->request->getPost('tahun_lulus');
		$data['kode_pt'] = $this->request->getPost('kode_pt');
		$data['npwp'] = $this->request->getPost('npwp');
		$data['created_at'] = date('Y-m-d H:i:s');
		$registrant_id = $this->kuesionerModel->requestRegistrant($data);
		if (@$registrant_id) {
			$wajib['registrant_id'] = $registrant_id;
			$wajib['status_kerja'] = $this->request->getPost('status_kerja');
			$wajib['dapat_kerja_kurang_6_bulan'] = $this->request->getPost('dapat_kerja_kurang_6_bulan');
			$wajib['berapa_bulan_dapat_kerja'] = $this->request->getPost('berapa_bulan_dapat_kerja');
			$wajib['rata_rata_gaji'] = $this->request->getPost('rata_rata_gaji');
			$wajib['lokasi_kerja'] = $this->request->getPost('lokasi_kerja');
			$wajib['jenis_perusahaan'] = $this->request->getPost('jenis_perusahaan');
			$wajib['nama_perusahaan'] = $this->request->getPost('nama_perusahaan');
			$wajib['posisi_wirausaha'] = $this->request->getPost('posisi_wirausaha');
			$wajib['tingkat_tempat_kerja'] = $this->request->getPost('tingkat_tempat_kerja');
			$wajib['pertanyaan_studi_biaya'] = $this->request->getPost('pertanyaan_studi_biaya');
			$wajib['pertanyaan_studi_perguruan'] = $this->request->getPost('pertanyaan_studi_perguruan');
			$wajib['pertanyaan_studi_program'] = $this->request->getPost('pertanyaan_studi_program');
			$wajib['pertanyaan_studi_tanggal'] = $this->request->getPost('pertanyaan_studi_tanggal');
			$wajib['sumber_dana_kuliah'] = $this->request->getPost('sumber_dana_kuliah');
			$wajib['hubungan_antara_bidang_studi'] = $this->request->getPost('hubungan_antara_bidang_studi');
			$wajib['tingkat_pendidikan_untuk_kerja'] = $this->request->getPost('tingkat_pendidikan_untuk_kerja');
			$wajib['etika_a'] = $this->request->getPost('etika_a');
			$wajib['etika_b'] = $this->request->getPost('etika_b');
			$wajib['keahlian_a'] = $this->request->getPost('keahlian_a');
			$wajib['keahlian_b'] = $this->request->getPost('keahlian_b');
			$wajib['bahasa_inggris_a'] = $this->request->getPost('bahasa_inggris_a');
			$wajib['bahasa_inggris_b'] = $this->request->getPost('bahasa_inggris_b');
			$wajib['penggunaan_ti_a'] = $this->request->getPost('penggunaan_ti_a');
			$wajib['penggunaan_ti_b'] = $this->request->getPost('penggunaan_ti_b');
			$wajib['komunikasi_a'] = $this->request->getPost('komunikasi_a');
			$wajib['komunikasi_b'] = $this->request->getPost('komunikasi_b');
			$wajib['kerjasama_a'] = $this->request->getPost('kerjasama_a');
			$wajib['kerjasama_b'] = $this->request->getPost('kerjasama_b');
			$wajib['pengembangan_diri_a'] = $this->request->getPost('pengembangan_diri_a');
			$wajib['pengembangan_diri_b'] = $this->request->getPost('pengembangan_diri_b');
			$wajib['created_at'] = date('Y-m-d H:i:s');
			$kuesionerWajib = $this->kuesionerModel->requestWajib($wajib);
			if (@$kuesionerWajib) {
				if (@$this->request->getPost('mengambil_kerja_tidak_sesuai_pendidikan')){
					$mengambil_kerja_tidak_sesuai_pendidikan = implode("&", @$this->request->getPost('mengambil_kerja_tidak_sesuai_pendidikan'));
				} else {
					$mengambil_kerja_tidak_sesuai_pendidikan = "";
				}
				if (@$this->request->getPost('situasi_saat_ini')){
					$situasi_saat_ini = implode("&", @$this->request->getPost('situasi_saat_ini'));
				} else {
					$situasi_saat_ini = "";
				}
				if (@$this->request->getPost('cara_mencari_kerja')){
					$cara_mencari_kerja = implode("&", @$this->request->getPost('cara_mencari_kerja'));
				} else {
					$cara_mencari_kerja = "";
				}
				$opsional['registrant_id'] = $registrant_id;
				$opsional['perkuliahan'] = $this->request->getPost('perkuliahan');
				$opsional['demontasi'] = $this->request->getPost('demontasi');
				$opsional['partisipasi'] = $this->request->getPost('partisipasi');
				$opsional['magang'] = $this->request->getPost('magang');
				$opsional['praktikum'] = $this->request->getPost('praktikum');
				$opsional['kerja_lapangan'] = $this->request->getPost('kerja_lapangan');
				$opsional['diskusi'] = $this->request->getPost('diskusi');
				$opsional['jenis_mulai_cari_kerja'] = $this->request->getPost('jenis_mulai_cari_kerja');
				$opsional['mulai_cari_kerja'] = $this->request->getPost('mulai_cari_kerja');
				$opsional['cara_mencari_kerja'] = $cara_mencari_kerja;
				$opsional['banyak_perusahaan_lamar'] = $this->request->getPost('banyak_perusahaan_lamar');
				$opsional['banyak_perusahaan_respon_lamar'] = $this->request->getPost('banyak_perusahaan_respon_lamar');
				$opsional['banyak_perusahaan_mengundang'] = $this->request->getPost('banyak_perusahaan_mengundang');
				$opsional['situasi_saat_ini'] = $situasi_saat_ini;
				$opsional['aktif_cari_kerja_4_minggu'] = $this->request->getPost('aktif_cari_kerja_4_minggu');
				$opsional['mengambil_kerja_tidak_sesuai_pendidikan'] = $mengambil_kerja_tidak_sesuai_pendidikan;
				$opsional['created_at'] = date('Y-m-d H:i:s');
				$kuesionerOpsional = $this->kuesionerModel->requestOpsional($opsional);
				if (@$kuesionerOpsional) {
					$this->email = \Config\Services::email();
					$emailku = $data['email'];
					$hrefUrl = base_url()."edit/".$data['code'];
	                $message = "<p style='font-size: 18px;'>Terima Kasih Telah Mengisi Survey Dengan Sebenar Benarnya. Jika Anda Ingin Merubah Survey Anda Harap Klik Tombol Dibawah.</p><br>";
	                $message .= "<a href='".$hrefUrl."' style='cursor: pointer;'><button style='background-color: #082B59; color: #FFF; width: 300px; height: 35px; font-size: 15px; border-radius: 5px;'>Edit Survey Anda</button></a>";
	                $this->email->setFrom('y14032000@gmail.com','Kuesioner Study');
	                $this->email->setTo($emailku);
	                $this->email->setSubject("Kuesioner Study");
	                $this->email->setMessage($message);

	                $this->email->send();

					return $this->respond(true, 200);
				} else {
					return $this->fail('Maaf, Kesalahan Pada server.', 400);
				}
			} else {
				return $this->fail('Maaf, Kesalahan Pada server.', 400);
			}
		} else {
			return $this->fail('Maaf, Kesalahan Pada server.', 400);
		}
    }

    public function edit($code)
    {	
    	if (!$code) {
            $this->session->setFlashdata('msg_code', 'Maaf, Kode Pendaftaran Anda Tidak Ditemukan');
            return redirect()->to('/');
        }
        $checkCode = $this->kuesionerModel->checkCode($code);
        if (!$checkCode) {
            $this->session->setFlashdata('msg_code', 'Maaf, Kode Pendaftaran Anda Tidak Ditemukan');
            return redirect()->to('/');
        }
        $temp['kuesioner'] = $this->kuesionerModel->getAllDataByCode($code);

        return view('edit/kuesioner', $temp);
    }

    public function attempEdit($code) {
    	$checkCode = $this->kuesionerModel->checkCode($code);
        if (!$checkCode) {
            return $this->fail('Maaf, Kode Survey Anda Salah.', 400);
        }
        $getDataCode = $this->kuesionerModel->getAllDataByCode2($code);
        // print_r($getDataCode);die();

    	// $personal['name'] = $this->session->get('personal_name');
    	// $personal['nim'] = $this->session->get('personal_nim');
    	// $personal['email'] = $this->session->get('personal_email');
    	// $personal['whatsapp'] = $this->session->get('personal_whatsapp');
		// $personal['created_at'] = date('Y-m-d H:i:s');
		// $personal = $this->kuesionerModel->requestUpdatedPersonal($personal, $getDataCode->personal_id);

    	// $training['date'] = $this->session->get('training_date');
    	// $training['time'] = $this->session->get('training_time');
    	// $training['training'] = $this->session->get('training_training');
    	// $training['description'] = $this->session->get('training_description');
		// $training['created_at'] = date('Y-m-d H:i:s');
    	// $training = $this->kuesionerModel->requestUpdatedTraining($training, $getDataCode->training_id);

		$data['nomor_mahasiswa'] = $this->request->getPost('nomor_mahasiswa');
		$data['nik_mahasiswa'] = $this->request->getPost('nik_mahasiswa');
		$data['nama_mahasiswa'] = $this->request->getPost('nama_mahasiswa');
		$data['email'] = $this->request->getPost('email');
		$data['phone'] = $this->request->getPost('phone');
		$data['kode_prodi'] = $this->request->getPost('kode_prodi');
		$data['tahun_lulus'] = $this->request->getPost('tahun_lulus');
		$data['kode_pt'] = $this->request->getPost('kode_pt');
		$data['npwp'] = $this->request->getPost('npwp');
		$data['created_at'] = date('Y-m-d H:i:s');
		$registrant = $this->kuesionerModel->requestUpdatedRegistrant($data, $getDataCode->id);
		if (@$registrant) {
			$wajib['status_kerja'] = $this->request->getPost('status_kerja');
			$wajib['dapat_kerja_kurang_6_bulan'] = $this->request->getPost('dapat_kerja_kurang_6_bulan');
			$wajib['berapa_bulan_dapat_kerja'] = $this->request->getPost('berapa_bulan_dapat_kerja');
			$wajib['rata_rata_gaji'] = $this->request->getPost('rata_rata_gaji');
			$wajib['lokasi_kerja'] = $this->request->getPost('lokasi_kerja');
			$wajib['jenis_perusahaan'] = $this->request->getPost('jenis_perusahaan');
			$wajib['nama_perusahaan'] = $this->request->getPost('nama_perusahaan');
			$wajib['posisi_wirausaha'] = $this->request->getPost('posisi_wirausaha');
			$wajib['tingkat_tempat_kerja'] = $this->request->getPost('tingkat_tempat_kerja');
			$wajib['pertanyaan_studi_biaya'] = $this->request->getPost('pertanyaan_studi_biaya');
			$wajib['pertanyaan_studi_perguruan'] = $this->request->getPost('pertanyaan_studi_perguruan');
			$wajib['pertanyaan_studi_program'] = $this->request->getPost('pertanyaan_studi_program');
			$wajib['pertanyaan_studi_tanggal'] = $this->request->getPost('pertanyaan_studi_tanggal');
			$wajib['sumber_dana_kuliah'] = $this->request->getPost('sumber_dana_kuliah');
			$wajib['hubungan_antara_bidang_studi'] = $this->request->getPost('hubungan_antara_bidang_studi');
			$wajib['tingkat_pendidikan_untuk_kerja'] = $this->request->getPost('tingkat_pendidikan_untuk_kerja');
			$wajib['etika_a'] = $this->request->getPost('etika_a');
			$wajib['etika_b'] = $this->request->getPost('etika_b');
			$wajib['keahlian_a'] = $this->request->getPost('keahlian_a');
			$wajib['keahlian_b'] = $this->request->getPost('keahlian_b');
			$wajib['bahasa_inggris_a'] = $this->request->getPost('bahasa_inggris_a');
			$wajib['bahasa_inggris_b'] = $this->request->getPost('bahasa_inggris_b');
			$wajib['penggunaan_ti_a'] = $this->request->getPost('penggunaan_ti_a');
			$wajib['penggunaan_ti_b'] = $this->request->getPost('penggunaan_ti_b');
			$wajib['komunikasi_a'] = $this->request->getPost('komunikasi_a');
			$wajib['komunikasi_b'] = $this->request->getPost('komunikasi_b');
			$wajib['kerjasama_a'] = $this->request->getPost('kerjasama_a');
			$wajib['kerjasama_b'] = $this->request->getPost('kerjasama_b');
			$wajib['pengembangan_diri_a'] = $this->request->getPost('pengembangan_diri_a');
			$wajib['pengembangan_diri_b'] = $this->request->getPost('pengembangan_diri_b');
			$wajib['updated_at'] = date('Y-m-d H:i:s');
			$kuesionerWajib = $this->kuesionerModel->requestUpdatedWajib($wajib, $getDataCode->id);
			if (@$kuesionerWajib) {
				if (@$this->request->getPost('mengambil_kerja_tidak_sesuai_pendidikan')) {
					$mengambil_kerja_tidak_sesuai_pendidikan = implode("&", @$this->request->getPost('mengambil_kerja_tidak_sesuai_pendidikan'));
				} else {
					$mengambil_kerja_tidak_sesuai_pendidikan = "";
				}
				if (@$this->request->getPost('situasi_saat_ini')) {
					$situasi_saat_ini = implode("&", @$this->request->getPost('situasi_saat_ini'));
				} else {
					$situasi_saat_ini = "";
				}
				if (@$this->request->getPost('cara_mencari_kerja')) {
					$cara_mencari_kerja = implode("&", @$this->request->getPost('cara_mencari_kerja'));
				} else {
					$cara_mencari_kerja = "";
				}
				$opsional['perkuliahan'] = $this->request->getPost('perkuliahan');
				$opsional['demontasi'] = $this->request->getPost('demontasi');
				$opsional['partisipasi'] = $this->request->getPost('partisipasi');
				$opsional['magang'] = $this->request->getPost('magang');
				$opsional['praktikum'] = $this->request->getPost('praktikum');
				$opsional['kerja_lapangan'] = $this->request->getPost('kerja_lapangan');
				$opsional['diskusi'] = $this->request->getPost('diskusi');
				$opsional['jenis_mulai_cari_kerja'] = $this->request->getPost('jenis_mulai_cari_kerja');
				$opsional['mulai_cari_kerja'] = $this->request->getPost('mulai_cari_kerja');
				$opsional['cara_mencari_kerja'] = $cara_mencari_kerja;
				$opsional['banyak_perusahaan_lamar'] = $this->request->getPost('banyak_perusahaan_lamar');
				$opsional['banyak_perusahaan_respon_lamar'] = $this->request->getPost('banyak_perusahaan_respon_lamar');
				$opsional['banyak_perusahaan_mengundang'] = $this->request->getPost('banyak_perusahaan_mengundang');
				$opsional['situasi_saat_ini'] = $situasi_saat_ini;
				$opsional['aktif_cari_kerja_4_minggu'] = $this->request->getPost('aktif_cari_kerja_4_minggu');
				$opsional['mengambil_kerja_tidak_sesuai_pendidikan'] = $mengambil_kerja_tidak_sesuai_pendidikan;
				$opsional['updated_at'] = date('Y-m-d H:i:s');
				$kuesionerOpsional = $this->kuesionerModel->requestUpdatedOpsional($opsional, $getDataCode->id);
				print_r($kuesionerOpsional);die();
				if (@$kuesionerOpsional) {
					return $this->respond(true, 200);
				} else {
					return $this->fail('Maaf, Ada Kesalahan Pada server.', 400);
				}
			} else {
				return $this->fail('Maaf, Kesalahan Pada server..', 400);
			}
		} else {
			return $this->fail('Maaf, Kesalahan Pada server...', 400);
		}
    }
}
