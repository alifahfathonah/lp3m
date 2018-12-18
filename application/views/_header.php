<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title><?=$header;?></title>

        <style type="text/css">
        body {
            font-family: sans-serif, arial;
            font-size:  14px;
        }
        .container {
            border: 1px solid #e16c6c;
        }
        .wrapper {
            padding: 20px;
        }
        .menu {
            background-color: #e16c6c;
            font-size: 16px;
            font-weight: bold;
        }
        .menu ul {
            list-style: none;
            margin: 0;
            padding: 0 0 0 4px;
        }
        .menu ul li {
            display: inline-table;
            margin-left: -4px;
        }
        .menu ul li.active {
            background-color: #c66262;
        }
        .menu ul li a {
            display: block;
            text-decoration: none;
            line-height: 50px;
            padding: 0 10px;
            color: #fff;
        }
        .menu ul li a:hover {
            background-color: #c66262;
        }
        .footer {
            background-color: #e16c6c;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        table.data {
            border-collapse: collapse;
        }
        table.data th {
            background-color: #f7ff9b;
        }
        table.data th, table.data td {
            padding: 5px;
        }
        .btn {
            cursor: pointer;
        }


        .dropbtn {
        
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        }
        .dropdown {
        position: relative;
        display: inline-block;
        }
        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #e16c6c;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }
        .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }
        .dropdown-content a:hover {background-color: #f1f1f1}
        .dropdown:hover .dropdown-content {
        display: block;
        }
        </style>
    </head>

<body>

<div class="container">
    <div class="menu">
        <ul>
            <li class="<?=$this->uri->segment(1) == 'home' ? 'active' : null; ?>">
                <a href="<?=site_url('home');?>">Beranda</a>
            </li>
            
            <!--
            <li class="<?=$this->uri->segment(1) == 'standar' ? 'active' : null; ?>">
                <a href="<?=site_url('standar/tampil_standar');?>">+ Standar</a>
            </li>
            <li class="<?=$this->uri->segment(1) == 'mp' ? 'active' : null; ?>">
                <a href="<?=site_url('mp/view');?>">+ Prosedur Mutu</a>
            </li>
            <li class="<?=$this->uri->segment(1) == 'judul' ? 'active' : null; ?>">
                <a href="<?=site_url('judul/view');?>">+ Judul</a>
            </li>
            -->
            
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Transaksi</a>
                <div class="dropdown-content">
                    <a href="<?=site_url('#');?>">Standar</a>
                    <a href="<?=site_url('#');?>">Manual Prosedur</a>
                    <a href="<?=site_url('#');?>">SOP</a>
                    <a href="<?=site_url('#');?>">Formulir</a>
                </div>
            </li>

            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Dokumen</a>
                <div class="dropdown-content">
                    <a href="<?=site_url('sk/view');?>">SK</a>
                    <a href="<?=site_url('#');?>">Buku</a>
                    <a href="<?=site_url('#');?>">Panduan</a>
                </div>
            </li>

            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Data Master</a>
                <div class="dropdown-content">
                    <a href="<?=site_url('standar/tampil_standar');?>">Standar</a>
                    <a href="<?=site_url('mp/view');?>">Manual Prosedur</a>
                    <a href="<?=site_url('judul/view');?>">Judul</a>
                    <a href="<?=site_url('#');?>">Unit Kerja</a>
                    <a href="<?=site_url('#');?>">User</a>
                </div>
            </li>

            <li class="<?=$this->uri->segment(1) == 'monev' ? 'active' : null; ?>">
                <a href="<?=site_url('#');?>">Monev</a>
            </li>
        </ul>
    </div>

    

    <div class="wrapper">
