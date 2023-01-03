<!DOCTYPE html>
<html>
<head>
	<title>Surat Periode Pelaporan Hasil Penelusuran Alumni (Tracer Study) Tahun <?= date('Y') ?></title>
</head>
<body>
	<p style="font-weight: bold; float: right;"><?= date('d F Y', strtotime($kuesioner->created_at)); ?></p>

	<center><p style="margin-top: 20px; font-weight: bold; font-size: 18px;">KUESIONER TRACER STUDY 2021</p></center>
	<p style="margin-top: 20px; font-weight: bold; font-size: 18px;">IDENTITAS</p>
	<table>
		<tr>
			<td style="padding-top: 10px; font-size: 18px;">Nomor Mahasiswa</td>
			<td style="padding-top: 10px; font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="padding-top: 10px; font-size: 18px;"><?= $kuesioner->nomor_mahasiswa; ?></td>
		</tr>
		<tr>
			<td style="padding-top: 10px; font-size: 18px;">Kode PT</td>
			<td style="padding-top: 10px; font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="padding-top: 10px; font-size: 18px;"><?= $kuesioner->kode_pt; ?></td>
		</tr>
		<tr>
			<td style="padding-top: 10px; font-size: 18px;">Tahun Lulus</td>
			<td style="padding-top: 10px; font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="padding-top: 10px; font-size: 18px;"><?= $kuesioner->tahun_lulus; ?></td>
		</tr>
		<tr>
			<td style="padding-top: 10px; font-size: 18px;">Kode Prodi</td>
			<td style="padding-top: 10px; font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="padding-top: 10px; font-size: 18px;"><?= $kuesioner->kode_prodi; ?></td>
		</tr>
		<tr>
			<td style="padding-top: 10px; font-size: 18px;">Nama</td>
			<td style="padding-top: 10px; font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="padding-top: 10px; font-size: 18px;"><?= $kuesioner->nama_mahasiswa; ?></td>
		</tr>
		<tr>
			<td style="padding-top: 10px; font-size: 18px;">Nomor Telepon/HP</td>
			<td style="padding-top: 10px; font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="padding-top: 10px; font-size: 18px;"><?= $kuesioner->phone; ?></td>
		</tr>
		<tr>
			<td style="padding-top: 10px; font-size: 18px;">Alamat Email</td>
			<td style="padding-top: 10px; font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="padding-top: 10px; font-size: 18px;"><?= $kuesioner->email; ?></td>
		</tr>
		<tr>
			<td style="padding-top: 10px; font-size: 18px;">NIK</td>
			<td style="padding-top: 10px; font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="padding-top: 10px; font-size: 18px;"><?= $kuesioner->nik_mahasiswa; ?></td>
		</tr>
		<tr>
			<td style="padding-top: 10px; font-size: 18px;">NPWP</td>
			<td style="padding-top: 10px; font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="padding-top: 10px; font-size: 18px;"><?= $kuesioner->npwp; ?></td>
		</tr>
	</table>
	<br><br>
	<p style="margin-top: 10px; font-weight: bold; font-size: 18px;">Kuesioner Wajib</p>
	<ol>
		<li>
			<p style="font-size: 17px;">Jelaskan status Anda saat ini?</p>
			<p style="font-size: 17px; font-weight: bold;">==> <?= $kuesioner->status_kerja; ?></p>
		</li>
		<li>
			<p style="font-size: 17px;">Apakah anda telah mendapatkan pekerjaan <= 6 bulan / termasuk bekerja sebelum lulus ?</p>
			<p style="font-size: 17px; font-weight: bold;">==> <?= $kuesioner->dapat_kerja_kurang_6_bulan." - ".$kuesioner->berapa_bulan_dapat_kerja; ?></p>
			<ul>
				<li>
					<p style="font-size: 17px;">Berapa rata-rata pendapatan anda per bulan ? (take home pay)?</p>
					<p style="font-size: 17px; font-weight: bold;">==> <?= $kuesioner->rata_rata_gaji; ?></p>
				</li>
			</ul>
		</li>
		<li>
			<p style="font-size: 17px;">Dimana lokasi tempat Anda bekerja?</p>
			<p style="font-size: 17px; font-weight: bold;">==> <?= $kuesioner->lokasi_kerja; ?></p>
		</li>
		<li>
			<p style="font-size: 17px;">Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang?</p>
			<p style="font-size: 17px; font-weight: bold;">==> <?= $kuesioner->jenis_perusahaan; ?></p>
		</li>
		<li>
			<p style="font-size: 17px;">Apa nama perusahaan/kantor tempat Anda bekerja?</p>
			<p style="font-size: 17px; font-weight: bold;">==> <?= $kuesioner->nama_perusahaan; ?></p>
		</li>
		<li>
			<p style="font-size: 17px;">Bila berwiraswasta, apa posisi/jabatan Anda saat ini ? </p>
			<p style="font-size: 17px; font-weight: bold;">==> <?= $kuesioner->posisi_wirausaha; ?></p>
		</li>
		<li>
			<p style="font-size: 17px;">Apa tingkat tempat kerja Anda?</p>
			<p style="font-size: 17px; font-weight: bold;">==> <?= $kuesioner->tingkat_tempat_kerja; ?></p>
		</li>
		<li>
			<p style="font-size: 17px;">Pertanyaan studi lanjut :</p>
			<ul>
				<li>
					<p style="font-size: 17px;">Sumber Biaya :</p>
					<p style="font-size: 17px; font-weight: bold;">==> <?= $kuesioner->pertanyaan_studi_biaya; ?></p>
				</li>
				<li>
					<p style="font-size: 17px;">Perguruan Tinggi :</p>
					<p style="font-size: 17px; font-weight: bold;">==> <?= $kuesioner->pertanyaan_studi_perguruan; ?></p>
				</li>
				<li>
					<p style="font-size: 17px;">Program Studi :</p>
					<p style="font-size: 17px; font-weight: bold;">==> <?= $kuesioner->pertanyaan_studi_program; ?></p>
				</li>
				<li>
					<p style="font-size: 17px;">Tanggal Masuk :</p>
					<p style="font-size: 17px; font-weight: bold;">==> <?= $kuesioner->pertanyaan_studi_tanggal; ?></p>
				</li>
			</ul>
		</li>
		<li>
			<p style="font-size: 17px;">Sebutkan sumberdana dalam pembiayaan kuliah? (bukan ketika Studi Lanjut)</p>
			<p style="font-size: 17px; font-weight: bold;">==> <?= $kuesioner->sumber_dana_kuliah; ?></p>
		</li>
		<li>
			<p style="font-size: 17px;">Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?</p>
			<p style="font-size: 17px; font-weight: bold;">==> <?= $kuesioner->hubungan_antara_bidang_studi; ?></p>
		</li>
		<li>
			<p style="font-size: 17px;">Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?</p>
			<p style="font-size: 17px; font-weight: bold;">==> <?= $kuesioner->tingkat_pendidikan_untuk_kerja; ?></p>
		</li>
		<li>
			<p style="font-size: 17px;">Pada saat lulus, pada tingkat mana kompetensi dibawah ini yang Anda kuasai? (A) pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan? (B) </p>
			<table border="1" style="width: 100%;">
				<thead>
					<tr>
						<th style="padding: 15px;">Kompetensi</th>
						<th style="padding: 15px;">A</th>
						<th style="padding: 15px;">B</th>
					</tr>
				</thead>
				<body>
					<tr>
						<td style="padding: 10px;">Etika</td>
						<td style="padding: 10px;"><center><?= $kuesioner->etika_a; ?></center></td>
						<td style="padding: 10px;"><center><?= $kuesioner->etika_b; ?></center></td>
					</tr>
					<tr>
						<td style="padding: 10px;">Keahlian berdasarkan bidang ilmu (profesionalisme)</td>
						<td style="padding: 10px;"><center><?= $kuesioner->keahlian_a; ?></center></td>
						<td style="padding: 10px;"><center><?= $kuesioner->keahlian_b; ?></center></td>
					</tr>
					<tr>
						<td style="padding: 10px;">Bahasa Inggris</td>
						<td style="padding: 10px;"><center><?= $kuesioner->bahasa_inggris_a; ?></center></td>
						<td style="padding: 10px;"><center><?= $kuesioner->bahasa_inggris_b; ?></center></td>
					</tr>
					<tr>
						<td style="padding: 10px;">Penggunaan Teknologi Informasi</td>
						<td style="padding: 10px;"><center><?= $kuesioner->penggunaan_ti_a; ?></center></td>
						<td style="padding: 10px;"><center><?= $kuesioner->penggunaan_ti_b; ?></center></td>
					</tr>
					<tr>
						<td style="padding: 10px;">Komunikasi</td>
						<td style="padding: 10px;"><center><?= $kuesioner->komunikasi_a; ?></center></td>
						<td style="padding: 10px;"><center><?= $kuesioner->komunikasi_b; ?></center></td>
					</tr>
					<tr>
						<td style="padding: 10px;">Kerjasama tim</td>
						<td style="padding: 10px;"><center><?= $kuesioner->kerjasama_a; ?></center></td>
						<td style="padding: 10px;"><center><?= $kuesioner->kerjasama_b; ?></center></td>
					</tr>
					<tr>
						<td style="padding: 10px;">Pengembangan diri</td>
						<td style="padding: 10px;"><center><?= $kuesioner->pengembangan_diri_a; ?></center></td>
						<td style="padding: 10px;"><center><?= $kuesioner->pengembangan_diri_b; ?></center></td>
					</tr>
				</body>		
			</table>
		</li>
	</ol>
	
	<br><br><br><br>
	<p style="margin-top: 10px; font-weight: bold; font-size: 18px;">Kuesioner Opsional</p>
	<ol>
		<li>
			<p style="font-size: 17px;">Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini dilaksanakan di program studi anda?</p>			
			<table border="1" style="width: 100%;">
				<thead>
					<tr>
						<th style="padding: 15px;" rowspan="2">Metode Pembelajaran</th>
						<th style="padding: 15px;"><center>Point Nilai</center></th>
					</tr>
				</thead> 
				<tbody>
					<tr>
						<td style="padding: 10px;">Perkuliahan</td>
						<td style="padding: 10px;"><center><?= $kuesioner->perkuliahan; ?></center></td>
					</tr>
					<tr>
						<td style="padding: 10px;">Demonstrasi</td>
						<td style="padding: 10px;"><center><?= $kuesioner->demontasi; ?></center></td>
					</tr>
					<tr>
						<td style="padding: 10px;">Partisipasi dalam proyek riset</td>
						<td style="padding: 10px;"><center><?= $kuesioner->partisipasi; ?></center></td>
					</tr>
					<tr>
						<td style="padding: 10px;">Magang</td>
						<td style="padding: 10px;"><center><?= $kuesioner->magang; ?></center></td>
					</tr>
					<tr>
						<td style="padding: 10px;">Praktikum</td>
						<td style="padding: 10px;"><center><?= $kuesioner->praktikum; ?></center></td>
					</tr>
					<tr>
						<td style="padding: 10px;">Kerja Lapangan</td>
						<td style="padding: 10px;"><center><?= $kuesioner->kerja_lapangan; ?></center></td>
					</tr>
					<tr>
						<td style="padding: 10px;">Diskusi</td>
						<td style="padding: 10px;"><center><?= $kuesioner->diskusi; ?></center></td>
					</tr>
				</tbody>
			</table>
		</li>
		<li>
			<p style="font-size: 17px;">Kapan Anda mulai mencari pekerjaan? Mohon pekerjaan sambilan tidak dimasukan</p>
			<?php if ($kuesioner->jenis_mulai_cari_kerja == "sebelum") { ?>
				<p style="font-size: 17px; font-weight: bold;">==> Kira-kira <?= $kuesioner->mulai_cari_kerja; ?> bulan sebelum lulus</p>
			<?php } else if ($kuesioner->jenis_mulai_cari_kerja == "sesudah") { ?>
				<p style="font-size: 17px; font-weight: bold;">==> Kira-kira <?= $kuesioner->mulai_cari_kerja; ?> bulan sesudah lulus</p>
			<?php } else { ?>
				<p style="font-size: 17px; font-weight: bold;">==> <?= $kuesioner->mulai_cari_kerja; ?></p>
			<?php } ?>			
		</li>
		<li>
			<p style="font-size: 17px;">Bagaimana Anda mencari pekerjaan tersebut? Jawaban bisa lebih dari satu</p>
			<p style="font-size: 17px; font-weight: bold;">
				==> <ul style="margin-top: -39px; margin-left: 15px;">
					<?php $cara_mencari_kerja = explode("&", $kuesioner->cara_mencari_kerja); ?>
					<?php foreach ($cara_mencari_kerja as $key => $value) { ?>
						<li><?= $value ?><br></li>
					<?php } ?>
				</ul>
			</p>
		</li>
		<li>
			<p style="font-size: 17px;">Berapa perusahaan/instansi/institusi yang sudah Anda lamar (lewat surat atau email) sebelum Anda memperoleh pekerjaan?</p>
			<p style="font-size: 17px; font-weight: bold;">==> <?= $kuesioner->banyak_perusahaan_lamar; ?> Perusahaan/instansi/institusi</p>
		</li>
		<li>
			<p style="font-size: 17px;">Berapa banyak perusahaan/instansi/institusi yang merespon lamaran Anda?</p>
			<p style="font-size: 17px; font-weight: bold;">==> <?= $kuesioner->banyak_perusahaan_respon_lamar; ?> Perusahaan/instansi/institusi</p>
		</li>
		<li>
			<p style="font-size: 17px;">Berapa banyak perusahaan/instansi/institusi yang mengundang Anda untuk wawancara?</p>
			<p style="font-size: 17px; font-weight: bold;">==> <?= $kuesioner->banyak_perusahaan_mengundang; ?> Perusahaan/instansi/institusi</p>
		</li>
		<li>
			<p style="font-size: 17px;">Bagaimana Anda menggambarkan situasi Anda saat ini? Jawaban bisa lebih dari satu</p>
			<p style="font-size: 17px; font-weight: bold;">==>
				<ul style="margin-top: -39px; margin-left: 15px;">
					<?php $situasi_saat_ini = explode("&", $kuesioner->situasi_saat_ini); ?>
					<?php foreach ($situasi_saat_ini as $key => $value) { ?>
						<li><?= $value ?><br></li>
					<?php } ?>
				</ul>
			</p>
		</li> 
		<li>
			<p style="font-size: 17px;">Apakah Anda aktif mencari pekerjaan dalam 4 minggu terakhir? Pilihlah satu jawaban,</p>
			<p style="font-size: 17px; font-weight: bold;">==> <?= $kuesioner->aktif_cari_kerja_4_minggu; ?></p>
		</li>
		<li>
			<p style="font-size: 17px;">Jika menurut Anda pekerjaan Anda saat ini tidak sesuai dengan pendidikan Anda, mengapa Anda mengambilnya? Jawaban bisa lebih dari satu</p>
			<p style="font-size: 17px; font-weight: bold;">==>
				<ul style="margin-top: -39px; margin-left: 15px;">
					<?php $mengambil_kerja_tidak_sesuai_pendidikan = explode("&", $kuesioner->mengambil_kerja_tidak_sesuai_pendidikan); ?>
					<?php foreach ($mengambil_kerja_tidak_sesuai_pendidikan as $key => $value) { ?>
						<li><?= $value ?><br></li>
					<?php } ?>
				</ul>
			</p>
		</li>
	</ol>
	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>