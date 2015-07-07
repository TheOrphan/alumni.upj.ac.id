<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Universitas Pembangunan Jaya Alumni Association';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(['style.css','bootstrap.min.css','bootstrap.css','bootstrap-theme.css','bootstrap-theme.min.css']) ?>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <?= $this->Html->script('npm.js') ?>
</head>
<body>
    <header>
        <div class="container">          
            <?= $this->Html->image('logo2.png') ?>
        </div>
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <b class="navbar-brand" href="#">Alumni Site</b>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Program Studi <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><?= $this->Html->link('Akutansi','/pages/pengurus_iluni_prodi') ?></li>
                    <li><a href="#">Management</a></li>
                    <li><a href="#">Ilmu Komunikasi</a></li>
                    <li><a href="#">Psikologi</a></li>
                    <li><a href="#">Desain Komunikasi Visual</a></li>
                    <li><a href="#">Desain Produk</a></li>
                    <li><a href="#">Teknik Informatika</a></li>
                    <li><a href="#">Sistem Informasi</a></li>
                    <li><a href="#">Teknik Sipil</a></li>
                    <li><a href="#">Arsitektur</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" data-toggle="dropdown" class="dropdown-toggle">Career Development Center <b class="caret"></b></a>
                  <ul class="dropdown-menu" id="menu1">
                    <li><?= $this->Html->link('About Career Development Center','/pages/about_cdc') ?></li>
                    <li class="dropdown-submenu">
                      <a href="#">Magang</a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Info Magang</a></li>
                      </ul>
                    </li>
                    <li class="dropdown-submenu">
                      <a href="#">Perusahaan</a>
                      <ul class="dropdown-menu">
                        <li><?= $this->Html->link('Prosedur & Ketentuan','/pages/prosedur_perusahaan') ?></li>
                        <li><a href="#">Informasi</a></li>
                        <li><a href="#">Pendaftaran Perusahaan</a></li>
                        <li><a href="#">Apply Lowongan Kerja</a></li>
                      </ul>
                    </li>
                    <li class="dropdown-submenu">
                      <a href="#">Lowongan</a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Lihat Lowongan</a></li>
                      </ul>
                    </li>
                    <li class="dropdown-submenu">
                      <a href="#">Pelatihan</a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Informas Pelatihan</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Scholarship</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" data-toggle="dropdown" class="dropdown-toggle">Tracer Studi <b class="caret"></b></a>
                  <ul class="dropdown-menu" id="menu1">
                    <li><a href="#">latar belakang</a></li>
                    <li><a href="#">Hasil Tracer</a></li>
                    <li class="dropdown-submenu">
                      <a href="#">kuesioner</a>
                      <ul class="dropdown-menu">
                        <li><a href="#">kumpulan</a></li>
                        <li><a href="#">pengisian</a></li>
                      </ul>
                    </li>
                    <li><a href="#">kontak</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Acara<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Berita Universitas</a></li>
                    <li><a href="#">Berita Program Studi</a></li>
                    <li><a href="#">Kalender</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Iluni<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Pengurus</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" data-toggle="dropdown" class="dropdown-toggle">Tentang Kami <span class="caret"></span></a>
                  <ul class="dropdown-menu" id="menu1">
                    <li><a href="#">Pengurus</a></li>
                    <li class="dropdown-submenu">
                      <a href="#">Dana Abadi</a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Bentuk Partisipasi</a></li>
                        <li><a href="#">Prosedur Partisipasi</a></li>
                        <li><a href="#">Manfaat</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Email</a></li>
                <li><a href="#">FAQ</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </header>

    <div class="container" id="container">

        <div id="content">
            <?= $this->Flash->render() ?>

            <div class="row">
              <div class="container col col-xs-12 col-sm-3 col-md-2 col-lg-2" id="content" style="border-right:1px solid; padding:10px 20px;">
              <!--   Login Form -->
                <form role="form">
                  <div class="form-group">
                    <label for="email">Username:</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd">
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                  </div>
                  <div style="margin-bottom:5px">
                    <button type="submit" class="btn btn-default form-control">Login</button>
                  </div>
                  <div>
                    <a href="#"><button type="" class="btn btn-default form-control">Register</button></a>
                  </div>
                </form> 
              </div>
               <div class="container col col-xs-12 col-sm-9 col-md-10 col-lg-10" id="content"> 
            <?= $this->fetch('content') ?>
            </div>
            </div>
        </div>

    </div>

  <!-- FOOTER -->
    <footer id="bg-footerTop">      
        <div class="container">
          <div class="container-fluid">
              <div class="row">
                <div class="col-md-4" id="footer1">
                    <p>Universitas Pembangunan Jaya</p>
                    <p>Jl. Boulevard Bintaro, Bintaro Jaya Sektor 7 Tangerang Selatan, Banten, Indonesia.</p> 
                    <p>Telepon : (021)7455555- (021) 29045405 </p>
                </div>
                <div class="col-md-4 col-md-offset-4" id="footer2">
                  <a href="">
                    <?= $this->Html->image('f.png') ?>
                  </a>
                  <a href="">
                    <?= $this->Html->image('t.png') ?>
                  </a>
                  <a href="">
                    <?= $this->Html->image('g.png') ?>
                  </a>
                  <a href="">
                    <?= $this->Html->image('l.png') ?>
                  </a>
                  <a href="">
                    <?= $this->Html->image('p.png') ?>
                  </a>
                </div>
              </div>
          </div>
        </div>


         <div class="row">
                <div class="col-md-1" id="footer3" style="background-color: green; height:35px"></div>
                <div class="col-md-2" id="footer3" style="background-color: blue; height:35px"></div>
                <div class="col-md-9" id="footer3" style="background-color: red; height:35px;">
                <div style="margin-left:10%; margin-top:7px;"> 
                <b>Copyright 2014 - Universitas Pembangunan Jaya | All Rights Reserved</b></div>
                </div>
          </div>


              
    </footer>

</body>
</html>
