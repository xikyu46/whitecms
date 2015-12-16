<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Demo Microsite</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= tplurl('page/_microsite/css/app.css');?>">
    <link rel="stylesheet" href="<?= tplurl('page/_microsite/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?= tplurl('page/_microsite/css/custom.css');?>">

</head>

  <body data-spy="scroll" data-target="#navbar-scrollspy" data-offset="150"> 
    
    <nav class="navbar navbar-default navbar-pemprov navbar-fixed-top navbar-pemprov-bg">
  <div class="site-title site-title-bg">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand logo" href="#"><img src="http://1.bp.blogspot.com/-hL_fQNve-Vg/VJ2N869zw1I/AAAAAAAAAss/GHaiHQ9IQ3g/s280/logo%2Bsolo%2Bthe%2Bspirit%2Bof%2Bjava.png"></a> <!-- PERUNTUKAN: Variabel URL Logo -->
      </div>
      <section>
        <h3>INI UNTUK JUDUL WEBSITE</h3> <!-- PERUNTUKAN: Variabel Judul Website -->
        <h4>Ini untuk slogan website</h4> <!-- PERUNTUKAN: Variabel Slogan Website -->
      </section>
    </div>
  </div>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand logo" href="/"></a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-scrollspy">
      <ul class="nav navbar-nav">
        <!-- PERUNTUKAN: Variabel Menu dan Link Anchor Menu -->
        <li class="active"><a href="#beranda">Beranda</a></li>
        <li><a href="#tentang">Tentang</a></li>
        <li><a href="#info">Berita</a></li>
        <li><a href="#kontak">Kontak</a></li>
         <!-- END PERUNTUKAN: Variabel Menu dan Link Anchor Menu -->
      </ul>
    </div>
  </div>
</nav>
    
<a href="#beranda" class="btn btn-default btn-anchor-back visible-md-block visible-lg-block"><i class="fa fa-chevron-up fa-lg"></i><section><span>kembali ke atas</span></section>
</a>
<!-- START: Seksi FIRST CONTENT -->
<div class="parallax-content first-content first-background" id="beranda">
  <div class="content-quotes quote-front" >
    <div class="row">
      <div class="col-md-12">
        <h3>"Ini berisi quote untuk kebutuhan event."</h3>
      </div>
    </div>
  </div>
  <div class="content-foot">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <ul class="list-inline text-right">
            <li class="text-center">
              <a href="#">
                <span>facebook_account</span>
                <span class="fa-stack fa-lg">
                  <i class="fa fa-square fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="text-center">
              <a href="#">
                <span>@twitter_account</span>
                <span class="fa-stack fa-lg">
                  <i class="fa fa-square fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>           
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END: Seksi FIRST CONTENT -->

<!-- START: PARALAX #1 -->
  <!-- START: PARALAX #1 - image -->
<section class="parallax-windows" data-image-src="http://chic-id.com/wp-content/uploads/pasar-gede-kota-solo-surakarta-indonesia.jpg" id="tentang"></section>
  <!-- END: PARALAX #1 - image -->

  <!-- START: PARALAX #1 - content -->
<div class="container parallax-content">
  <div class="row">
    <div class="col-md-12">
      <h1>Tentang</h1>
      <hr>
      <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean congue eros ut felis maximus, in vestibulum risus varius. Aliquam consequat non nisl a hendrerit. Sed quam ante, luctus ut euismod in, dignissim eget risus. Duis ligula tellus, efficitur quis libero eu, viverra mollis arcu. Phasellus maximus orci quam. Proin pulvinar euismod arcu vitae consequat. Maecenas finibus eget libero eget dapibus. Phasellus sodales enim quis leo condimentum, in posuere quam venenatis. Nam auctor, orci in volutpat sagittis, metus velit mattis elit, interdum pharetra nulla massa eget purus. Nulla in tincidunt sapien, ut mollis lectus.
      </p>
      <p>
      In iaculis ultrices fermentum. Sed quis facilisis libero, ac egestas quam. Vestibulum commodo dolor posuere nulla faucibus porttitor. Vivamus elementum ex id nibh luctus, vitae consequat tellus aliquam. Phasellus porta, magna quis iaculis fringilla, est justo hendrerit orci, eget iaculis tellus mi et enim. Donec erat felis, ornare nec diam vel, tincidunt iaculis libero. Nullam pulvinar volutpat ultrices. Pellentesque facilisis est mollis risus tempor sodales. In hac habitasse platea dictumst. Donec ullamcorper nec lectus in eleifend. Etiam vitae eros ut ipsum mollis porttitor consequat molestie ex. Phasellus rhoncus aliquet dui in pharetra. Aenean ut odio eros. Sed auctor varius nibh, eget scelerisque felis auctor egestas.
      </p>
      <p>
      Donec faucibus, tortor eget mattis mattis, quam purus tristique nulla, eget tempus nisi odio eget quam. Quisque id ipsum euismod, feugiat lacus elementum, dapibus mauris. Suspendisse at tempor odio, in convallis ex. Sed bibendum congue magna id consequat. Aenean eget erat massa. Vestibulum non volutpat justo, ut aliquet lectus. Sed posuere nunc nec mauris varius tempor. Aenean auctor hendrerit dui, sed fringilla lorem porta vel. Fusce felis ipsum, tempus sit amet leo quis, placerat venenatis lectus. Morbi iaculis dictum tellus eu convallis. Donec condimentum scelerisque tortor. Praesent aliquet venenatis tellus, quis sagittis tellus suscipit a. Phasellus ultrices ipsum mauris, a iaculis leo volutpat a. Aliquam blandit quis ex vitae condimentum. Sed id purus ac eros mollis aliquet eget sit amet mi. Mauris vel felis fermentum, pellentesque arcu quis, volutpat magna.
      </p>
      <p>
      Ut lacinia metus vel lorem suscipit, et commodo mi mattis. Pellentesque augue felis, egestas ut nulla non, pellentesque fermentum lectus. Praesent ac varius enim, sit amet pharetra nulla. Duis suscipit fermentum mauris ac faucibus. Vestibulum lacinia quam scelerisque nibh gravida finibus sed in leo. Cras ut erat nec nulla mollis tempor et vel leo. Mauris libero dolor, viverra ut metus laoreet, sodales vulputate mi. Donec sit amet justo tincidunt, porta mi et, lacinia metus. Morbi feugiat nec tortor nec ullamcorper. Donec ut risus non tortor venenatis fringilla nec condimentum ipsum. Aliquam porta odio ligula, sit amet tristique massa tristique in. Ut tempor id neque id auctor. Donec viverra ipsum justo, in tempor dolor lacinia aliquam. In hac habitasse platea dictumst.
      </p>
      <p>
      Quisque venenatis et dolor vitae venenatis. Sed arcu magna, pretium eget feugiat vitae, rutrum pretium justo. Nam posuere enim eu lacus vulputate, eget egestas purus ornare. Nulla eu iaculis sem, sed accumsan augue. Curabitur sit amet venenatis velit. Ut porta, justo eu varius elementum, lacus quam sodales metus, quis interdum nisi ante congue est. Vivamus ullamcorper felis a dui cursus, at sodales mauris ultricies. Suspendisse vitae euismod enim, vel feugiat orci. Integer sagittis ornare libero, eget hendrerit velit dapibus ut. Vestibulum finibus nibh nisi, consequat egestas nunc feugiat id. Etiam sit amet accumsan elit, ac vulputate nisl. In aliquam, est sit amet sagittis vulputate, lacus tellus vulputate purus, eu consectetur orci quam nec ligula. Nullam ut lectus lorem. Sed id semper quam. Suspendisse vitae lectus nec orci congue condimentum nec congue tortor.
      </p>
    </div>
  </div>
</div>
  <!-- START: PARALAX #1 - content -->
<!-- END: PARALAX #1 -->

<!-- START: PARALAX #2 -->
  <!-- START: PARALAX #2 - image -->
<section class="parallax-windows" data-image-src="http://en.surakarta.go.id/sites/default/files/styles/slideshow/public/field/slideshow/jolodoro.jpg" id="info"></section>
  <!-- END: PARALAX #1 - image -->

  <!-- START: PARALAX #1 - content -->
<div class="container parallax-content">
  <div class="row">
    <div class="col-md-12">
      <h1>Berita</h1>
      <hr>
      <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean congue eros ut felis maximus, in vestibulum risus varius. Aliquam consequat non nisl a hendrerit. Sed quam ante, luctus ut euismod in, dignissim eget risus. Duis ligula tellus, efficitur quis libero eu, viverra mollis arcu. Phasellus maximus orci quam. Proin pulvinar euismod arcu vitae consequat. Maecenas finibus eget libero eget dapibus. Phasellus sodales enim quis leo condimentum, in posuere quam venenatis. Nam auctor, orci in volutpat sagittis, metus velit mattis elit, interdum pharetra nulla massa eget purus. Nulla in tincidunt sapien, ut mollis lectus.
      </p>
      <p>
      In iaculis ultrices fermentum. Sed quis facilisis libero, ac egestas quam. Vestibulum commodo dolor posuere nulla faucibus porttitor. Vivamus elementum ex id nibh luctus, vitae consequat tellus aliquam. Phasellus porta, magna quis iaculis fringilla, est justo hendrerit orci, eget iaculis tellus mi et enim. Donec erat felis, ornare nec diam vel, tincidunt iaculis libero. Nullam pulvinar volutpat ultrices. Pellentesque facilisis est mollis risus tempor sodales. In hac habitasse platea dictumst. Donec ullamcorper nec lectus in eleifend. Etiam vitae eros ut ipsum mollis porttitor consequat molestie ex. Phasellus rhoncus aliquet dui in pharetra. Aenean ut odio eros. Sed auctor varius nibh, eget scelerisque felis auctor egestas.
      </p>
      <p>
      Donec faucibus, tortor eget mattis mattis, quam purus tristique nulla, eget tempus nisi odio eget quam. Quisque id ipsum euismod, feugiat lacus elementum, dapibus mauris. Suspendisse at tempor odio, in convallis ex. Sed bibendum congue magna id consequat. Aenean eget erat massa. Vestibulum non volutpat justo, ut aliquet lectus. Sed posuere nunc nec mauris varius tempor. Aenean auctor hendrerit dui, sed fringilla lorem porta vel. Fusce felis ipsum, tempus sit amet leo quis, placerat venenatis lectus. Morbi iaculis dictum tellus eu convallis. Donec condimentum scelerisque tortor. Praesent aliquet venenatis tellus, quis sagittis tellus suscipit a. Phasellus ultrices ipsum mauris, a iaculis leo volutpat a. Aliquam blandit quis ex vitae condimentum. Sed id purus ac eros mollis aliquet eget sit amet mi. Mauris vel felis fermentum, pellentesque arcu quis, volutpat magna.
      </p>
      <p>
      Ut lacinia metus vel lorem suscipit, et commodo mi mattis. Pellentesque augue felis, egestas ut nulla non, pellentesque fermentum lectus. Praesent ac varius enim, sit amet pharetra nulla. Duis suscipit fermentum mauris ac faucibus. Vestibulum lacinia quam scelerisque nibh gravida finibus sed in leo. Cras ut erat nec nulla mollis tempor et vel leo. Mauris libero dolor, viverra ut metus laoreet, sodales vulputate mi. Donec sit amet justo tincidunt, porta mi et, lacinia metus. Morbi feugiat nec tortor nec ullamcorper. Donec ut risus non tortor venenatis fringilla nec condimentum ipsum. Aliquam porta odio ligula, sit amet tristique massa tristique in. Ut tempor id neque id auctor. Donec viverra ipsum justo, in tempor dolor lacinia aliquam. In hac habitasse platea dictumst.
      </p>
      <p>
      Quisque venenatis et dolor vitae venenatis. Sed arcu magna, pretium eget feugiat vitae, rutrum pretium justo. Nam posuere enim eu lacus vulputate, eget egestas purus ornare. Nulla eu iaculis sem, sed accumsan augue. Curabitur sit amet venenatis velit. Ut porta, justo eu varius elementum, lacus quam sodales metus, quis interdum nisi ante congue est. Vivamus ullamcorper felis a dui cursus, at sodales mauris ultricies. Suspendisse vitae euismod enim, vel feugiat orci. Integer sagittis ornare libero, eget hendrerit velit dapibus ut. Vestibulum finibus nibh nisi, consequat egestas nunc feugiat id. Etiam sit amet accumsan elit, ac vulputate nisl. In aliquam, est sit amet sagittis vulputate, lacus tellus vulputate purus, eu consectetur orci quam nec ligula. Nullam ut lectus lorem. Sed id semper quam. Suspendisse vitae lectus nec orci congue condimentum nec congue tortor.
      </p>
    </div>
  </div>
</div>
  <!-- START: PARALAX #1 - content -->
<!-- END: PARALAX #1 -->

<!-- START PARALAX KONTAK -->
  <!-- START: PARALAX KONTAK - image -->
<section class="parallax-windows" data-image-src="http://static.panoramio.com/photos/large/76825343.jpg" id="kontak"></section>
<!-- <section class="parallax-windows" data-image-src="assets/img/parallax_06.png" id="kontak"></section> -->
  <!-- END: PARALAX KONTAK - image -->

  <!-- START: PARALAX KONTAK - content -->
<div class="container parallax-content">
  <div class="row">
    <div class="col-md-12">
      <h1>Kontak Kami</h1>
      <hr>
      <h5>Silakan hubungi kontak berikut ini:</h5>
      
      <div class="row">

        <div class="col-md-12">
          <ul class="list-inline list-contact">        
            <li>
              <section>
                <i class="fa fa-phone fa-2x"></i>
                <span>0271.xxxxxxxx</span>
              </section>
            </li>
            <li>
              <section>
                <i class="fa fa-envelope-o fa-2x"></i>
                <span>admin@webmail.com</span>
              </a>
            </li>
            <li>
              <section>
                <i class="fa fa-building-o fa-2x"></i>
                <span>Jl. Alamat Detail</span>
              </section>
            </li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
  </div>
</div>
<!-- END: PARALAX KONTAK - content -->


    
    <div class="footer footer-bg fixed-bottom">
  <div class="container">
    <p>Copyright © 2015  - Dinas Komunikasi Informatika Pemerintah Kota Surakarta - All Rights Reserved </p>
  </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="<?= tplurl('page/_microsite/js/jquery.min.js');?>"></script>
<script src="<?= tplurl('page/_microsite/js/bootstrap.min.js');?>"></script>
<script src="<?= tplurl('page/_microsite/js/bootstrap-select.min.js');?>"></script>
<script src="<?= tplurl('page/_microsite/js/parallax.min.js');?>"></script>
<script src="<?= tplurl('page/_microsite/js/parallax-trigger.js');?>"></script>
<script src="<?= tplurl('page/_microsite/js/main.js');?>"></script>
  </body>
</html>

 
