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
                    <i class="fa fa-edit"></i> EDIT PROMOSI PEGAWAI
                    <span class="tools pull-right">
                        <a class="fa fa-chevron-down" href="javascript:;"></a>
                    </span>
                </header>
                <div class="panel-body">
                    <div class="form">
                        <form class="form-horizontal" method="post" action="<?php echo site_url('pak/updatedatapromosi/'.$this->uri->segment(3)); ?>" name="form1">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">                                                    
                            <p>Dapat dipertimbangkan untuk dinaikkan dalam :</p>
                            <div class="form-group">
                                <label class="control-label col-md-3">Jabatan</label>
                                <div class="col-lg-4">
                                <select class="form-control m-bot15" name="lstJabatan" id="lstJabatan" required>
                                    <option value="">- Pilih Jabatan -</option>
                                    <?php 
                                    foreach($jabatan as $j) 
                                    {
                                        if ($detail->kd_jabfung == $j->kd_jabfung) {
                                    ?>
                                    <option value="<?php echo $j->kd_jabfung; ?>" selected ><?php echo $j->nm_jabfung; ?></option>
                                    <?php } else { ?>
                                    <option value="<?php echo $j->kd_jabfung; ?>" ><?php echo $j->nm_jabfung; ?></option>
                                    <?php
                                        } 
                                    }
                                    ?>
                                </select>                                
                                </div>
                                <?php echo form_error('lstJabatan', '<p class="text-danger">','</p>'); ?>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">TMT Jabatan</label>
                                <div class="col-lg-3">
                                    <input class="form-control form-control-inline input-medium default-date-picker" id="tmtjabatan" name="tmtjabatan" size="16" type="text" value="<?php echo $detail->pak_tmt_jab; ?>" required />
                                    <?php echo form_error('tmtjabatan', '<p class="text-danger">','</p>'); ?>
                                </div>
                            </div>
                            <p>Dan kenaikan pangkat menjadi :</p>
                            <div class="form-group">
                                <label class="control-label col-md-3">Pangkat/Golongan</label>
                                <div class="col-lg-4">
                                <select class="form-control m-bot15" name="lstPangkat" id="lstPangkat" required>
                                    <option value="">- Pilih Pangkat/Golongan -</option>
                                    <?php 
                                    foreach($pangkat as $p) 
                                    {
                                         if ($detail->kd_gol == $p->kd_gol) {
                                    ?>
                                    <option value="<?php echo $p->kd_gol; ?>" selected ><?php echo $p->nm_pkt.' - '.$p->nm_gol; ?></option>
                                    <?php } else { ?>
                                    <option value="<?php echo $p->kd_gol; ?>" ><?php echo $p->nm_pkt.' - '.$p->nm_gol; ?></option>
                                    <?php
                                        } 
                                    }
                                    ?>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">TMT Pangkat</label>
                                <div class="col-lg-3">
                                    <input class="form-control form-control-inline input-medium default-date-picker" id="tmtpangkat" name="tmtpangkat" size="16" type="text" value="<?php echo $detail->pak_tmt_pangkat; ?>" required />
                                    <?php echo form_error('tmtpangkat', '<p class="text-danger">','</p>'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-floppy-disk"></span> Update & Finish</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>        

        </div>
    </div>
</section>            