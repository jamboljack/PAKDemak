<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>images/logodemak.png">
    <title>Penetapan Angka Kredit Guru</title>
    <!--Core CSS -->
    <link href="<?php echo base_url(); ?>bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>font/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!--Dynamic table-->
    <link href="<?php echo base_url(); ?>js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>js/data-tables/DT_bootstrap.css" />
    <!--Datepicker-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <!--Select-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/select2/select2.css" />    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/style-responsive.css" rel="stylesheet"/>
</head>
<body>
<section id="container">

<!-- Header -->
<?php echo $_header; ?>

<!-- Sidebar -->
<?php echo $_sidebar; ?>

<!--main content start-->
<section id="main-content">
    <!-- Content -->
    <?php echo $content; ?>
</section>
<!--main content end-->
<!-- Righbar -->
<?php echo $_rightbar; ?>
</section>
<!-- Placed js at the end of the document so the pages load faster -->
<!--Core js-->
<script src="<?php echo base_url(); ?>js/jquery.js"></script>
<script src="<?php echo base_url(); ?>js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
<script src="<?php echo base_url(); ?>bs3/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url(); ?>js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.scrollTo/jquery.scrollTo.js"></script>

<script src="<?php echo base_url(); ?>js/bootstrap-switch.js"></script>
<!--Datepicker-->
<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-daterangepicker/daterangepicker.js"></script>
<!--Select-->
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-multi-select/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-multi-select/js/jquery.quicksearch.js"></script>

<script src="<?php echo base_url(); ?>js/select2/select2.js"></script>
<script src="<?php echo base_url(); ?>js/select-init.js"></script>

<!--jQuery Flot Chart-->
<script src="<?php echo base_url(); ?>js/flot-chart/jquery.flot.js"></script>
<script src="<?php echo base_url(); ?>js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url(); ?>js/flot-chart/jquery.flot.resize.js"></script>
<script src="<?php echo base_url(); ?>js/flot-chart/jquery.flot.pie.resize.js"></script>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/data-tables/DT_bootstrap.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.validate.min.js"></script>

<!--common script init for all pages-->
<script src="<?php echo base_url(); ?>js/scripts.js"></script>

<script src="<?php echo base_url(); ?>js/validation-init.js"></script>

<script src="<?php echo base_url(); ?>js/toggle-init.js"></script>

<script src="<?php echo base_url(); ?>js/advanced-form.js"></script>

<!--dynamic table initialization -->
<script src="<?php echo base_url(); ?>js/dynamic_table_init.js"></script>
<!--script for this page-->
</body>
</html>