<script language="JavaScript" type="text/JavaScript">
function myPNS() { 
    var x = document.getElementById("e3"); 
    var PNSID = x.options[(x.selectedIndex)].getAttribute('data-pnsid');
    var NamaGlr = x.options[(x.selectedIndex)].getAttribute('data-nmglr');
    var NIP = x.options[(x.selectedIndex)].getAttribute('data-nip');
    var Karpeg = x.options[(x.selectedIndex)].getAttribute('data-karpeg');
    var NmPkt = x.options[(x.selectedIndex)].getAttribute('data-pkt');
    var NmGol = x.options[(x.selectedIndex)].getAttribute('data-gol');
    var TmtGol = x.options[(x.selectedIndex)].getAttribute('data-tmtgol');
    var Tempat = x.options[(x.selectedIndex)].getAttribute('data-tempat');
    var Tgllhr = x.options[(x.selectedIndex)].getAttribute('data-tgllhr');
    var Jkel = x.options[(x.selectedIndex)].getAttribute('data-jkel');
    var Pddk = x.options[(x.selectedIndex)].getAttribute('data-pddk');
    var Jabatan = x.options[(x.selectedIndex)].getAttribute('data-jabatan');
    var Unit = x.options[(x.selectedIndex)].getAttribute('data-unit');
    document.getElementById("pnsid").value = PNSID;
    document.getElementById("nama").value = NamaGlr;
    document.getElementById("nip").value = NIP;
    document.getElementById("karpeg").value = Karpeg;
    document.getElementById("pangkat").value = NmPkt+' / '+NmGol+' / '+TmtGol; 
    document.getElementById("ttl").value = Tempat+', '+Tgllhr;
    document.getElementById("jk").value = Jkel;
    document.getElementById("didik").value = Pddk;
    document.getElementById("jabatan").value = Jabatan;
    document.getElementById("unit").value = Unit;   
}
</script>

<section class="wrapper">
    
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <i class="fa fa-plus-square"></i> Add Data Penetapan Angka Kredit
                    <span class="tools pull-right">                        
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                    </span>
                </header>
                <div class="panel-body">
                    <form class="form-horizontal" action="#">                        
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Cari Nama</label>
                            <div class="col-lg-6">
                                <select id="e3" class="populate " style="width: 400px" name="slNama" onchange="myPNS()" required>
                                    <option>- Ketikkan Nama -</option>                                    
                                    <?php 
                                    foreach($daftar_nama as $r) 
                                    {
                                    ?>
                                    <option value="<?php echo $r->pns_id; ?>" data-pnsid="<?php echo $r->pns_id; ?>" data-nmglr="<?php echo $r->nmglr; ?>" data-nip="<?php echo $r->nip; ?>" data-karpeg="<?php echo $r->no_karpeg; ?>" data-pkt="<?php echo $r->nm_pkt; ?>" data-gol="<?php echo $r->nm_gol; ?>" data-tmtgol="<?php echo tgl_indo($r->tmtgol); ?>" data-tempat="<?php echo $r->nm_kab; ?>" data-tgllhr="<?php echo tgl_indo($r->tgllhr); ?>" data-jkel="<?php echo $r->jkel; ?>" data-pddk="<?php echo $r->nm_pddk; ?>" data-jabatan="<?php echo $r->nm_jabfung; ?>" data-unit="<?php echo $r->nm_skpd; ?>" ><?php echo $r->nip.' - '.$r->nmglr; ?></option>
                                    <?php 
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            
            <section class="panel">
                <header class="panel-heading">
                    <i class="fa fa-edit"></i> INPUT KETERANGAN PERORANGAN
                    <span class="tools pull-right">
                        <a class="fa fa-chevron-down" href="javascript:;"></a>
                    </span>
                </header>
                <div class="panel-body">
                    <div class="form">
                        <form class="form-horizontal" method="post" action="<?php echo site_url('pak/savedata'); ?>">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">                        

                            <div class="form-group ">
                                <label for="nama" class="control-label col-lg-3">ID</label>
                                <div class="col-lg-1">
                                    <input class="form-control" id="pnsid" name="pnsid" type="text" value="<?php echo set_value('pnsid'); ?>" placeholder="ID PNS" readonly />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="nama" class="control-label col-lg-3">Nama</label>
                                <div class="col-lg-5">
                                    <input class="form-control" id="nama" name="nama" type="text" value="<?php echo set_value('nama'); ?>" placeholder="Nama Pegawai" readonly />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="nip" class="control-label col-lg-3">N I P</label>
                                <div class="col-lg-3">
                                    <input class="form-control" id="nip" name="nip" type="text" value="<?php echo set_value('nip'); ?>" placeholder="NIP Pegawai" readonly />
                                </div>
                            </div>                            
                            <div class="form-group ">
                                <label for="pangkat" class="control-label col-lg-3">Pangkat / Golongan Ruang / TMT</label>
                                <div class="col-lg-5">
                                    <input class="form-control" id="pangkat" name="pangkat" type="text" value="<?php echo set_value('pangkat'); ?>" placeholder="Pangkat/Gol. Ruang/TMT" readonly />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="ttl" class="control-label col-lg-3">Tempat, Tanggal Lahir</label>
                                <div class="col-lg-3">
                                    <input class="form-control" id="ttl" name="ttl" type="text" value="<?php echo set_value('ttl'); ?>" placeholder="Tempat, Tgl. Lahir" readonly />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="jk" class="control-label col-lg-3">Jenis Kelamin</label>
                                <div class="col-lg-2">
                                    <input class="form-control" id="jk" name="jk" type="text" value="<?php echo set_value('jk'); ?>" placeholder="Jenis Kelamin" readonly />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="didik" class="control-label col-lg-3">Pendidikan Tertinggi</label>
                                <div class="col-lg-5">
                                    <input class="form-control" id="didik" name="didik" type="text" value="<?php echo set_value('didik'); ?>" placeholder="Pendidikan Tertinggi" readonly />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="jabatan" class="control-label col-lg-3">Jabatan Fungsional</label>
                                <div class="col-lg-3">
                                    <input class="form-control" id="jabatan" name="jabatan" type="text" value="<?php echo set_value('jabatan'); ?>" placeholder="Jabatan Fungsional" readonly />
                                </div>
                            </div> 
                            <div class="form-group ">
                                <label for="unit" class="control-label col-lg-3">Unit Kerja</label>
                                <div class="col-lg-5">
                                    <input class="form-control" id="unit" name="unit" type="text" value="<?php echo set_value('unit'); ?>" placeholder="Unit Kerja" readonly />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="nuptk" class="control-label col-lg-3">NUPTK</label>
                                <div class="col-lg-3">
                                    <input class="form-control" id="nuptk" name="nuptk" type="text" value="<?php echo set_value('nuptk'); ?>" placeholder="Misal : 99XXXXX" autocomplete="off" required />
                                    <?php echo form_error('nuptk', '<p class="text-danger">','</p>'); ?>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="karpeg" class="control-label col-lg-3">NO. KARPEG</label>
                                <div class="col-lg-3">
                                    <input class="form-control" id="karpeg" name="karpeg" type="text" value="<?php echo set_value('karpeg'); ?>" placeholder="Misal : N 99XXXX" autocomplete="off" required />
                                    <?php echo form_error('karpeg', '<p class="text-danger">','</p>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">TMT Jabatan Fungsional</label>
                                <div class="col-lg-3">
                                    <input class="form-control form-control-inline input-medium default-date-picker" id="tgltmt" name="tgltmt" size="16" type="text" value="<?php echo set_value('tgltmt'); ?>" required />
                                    <?php echo form_error('tgltmt', '<p class="text-danger">','</p>'); ?>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="msgollamathn" class="control-label col-lg-3">Masa Kerja Gol. Lama</label>
                                <div class="col-lg-2">
                                    <input class="form-control" id="msgollamathn" name="msgollamathn" type="text" value="<?php echo set_value('msgollamathn', 0); ?>" placeholder="Hanya Angka" autocomplete="off" required />
                                    <span class="help-block">Tahun</span>
                                    <?php echo form_error('msgollamathn', '<p class="text-danger">','</p>'); ?>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="msgollamabln" class="control-label col-lg-3"></label>
                                <div class="col-lg-2">
                                    <input class="form-control" id="msgollamabln" name="msgollamabln" type="text" value="<?php echo set_value('msgollamabln', 0); ?>" placeholder="Hanya Angka" autocomplete="off" required />
                                    <span class="help-block">Bulan</span>
                                    <?php echo form_error('msgollamabln', '<p class="text-danger">','</p>'); ?>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="msgolbaruthn" class="control-label col-lg-3">Masa Kerja Gol. Baru</label>
                                <div class="col-lg-2">
                                    <input class="form-control" id="msgolbaruthn" name="msgolbaruthn" type="text" value="<?php echo set_value('msgolbaruthn', 0); ?>" placeholder="Hanya Angka" autocomplete="off" required />
                                    <span class="help-block">Tahun</span>
                                    <?php echo form_error('msgolbaruthn', '<p class="text-danger">','</p>'); ?>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="msgolbarubln" class="control-label col-lg-3"></label>
                                <div class="col-lg-2">
                                    <input class="form-control" id="msgolbarubln" name="msgolbarubln" type="text" value="<?php echo set_value('msgolbarubln', 0); ?>" placeholder="Hanya Angka" autocomplete="off" required />
                                    <span class="help-block">Bulan</span>
                                    <?php echo form_error('msgolbarubln', '<p class="text-danger">','</p>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Masa Penilaian</label>
                                <div class="col-md-4">
                                    <div class="input-group input-large" data-date="<?php echo date('Y-m-d'); ?>" data-date-format="yyy-mm-dd">
                                        <input type="text" class="form-control dpd1" value="<?php echo set_value('from'); ?>" name="from" required>
                                        <span class="input-group-addon">s/d</span>
                                        <input type="text" class="form-control dpd2" value="<?php echo set_value('to'); ?>" name="to" required>
                                    </div>
                                    <?php echo form_error('from', '<p class="text-danger">','</p>'); ?>
                                    <?php echo form_error('to', '<p class="text-danger">','</p>'); ?>                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-floppy-disk"></span> Save & Next</button>                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>        

        </div>
    </div>
</section>            