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

                            <div class="text-center invoice-btn">
                                <a href="<?php echo site_url('pak/downloadpdf'.'/'.$this->uri->segment(3)); ?>" target="_blank" class="btn btn-success"><i class="fa fa-cloud-download"></i> Download </a>
                                <a href="<?php echo site_url('pak/preview'.'/'.$this->uri->segment(3)); ?>" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Print </a>
                                <a href="<?php echo site_url('pak'); ?>" class="btn btn-default"><i class="fa fa-home"></i> Home </a>
                            </div>

                        </form>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>            