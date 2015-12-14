<? $this->load->view(tpldir('page/_blocks/header'));?>
<? $lang_sess = (getlang()) ? '_'.getlang() : ''?> 
<div class="content">
	<div class="container">
		<div class="single">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">News</a></li>
				<li class="active">Default</li>
			</ol>
			
			<div class="single-meta">
				<div class="row">
				<div class="col-md-10 col-sm-9">
					<h4 class="single-categories">News</h4>
						<h2 class="single-title">
						<?= $page->{'title'.$lang_sess};?>
						</h2>
					<span class="single-date text-muted"><?= date('F d, Y',$page->date);?></span>
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
			<div class="col-md-2">
				<div class="side-img">
<!-- 				<img class="img-responsive main-img" src="<?= $page->image2;?>" /> -->
				</div>
			</div>
			<div class="col-md-7">
				<div class="single-post-content">
					<img class="img-responsive main-img" src="<?= $page->image;?>" />
					<?= $page->{'content'.$lang_sess};?>
				</div>
			</div>
			<div class="col-md-3">
					<div class="sidebarism">
						<h3 class="home-title">Related News</h3>
						<?= view_mod('news','related',$page->id);?>
					</div>
				</div>
			</div>
			</div>
			
			<div class="related-article">
			<h3 class="home-title">Other Articles</h3>
				<?= view_mod('news','other',$page->id);?>
			</div>
			
		</div>
	</div>
</div>

<? $this->load->view(tpldir('page/_blocks/footer'));?>
 
