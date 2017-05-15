<section class="wrapper">

    <div class="row">
        <div class="col-md-3">
            <div class="mini-stat clearfix">
                <span class="mini-stat-icon orange"><i class="fa fa-gavel"></i></span>
                <div class="mini-stat-info">
                    <span> 
                    <?php 
                    $jml_pns = count($pns);
                    echo number_format($jml_pns);
                    ?>
                    </span>
                    Total Data Pegawai
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="mini-stat clearfix">
                <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>
                <div class="mini-stat-info">
                    <span>
                    <?php 
                    $jml_pak = count($pak);
                    echo number_format($jml_pak);
                    ?>
                    </span>
                    Total Data PAK
                </div>
            </div>
        </div>        
    </div>

</section>