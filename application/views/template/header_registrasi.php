<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- External CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">

  <!-- External Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">

  <title><?php echo $title; ?></title>
</head>
<nav class="navbar navbar-expand-sm sticky-top">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="<?php echo base_url(); ?>"><i class="fas fa-mug-hot"></i> GerobakUser</a>

  <!-- Links -->
  <ul class="navbar-nav ml-auto">
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        <i class="fas fa-bars"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <?php if ($this->session->userdata('level') == '') { ?>
          <a class="dropdown-item" href="<?php echo site_url(); ?>login">Login</a>
          <a class="dropdown-item" href="<?php echo site_url(); ?>login/reg">Registration</a>
        <?php
        } elseif ($this->session->userdata('level') == 'user') {
          ?>
          <a class="dropdown-item" href="<?php echo site_url(); ?>user">Dashboard</a>
          <a class="dropdown-item" href="<?php echo site_url(); ?>user">Menu</a>
          <a class="dropdown-item" href="<?php echo site_url(); ?>user">Order</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url(); ?>login/out">Log Out</a>
        <?php
        } elseif ($this->session->userdata('level') == 'admin') {
          ?>
          <a class="dropdown-item" href="<?php echo site_url(); ?>admin">Dashboard</a>
          <a class="dropdown-item" href="<?php echo site_url(); ?>m"></a>
          <a class="dropdown-item" href="<?php echo site_url(); ?>">Pelanggan</a>
          <a class="dropdown-item" href="<?php echo site_url(); ?>">Transaksi</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url(); ?>login/out">Log Out</a>
        <?php
        }; ?>
      </div>
    </li>
  </ul>
</nav>

<body>