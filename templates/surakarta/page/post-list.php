<? $this->load->view(tpldir('page/_blocks/header'));?>
<? $lang_sess = (getlang()) ? '_'.getlang() : ''?> 
<div class="content">
	<div class="container">
		<div class="single">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">List</a></li>
				<li class="active">Default</li>
			</ol>
			<? if($blogs){?>
			  <ul class="list-unstyled list-post">
				<? foreach($blogs as $row){?>
				<li class="item-list">
					<div class="row">
					<div class="col-md-2">
						<span class="text-muted"><?= date('F d, Y',$row->date);?></span>
					</div>
					<div class="col-md-3">
						<img class="img-responsive main-img" src="<?= $row->image;?>" />
					</div>
					<div class="col-md-7">
						<h4><a href="<?= base_url($row->url);?>"><?= $row->{'title'.$lang_sess};?></a></h4>
						<p><?= content_trim($row->{'content'.$lang_sess},200);?></p>
					</div>
					</div>
					<hr />
				</li>
				<? }?>
			  </ul>
			  <? }?>
			  <nav>
				<ul class="pagination">
					<ul class="pagination">
						<?= showpage(current_url(),$count_blogs);?>
					</ul>
				</ul>
			</nav>
			
		</div>
	</div>
</div>

<? $this->load->view(tpldir('page/_blocks/footer'));?>
 
