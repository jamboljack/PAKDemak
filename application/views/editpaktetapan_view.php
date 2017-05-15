<script language="JavaScript" type="text/JavaScript">
function hitunggelar() {
    var myForm  = document.form1;
    var GelarLama  = parseFloat(myForm.gelarlama.value);
    var GelarBaru  = parseFloat(myForm.gelarbaru.value);    
    
    var JumlahGelar  = (GelarLama+GelarBaru);

    if (JumlahGelar >= 0.000) 
    {
        myForm.jumlahgelar.value = JumlahGelar;   
    } 
    else 
    {
        myForm.jumlahgelar.value = 0.000;
    }    
}

function hitungpra() {
    var myForm  = document.form1;
    var PraLama  = parseFloat(myForm.pralama.value);
    var PraBaru  = parseFloat(myForm.prabaru.value);    
    
    var JumlahPra  = (PraLama+PraBaru);

    if (JumlahPra >= 0.000) 
    {
        myForm.jumlahpra.value = JumlahPra;   
    }
    else 
    {
        myForm.jumlahpra.value = 0.000;
    }    
}

function hitungtugas() {
    var myForm  = document.form1;
    var TugasLama  = parseFloat(myForm.tugaslama.value);
    var TugasBaru  = parseFloat(myForm.tugasbaru.value);    
    
    var JumlahTugas  = (TugasLama+TugasBaru);

    if (JumlahTugas >= 0.000) 
    {
        myForm.jumlahtugas.value = JumlahTugas;   
    } 
    else 
    {
        myForm.jumlahtugas.value = 0.000;
    }    
}

function hitungkembang() {
    var myForm  = document.form1;
    var KembangLama  = parseFloat(myForm.kembanglama.value);
    var KembangBaru  = parseFloat(myForm.kembangbaru.value);    
    
    var JumlahKembang  = (KembangLama+KembangBaru);

    if (JumlahKembang >= 0.000) 
    {
        myForm.jumlahkembang.value = JumlahKembang;   
    } 
    else 
    {
        myForm.jumlahkembang.value = 0.000;
    }    
}

function hitungpublikasi() {
    var myForm  = document.form1;
    var PublikasiLama  = parseFloat(myForm.publikasilama.value);
    var PublikasiBaru  = parseFloat(myForm.publikasibaru.value);    
    
    var JumlahPublikasi  = (PublikasiLama+PublikasiBaru);

    if (JumlahPublikasi >= 0.000) 
    {
        myForm.jumlahpublikasi.value = JumlahPublikasi;   
    } 
    else 
    {
        myForm.jumlahpublikasi.value = 0.000;
    }    
}

function hitungkarya() {
    var myForm  = document.form1;
    var KaryaLama  = parseFloat(myForm.karyalama.value);
    var KaryaBaru  = parseFloat(myForm.karyabaru.value);    
    
    var JumlahKarya  = (KaryaLama+KaryaBaru);

    if (JumlahKarya >= 0.000) 
    {
        myForm.jumlahkarya.value = JumlahKarya;   
    } 
    else 
    {
        myForm.jumlahkarya.value = 0.000;
    }    
}

function hitungijazah() {
    var myForm  = document.form1;
    var IjazahLama  = parseFloat(myForm.ijazahlama.value);
    var IjazahBaru  = parseFloat(myForm.ijazahbaru.value);    
    
    var JumlahIjazah  = (IjazahLama+IjazahBaru);

    if (JumlahIjazah >= 0.000) 
    {
        myForm.jumlahijazah.value = JumlahIjazah;   
    } 
    else 
    {
        myForm.jumlahijazah.value = 0.000;
    }    
}

function hitungdukung() {
    var myForm  = document.form1;
    var DukungLama  = parseFloat(myForm.dukunglama.value);
    var DukungBaru  = parseFloat(myForm.dukungbaru.value);    
    
    var JumlahDukung  = (DukungLama+DukungBaru);

    if (JumlahDukung >= 0.000) 
    {
        myForm.jumlahdukung.value = JumlahDukung;   
    } 
    else 
    {
        myForm.jumlahdukung.value = 0.000;
    }    
}

function jumlah() {
    var myForm  = document.form1;
    // Total Utama Lama
    var GLRLama  = parseFloat(myForm.gelarlama.value);
    var PRALama  = parseFloat(myForm.pralama.value);
    var TUGASLama  = parseFloat(myForm.tugaslama.value);
    var KEMBANGLama  = parseFloat(myForm.kembanglama.value);
    var PUBLIKLama  = parseFloat(myForm.publikasilama.value);
    var KARYALama  = parseFloat(myForm.karyalama.value);

    // Total Utama Baru
    var GLRBaru  = parseFloat(myForm.gelarbaru.value);
    var PRABaru  = parseFloat(myForm.prabaru.value);
    var TUGASBaru  = parseFloat(myForm.tugasbaru.value);
    var KEMBANGBaru  = parseFloat(myForm.kembangbaru.value);
    var PUBLIKBaru  = parseFloat(myForm.publikasibaru.value);
    var KARYABaru  = parseFloat(myForm.karyabaru.value);  

    // Total Jumlah Utama
    var JmlGelar  = parseFloat(myForm.jumlahgelar.value);
    var JmlPra  = parseFloat(myForm.jumlahpra.value);    
    var JmlTugas  = parseFloat(myForm.jumlahtugas.value);
    var JmlKembang  = parseFloat(myForm.jumlahkembang.value);    
    var JmlPublikasi  = parseFloat(myForm.jumlahpublikasi.value);    
    var JmlKarya  = parseFloat(myForm.jumlahkarya.value);    

    var JumlahUtamaLama  = (GLRLama+PRALama+TUGASLama+KEMBANGLama+PUBLIKLama+KARYALama);
    var JumlahUtamaBaru  = (GLRBaru+PRABaru+TUGASBaru+KEMBANGBaru+PUBLIKBaru+KARYABaru);
    var JumlahUtamaTotal  = (JmlGelar+JmlPra+JmlTugas+JmlKembang+JmlPublikasi+JmlKarya);

    if (JumlahUtamaLama >= 0.000) 
    {
        myForm.jmlutamalama.value = JumlahUtamaLama;   
    } 
    else 
    {
        myForm.jmlutamalama.value = 0.000;
    } 

    if (JumlahUtamaBaru >= 0.000) 
    {
        myForm.jmlutamabaru.value = JumlahUtamaBaru;   
    } 
    else 
    {
        myForm.jmlutamabaru.value = 0.000;
    } 

    if (JumlahUtamaTotal >= 0.000) 
    {
        myForm.jmlutamatotal.value = JumlahUtamaTotal;   
    } 
    else 
    {
        myForm.jmlutamatotal.value = 0.000;
    }

    // Total Penunjang Lama
    var IJAZAHLama  = parseFloat(myForm.ijazahlama.value);
    var DUKUNGLama  = parseFloat(myForm.dukunglama.value);

    // Total Penunjang Baru
    var IJAZAHBaru  = parseFloat(myForm.ijazahbaru.value);
    var DUKUNGBaru  = parseFloat(myForm.dukungbaru.value);

    // Jumlah Total Penunjang
    var JmlIjazah  = parseFloat(myForm.jumlahijazah.value);
    var JmlDukung  = parseFloat(myForm.jumlahdukung.value);    

    var JumlahPenunjangLama  = (IJAZAHLama+DUKUNGLama);
    var JumlahPenunjangBaru  = (IJAZAHBaru+DUKUNGBaru);
    var JumlahTotalPenunjang  = (JmlIjazah+JmlDukung);

    if (JumlahPenunjangLama >= 0.000) 
    {
        myForm.jmlpenunjanglama.value = JumlahPenunjangLama;   
    } 
    else 
    {
        myForm.jmlpenunjanglama.value = 0.000;
    }

    if (JumlahPenunjangBaru >= 0.000) 
    {
        myForm.jmlpenunjangbaru.value = JumlahPenunjangBaru;   
    } 
    else 
    {
        myForm.jmlpenunjangbaru.value = 0.000;
    }

    if (JumlahTotalPenunjang >= 0.000) 
    {
        myForm.jmlpenunjangtotal.value = JumlahTotalPenunjang;   
    } 
    else 
    {
        myForm.jmlpenunjangtotal.value = 0.000;
    }

    // Jumlah TOTAL LAMA
    var UTAMALama  = parseFloat(myForm.jmlutamalama.value);
    var PENUNJANGLama  = parseFloat(myForm.jmlpenunjanglama.value);

    var JumlahLAMA  = (UTAMALama+PENUNJANGLama);

    if (JumlahLAMA >= 0.000) 
    {
        myForm.totallama.value = JumlahLAMA;   
    } 
    else 
    {
        myForm.totallama.value = 0.000;
    }

    // Jumlah TOTAL BARU
    var UTAMABaru  = parseFloat(myForm.jmlutamabaru.value);
    var PENUNJANGBaru  = parseFloat(myForm.jmlpenunjangbaru.value);

    var JumlahBARU  = (UTAMABaru+PENUNJANGBaru);

    if (JumlahBARU >= 0.000) 
    {
        myForm.totalbaru.value = JumlahBARU;   
    } 
    else 
    {
        myForm.totalbaru.value = 0.000;
    }

    // Jumlah TOTAL SEMUA
    var UTAMATotal  = parseFloat(myForm.jmlutamatotal.value);
    var PENUNJANGTotal  = parseFloat(myForm.jmlpenunjangtotal.value);

    var JumlahTOTAL  = (UTAMATotal+PENUNJANGTotal);

    if (JumlahTOTAL >= 0.000) 
    {
        myForm.totaljumlah.value = JumlahTOTAL;   
    } 
    else 
    {
        myForm.totaljumlah.value = 0.000;
    }
}
</script>
<section class="wrapper">

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <i class="fa fa-user"></i> Data Pegawai
                    <span class="tools pull-right">                        
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                    </span>
                </header>
                <div class="panel-body">
                    <div class="form">
                        <form class="form-horizontal" method="post" action="#">

                            <div class="form-group ">
                                <label for="nama" class="control-label col-lg-3">Nama</label>
                                <div class="col-lg-5">
                                    <input class="form-control" id="nama" name="nama" type="text" value="<?php echo $detail->nmglr; ?>" placeholder="Nama Pegawai" readonly />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="nip" class="control-label col-lg-3">N I P</label>
                                <div class="col-lg-3">
                                    <input class="form-control" id="nip" name="nip" type="text" value="<?php echo $detail->nip; ?>" placeholder="NIP Pegawai" readonly />
                                </div>
                            </div>                            
                            <div class="form-group ">
                                <label for="nuptk" class="control-label col-lg-3">NUPTK</label>
                                <div class="col-lg-3">
                                    <input class="form-control" id="nuptk" name="nuptk" type="text" value="<?php echo $detail->pak_nuptk; ?>" placeholder="Pangkat/Gol. Ruang/TMT" readonly />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="karpeg" class="control-label col-lg-3">No. Karpeg</label>
                                <div class="col-lg-3">
                                    <input class="form-control" id="karpeg" name="karpeg" type="text" value="<?php echo $detail->pak_no_karpeg; ?>" placeholder="Tempat, Tgl. Lahir" readonly />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="karpeg" class="control-label col-lg-3">Nama Unit</label>
                                <div class="col-lg-5">
                                    <input class="form-control" id="karpeg" name="karpeg" type="text" value="<?php echo $detail->nm_skpd; ?>" placeholder="Tempat, Tgl. Lahir" readonly />
                                </div>
                            </div>                         
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            
            <section class="panel">
                <header class="panel-heading">
                    <i class="fa fa-edit"></i> EDIT PENETAPAN ANGKA KREDIT
                    <span class="tools pull-right">
                        <a class="fa fa-chevron-down" href="javascript:;"></a>
                    </span>
                </header>
                <div class="panel-body">
                    <div class="form">
                        <form class="form-horizontal" method="post" action="<?php echo site_url('pak/updatedatatetapan/'.$this->uri->segment(3)); ?>" name="form1">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">                                                    
                            
                            <table width="100%" align="center" class="table  table-hover general-table">
                                <thead>
                                <tr>
                                  <th colspan="3">PENETAPAN ANGKA KREDIT</th>
                                  <th>LAMA</th>
                                  <th>BARU</th>
                                  <th>JUMLAH</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                	<th width="3%">1.</th>
                                	<th colspan="2">UNSUR UTAMA</th>
                                	<td width="15%"></td>
                                	<td width="15%"></td>
                                	<td width="15%"></td>
                               	</tr>
                                <tr>
                                	<td>&nbsp;</td>
                                	<td width="2%">A.</td>
                                	<td width="50%">Pendidikan</td>
                                	<td></td>
                                	<td></td>
                                	<td></td>
                               	</tr>
                                <tr>
                                	<td></td>
                                	<td></td>
                                	<td>1. Mengikuti Pendidikan dan Memperoleh Gelar/Ijazah/Akta</td>
                                	<td><input class="form-control" id="gelarlama" name="gelarlama" type="text" value="<?php echo $detail->pak_gelar_lama; ?>" onkeyup="hitunggelar()" onkeydown="jumlah()" autocomplete="off" required /></td>
                                    <td><input class="form-control" id="gelarbaru" name="gelarbaru" type="text" value="<?php echo $detail->pak_gelar_baru; ?>" onkeyup="hitunggelar()" onkeydown="jumlah()" autocomplete="off" required /></td>
                                    <td><input class="form-control" id="jumlahgelar" name="jumlahgelar" type="text" value="<?php echo $detail->pak_gelar_jumlah; ?>" readonly /></td>
                               	</tr>
                                <tr>
                                	<td></td>
                                	<td></td>
                                	<td>2. Mengikuti Pelatihan Prajabatan</td>
                                	<td><input class="form-control" id="pralama" name="pralama" type="text" value="<?php echo $detail->pak_pra_lama; ?>" onkeyup="hitungpra()" onkeydown="jumlah()" autocomplete="off" required /></td>
                                    <td><input class="form-control" id="prabaru" name="prabaru" type="text" value="<?php echo $detail->pak_pra_baru; ?>" onkeyup="hitungpra()" onkeydown="jumlah()" autocomplete="off" required /></td>
                                    <td><input class="form-control" id="jumlahpra" name="jumlahpra" type="text" value="<?php echo $detail->pak_pra_jumlah; ?>" readonly /></td>
                               	</tr>
                                <tr>
                                	<td></td>
                                	<td>B.</td>
                                	<td>Pembelajaran/Bimbingan dan Tugas Tertentu</td>
                                	<td><input class="form-control" id="tugaslama" name="tugaslama" type="text" value="<?php echo $detail->pak_tugas_lama; ?>" onkeyup="hitungtugas()" onkeydown="jumlah()" autocomplete="off" required /></td>
                                    <td><input class="form-control" id="tugasbaru" name="tugasbaru" type="text" value="<?php echo $detail->pak_tugas_baru; ?>" onkeyup="hitungtugas()" onkeydown="jumlah()" autocomplete="off" required /></td>
                                    <td><input class="form-control" id="jumlahtugas" name="jumlahtugas" type="text" value="<?php echo $detail->pak_tugas_jumlah; ?>" readonly /></td>
                               	</tr>
                                <tr>
                                	<td></td>
                                	<td>C.</td>
                                	<td>Pengembangan Keprofesian Berkelanjutan</td>
                                	<td></td>
                                	<td></td>
                                	<td></td>
                               	</tr>
                                <tr>
                                	<td></td>
                                	<td></td>
                                	<td>1. Pengembangan Diri</td>
                                	<td><input class="form-control" id="kembanglama" name="kembanglama" type="text" value="<?php echo $detail->pak_pengembang_lama; ?>" onkeyup="hitungkembang()" onkeydown="jumlah()" autocomplete="off" required /></td>
                                    <td><input class="form-control" id="kembangbaru" name="kembangbaru" type="text" value="<?php echo $detail->pak_pengembang_baru; ?>" onkeyup="hitungkembang()" onkeydown="jumlah()" autocomplete="off" required /></td>
                                    <td><input class="form-control" id="jumlahkembang" name="jumlahkembang" type="text" value="<?php echo $detail->pak_pengembang_jumlah; ?>" readonly /></td>
                               	</tr>
                                <tr>
                                	<td></td>
                                	<td></td>
                                	<td>2. Publikasi Ilmiah</td>
                                	<td><input class="form-control" id="publikasilama" name="publikasilama" type="text" value="<?php echo $detail->pak_publik_lama; ?>" onkeyup="hitungpublikasi()" onkeydown="jumlah()" autocomplete="off" required /></td>
                                    <td><input class="form-control" id="publikasibaru" name="publikasibaru" type="text" value="<?php echo $detail->pak_publik_baru; ?>" onkeyup="hitungpublikasi()" onkeydown="jumlah()" autocomplete="off" required /></td>
                                    <td><input class="form-control" id="jumlahpublikasi" name="jumlahpublikasi" type="text" value="<?php echo $detail->pak_publik_jumlah; ?>" readonly /></td>
                               	</tr>
                                <tr>
                                	<td></td>
                                	<td></td>
                                	<td>3. Karya Inovatif</td>
                                	<td><input class="form-control" id="karyalama" name="karyalama" type="text" value="<?php echo $detail->pak_karya_lama; ?>" onkeyup="hitungkarya()" onkeydown="jumlah()" autocomplete="off" required /></td>
                                    <td><input class="form-control" id="karyabaru" name="karyabaru" type="text" value="<?php echo $detail->pak_karya_baru; ?>" onkeyup="hitungkarya()" onkeydown="jumlah()" autocomplete="off" required /></td>
                                    <td><input class="form-control" id="jumlahkarya" name="jumlahkarya" type="text" value="<?php echo $detail->pak_karya_jumlah; ?>" readonly /></td>
                               	</tr>
                                <tr>
                                	<td></td>
                                	<th colspan="2">JUMLAH UNSUR UTAMA</th>
                                	<th><input class="form-control" id="jmlutamalama" name="jmlutamalama" type="text" value="<?php echo $detail->pak_jumlahutama_lama; ?>" readonly /></th>
                                    <th><input class="form-control" id="jmlutamabaru" name="jmlutamabaru" type="text" value="<?php echo $detail->pak_jumlahutama_baru; ?>" readonly /></th>
                                    <th><input class="form-control" id="jmlutamatotal" name="jmlutamatotal" type="text" value="<?php echo $detail->pak_jumlahutama_total; ?>" readonly /></th>
                               	</tr>
                                <tr>
                                	<th>2.</th>
                                	<th colspan="2">UNSUR PENUNJANG</th>
                                	<td></td>
                                	<td></td>
                                	<td></td>
                                	<td></td>
                               	</tr>
                                <tr>
                                	<td></td>
                                	<td colspan="2">1. Ijazah yang tidak sesuai</td>
                                	<td><input class="form-control" id="ijazahlama" name="ijazahlama" type="text" value="<?php echo $detail->pak_ijazah_lama; ?>" onkeyup="hitungijazah()" onkeydown="jumlah()" autocomplete="off" required /></td>
                                    <td><input class="form-control" id="ijazahbaru" name="ijazahbaru" type="text" value="<?php echo $detail->pak_ijazah_baru; ?>" onkeyup="hitungijazah()" onkeydown="jumlah()" autocomplete="off" required /></td>
                                    <td><input class="form-control" id="jumlahijazah" name="jumlahijazah" type="text" value="<?php echo $detail->pak_ijazah_jumlah; ?>" readonly /></td>
                               	  </tr>
                                <tr>
                                	<td></td>
                                	<td colspan="2">2. Pendukung Tugas Guru</td>                                	
                                	<td><input class="form-control" id="dukunglama" name="dukunglama" type="text" value="<?php echo $detail->pak_dukung_lama; ?>" onkeyup="hitungdukung()" onkeydown="jumlah()" autocomplete="off" required /></td>
                                    <td><input class="form-control" id="dukungbaru" name="dukungbaru" type="text" value="<?php echo $detail->pak_dukung_baru; ?>" onkeyup="hitungdukung()" onkeydown="jumlah()" autocomplete="off" required /></td>
                                    <td><input class="form-control" id="jumlahdukung" name="jumlahdukung" type="text" value="<?php echo $detail->pak_dukung_jumlah; ?>" readonly /></td>
                               	</tr>
                                <tr>
                                	<td></td>
                                	<th colspan="2">JUMLAH UNSUR PENUNJANG</th>
                                	<th><input class="form-control" id="jmlpenunjanglama" name="jmlpenunjanglama" type="text" value="<?php echo $detail->pak_jumlahpenunjang_lama; ?>" readonly /></th>
                                	<th><input class="form-control" id="jmlpenunjangbaru" name="jmlpenunjangbaru" type="text" value="<?php echo $detail->pak_jumlahpenunjang_baru; ?>" readonly /></th>
                                	<th><input class="form-control" id="jmlpenunjangtotal" name="jmlpenunjangtotal" type="text" value="<?php echo $detail->pak_jumlahpenunjang_total; ?>" readonly /></th>
                               	</tr>
                                <tr>
                                	<th colspan="3">JUMLAH UNSUR UTAMA DAN PENUNJANG</th>
                                	<th><input class="form-control" id="totallama" name="totallama" type="text" value="<?php echo $detail->pak_total_lama; ?>" readonly /></th>
                                    <th><input class="form-control" id="totalbaru" name="totalbaru" type="text" value="<?php echo $detail->pak_total_baru; ?>" readonly /></th>
                                    <th><input class="form-control" id="totaljumlah" name="totaljumlah" type="text" value="<?php echo $detail->pak_total_jumlah; ?>" readonly /></th>
                               	</tr>                            
                                </tbody>
                            </table>
                            <br>
                            <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-floppy-disk"></span> Update & Next</button>                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>        

        </div>
    </div>
</section>