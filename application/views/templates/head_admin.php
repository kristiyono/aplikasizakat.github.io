<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
    <title><?php echo $title;?></title>
    <style media="screen">
      .myzakat{
        font-family: 'Teko', serif;
        font-size: 25px;
      }
      .footer{
        padding: 0;
        margin: 0;
        height: 50px;
      }
      .footer,p{
        padding: auto;
        margin: auto;

      }
    </style>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?php echo base_url().'admin/notfixlist';?>">
        <img src="<?php echo base_url().'assets/icon/1.png';?>" width="30" height="30" class="d-inline-block align-top" alt="">
        <span class="myzakat">akatinaja</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="<?php echo base_url().'admin/notfixlist';?>">List Not Fix Zakat<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="<?php echo base_url().'admin/fixlist';?>">List Fix Zakat</a>
          <a class="nav-item nav-link" href="<?php echo base_url().'admin/CreateBank';?>" >Create New Bank</a>
          <a class="nav-item nav-link" href="<?php echo base_url().'tentang_kami';?>">Log Out</a>
        </div>
      </div>
    </nav>
    <?php if ($this->session->flashdata('suksesCrt')): ?>
      <p class="text-success alert alert-success text-center"><?php echo $this->session->flashdata('suksesCrt'); ?></p>
    <?php endif; ?>
    <?php if ($this->session->flashdata('gglCrt')): ?>
      <p class="text-danger alert alert-danger text-center"><?php echo $this->session->flashdata('gglCrt'); ?></p>
    <?php endif; ?>
