<? $this->load->view(tpldir('page/_blocks/header'));?>
<div class="content">
	<div class="container">
		  <div class="home-highlight">
			<div class="row">
				<div class="col-md-8">
					<?= view_mod('slidebanner','outclient');?>
				</div>
				<div class="col-md-4">
					<?= view_mod('news','announce');?>
				</div>
			</div>
		</div>
		
	</div>
	<div class="container">
		<div class="home-event">
			<?= view_mod('event','outclient');?>
			<h4 class="more"><a href="<?= base_url('blog/cat/event');?>">More Events <i class="fa fa-angle-right"></i></a></h4>
			<hr>
		</div>
	</div>



	<div class="container">
		<div class="home-post">
			<div class="row">
				<?= view_mod('news','outclient');?>
				<div class="col-md-7">
					<div class="row">
						<div class="col-md-6">
							<?= view_mod('video','outclient');?>
						</div>
						<div class="col-md-6">

							<h3 class="home-title">Social Media</h3>
							<div class="embed-timeline">
							<a class="twitter-timeline"  href="https://twitter.com/hashtag/kotasolo" data-widget-id="684208181883453440">#kotasolo Tweets</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
		
<div class="container">
  <div class="home-layanan">
    <div class="row">
      <div class="col-md-12">
        <h3 class="home-title">LAYANAN DAN INFORMASI PEMKOT SURAKARTA</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-xs-4">
        <div class="text-center ijo">
          <span class="fa-stack fa-3x">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-bullhorn fa-stack-1x fa-inverse"></i>
          </span>
        </div>
        <h4 class="home-layanan-title">Informasi</h4>
        <ul class="list-unstyled">
          <li><i class="fa fa-check ijo"></i> <a href="#">Tata Cara Masuk Balai Kota</a></li>
          <li><i class="fa fa-check ijo"></i> <a href="#">Prosedur Pendaftaran PNS Kota</a></li>
          <li><i class="fa fa-check ijo"></i> <a href="#">Pengajuan Bantuan Sosial</a></li>
          <li><i class="fa fa-check ijo"></i> <a href="#">Jadwal Pemadaman Bergilir</a></li>
          <li><i class="fa fa-check ijo"></i> <a href="#">Tips dan Trik Ronda Malam</a></li>
        </ul>
      </div>
      <div class="col-md-4 col-xs-4">
        <div class="text-center">
          <span class="fa-stack fa-3x">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-file fa-stack-1x fa-inverse"></i>
          </span>
        </div>
        <h4 class="home-layanan-title">Layanan Online</h4>
        <ul class="list-unstyled">
          <li><i class="fa fa-check"></i> <a href="#">Tata Cara Masuk Balai Kota</a></li>
          <li><i class="fa fa-check"></i> <a href="#">Prosedur Pendaftaran PNS Kota</a></li>
          <li><i class="fa fa-check"></i> <a href="#">Pengajuan Bantuan Sosial</a></li>
          <li><i class="fa fa-check"></i> <a href="#">Jadwal Pemadaman Bergilir</a></li>
          <li><i class="fa fa-check"></i> <a href="#">Tips dan Trik Ronda Malam</a></li>
        </ul>
      </div>
      <div class="col-md-4 col-xs-4">
        <div class="text-center kuning">
          <span class="fa-stack fa-3x">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-folder-open fa-stack-1x fa-inverse"></i>
          </span>
        </div>
        <h4 class="home-layanan-title">Direktori</h4>
        <ul class="list-unstyled">
          <li><i class="fa fa-check kuning"></i> <a href="#">Tata Cara Masuk Balai Kota</a></li>
          <li><i class="fa fa-check kuning"></i> <a href="#">Prosedur Pendaftaran PNS Kota</a></li>
          <li><i class="fa fa-check kuning"></i> <a href="#">Pengajuan Bantuan Sosial</a></li>
          <li><i class="fa fa-check kuning"></i> <a href="#">Jadwal Pemadaman Bergilir</a></li>
          <li><i class="fa fa-check kuning"></i> <a href="#">Tips dan Trik Ronda Malam</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
		
	<div class="container">
	<div class="home-maps">
	<h3 class="home-title">Location</h3>
    
    <form>
      <div class="row">
        <div class="col-md-3">
          <select class="form-control">
            <option>Kecamatan</option>
            <option>Banjarsari</option>
            <option>Laweyan</option>
            <option>Serengan</option>
            <option>Jebres</option>
          </select>
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" placeholder="...">
        </div>
        <div class="col-md-3">
          <button class="btn btn-default">Search</button>
        </div>
      </div>
    </form>
  <div class="map-container">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASCGioUH_SgrfkGU5rkCECqeKxUCLkB20&callback=initMap"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(-7.5667,110.8167),
          zoom: 13,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <div id="map-canvas"></div>
  </div>
	</div>
</div>
</div>

<? $this->load->view(tpldir('page/_blocks/footer'));?>
