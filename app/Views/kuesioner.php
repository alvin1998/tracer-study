<!DOCTYPE html>
<html lang="en">
    <?= view('partials/kuesioner/header'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <style type="text/css">
        .fs-100 {
            font-size: 100px;
        }
    </style>
        <div class="container-fluid full-height">
            <div class="row row-height">
                <div class="col-lg-6 content-left">
                    <div class="content-left-wrapper">
                        <div>
                            <figure><img src="<?= base_url(); ?>/public/assets/wilio/img/info_graphic_1.svg" alt="" class="img-fluid" /></figure>
                            <h2>Tracer Study.</h2>
                            <p>
                                Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel. Adhuc invidunt duo ex. Eu tantas dolorum ullamcorper qui.
                            </p>
                            <a href="<?= base_url(); ?>" class="btn_1 rounded" target="_parent">Kembali Ke Beranda</a>
                        </div>
                        <div onclick="function_name()" class="copy">© <?= date('Y') ?> STIMATA</div>
                    </div>
                    <!-- /content-left-wrapper -->
                </div>
                <!-- /content-left -->

                <div class="col-lg-6 content-right" id="start">
                    <div id="wizard_container" style="height: 100%;">
                        <div id="top-wizard">
                            <div id="progressbar"></div>
                        </div>
                        <!-- /top-wizard -->
                        <form id="wrapped123" action="<?= base_url(); ?>/kuesioner/attemp" method="POST">
                            <input id="website" name="website" type="text" value="" />
                            <!-- Leave for security protection, read docs for details -->
                            <h4>Kuesioner Tracer study</h4>
                            <br>
                            <div id="middle-wizard">
                                <div class="step">
                                    <h3 class="main_question">Silakan isi dengan biodata diri anda.</h3>
                                    <div class="form-group">
                                        <input type="text" name="nomor_mahasiswa" class="form-control " placeholder="NIM" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="nik_mahasiswa" class="form-control " placeholder="NIK Mahasiswa" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="nama_mahasiswa" class="form-control " placeholder="Nama Mahasiswa" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control " placeholder="Email" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control " placeholder="Nomor Telepon" />
                                    </div>
                                    <div class="form-group">
                                       <!--  <input type="text" name="kode_prodi" class="form-control " placeholder="Kode Prodi" /> -->
                                       <select class="form-control" name="kode_prodi" ="">
                                           <option value="">Pilih Kode Prodi</option>
                                           <option value="57201">S1-SI: 57201</option>
                                           <option value="55201">S1-TI: 55201</option>
                                           <option value="57401">D3-SI: 57401</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="tahun_lulus" class="form-control " placeholder="Tahun Lulus" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="kode_pt" class="form-control " value="073104" readonly placeholder="Kode PT" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="npwp" class="form-control " placeholder="NPWP" value="0" readonly />
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /step-->
                                <div class="step">
                                    <h6><b>KUESIONER WAJIB</b></h6>
                                    <br>
                                    <h3 class="main_question">A. Jelaskan status Anda saat ini?</h3>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Bekerja (full time/part time)
                                            <input type="radio" name="status_kerja" value="Bekerja (full time/part time)" class="" onchange="getVals(this, 'status_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Wiraswasta
                                            <input type="radio" name="status_kerja" value="Wiraswasta" class="" onchange="getVals(this, 'status_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Melanjutkan Pendidikan
                                            <input type="radio" name="status_kerja" value="Melanjutkan Pendidikan" class="" onchange="getVals(this, 'status_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Tidak Kerja tetapi sedang mencari kerja
                                            <input type="radio" name="status_kerja" value="Tidak Kerja tetapi sedang mencari kerja" class="" onchange="getVals(this, 'status_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Belum memungkinkan bekerja
                                            <input type="radio" name="status_kerja" value="Belum memungkinkan bekerja" class="" onchange="getVals(this, 'status_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <br>
                                    <h3 class="main_question">B. Apakah anda telah mendapatkan pekerjaan <= 6 bulan / termasuk bekerja sebelum lulus ?</h3>                                    
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            YA
                                            <input type="radio" name="dapat_kerja_kurang_6_bulan" value="YA" class="" onchange="getViewDapatKerja('YA'); getVals(this, 'dapat_kerja_kurang_6_bulan');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div id="ya_dapat_kerja"></div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            TIDAK
                                            <input type="radio" name="dapat_kerja_kurang_6_bulan" value="TIDAK" class="" onchange="getViewDapatKerja('TIDAK'); getVals(this, 'dapat_kerja_kurang_6_bulan');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div id="tidak_dapat_kerja"></div>
                                    <h6 class="main_question">Berapa rata-rata pendapatan anda per bulan ? (take home pay)?</h6>
                                    <div class="form-group">
                                        <input type="text" name="rata_rata_gaji" class="form-control " placeholder="Rata Rata Pendapatan" />
                                    </div>
                                    <br>
                                    <h3 class="main_question">C. Dimana lokasi tempat Anda bekerja? </h3>                                    
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Provinsi
                                            <input type="radio" name="lokasi_kerja" value="Provinsi" class="" onchange="getVals(this, 'lokasi_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Kab/Kota
                                            <input type="radio" name="lokasi_kerja" value="Kab/Kota" class="" onchange="getVals(this, 'lokasi_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <!-- /step-->
                                <div class="step">
                                    <h6><b>KUESIONER WAJIB</b></h6>
                                    <br>
                                    <h3 class="main_question">D. Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang?</h3>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Instansi pemerintah
                                            <input type="radio" name="jenis_perusahaan" value="Instansi pemerintah" class="" onchange="getTuliskanJenisPerusahaan('tidak'); getVals(this, 'jenis_perusahaan');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            BUMN/BUMD
                                            <input type="radio" name="jenis_perusahaan" value="BUMN/BUMD" class="" onchange="getTuliskanJenisPerusahaan('tidak'); getVals(this, 'jenis_perusahaan');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Institusi/Organisasi Multilateral
                                            <input type="radio" name="jenis_perusahaan" value="Institusi/Organisasi Multilateral" class="" onchange="getTuliskanJenisPerusahaan('tidak'); getVals(this, 'jenis_perusahaan');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Organisasi non-profit/Lembaga Swadaya Masyarakat
                                            <input type="radio" name="jenis_perusahaan" value="Organisasi non-profit/Lembaga Swadaya Masyarakat" class="" onchange="getTuliskanJenisPerusahaan('tidak'); getVals(this, 'jenis_perusahaan');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Perusahaan swasta
                                            <input type="radio" name="jenis_perusahaan" value="Perusahaan swasta" class="" onchange="getTuliskanJenisPerusahaan('tidak'); getVals(this, 'jenis_perusahaan');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Wiraswasta/perusahaan sendiri
                                            <input type="radio" name="jenis_perusahaan" value="Wiraswasta/perusahaan sendiri" class="" onchange="getTuliskanJenisPerusahaan('tidak'); getVals(this, 'jenis_perusahaan');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                           Lainnya, tuliskan:
                                            <input type="radio" name="jenis_perusahaan" id="tuliskan_jenis_perusahaan" value="" class="" onchange="getTuliskanJenisPerusahaan('tuliskan_jenis_perusahaan'); getVals(this, 'jenis_perusahaan');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div id="view_tuliskan_jenis_perusahaan"></div>
                                    <br>                     
                                    <h3 class="main_question">E. Apa nama perusahaan/kantor tempat Anda bekerja?</h3>
                                    <div class="form-group">
                                        <input type="text" name="nama_perusahaan" class="form-control " placeholder="Nama Perusahaan" />
                                    </div>
                                    <br>
                                    <h3 class="main_question">F. Bila berwiraswasta, apa posisi/jabatan Anda saat ini ?</h3>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Founder
                                            <input type="radio" name="posisi_wirausaha" value="Founder" class="" onchange="getVals(this, 'posisi_wirausaha');" />
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container_radio version_2">
                                            Co-Founder
                                            <input type="radio" name="posisi_wirausaha" value="Co-Founder" class="" onchange="getVals(this, 'posisi_wirausaha');" />
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container_radio version_2">
                                            Staff
                                            <input type="radio" name="posisi_wirausaha" value="Staff" class="" onchange="getVals(this, 'posisi_wirausaha');" />
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container_radio version_2">
                                            Freelance/Kerja Lepas
                                            <input type="radio" name="posisi_wirausaha" value="Freelance/Kerja Lepas" class="" onchange="getVals(this, 'posisi_wirausaha');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="step">
                                    <h6><b>KUESIONER WAJIB</b></h6>
                                    <br>
                                    <h3 class="main_question">G. Apa tingkat tempat kerja Anda?</h3>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Lokal/wilayah/wiraswasta tidak berbadan hukum
                                            <input type="radio" name="tingkat_tempat_kerja" value="Lokal/wilayah/wiraswasta tidak berbadan hukum" class="" onchange="getVals(this, 'tingkat_tempat_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Nasional/wiraswasta berbadan hukum
                                            <input type="radio" name="tingkat_tempat_kerja" value="Nasional/wiraswasta berbadan hukum" class="" onchange="getVals(this, 'tingkat_tempat_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Multinasional/internasional
                                            <input type="radio" name="tingkat_tempat_kerja" value="Multinasional/internasional" class="" onchange="getVals(this, 'tingkat_tempat_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <br>                     
                                    <h3 class="main_question">H. Pertanyaan studi lanjut :</h3>
                                    <h6 class="main_question">Sumber Biaya</h6>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Biaya Sendiri
                                            <input type="radio" name="pertanyaan_studi_biaya" value="Biaya Sendiri" class="" onchange="getVals(this, 'pertanyaan_studi_biaya');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Beasiswa
                                            <input type="radio" name="pertanyaan_studi_biaya" value="Beasiswa" class="" onchange="getVals(this, 'pertanyaan_studi_biaya');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="pertanyaan_studi_perguruan" class="form-control " placeholder="Perguruan Tinggi" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="pertanyaan_studi_program" class="form-control " placeholder="Program Studi" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="pertanyaan_studi_tanggal" class="form-control " placeholder="Tanggal Masuk" />
                                    </div>
                                </div>
                                <!-- /step -->
                                <div class="step">
                                    <h6><b>KUESIONER WAJIB</b></h6>
                                    <br>
                                    <h3 class="main_question">I. Sebutkan sumberdana dalam pembiayaan kuliah? (bukan ketika Studi Lanjut)</h3>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Biaya Sendiri / Keluarga
                                            <input type="radio" name="sumber_dana_kuliah" value="Biaya Sendiri / Keluarga" class="" onchange="sumberdanaKuliah('tidak'); getVals(this, 'sumber_dana_kuliah');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                             Beasiswa ADIK
                                            <input type="radio" name="sumber_dana_kuliah" value=" Beasiswa ADIK" class="" onchange="sumberdanaKuliah('tidak'); getVals(this, 'sumber_dana_kuliah');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Beasiswa BIDIKMISI
                                            <input type="radio" name="sumber_dana_kuliah" value="Beasiswa BIDIKMISI" class="" onchange="sumberdanaKuliah('tidak'); getVals(this, 'sumber_dana_kuliah');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Beasiswa PPA
                                            <input type="radio" name="sumber_dana_kuliah" value="Beasiswa PPA" class="" onchange="sumberdanaKuliah('tidak'); getVals(this, 'sumber_dana_kuliah');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Beasiswa AFIRMASI
                                            <input type="radio" name="sumber_dana_kuliah" value="Beasiswa AFIRMASI" class="" onchange="sumberdanaKuliah('tidak'); getVals(this, 'sumber_dana_kuliah');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Beasiswa Perusahaan/Swasta
                                            <input type="radio" name="sumber_dana_kuliah" value="Beasiswa Perusahaan/Swasta" class="" onchange="sumberdanaKuliah('tidak'); getVals(this, 'sumber_dana_kuliah');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Lainnya, tuliskan:
                                            <input type="radio" name="sumber_dana_kuliah" id="tuliskanSumberdana" value="" class="" onchange="sumberdanaKuliah('ya'); getVals(this, 'sumber_dana_kuliah');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div id="view_tuliskan_sumberdana"></div>
                                    <br>
                                    <h3 class="main_question">J. Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?</h3>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Sangat Erat
                                            <input type="radio" name="hubungan_antara_bidang_studi" value="Sangat Erat" class="" onchange="getVals(this, 'hubungan_antara_bidang_studi');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Erat
                                            <input type="radio" name="hubungan_antara_bidang_studi" value="Erat" class="" onchange="getVals(this, 'hubungan_antara_bidang_studi');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Cukup Erat
                                            <input type="radio" name="hubungan_antara_bidang_studi" value="Cukup Erat" class="" onchange="getVals(this, 'hubungan_antara_bidang_studi');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Kurang Erat
                                            <input type="radio" name="hubungan_antara_bidang_studi" value="Kurang Erat" class="" onchange="getVals(this, 'hubungan_antara_bidang_studi');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Tidak Sama Sekali
                                            <input type="radio" name="hubungan_antara_bidang_studi" value="Tidak Sama Sekali" class="" onchange="getVals(this, 'hubungan_antara_bidang_studi');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <br>
                                    <h3 class="main_question">K. Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?</h3>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Setingkat Lebih Tinggi
                                            <input type="radio" name="tingkat_pendidikan_untuk_kerja" value="Setingkat Lebih Tinggi" class="" onchange="getVals(this, 'tingkat_pendidikan_untuk_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Tingkat yang Sama
                                            <input type="radio" name="tingkat_pendidikan_untuk_kerja" value="Tingkat yang Sama" class="" onchange="getVals(this, 'tingkat_pendidikan_untuk_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Setingkat Lebih Rendah
                                            <input type="radio" name="tingkat_pendidikan_untuk_kerja" value="Setingkat Lebih Rendah" class="" onchange="getVals(this, 'tingkat_pendidikan_untuk_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Tidak Perlu Pendidikan Tinggi
                                            <input type="radio" name="tingkat_pendidikan_untuk_kerja" value="Tidak Perlu Pendidikan Tinggi" class="" onchange="getVals(this, 'tingkat_pendidikan_untuk_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <!-- /step-->
                                <div class="step">
                                    <h6><b>KUESIONER WAJIB</b></h6>
                                    <br>
                                    <h3 class="main_question">L. Pada saat lulus, pada tingkat mana kompetensi dibawah ini yang Anda kuasai? (A) pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan? (B) </h3>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="text-align: center;">
                                            <thead>
                                                <tr>
                                                    <th rowspan="4">Kopetensi</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="5">A</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2">Kurang</th>
                                                    <th>Cukup</th>
                                                    <th colspan="2">Sangat&nbsp;Baik</th>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td>3</td>
                                                    <td>4</td>
                                                    <td>5</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Etika</td>
                                                    <td for="etika_a1"><input type="radio" value="1" name="etika_a" id="etika_a1"></td>
                                                    <td for="etika_a2"><input type="radio" value="2" name="etika_a" id="etika_a2"></td>
                                                    <td for="etika_a3"><input type="radio" value="3" name="etika_a" id="etika_a3"></td>
                                                    <td for="etika_a4"><input type="radio" value="4" name="etika_a" id="etika_a4"></td>
                                                    <td for="etika_a5"><input type="radio" value="5" name="etika_a" id="etika_a5"></td>
                                                </tr>
                                                <tr>
                                                    <td>Keahlian berdasarkan bidang ilmu(profesionalisme)</td>
                                                    <td for="keahlian_a1"><input type="radio" value="1" name="keahlian_a" id="keahlian_a1"></td>
                                                    <td for="keahlian_a2"><input type="radio" value="2" name="keahlian_a" id="keahlian_a2"></td>
                                                    <td for="keahlian_a3"><input type="radio" value="3" name="keahlian_a" id="keahlian_a3"></td>
                                                    <td for="keahlian_a4"><input type="radio" value="4" name="keahlian_a" id="keahlian_a4"></td>
                                                    <td for="keahlian_a5"><input type="radio" value="5" name="keahlian_a" id="keahlian_a5"></td>
                                                </tr>
                                                <tr>
                                                    <td>Bahasa Inggris</td>
                                                    <td for="bahasa_inggris_a1"><input type="radio" value="1" name="bahasa_inggris_a" id="bahasa_inggris_a1"></td>
                                                    <td for="bahasa_inggris_a2"><input type="radio" value="2" name="bahasa_inggris_a" id="bahasa_inggris_a2"></td>
                                                    <td for="bahasa_inggris_a3"><input type="radio" value="3" name="bahasa_inggris_a" id="bahasa_inggris_a3"></td>
                                                    <td for="bahasa_inggris_a4"><input type="radio" value="4" name="bahasa_inggris_a" id="bahasa_inggris_a4"></td>
                                                    <td for="bahasa_inggris_a5"><input type="radio" value="5" name="bahasa_inggris_a" id="bahasa_inggris_a5"></td>
                                                </tr>
                                                <tr>
                                                    <td>Penggunaan Teknologi Informasi</td>
                                                    <td for="penggunaan_ti_a1"><input type="radio" value="1" name="penggunaan_ti_a" id="penggunaan_ti_a1"></td>
                                                    <td for="penggunaan_ti_a2"><input type="radio" value="2" name="penggunaan_ti_a" id="penggunaan_ti_a2"></td>
                                                    <td for="penggunaan_ti_a3"><input type="radio" value="3" name="penggunaan_ti_a" id="penggunaan_ti_a3"></td>
                                                    <td for="penggunaan_ti_a4"><input type="radio" value="4" name="penggunaan_ti_a" id="penggunaan_ti_a4"></td>
                                                    <td for="penggunaan_ti_a5"><input type="radio" value="5" name="penggunaan_ti_a" id="penggunaan_ti_a5"></td>
                                                </tr>
                                                <tr>
                                                    <td>Komunikasi</td>
                                                    <td for="komunikasi_a1"><input type="radio" value="1" name="komunikasi_a" id="komunikasi_a1"></td>
                                                    <td for="komunikasi_a2"><input type="radio" value="2" name="komunikasi_a" id="komunikasi_a2"></td>
                                                    <td for="komunikasi_a3"><input type="radio" value="3" name="komunikasi_a" id="komunikasi_a3"></td>
                                                    <td for="komunikasi_a4"><input type="radio" value="4" name="komunikasi_a" id="komunikasi_a4"></td>
                                                    <td for="komunikasi_a5"><input type="radio" value="5" name="komunikasi_a" id="komunikasi_a5"></td>
                                                </tr>
                                                <tr>
                                                    <td>Kerjasama tim</td>
                                                    <td for="kerjasama_a1"><input type="radio" value="1" name="kerjasama_a" id="kerjasama_a1"></td>
                                                    <td for="kerjasama_a2"><input type="radio" value="2" name="kerjasama_a" id="kerjasama_a2"></td>
                                                    <td for="kerjasama_a3"><input type="radio" value="3" name="kerjasama_a" id="kerjasama_a3"></td>
                                                    <td for="kerjasama_a4"><input type="radio" value="4" name="kerjasama_a" id="kerjasama_a4"></td>
                                                    <td for="kerjasama_a5"><input type="radio" value="5" name="kerjasama_a" id="kerjasama_a5"></td>
                                                </tr>
                                                <tr>
                                                    <td>Pengembangan diri</td>
                                                    <td for="pengembangan_diri_a1"><input type="radio" value="1" name="pengembangan_diri_a" id="pengembangan_diri_a1"></td>
                                                    <td for="pengembangan_diri_a2"><input type="radio" value="2" name="pengembangan_diri_a" id="pengembangan_diri_a2"></td>
                                                    <td for="pengembangan_diri_a3"><input type="radio" value="3" name="pengembangan_diri_a" id="pengembangan_diri_a3"></td>
                                                    <td for="pengembangan_diri_a4"><input type="radio" value="4" name="pengembangan_diri_a" id="pengembangan_diri_a4"></td>
                                                    <td for="pengembangan_diri_a5"><input type="radio" value="5" name="pengembangan_diri_a" id="pengembangan_diri_a5"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="text-align: center;">
                                            <thead>
                                                <tr>
                                                    <th rowspan="4">Kopetensi</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="5">B</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2">Kurang</th>
                                                    <th>Cukup</th>
                                                    <th colspan="2">Sangat&nbsp;Baik</th>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td>3</td>
                                                    <td>4</td>
                                                    <td>5</td>
                                                </tr>
                                            </thead>
                                            <tbody>                                                
                                                <tr>
                                                    <td>Etika</td>
                                                    <td for="etika_b1"><input type="radio" value="1" name="etika_b" id="etika_b1"></td>
                                                    <td for="etika_b2"><input type="radio" value="2" name="etika_b" id="etika_b2"></td>
                                                    <td for="etika_b3"><input type="radio" value="3" name="etika_b" id="etika_b3"></td>
                                                    <td for="etika_b4"><input type="radio" value="4" name="etika_b" id="etika_b4"></td>
                                                    <td for="etika_b5"><input type="radio" value="5" name="etika_b" id="etika_b5"></td>
                                                </tr>
                                                <tr>
                                                    <td>Keahlian berdasarkan bidang ilmu(profesionalisme)</td>
                                                    <td for="keahlian_b1"><input type="radio" value="1" name="keahlian_b" id="keahlian_b1"></td>
                                                    <td for="keahlian_b2"><input type="radio" value="2" name="keahlian_b" id="keahlian_b2"></td>
                                                    <td for="keahlian_b3"><input type="radio" value="3" name="keahlian_b" id="keahlian_b3"></td>
                                                    <td for="keahlian_b4"><input type="radio" value="4" name="keahlian_b" id="keahlian_b4"></td>
                                                    <td for="keahlian_b5"><input type="radio" value="5" name="keahlian_b" id="keahlian_b5"></td>
                                                </tr>
                                                <tr>
                                                    <td>Bahasa Inggris</td>
                                                    <td for="bahasa_inggris_b1"><input type="radio" value="1" name="bahasa_inggris_b" id="bahasa_inggris_b1"></td>
                                                    <td for="bahasa_inggris_b2"><input type="radio" value="2" name="bahasa_inggris_b" id="bahasa_inggris_b2"></td>
                                                    <td for="bahasa_inggris_b3"><input type="radio" value="3" name="bahasa_inggris_b" id="bahasa_inggris_b3"></td>
                                                    <td for="bahasa_inggris_b4"><input type="radio" value="4" name="bahasa_inggris_b" id="bahasa_inggris_b4"></td>
                                                    <td for="bahasa_inggris_b5"><input type="radio" value="5" name="bahasa_inggris_b" id="bahasa_inggris_b5"></td>
                                                </tr>
                                                <tr>
                                                    <td>Penggunaan Teknologi Informasi</td>
                                                    <td for="penggunaan_ti_b1"><input type="radio" value="1" name="penggunaan_ti_b" id="penggunaan_ti_b1"></td>
                                                    <td for="penggunaan_ti_b2"><input type="radio" value="2" name="penggunaan_ti_b" id="penggunaan_ti_b2"></td>
                                                    <td for="penggunaan_ti_b3"><input type="radio" value="3" name="penggunaan_ti_b" id="penggunaan_ti_b3"></td>
                                                    <td for="penggunaan_ti_b4"><input type="radio" value="4" name="penggunaan_ti_b" id="penggunaan_ti_b4"></td>
                                                    <td for="penggunaan_ti_b5"><input type="radio" value="5" name="penggunaan_ti_b" id="penggunaan_ti_b5"></td>
                                                </tr>
                                                <tr>
                                                    <td>Komunikasi</td>
                                                    <td for="komunikasi_b1"><input type="radio" value="1" name="komunikasi_b" id="komunikasi_b1"></td>
                                                    <td for="komunikasi_b2"><input type="radio" value="2" name="komunikasi_b" id="komunikasi_b2"></td>
                                                    <td for="komunikasi_b3"><input type="radio" value="3" name="komunikasi_b" id="komunikasi_b3"></td>
                                                    <td for="komunikasi_b4"><input type="radio" value="4" name="komunikasi_b" id="komunikasi_b4"></td>
                                                    <td for="komunikasi_b5"><input type="radio" value="5" name="komunikasi_b" id="komunikasi_b5"></td>
                                                </tr>
                                                <tr>
                                                    <td>Kerjasama tim</td>
                                                    <td for="kerjasama_b1"><input type="radio" value="1" name="kerjasama_b" id="kerjasama_b1"></td>
                                                    <td for="kerjasama_b2"><input type="radio" value="2" name="kerjasama_b" id="kerjasama_b2"></td>
                                                    <td for="kerjasama_b3"><input type="radio" value="3" name="kerjasama_b" id="kerjasama_b3"></td>
                                                    <td for="kerjasama_b4"><input type="radio" value="4" name="kerjasama_b" id="kerjasama_b4"></td>
                                                    <td for="kerjasama_b5"><input type="radio" value="5" name="kerjasama_b" id="kerjasama_b5"></td>
                                                </tr>
                                                <tr>
                                                    <td>Pengembangan diri</td>
                                                    <td for="pengembangan_diri_b1"><input type="radio" value="1" name="pengembangan_diri_b" id="pengembangan_diri_b1"></td>
                                                    <td for="pengembangan_diri_b2"><input type="radio" value="2" name="pengembangan_diri_b" id="pengembangan_diri_b2"></td>
                                                    <td for="pengembangan_diri_b3"><input type="radio" value="3" name="pengembangan_diri_b" id="pengembangan_diri_b3"></td>
                                                    <td for="pengembangan_diri_b4"><input type="radio" value="4" name="pengembangan_diri_b" id="pengembangan_diri_b4"></td>
                                                    <td for="pengembangan_diri_b5"><input type="radio" value="5" name="pengembangan_diri_b" id="pengembangan_diri_b5"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /step-->

                                <div class="step">
                                    <h6><b>KUESIONER OPSIONAL</b></h6>
                                    <br>
                                    <h3 class="main_question">A. Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini dilaksanakan di program studi anda?</h3>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="text-align: center;">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">Metode&nbsp;Pembelajaran</th>
                                                    <th>Sangat Besar</th>
                                                    <th>Besar</th>
                                                    <th>Cukup</th>
                                                    <th>Kurang</th>
                                                    <th>Tidak Sama Sekali</th>
                                                </tr>
                                                <tr>
                                                    <th>1</th>
                                                    <th>2</th>
                                                    <th>3</th>
                                                    <th>4</th>                                                    
                                                    <th>5</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Perkuliahan</td>
                                                    <td for="perkuliahan1"><input type="radio" name="perkuliahan" id="perkuliahan1" value="1"></td>
                                                    <td for="perkuliahan2"><input type="radio" name="perkuliahan" id="perkuliahan2" value="2"></td>
                                                    <td for="perkuliahan3"><input type="radio" name="perkuliahan" id="perkuliahan3" value="3"></td>
                                                    <td for="perkuliahan4"><input type="radio" name="perkuliahan" id="perkuliahan4" value="4"></td>
                                                    <td for="perkuliahan5"><input type="radio" name="perkuliahan" id="perkuliahan5" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>Demonstrasi</td>
                                                    <td for="demontasi1"><input type="radio" name="demontasi" id="demontasi1" value="1"></td>
                                                    <td for="demontasi2"><input type="radio" name="demontasi" id="demontasi2" value="2"></td>
                                                    <td for="demontasi3"><input type="radio" name="demontasi" id="demontasi3" value="3"></td>
                                                    <td for="demontasi4"><input type="radio" name="demontasi" id="demontasi4" value="4"></td>
                                                    <td for="demontasi5"><input type="radio" name="demontasi" id="demontasi5" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>Partisipasi dalam proyek riset</td>
                                                    <td for="partisipasi1"><input type="radio" name="partisipasi" id="partisipasi1" value="1"></td>
                                                    <td for="partisipasi2"><input type="radio" name="partisipasi" id="partisipasi2" value="2"></td>
                                                    <td for="partisipasi3"><input type="radio" name="partisipasi" id="partisipasi3" value="3"></td>
                                                    <td for="partisipasi4"><input type="radio" name="partisipasi" id="partisipasi4" value="4"></td>
                                                    <td for="partisipasi5"><input type="radio" name="partisipasi" id="partisipasi5" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>Magang</td>
                                                    <td for="magang1"><input type="radio" name="magang" id="magang1" value="1"></td>
                                                    <td for="magang2"><input type="radio" name="magang" id="magang2" value="2"></td>
                                                    <td for="magang3"><input type="radio" name="magang" id="magang3" value="3"></td>
                                                    <td for="magang4"><input type="radio" name="magang" id="magang4" value="4"></td>
                                                    <td for="magang5"><input type="radio" name="magang" id="magang5" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>Praktikum</td>
                                                    <td for="praktikum1"><input type="radio" name="praktikum" id="praktikum1" value="1"></td>
                                                    <td for="praktikum2"><input type="radio" name="praktikum" id="praktikum2" value="2"></td>
                                                    <td for="praktikum3"><input type="radio" name="praktikum" id="praktikum3" value="3"></td>
                                                    <td for="praktikum4"><input type="radio" name="praktikum" id="praktikum4" value="4"></td>
                                                    <td for="praktikum5"><input type="radio" name="praktikum" id="praktikum5" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>Kerja Lapangan</td>
                                                    <td for="kerja_lapangan1"><input type="radio" name="kerja_lapangan" id="kerja_lapangan1" value="1"></td>
                                                    <td for="kerja_lapangan2"><input type="radio" name="kerja_lapangan" id="kerja_lapangan2" value="2"></td>
                                                    <td for="kerja_lapangan3"><input type="radio" name="kerja_lapangan" id="kerja_lapangan3" value="3"></td>
                                                    <td for="kerja_lapangan4"><input type="radio" name="kerja_lapangan" id="kerja_lapangan4" value="4"></td>
                                                    <td for="kerja_lapangan5"><input type="radio" name="kerja_lapangan" id="kerja_lapangan5" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>Diskusi</td>
                                                    <td for="diskusi1"><input type="radio" name="diskusi" id="diskusi1" value="1"></td>
                                                    <td for="diskusi2"><input type="radio" name="diskusi" id="diskusi2" value="2"></td>
                                                    <td for="diskusi3"><input type="radio" name="diskusi" id="diskusi3" value="3"></td>
                                                    <td for="diskusi4"><input type="radio" name="diskusi" id="diskusi4" value="4"></td>
                                                    <td for="diskusi5"><input type="radio" name="diskusi" id="diskusi5" value="5"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <h3 class="main_question">B. Kapan Anda mulai mencari pekerjaan? <b><i>Mohon pekerjaan sambilan tidak dimasukan</i></b></h3>
                                    <input type="hidden" name="jenis_mulai_cari_kerja" id="jenis_mulai_cari_kerja">
                                    <input type="hidden" name="mulai_cari_kerja" id="mulai_cari_kerja">
                                    <div class="form-group">
                                        <label>Kira-kira <input style="display: inherit; width: auto;" type="text" id="sebelum_mencari" oninput="mulaiKerjaInput('sebelum', this.value)" class="form-control" /> bulan sebelum lulus</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Kira-kira <input style="display: inherit; width: auto;" type="text" id="sesudah_mencari" oninput="mulaiKerjaInput('sesudah', this.value)" class="form-control" /> bulan sesudah lulus</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Saya tidak mencari pekerjaan
                                            <input type="checkbox" id="tidak_mencari" name="tidak_mencari" value="Saya tidak mencari pekerjaan" class="" onchange="mulaiKerja('Saya tidak mencari pekerjaan'); getVals(this, 'tidak_mencari');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <br>
                                    <h3 class="main_question">C. Bagaimana Anda mencari pekerjaan tersebut? <i><b>Jawaban bisa lebih dari satu</b></i></h3>
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Melalui iklan di koran/majalah, brosur
                                            <input type="checkbox" name="cara_mencari_kerja[]" value="Melalui iklan di koran/majalah, brosur" class="" onchange="caraMencari('ya'); getVals(this, 'cara_mencari_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Melamar ke perusahaan tanpa mengatuhi lowongan yang ada
                                            <input type="checkbox" name="cara_mencari_kerja[]" value="Melamar ke perusahaan tanpa mengatuhi lowongan yang ada" class="" onchange="caraMencari('ya'); getVals(this, 'cara_mencari_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Pergi ke bursa/pameran kerja
                                            <input type="checkbox" name="cara_mencari_kerja[]" value="Pergi ke bursa/pameran kerja" class="" onchange="caraMencari('ya'); getVals(this, 'cara_mencari_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Mencari lewat internet/iklan online/milis
                                            <input type="checkbox" name="cara_mencari_kerja[]" value="Mencari lewat internet/iklan online/milis" class="" onchange="caraMencari('ya'); getVals(this, 'cara_mencari_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Dihubungi oleh perusahaan
                                            <input type="checkbox" name="cara_mencari_kerja[]" value="Dihubungi oleh perusahaan" class="" onchange="caraMencari('ya'); getVals(this, 'cara_mencari_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Menghubungi Kemenakertrans
                                            <input type="checkbox" name="cara_mencari_kerja[]" value="Menghubungi Kemenakertrans" class="" onchange="caraMencari('ya'); getVals(this, 'cara_mencari_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Menghubungi agen tenaga kerja komersial/swasta
                                            <input type="checkbox" name="cara_mencari_kerja[]" value="Menghubungi agen tenaga kerja komersial/swasta" class="" onchange="caraMencari('ya'); getVals(this, 'cara_mencari_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Memperoleh informasi dari pusat/kantor pengembangan karir fakultas/universitas
                                            <input type="checkbox" name="cara_mencari_kerja[]" value="Memperoleh informasi dari pusat/kantor pengembangan karir fakultas/universitas" class="" onchange="caraMencari('ya'); getVals(this, 'cara_mencari_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Menghubungi kantor kemahasiswaan/hubungan alumni
                                            <input type="checkbox" name="cara_mencari_kerja[]" value="Menghubungi kantor kemahasiswaan/hubungan alumni" class="" onchange="caraMencari('ya'); getVals(this, 'cara_mencari_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Membangun jejaring (network) sejak masih kuliah
                                            <input type="checkbox" name="cara_mencari_kerja[]" value="Membangun jejaring (network) sejak masih kuliah" class="" onchange="caraMencari('ya'); getVals(this, 'cara_mencari_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll)
                                            <input type="checkbox" name="cara_mencari_kerja[]" value="Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll)" class="" onchange="caraMencari('ya'); getVals(this, 'cara_mencari_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Membangun bisnis sendiri
                                            <input type="checkbox" name="cara_mencari_kerja[]" value="Membangun bisnis sendiri" class="" onchange="caraMencari('ya'); getVals(this, 'cara_mencari_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Melalui penempatan kerja atau magang
                                            <input type="checkbox" name="cara_mencari_kerja[]" value="Melalui penempatan kerja atau magang" class="" onchange="caraMencari('ya'); getVals(this, 'cara_mencari_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Bekerja di tempat yang sama dengan tempat kerja semasa kuliah
                                            <input type="checkbox" name="cara_mencari_kerja[]" value="Bekerja di tempat yang sama dengan tempat kerja semasa kuliah" class="" onchange="caraMencari('ya'); getVals(this, 'cara_mencari_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Lainnya:
                                            <input type="checkbox" name="cara_mencari_kerja[]" id="caramencari_kerja" value="" class="" onchange="caraMencari('tidak'); getVals(this, 'cara_mencari_kerja');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div id="view_tuliskan_mencari_kerja"></div>
                                </div>
                                <div class="step">
                                    <h6><b>KUESIONER OPSIONAL</b></h6>
                                    <br>
                                    <h3 class="main_question">D. Berapa perusahaan/instansi/institusi yang sudah Anda lamar (lewat surat atau email) sebelum Anda memperoleh pekerjaan?</h3>
                                    <div class="form-group">
                                        <label><input style="display: inherit; width: auto;" type="text" name="banyak_perusahaan_lamar" class="form-control " /> Perusahaan/instansi/institusi</label>
                                    </div>
                                    <br>
                                    <h3 class="main_question">E. Berapa banyak perusahaan/instansi/institusi yang merespon lamaran Anda?</h3>
                                    <div class="form-group">
                                        <label><input style="display: inherit; width: auto;" type="text" name="banyak_perusahaan_respon_lamar" class="form-control " /> Perusahaan/instansi/institusi</label>
                                    </div>
                                    <br>
                                    <h3 class="main_question">F. Berapa banyak perusahaan/instansi/institusi yang mengundang Anda untuk wawancara?</h3>
                                    <div class="form-group">
                                        <label><input style="display: inherit; width: auto;" type="text" name="banyak_perusahaan_mengundang" class="form-control " /> Perusahaan/instansi/institusi</label>
                                    </div>                                   
                                    <br>
                                    <h3 class="main_question">D. Bagaimana Anda menggambarkan situasi Anda saat ini? <i><b>Jawaban bisa lebih dari satu</b></i></h3>
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana
                                            <input type="checkbox" name="situasi_saat_ini[]" value="Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana" class="" onchange="situasiSaatIni('ya'); getVals(this, 'situasi_saat_ini');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Saya menikah
                                            <input type="checkbox" name="situasi_saat_ini[]" value="Saya menikah" class="" onchange="situasiSaatIni('ya'); getVals(this, 'situasi_saat_ini');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Saya sibuk dengan keluarga dan anak-anak
                                            <input type="checkbox" name="situasi_saat_ini[]" value="Saya sibuk dengan keluarga dan anak-anak" class="" onchange="situasiSaatIni('ya'); getVals(this, 'situasi_saat_ini');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Saya sekarang sedang mencari pekerjaan
                                            <input type="checkbox" name="situasi_saat_ini[]" value="Saya sekarang sedang mencari pekerjaan" class="" onchange="situasiSaatIni('ya'); getVals(this, 'situasi_saat_ini');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>                                    
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Lainnya:
                                            <input type="checkbox" name="situasi_saat_ini[]" id="situasisaat_ini" value="" class="" onchange="situasiSaatIni('tidak'); getVals(this, 'situasi_saat_ini');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div id="view_tuliskan_situasi"></div>
                                </div>
                                <div class="submit step">
                                    <h3 class="main_question">Apakah Anda aktif mencari pekerjaan dalam 4 minggu terakhir? Pilihlah satu jawaban,</h3>                                    
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Tidak
                                            <input type="radio" name="aktif_cari_kerja_4_minggu" value="Tidak" class="" onchange="aktif_cari_kerja_4_minggu('ya'); getVals(this, '');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>         
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Tidak, tapi saya sedang menunggu hasil lamaran kerja
                                            <input type="radio" name="aktif_cari_kerja_4_minggu" value="Tidak, tapi saya sedang menunggu hasil lamaran kerja" class="" onchange="aktif_cari_kerja_4_minggu('ya'); getVals(this, '');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>         
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Ya, saya akan mulai bekerja dalam 2 minggu ke depan
                                            <input type="radio" name="aktif_cari_kerja_4_minggu" value="Ya, saya akan mulai bekerja dalam 2 minggu ke depan" class="" onchange="aktif_cari_kerja_4_minggu('ya'); getVals(this, '');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>         
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan
                                            <input type="radio" name="aktif_cari_kerja_4_minggu" value="Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan" class="" onchange="aktif_cari_kerja_4_minggu('ya'); getVals(this, '');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>                                    
                                    <div class="form-group">
                                        <label class="container_radio version_2">
                                            Lainnya:
                                            <input type="radio" name="aktif_cari_kerja_4_minggu" id="aktif_cari_kerja_4_minggu" value="" class="" onchange="aktif_cari_kerja_4_minggu('tidak'); getVals(this, 'aktif_cari_kerja_4_minggu');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div id="tuliskancarikerja4"></div>
                                    <br>
                                    <h3 class="main_question">Jika menurut Anda pekerjaan Anda saat ini tidak sesuai dengan pendidikan Anda, mengapa Anda mengambilnya? <i><b>Jawaban bisa lebih dari satu</b></i></h3>
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Pertanyaan tidak sesuai, pekerjaan saya saat ini sudah sesuai dengan pendidikan saya
                                            <input type="checkbox" name="mengambil_kerja_tidak_sesuai_pendidikan[]" value="Pertanyaan tidak sesuai, pekerjaan saya saat ini sudah sesuai dengan pendidikan saya" class="" onchange="mengambilkerja('ya'); getVals(this, 'mengambil_kerja_tidak_sesuai_pendidikan');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>      
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Saya belum mendapatkan pekerjaan yang lebih sesuai dengan pendidikan saya
                                            <input type="checkbox" name="mengambil_kerja_tidak_sesuai_pendidikan[]" value="Saya belum mendapatkan pekerjaan yang lebih sesuai dengan pendidikan saya" class="" onchange="mengambilkerja('ya'); getVals(this, 'mengambil_kerja_tidak_sesuai_pendidikan');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>      
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Di pekerjaan ini saya memperoleh prospek karir yang baik
                                            <input type="checkbox" name="mengambil_kerja_tidak_sesuai_pendidikan[]" value="Di pekerjaan ini saya memperoleh prospek karir yang baik" class="" onchange="mengambilkerja('ya'); getVals(this, 'mengambil_kerja_tidak_sesuai_pendidikan');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>      
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya
                                            <input type="checkbox" name="mengambil_kerja_tidak_sesuai_pendidikan[]" value="Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya" class="" onchange="mengambilkerja('ya'); getVals(this, 'mengambil_kerja_tidak_sesuai_pendidikan');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>      
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya
                                            <input type="checkbox" name="mengambil_kerja_tidak_sesuai_pendidikan[]" value="Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya" class="" onchange="mengambilkerja('ya'); getVals(this, 'mengambil_kerja_tidak_sesuai_pendidikan');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>      
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Saya dapat memperoleh pendapatan yang lebih tinggi di pekerjaan ini
                                            <input type="checkbox" name="mengambil_kerja_tidak_sesuai_pendidikan[]" value="Saya dapat memperoleh pendapatan yang lebih tinggi di pekerjaan ini" class="" onchange="mengambilkerja('ya'); getVals(this, 'mengambil_kerja_tidak_sesuai_pendidikan');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>      
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Pekerjaan saya saat ini lebih aman/terjamin/secure
                                            <input type="checkbox" name="mengambil_kerja_tidak_sesuai_pendidikan[]" value="Pekerjaan saya saat ini lebih aman/terjamin/secure" class="" onchange="mengambilkerja('ya'); getVals(this, 'mengambil_kerja_tidak_sesuai_pendidikan');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>      
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                             Pekerjaan saya saat ini lebih menarik
                                            <input type="checkbox" name="mengambil_kerja_tidak_sesuai_pendidikan[]" value=" Pekerjaan saya saat ini lebih menarik" class="" onchange="mengambilkerja('ya'); getVals(this, 'mengambil_kerja_tidak_sesuai_pendidikan');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>      
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll
                                            <input type="checkbox" name="mengambil_kerja_tidak_sesuai_pendidikan[]" value="Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll" class="" onchange="mengambilkerja('ya'); getVals(this, 'mengambil_kerja_tidak_sesuai_pendidikan');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>      
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya
                                            <input type="checkbox" name="mengambil_kerja_tidak_sesuai_pendidikan[]" value="Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya" class="" onchange="mengambilkerja('ya'); getVals(this, 'mengambil_kerja_tidak_sesuai_pendidikan');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>       
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya
                                            <input type="checkbox" name="mengambil_kerja_tidak_sesuai_pendidikan[]" value="Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya" class="" onchange="mengambilkerja('ya'); getVals(this, 'mengambil_kerja_tidak_sesuai_pendidikan');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>       
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya
                                            <input type="checkbox" name="mengambil_kerja_tidak_sesuai_pendidikan[]" value="Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya" class="" onchange="mengambilkerja('ya'); getVals(this, 'mengambil_kerja_tidak_sesuai_pendidikan');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>                                   
                                    <div class="form-group">
                                        <label class="container_check version_2">
                                            Lainnya:
                                            <input type="checkbox" name="mengambil_kerja_tidak_sesuai_pendidikan[]" id="mengambil_kerja_tidak_sesuai_pendidikan" value="" class="" onchange="mengambilkerja('tidak'); getVals(this, 'mengambil_kerja_tidak_sesuai_pendidikan');" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div id="view_mengambilkerjai"></div>
                                </div>
                                <!-- /step-->
                            </div>
                            <!-- /middle-wizard -->
                            <div id="bottom-wizard">
                                <button type="button" name="backward" class="backward">Sebelumnya</button>
                                <button type="button" name="forward" class="forward">Selanjutnya</button>
                                <button type="button" onclick="prosesSimpan()" class="submit">Simpan</button>
                            </div>
                            <br><br><br><br>
                            <!-- /bottom-wizard -->
                        </form>
                    </div>
                    <!-- /Wizard container -->
                </div>
                <!-- /content-right-->
            </div>
            <!-- /row-->
        </div>
        <!-- /container-fluid -->

        <div class="cd-overlay-nav">
            <span></span>
        </div>
        <!-- /cd-overlay-nav -->

        <div class="cd-overlay-content">
            <span></span>
        </div>
        <!-- /cd-overlay-content -->
        <div class="modal fade"  id="success-txt">
            <div class="modal-dialog modal-dialog-centered text-center " role="document">
                <div class="modal-content tx-size-sm">
                    <div class="modal-body text-center p-4">
                        <i class="fa fa-check-circle fs-100 text-success lh-1 mb-5 d-inline-block"></i>
                        <h4 class="text-success tx-semibold" style="margin-top: -20px;">Terima Kasih!</h4>
                        <p class="mg-b-20 mg-x-20">Terima Kasih Anda Telah Mengisi Survey Dengan Sebenar Benarnya.</p><a href="<?= base_url(); ?>"><button aria-label="Close" class="btn btn-success pd-x-25"  data-bs-dismiss="modal" >Continue</button></a>
                    </div>
                </div>
            </div>
        </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
    <?= view('partials/kuesioner/footer'); ?>
    <script type="text/javascript">
        function getViewDapatKerja(jenis) {
            if (jenis == "YA") {
                html = `<div class="form-group"><label>Dalam berapa bulan anda mendapatkan pekerjaan ?</lable>
                <input type="text" name="berapa_bulan_dapat_kerja" class="form-control"></div>`;
                $('#ya_dapat_kerja').html(html);
                $('#tidak_dapat_kerja').html("");
            } else {
                html = `<div class="form-group"><label>Berapa bulan waktu untuk mendapatkan pekerjaan pertama ?</lable>
                <input type="text" name="berapa_bulan_dapat_kerja" class="form-control"></div>`;
                $('#ya_dapat_kerja').html("");
                $('#tidak_dapat_kerja').html(html);
            }
        }
        function getTuliskanJenisPerusahaan(argument) {
            if (argument == "tidak") {
                html = '';
            } else {
                html = `<div class="form-group"><input type="text" onchange="inputJenisPerusahaan(this.value)" class="form-control"></div>`;
            }
           $('#view_tuliskan_jenis_perusahaan').html(html);
        }

        function inputJenisPerusahaan(tuliskan) {
            $('#tuliskan_jenis_perusahaan').val(tuliskan);
        }

        function sumberdanaKuliah(argument) {
            if (argument == "tidak") {
                html = '';
            } else {
                html = `<div class="form-group"><input type="text" onchange="inputsumberdana(this.value)" class="form-control"></div>`;
            }
            $('#view_tuliskan_sumberdana').html(html);
        }

        function inputsumberdana(tuliskan) {
            $('#tuliskanSumberdana').val(tuliskan);
        }

        
        function mulaiKerjaInput(jenis, argument) {
            $('#mulai_cari_kerja').val(argument);
            if (argument.length == 0) {
                $('#sebelum_mencari').attr('disabled', false);
                $('#sesudah_mencari').attr('disabled', false);
                $('#tidak_mencari').attr('disabled', false);
            } else {
               if (jenis == "sesudah") {
                    $('#sebelum_mencari').attr('disabled', true);
                    $('#tidak_mencari').attr('disabled', true);
               } else {
                    $('#sesudah_mencari').attr('disabled', true);
                    $('#tidak_mencari').attr('disabled', true);
               }
            }
            
            $('#jenis_mulai_cari_kerja').val(jenis);
        }

        function mulaiKerja(argument) {
            $('#mulai_cari_kerja').val(argument);
            if ($('#tidak_mencari').is(':checked')) {
                $('#jenis_mulai_cari_kerja').val("tidak mencari");
                $('#sebelum_mencari').val("");
                $('#sesudah_mencari').val("");
                $('#sebelum_mencari').attr('disabled', true);
                $('#sesudah_mencari').attr('disabled', true);
            } else {
                $('#jenis_mulai_cari_kerja').val("");
                $('#sebelum_mencari').attr('disabled', false);
                $('#sesudah_mencari').attr('disabled', false);
            }
        }

        function caraMencari(argument) {
            if ($('#caramencari_kerja').is(':checked')) {
               html = `<i style="color: red;">* Jika Lebih dari 1 Pisahkan Dengan Tanda Koma (,)</i><div class="form-group"><input type="text" placeholder="Contoh : kuliah saja, tidak ingin, stimata jaya"  onchange="tuliskanCaraMencari(this.value)" class="form-control"></div>`;
                $('#view_tuliskan_mencari_kerja').html(html);
            } else {
                $('#view_tuliskan_mencari_kerja').html("");
            }
        }

        function tuliskanCaraMencari(argument) {
            $('#caramencari_kerja').val(argument);
        }

        function situasiSaatIni(argument) {
            if ($('#situasisaat_ini').is(':checked')) {
               html = `<i style="color: red;">* Jika Lebih dari 1 Pisahkan Dengan Tanda Koma (,)</i><div class="form-group"><input type="text" placeholder="Contoh : kuliah saja, tidak ingin, stimata jaya"  onchange="tuliskanSituasi(this.value)" class="form-control"></div>`;
                $('#view_tuliskan_situasi').html(html);
            } else {
                $('#view_tuliskan_situasi').html("");
            }
        }

        function tuliskanSituasi(argument) {
            $('#situasisaat_ini').val(argument);
        }

        function aktif_cari_kerja_4_minggu(argument) {
            if (argument == "ya") {
                html = '';
            } else {
                html = `<div class="form-group"><input type="text" onchange="inputcarikerja4(this.value)" class="form-control"></div>`;
            }
            $('#tuliskancarikerja4').html(html);
        }

        function inputcarikerja4(tuliskan) {
            $('#aktif_cari_kerja_4_minggu').val(tuliskan);
        }

        function mengambilkerja(argument) {
            if ($('#mengambil_kerja_tidak_sesuai_pendidikan').is(':checked')) {
               html = `<i style="color: red;">* Jika Lebih dari 1 Pisahkan Dengan Tanda Koma (,)</i><div class="form-group"><input type="text" placeholder="Contoh : kuliah saja, tidak ingin, stimata jaya"  onchange="tuliskanMengambilKerja(this.value)" class="form-control"></div>`;
                $('#view_mengambilkerja').html(html);
            } else {
                $('#view_mengambilkerja').html("");
            }
        }

        function tuliskanMengambilKerja(argument) {
            $('#mengambil_kerja_tidak_sesuai_pendidikan').val(argument);
        }

        function prosesSimpan() {
            $.LoadingOverlay('show');
            $.ajax({
                url: $('#wrapped123').attr('action'),
                method: 'POST',
                data: $('#wrapped123').serialize(),
                dataType: 'json',
            }).done(function(data, textStatus, jqXHR) {
                $.LoadingOverlay('hide');
                // toastr.success('Berhasil Merubah Data Bank', 'Berhasil', {positionClass: 'toast-top-right'});  
                $('#success-txt').modal('show');
            }).fail(function(jqXHR, textStatus, errorThrown) {
                $.LoadingOverlay('hide');
                msg = jqXHR?.responseJSON?.messages?.error ? jqXHR.responseJSON.messages.error : errorThrown;
                toastr.error(msg, 'Maaf!');
            }).always(function() {
            });
        }

        function function_name() {
            $('#success-txt').modal('show');
        }
    </script>
</html>
