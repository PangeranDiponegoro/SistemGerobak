<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .badge {
            margin-left: 5px;
        }
    </style>

    <title><?= $title ?></title>
</head>

<body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="<?= base_url(); ?>Home">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>">Data </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>pesanan">Data pesanan </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>barang">Data barang </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href=""></a></li>
        <li class="nav-item"><a class="nav-link" href=""></a></li>
        <li class="nav-item"><a class="nav-link" href=""></a></li>
        <li class="nav-item"><a class="nav-link" href=""></a></li>
        <li class="nav-item"><a class="nav-link" href=""></a></li>
        <li class="nav-item"><a class="nav-link" href=""></a></li>
        <li class="nav-item"><a class="nav-link" href=""></a></li>
        <li class="nav-item"><a class="nav-link" href=""></a></li>
        <li class="nav-item"><a class="nav-link" href=""></a></li>
        <li class="nav-item"><a class="nav-link" href=""></a></li>
        <li class="nav-item"><a class="nav-link" href=""></a></li>
        <li class="nav-item"><a class="nav-link" href=""></a></li>
        <li class="nav-item"><a class="nav-link" href=""></a></li>
        <li class="nav-item"><a class="nav-link" href=""></a></li>
        <li class="nav-item"><a class="nav-link" href=""></a></li>
        <li class="nav-item"><a class="nav-link" href=""></a></li>
        <li class="nav-item"><a class="nav-link" href=""></a></li>
        <li class="nav-item"><a class="nav-link" href=""></a></li>   
        <li class="nav-item"><a class="nav-link" href=""></a></li>
        <li class="nav-item"><a class="nav-link" href=""></a></li>
        <li class="nav-item"><a class="nav-link" href=""></a></li>
        <li class="nav-item"><a class="nav-link" href=""></a></li>  
        <li class="nav-item"><a class="nav-link" href=""></a></li>
        <li class="nav-item"><a class="nav-link" href=""></a></li>
        <li class="nav-item"><a class="nav-link" href=""></a></li>
        <li class="nav-item"><a class="nav-link" href=""></a></li>
            <img src="<?php echo base_url('img/img1.png') ?>"  width="30px" class="mx-auto d-block"></img> 
            
            <a class="dropdown-item" href="<?php echo site_url(); ?>pesanan">Data pesanan</a>
          <a class="dropdown-item" href="<?php echo site_url(); ?>barang">barang</a>
        </li>
        <li class="nav-item"><a class="nav-link" href=""></a></li>

        <li class="nav-item">
            <a href="<?= base_url(); ?>login/logout" class="btn btn-primary" >Logout</a>
        </li>
    </ul>
</body>
        
    