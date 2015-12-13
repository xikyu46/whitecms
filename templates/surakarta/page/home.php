<? $this->load->view(tpldir('page/_blocks/header'));?>
<div class="content">
	<div class="container">
		<?= view_mod('banner','outclient');?>
	</div>
</div>

<div class="home-newsticker">
	<div class="container">
		<?= view_mod('newsticker','outclient');?>
	</div>
</div>
<?= $page->content;?>
<? $this->load->view(tpldir('page/_blocks/footer'));?>
