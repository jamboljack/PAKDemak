<section class="wrapper">
    <!-- page start-->
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                <i class="fa fa-list"></i> Daftar Penetapan Angka Kredit Guru
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                </span>
                </header>
                <div class="panel-body">
                <div class="adv-table">
                    <a href="<?php echo site_url('pak/adddata'); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Add New Data</a>
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                    <tr>
                        <th width="8%">No</th>
                        <th width="20%">N I P</th>
                        <th>Nama</th>
                        <th width="20%">User</th>
                        <th class="hidden-phone" width="15%">Tanggal Input</th>
                        <th class="hidden-phone" width="5%">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $no = 1; 
                        foreach($daftar_pak as $r) 
                        {
                    ?>
                    <tr class="gradeX">
                        <td><?php echo $no; ?></td>
                        <td><?php echo $r->nip; ?></td>
                        <td><?php echo $r->nmglr; ?></td>
                        <td><?php echo $r->user_nama; ?></td>
                        <td class="center hidden-phone"><?php echo tgl_indo($r->pak_date_update); ?></td>
                        <td class="center hidden-phone">
                            <a href="<?php echo site_url('pak/editdata/'.$r->pak_id); ?>" title="Edit Data">
                                <i class="fa fa-edit (alias)"></i>
                            </a>
                            |        
                            <a href="<?php echo site_url('pak/deletedata/'.$r->pak_id); ?>" OnClick="return confirm('Yakin Hapus Data Ini ?')" title="Delete Data" />
                                <i class="fa fa-trash-o"></i>                            
                            </a>
                        </td>
                    </tr>
                    <?php
                            $no++; 
                        }
                    ?>                    
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No</th>
                        <th>N I P</th>
                        <th>Nama</th>
                        <th width="20%">User</th>
                        <th class="hidden-phone">Tanggal Input</th>
                        <th class="hidden-phone">Aksi</th>
                    </tr>
                    </tfoot>
                    </table>
                    </div>
                    </div>
                </section>
            </div>
        </div>
    </section>