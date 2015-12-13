	<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav side-nav">
			<li>
				<a href="<?= base_url('admin/dashboard');?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
			</li>
			<li>
				<a href="<?= base_url('admin/page');?>"><i class="fa fa-fw fa-file-text"></i> Pages</a>
			</li>
			<li>
				<a href="<?= base_url('admin/blog');?>"><i class="fa fa-fw fa-newspaper-o"></i> Post</a>
			</li>
			<li>
				<a href="<?= base_url('admin/asset');?>"><i class="fa fa-fw fa-folder-o"></i> Assets</a>
			</li>
			<li>
				<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Modules <i class="fa fa-fw fa-caret-down"></i></a>
				<ul id="demo" class="collapse">
					<li>
						<a href="<?= base_url('admin/video');?>"><i class="fa fa-fw fa-film"></i> Video Management</a>
					</li>
					<li>
						<a href="<?= base_url('admin/banner');?>"><i class="fa fa-fw fa-image"></i> Banner Management</a>
					</li>
					<li>
						<a href="<?= base_url('admin/slidebanner');?>"><i class="fa fa-fw fa-image"></i> Slidebanner</a>
					</li>
					<li>
						<a href="<?= base_url('admin/event');?>"><i class="fa fa-fw fa-calendar"></i> Event Management</a>
					</li>
					<li>
						<a href="<?= base_url('admin/sosmed');?>"><i class="fa fa-fw fa-twitter"></i> Social Media</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#"><i class="fa fa-fw fa-sitemap"></i> Microsite</a>
			</li>
		</ul>
	</div>
</nav> 
<!-- end: nav wrapper untuk navbar dan sidebar -->
