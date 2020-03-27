<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset("backend/assets/images/favicon.ico") }}">

    <!-- DataTables -->
    <link href="{{ asset("backend/plugins/datatables/dataTables.bootstrap4.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("backend/plugins/datatables/buttons.bootstrap4.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ asset("backend/plugins/datatables/responsive.bootstrap4.min.css") }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset("backend/assets/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    {{--<link href="{{ asset("backend/assets/demo/custom.min.css") }}" rel="stylesheet" type="text/css" />--}}

    <link href="{{ asset("backend/assets/css/icons.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("backend/assets/css/metismenu.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("backend/assets/css/style.css") }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset("backend/assets/js/modernizr.min.js") }}"></script>
</head>
<body>
<!-- Begin page -->
<div id="wrapper">
    <!-- Top Bar Start -->
    @include('layouts.partials.topbar')
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
    @include('layouts.partials.sidebar')
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

