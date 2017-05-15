<section class="wrapper">
    
    <div class="row">
        <div class="col-lg-12">
            
            <section class="panel">
                <header class="panel-heading">
                    <i class="fa fa-edit"></i> EDIT KETERANGAN PERORANGAN
                    <span class="tools pull-right">
                        <a class="fa fa-chevron-down" href="javascript:;"></a>
                    </span>
                </header>
                <div class="panel-body">
                    <div class="form">
                        <form class="form-horizontal" method="post" action="<?php echo site_url('pak/updatedata/'.$this->uri->segment(3)); ?>">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <input type="hidden" name="pak_id" value="<?php echo $detail->pak_id; ?>" />
                        
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
                                <label for="pangkat" class="control-label col-lg-3">Pangkat / Golongan Ruang / TMT</label>
                                <div class="col-lg-5">
                                    <input class="form-control" id="pangkat" name="pangkat" type="text" value="<?php echo $detail->nm_pkt.', '.$detail->nm_gol.' / '.tgl_indo($detail->tmtgol); ?>" placeholder="Pangkat/Gol. Ruang/TMT" readonly />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="ttl" class="control-label col-lg-3">Tempat, Tanggal Lahir</label>
                                <div class="col-lg-3">
                                    <input class="form-control" id="ttl" name="ttl" type="text" value="<?php echo $detail->nm_kab.', '.tgl_indo($detail->tgllhr); ?>" placeholder="Tempat, Tgl. Lahir" readonly />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="jk" class="control-label col-lg-3">Jenis Kelamin</label>
                                <div class="col-lg-2">
                                    <input class="form-control" id="jk" name="jk" type="text" value="<?php echo $detail->jkel; ?>" placeholder="Jenis Kelamin" readonly />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="didik" class="control-label col-lg-3">Pendidikan Tertinggi</label>
                                <div class="col-lg-5">
                                    <input class="form-control" id="didik" name="didik" type="text" value="<?php echo $detail->nm_pddk; ?>" placeholder="Pendidikan Tertinggi" readonly />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="jabatan" class="control-label col-lg-3">Jabatan Fungsional</label>
                                <div class="col-lg-3">
                                    <input class="form-control" id="jabatan" name="jabatan" type="text" value="<?php echo $detail->nm_jabfung; ?>" placeholder="Jabatan Fungsional" readonly />
                                </div>
                            </div> 
                            <div class="form-group ">
                                <label for="unit" class="control-label col-lg-3">Unit Kerja</label>
                                <div class="col-lg-5">
                                    <input class="form-control" id="unit" name="unit" type="text" value="<?php echo $detail->nm_skpd; ?>" placeholder="Unit Kerja" readonly />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="nuptk" class="control-label col-lg-3">NUPTK</label>
                                <div class="col-lg-3">
                                    <input class="form-control" id="nuptk" name="nuptk" type="text" value="<?php echo $detail->pak_nuptk; ?>" placeholder="Misal : 99XXXXX" autocomplete="off" required />
                                    <?php echo form_error('nuptk', '<p class="text-danger">','</p>'); ?>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="karpeg" class="control-label col-lg-3">NO. KARPEG</label>
                                <div class="col-lg-3">
                                    <input class="form-control" id="karpeg" name="karpeg" type="text" value="<?php echo $detail->pak_no_karpeg; ?>" placeholder="Misal : N 99XXXX" autocomplete="off" required />
                                    <?php echo form_error('karpeg', '<p class="text-danger">','</p>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">TMT Jabatan Fungsional</label>
                                <div class="col-lg-3">
                                    <input class="form-control form-control-inline input-medium default-date-picker" id="tgltmt" name="tgltmt" size="16" type="text" value="<?php echo $detail->pak_tmt_fungsi; ?>" required />
                                    <?php echo form_error('tgltmt', '<p class="text-danger">','</p>'); ?>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="msgollamathn" class="control-label col-lg-3">Masa Kerja Gol. Lama</label>
                                <div class="col-lg-2">
                                    <input class="form-control" id="msgollamathn" name="msgollamathn" type="text" value="<?php echo $detail->pak_lama_kerja_thn; ?>" placeholder="Hanya Angka" autocomplete="off" required />
                                    <span class="help-block">Tahun</span>
                                    <?php echo form_error('msgollamathn', '<p class="text-danger">','</p>'); ?>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="msgollamabln" class="control-label col-lg-3"></label>
                                <div class="col-lg-2">
                                    <input class="form-control" id="msgollamabln" name="msgollamabln" type="text" value="<?php echo $detail->pak_lama_kerja_bln; ?>" placeholder="Hanya Angka" autocomplete="off" required />
                                    <span class="help-block">Bulan</span>
                                    <?php echo form_error('msgollamabln', '<p class="text-danger">','</p>'); ?>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="msgolbaruthn" class="control-label col-lg-3">Masa Kerja Gol. Baru</label>
                                <div class="col-lg-2">
                                    <input class="form-control" id="msgolbaruthn" name="msgolbaruthn" type="text" value="<?php echo $detail->pak_baru_kerja_thn; ?>" placeholder="Hanya Angka" autocomplete="off" required />
                                    <span class="help-block">Tahun</span>
                                    <?php echo form_error('msgolbaruthn', '<p class="text-danger">','</p>'); ?>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="msgolbarubln" class="control-label col-lg-3"></label>
                                <div class="col-lg-2">
                                    <input class="form-control" id="msgolbarubln" name="msgolbarubln" type="text" value="<?php echo $detail->pak_baru_kerja_bln; ?>" placeholder="Hanya Angka" autocomplete="off" required />
                                    <span class="help-block">Bulan</span>
                                    <?php echo form_error('msgolbarubln', '<p class="text-danger">','</p>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Masa Penilaian</label>
                                <div class="col-md-4">
                                    <div class="input-group input-large" data-date="<?php echo date('Y-m-d'); ?>" data-date-format="yyy-mm-dd">
                                        <input type="text" class="form-control dpd1" value=<?php echo $detail->pak_bln_1; ?> name="from" required>
                                        <span class="input-group-addon">s/d</span>
                                        <input type="text" class="form-control dpd2" value=<?php echo $detail->pak_bln_2; ?> name="to" required>
                                    </div>
                                    <?php echo form_error('from', '<p class="text-danger">','</p>'); ?>
                                    <?php echo form_error('to', '<p class="text-danger">','</p>'); ?>                                    
                                </div>
                            </div>

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