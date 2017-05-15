<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/logodemak.png">
<title>Cetak Penetapan Angka Kredit Guru</title>
<style type="text/css">
  Table {border-width: 1px;border-style: solid;border-color: black;border-collapse: collapse;font-family: tahoma;font-size: 14px;}  
    .judul {border-width: 0px;border-style: none;font-family: tahoma;font-size: 12px;}
  Th {border-width: 1px;padding: 3px;border-style: solid;border-color: black; font-family: tahoma; font-size:12px}
  
  Td {border-width: 1px;padding: 3px;border-style: solid;border-color: black; font-family: tahoma; font-size:12px}
  .odd  { background-color:#ffffff; }
  .even { background-color:#dddddd; }
</style>

<style type="text/css">
  body{font-family: tahoma; font-size:12px}
  
  h1{font-size:15px}

  .page {
    width: 21cm;
    min-height: 29.7cm;
    padding: 0.5cm;
    margin: 0.1cm auto;
    border: 0.3px #D3D3D3 none;
    border-radius: 2px;
    background: white;
  }
</style>
</head>

<body>

<div class="page">
  
  <table class="judul" width="100%" cellspacing="0" cellpadding="0">
    <tr>
      <td class="judul" width="61%" height="15" align="right" valign="top">LAMPIRAN V :</td>
      <td class="judul" width="1%">&nbsp;</td>
      <td colspan="2" class="judul">PERATURAN BERSAMA MENTERI PENDIDIKAN<br />
        DAN KEBUDAYAAN DAN KEPALA BADAN<br />
        KEPEGAWAIAN NEGARA</td>
    </tr>
    <tr>
      <td class="judul" height="15">&nbsp;</td>
      <td class="judul">&nbsp;</td>
      <td class="judul" width="16%">NOMOR</td>
      <td class="judul" width="22%">: 03/V/PB/2010</td>
      </tr>
    <tr>
      <td class="judul" height="15">&nbsp;</td>
      <td class="judul">&nbsp;</td>
      <td class="judul">NOMOR</td>
      <td class="judul">: 14 Tahun 2010</td>
    </tr>
    <tr>
      <td class="judul" height="15">&nbsp;</td>
      <td class="judul">&nbsp;</td>
      <td class="judul">TANGGAL</td>
      <td class="judul">: 06 MEI 2010</td>
    </tr>
  </table>
  <br />
  <br />
  <div align="center">
    <b>PENETAPAN ANGKA KREDIT GURU</b><br />
    NOMOR : 860  / &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; / <?php echo date('Y');?>
  </div>
  <table class="judul" width="100%" cellspacing="0" cellpadding="0">
    <tr>
      <td class="judul" width="7%" height="15"><b>Instansi</b></td>
      <td class="judul" width="33%"><b>: DINDIKPORA KAB. DEMAK</b></td>
      <td class="judul" width="60%" align="right">
        <b>Masa Penilaian Bulan : <?php echo tgl_indo($detail->pak_bln_1); ?> s/d <?php echo tgl_indo($detail->pak_bln_2); ?></b>
      </td>
    </tr>
  </table>

  <table width="100%" border="1" align="center" cellpadding="1" cellspacing="1">
    <tr>
      <th width="3%">I</th>
      <th colspan="10" align="left">KETERANGAN PERORANGAN</th>
    </tr>
    <tr>
      <td rowspan="12">&nbsp;</td>
      <td width="4%" align="center">1.</td>
      <td colspan="3">Nama</td>
      <td colspan="6"><b><?php echo $detail->nmglr; ?></b></td>
    </tr>
    <tr>
      <td align="center">2.</td>
      <td colspan="3">NIP</td>
      <td colspan="6"><?php echo $detail->nip; ?></td>
    </tr>
    <tr>
      <td align="center">3.</td>
      <td colspan="3">NUPTK</td>
      <td colspan="6"><?php echo $detail->pak_nuptk; ?></td>
    </tr>
    <tr>
      <td align="center">4. </td>
      <td colspan="3">NO. KARPEG</td>
      <td colspan="6"><?php echo $detail->pak_no_karpeg; ?></td>
    </tr>
    <tr>
      <td align="center">5.</td>
      <td colspan="3">Pangkat / Golongan Ruang / TMT</td>
      <td colspan="3" class="judul"><?php echo $detail->nm_pkt.', '.$detail->nm_gol; ?></td>
      <td width="5%" class="judul">TMT</td>
      <td colspan="2" class="judul">: <?php echo tgl_indo($detail->tmtgol); ?></td>
    </tr>
    <tr>
      <td align="center">6.</td>
      <td colspan="3">Tempat dan Tanggal Lahir</td>
      <td colspan="6"><?php echo $detail->nm_kab.', '.tgl_indo($detail->tgllhr); ?></td>
    </tr>
    <tr>
      <td align="center">7.</td>
      <td colspan="3">Jenis Kelamin</td>
      <td colspan="6"><?php echo $detail->jkel; ?></td>
    </tr>
    <tr>
      <td align="center">8.</td>
      <td colspan="3">Pendidikan Tertinggi</td>
      <td colspan="6"><?php echo $detail->nm_pddk; ?></td>
    </tr>
    <tr>
      <td align="center">9.</td>
      <td colspan="3">Jabatan Fungsional / TMT</td>
      <td colspan="3" class="judul"><?php echo $detail->nm_jabfung; ?></td>
      <td class="judul">TMT</td>
      <td colspan="2" class="judul">: <?php echo tgl_indo($detail->pak_tmt_fungsi); ?></td>
    </tr>
    <tr>
      <td rowspan="2" align="center">10.</td>
      <td colspan="2" rowspan="2">Masa Kerja Golongan</td>
      <td width="18%">Lama</td>
      <td colspan="6"><?php echo $detail->pak_lama_kerja_thn.' Tahun '.$detail->pak_lama_kerja_bln.' Bulan'; ?></td>
    </tr>
    <tr>
      <td>Baru</td>
      <td colspan="6"><?php echo $detail->pak_baru_kerja_thn.' Tahun '.$detail->pak_baru_kerja_bln.' Bulan'; ?></td>
    </tr>
    <tr>
      <td align="center">11.</td>
      <td colspan="3">Unit Kerja</td>
      <td colspan="6"><?php echo $detail->nm_skpd; ?></td>
    </tr>
    <tr>
           <th>II</th>
           <th colspan="5" align="left">PENETAPAN ANGKA KREDIT</th>
           <th width="14%">LAMA</th>
           <th colspan="3">BARU</th>
           <th width="16%">JUMLAH</th>
         </tr>
         <tr>
           <td rowspan="15">&nbsp;</td>
           <th rowspan="10" align="center" valign="top">1.</th>
           <th colspan="4" align="left">UNSUR UTAMA</th>
           <td>&nbsp;</td>
           <td colspan="3">&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td width="4%" align="center">A</td>
           <td colspan="3" align="left">Pendidikan</td>
           <td>&nbsp;</td>
           <td colspan="3">&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td align="left">&nbsp;</td>
           <td colspan="3" align="left">1. Mengikuti Pendidikan dan Memperoleh Gelar/Ijazah/Akta</td>
           <td align="right"><?php echo number_format($detail->pak_gelar_lama, 3); ?></td>
           <td colspan="3" align="right"><?php echo number_format($detail->pak_gelar_baru, 3); ?></td>
           <td align="right"><?php echo number_format($detail->pak_gelar_jumlah, 3); ?></td>
         </tr>
         <tr>
           <td align="left">&nbsp;</td>
           <td colspan="3" align="left">2. Mengikuti Pelatihan Prajabatan</td>
           <td align="right"><?php echo number_format($detail->pak_pra_lama, 3); ?></td>
           <td colspan="3" align="right"><?php echo number_format($detail->pak_pra_baru, 3); ?></td>
           <td align="right"><?php echo number_format($detail->pak_pra_jumlah, 3); ?></td>
         </tr>
         <tr>
           <td align="center">B</td>
           <td colspan="3" align="left">Pembelajaran/Bimbingan dan Tugas Tertentu</td>
           <td align="right"><?php echo number_format($detail->pak_tugas_lama, 3); ?></td>
           <td colspan="3" align="right"><?php echo number_format($detail->pak_tugas_baru, 3); ?></td>
           <td align="right"><?php echo number_format($detail->pak_tugas_jumlah, 3); ?></td>
         </tr>
         <tr>
           <td align="center">C</td>
           <td colspan="3" align="left">Pengembangan Keprofesian Berkelanjutan</td>
           <td>&nbsp;</td>
           <td colspan="3">&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td align="left">&nbsp;</td>
           <td colspan="3" align="left">1. Pengembangan Diri</td>
           <td align="right"><?php echo number_format($detail->pak_pengembang_lama, 3); ?></td>
           <td colspan="3" align="right"><?php echo number_format($detail->pak_pengembang_baru, 3); ?></td>
           <td align="right"><?php echo number_format($detail->pak_pengembang_jumlah, 3); ?></td>
         </tr>
         <tr>
           <td align="left">&nbsp;</td>
           <td colspan="3" align="left">2. Publikasi Ilmiah</td>
           <td align="right"><?php echo number_format($detail->pak_publik_lama,3); ?></td>
           <td colspan="3" align="right"><?php echo number_format($detail->pak_publik_baru, 3); ?></td>
           <td align="right"><?php echo number_format($detail->pak_publik_jumlah, 3); ?></td>
         </tr>
         <tr>
           <td align="left">&nbsp;</td>
           <td colspan="3" align="left">3. Karya Inovatif</td>
           <td align="right"><?php echo number_format($detail->pak_karya_lama, 3); ?></td>
           <td colspan="3" align="right"><?php echo number_format($detail->pak_karya_baru, 3); ?></td>
           <td align="right"><?php echo number_format($detail->pak_karya_jumlah, 3); ?></td>
         </tr>
         <tr>
           <th colspan="4" align="left">JUMLAH UNSUR UTAMA</th>
           <th align="right"><?php echo number_format($detail->pak_jumlahutama_lama, 3); ?></th>
           <th colspan="3" align="right"><?php echo number_format($detail->pak_jumlahutama_baru, 3); ?></th>
           <th align="right"><?php echo number_format($detail->pak_jumlahutama_total, 3); ?></th>
         </tr>
         <tr>
           <th rowspan="4" align="center" valign="top">2.</th>
           <th colspan="4" align="left">UNSUR PENUNJANG</th>
           <td>&nbsp;</td>
           <td colspan="3">&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td colspan="4" align="left">1. Ijazah yang tidak sesuai</td>
           <td align="right"><?php echo number_format($detail->pak_ijazah_lama, 3); ?></td>
           <td colspan="3" align="right"><?php echo number_format($detail->pak_ijazah_baru, 3); ?></td>
           <td align="right"><?php echo number_format($detail->pak_ijazah_jumlah, 3); ?></td>
         </tr>
         <tr>
           <td colspan="4" align="left">2. Pendukung Tugas Guru</td>
           <td align="right"><?php echo number_format($detail->pak_dukung_lama, 3); ?></td>
           <td colspan="3" align="right"><?php echo number_format($detail->pak_dukung_baru, 3); ?></td>
           <td align="right"><?php echo number_format($detail->pak_dukung_jumlah, 3); ?></td>
         </tr>
         <tr>
           <th colspan="4" align="left">JUMLAH UNSUR PENUNJANG</th>
           <th align="right"><?php echo number_format($detail->pak_jumlahpenunjang_lama, 3); ?></th>
           <th colspan="3" align="right"><?php echo number_format($detail->pak_jumlahpenunjang_baru, 3); ?></th>
           <th align="right"><?php echo number_format($detail->pak_jumlahpenunjang_total, 3); ?></th>
         </tr>
         <tr>
           <th colspan="5" align="left">JUMLAH UNSUR UTAMA DAN UNSUR PENUNJANG</th>
           <th align="right"><?php echo number_format($detail->pak_total_lama, 3); ?></th>
           <th colspan="3" align="right"><?php echo number_format($detail->pak_total_baru, 3); ?></th>
           <th align="right"><?php echo number_format($detail->pak_total_jumlah, 3); ?></th>
         </tr>
         <tr>
           <th>III</th>
           <th colspan="10" align="justify"><div>Dapat dipertimbangkan untuk dinaikkan dalam jabatan : <?php echo $detail->jabatan; ?>, TMT : <?php echo tgl_indo($detail->pak_tmt_jab); ?> dan kenaikan pangkat
           menjadi <?php echo $detail->nm_pkt; ?>, Golongan Ruang <?php echo $detail->nm_gol; ?>,  TMT : <?php echo tgl_indo($detail->pak_tmt_pangkat); ?></div></th>
         </tr>
  </table>
  <br />
  <table class="judul" width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td class="judul">&nbsp;</td>
      <td class="judul">&nbsp;</td>
      <td class="judul">&nbsp;</td>
      <td width="23%" align="right" class="judul"><b>DITETAPKAN DI </b></td>
      <td width="22%" align="left" class="judul"><b>: DEMAK</b></td>
    </tr>
    <tr>
      <td class="judul">&nbsp;</td>
      <td class="judul">&nbsp;</td>
      <td class="judul">&nbsp;</td>
      <td align="right" class="judul"><b>PADA TANGGAL </b></td>
      <td align="left" class="judul">:</td>
    </tr>
    <tr>
      <td class="judul">&nbsp;</td>
      <td class="judul">&nbsp;</td>
      <td class="judul">&nbsp;</td>
      <td colspan="2" align="center" class="judul">&nbsp;</td>
    </tr>
    <tr>
    <td class="judul" width="29%">&nbsp;</td>
    <td class="judul" width="16%">&nbsp;</td>
    <td class="judul" width="10%">&nbsp;</td>
    <td colspan="2" align="center" class="judul">
    <div align="center">an. BUPATI DEMAK<br />
      Kepala Dinas Pendidikan Pemuda<br />
      dan Olahraga Kabupaten Demak
      <br />
    <br /><br /><br />
    <br />
    <b>Drs. MUHTAR LUTFI, MM</b><br />
    NIP. 19580205 198503 1 008
    </div>
    </td>
  </tr>
  <tr>
    <td colspan="5" class="judul">Asli disampaikan dengan hormat kepada :</td>
    </tr>
  <tr>
    <td colspan="5" class="judul">Kepala BKN dan Kanreg BKN dan tembusan disampaikan kepada :</td>
  </tr>
  <tr>
    <td colspan="5" class="judul">1. <?php echo $detail->nmglr; ?></td>
  </tr>
  <tr>
    <td colspan="5" class="judul">2. Sekretaris Tim Penilai Guru Kab. Demak</td>
  </tr>
  <tr>
    <td colspan="5" class="judul">3. Kepala Badan Kepegawaian Daerah Kab. Kudus</td>
  </tr>
  <tr>
    <td colspan="5" class="judul">4. Kepala <?php echo $detail->nm_skpd; ?></td>
  </tr>
  </table>

</div>

</body>
</html>