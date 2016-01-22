<? $this->load->view(tpldir('page/_blocks/header'));?>
<div class="content">
	<div class="container">
		<div class="home-carousel">
			<div class="row">
				<?= view_mod('slidebanner','outclient');?>
				<?= view_mod('banner','outclient');?>
			</div>
		</div>
		
	</div>


<div class="home-newsticker">
	<div class="container">
		<?= view_mod('newsticker','outclient');?>
	</div>
</div>

<div class="home-icons">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">

		<div class="row">
          <div class="col-md-4 col-xs-4">
            <div class="text-center">
            <a href="#">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-question fa-stack-1x fa-inverse"></i>
            </span>
            <h4>Info</h4>
            </a>
            </div>
          </div>
          <div class="col-md-4 col-xs-4">
            <div class="text-center">
            <a href="#">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-bell fa-stack-1x fa-inverse"></i>
            </span>
            <h4>Pelayanan</h4>
            </a>
            </div>
          </div>
          <div class="col-md-4 col-xs-4">
            <div class="text-center">
            <a href="#">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
            </span>
            <h4>Pengaduan</h4>
            </a>
            </div>
          </div>
        </div>

      </div>
    </div>

    
  </div>
  <hr>
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
						
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="home-event">
			<?= view_mod('event','outclient');?>
		</div>
		<hr>
		<h4 class="more"><a href="<?= base_url('blog/cat/event');?>">More Events <i class="fa fa-angle-right"></i></a></h4>
	</div>
	
	<div class="home-maps">
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


<? $this->load->view(tpldir('page/_blocks/footer'));?>
