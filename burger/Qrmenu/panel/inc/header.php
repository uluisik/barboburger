<?php

 session_start();

require_once("vt.php");

if(!isset($_SESSION["musteri"])){

	header("location:giris.php");

}

    ?>





<!DOCTYPE html>

<html lang="zxx">



<head><meta charset="utf-8">

      

      <meta http-equiv="x-ua-compatible" content="IE=edge">

      <meta name="viewport" content="width=device-width, initial-scale=1">

      <meta name="description" content="">

      <meta name="keyword" content="">

      <meta name="author"/>

      <!-- Page Title -->

      <title>E-Menü Panel</title>

      <!-- Main CSS -->			

      <link type="text/css" rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css"/>

      <link type="text/css" rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css"/>

      <link type="text/css" rel="stylesheet" href="assets/plugins/flag-icon/flag-icon.min.css"/>

      <link type="text/css" rel="stylesheet" href="assets/plugins/simple-line-icons/css/simple-line-icons.css">

      <link type="text/css" rel="stylesheet" href="assets/plugins/ionicons/css/ionicons.css">

      <link type="text/css" rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">

      <link type="text/css" rel="stylesheet" href="assets/plugins/jquery-ui/jquery-ui.css">

      <link type="text/css" rel="stylesheet" href="assets/plugins/datatables/jquery.dataTables.min.css">

      <link type="text/css" rel="stylesheet" href="assets/plugins/chartist/chartist.css">

      <link type="text/css" rel="stylesheet" href="assets/plugins/datatables/extensions/dataTables.jqueryui.min.css">

      <link type="text/css" rel="stylesheet" href="assets/plugins/apex-chart/apexcharts.css">

      <link type="text/css" rel="stylesheet" href="assets/css/app.min.css"/>

      <link type="text/css" rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar.min.css"/>

      <link type="text/css" rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar.print.min.css" media="print">

      <link type="text/css" rel="stylesheet" href="assets/css/style.min.css"/>

      <link type="text/css" rel="stylesheet" href="assets/plugins/dropify/css/dropify.min.css">

      <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.4.95/css/materialdesignicons.min.css">

     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js" integrity="sha256-8zyeSXm+yTvzUN1VgAOinFgaVFEFTyYzWShOy9w7WoQ=" crossorigin="anonymous"></script>

        <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js" integrity="sha256-8zyeSXm+yTvzUN1VgAOinFgaVFEFTyYzWShOy9w7WoQ=" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>





      <link type="text/css" rel="stylesheet" href="assets/themify-icons.css">

      <link type="text/css" rel="stylesheet" href="assets/css/datepicker.min.css">

      <!-- Favicon -->	

      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

      <!-- WARNING: Respond.js doesn"t work if you view the page via file:// -->

      <!--[if lt IE 9]>

      <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

      <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

      <![endif]-->

   </head>