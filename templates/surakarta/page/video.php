<? $this->load->view(tpldir('page/_blocks/header'));?>
<? $lang_sess = (getlang()) ? '_'.getlang() : ''?> 
<div class="content">
	<div class="container">
	      
      <div class="single">

<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Video</a></li>
  <li class="active">Title</li>
</ol>

<div class="single-video-post">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">

    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="<?= $video->url;?>"></iframe>
    </div>

    </div>
  </div>
</div>
<div class="single-meta">
  <div class="row">
    <div class="col-md-10 col-sm-9">
      <h4 class="single-categories">Video</h4>
      <h2 class="single-title">
        <?= $video->text;?>
      </h2>
      <span class="single-date text-muted"><?= date('F d,Y',$video->date);?></span>
    </div>
    <div class="col-md-2 col-sm-3">
      <div class="single-share-social">
        <ul class="list-inline">
          <li>
            <a href="#">
            <span class="fa-stack fa-lg">
              <i class="fa fa-square-o fa-stack-2x"></i>
              <i class="fa fa-twitter fa-stack-1x"></i>
            </span>
            </a>
          </li>
          <li>
            <a href="#">
            <span class="fa-stack fa-lg">
              <i class="fa fa-square-o fa-stack-2x"></i>
              <i class="fa fa-facebook fa-stack-1x"></i>
            </span>
            </a>
          </li>
          <li>
            <a href="#">
            <span class="fa-stack fa-lg">
              <i class="fa fa-square-o fa-stack-2x"></i>
              <i class="fa fa-google-plus fa-stack-1x"></i>
            </span>
            </a>
          </li>
          <li>
            <a href="#">
            <span class="fa-stack fa-lg">
              <i class="fa fa-square-o fa-stack-2x"></i>
              <i class="fa fa-rss fa-stack-1x"></i>
            </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
</div>

<div class="single-post">
  <div class="row">
    <div class="col-md-10">
      <div class="single-post-content">
        <article>
        <p>
        <?= $video->content;?>
        </p>
        </article>
      </div>
    </div>
  </div>
</div>

<hr />

<div class="related-video">
  <h3 class="home-title">Related Video</h3>
  <?= view_mod('video','related',$video->id);?>
</div>




</div>
  

	</div>
</div>

<? $this->load->view(tpldir('page/_blocks/footer'));?>
 
