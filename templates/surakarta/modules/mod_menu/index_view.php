<? $lang_sess = (getlang()) ? '_'.getlang() : ''?> 
<? if($menu){?>
<ul class="nav navbar-nav">
	<? foreach($menu as $menu_row){?>
		<? if(!$menu_row->hide){?>
			<? if(!$menu_row->submenu){?>
				<? if($menu_row->post_id){?>
					<? if($default[$menu_row->post_id]){?>
						<li><a href="<?= base_url();?>"><?= $menu_row->{'title'.$lang_sess};?></a></li>
					<? }else{?>
						<li><a href="<?= base_url($pages[$menu_row->post_id]);?>"><?= $menu_row->{'title'.$lang_sess};?></a></li>
					<? }?>
				<? }else{?>
					<li><a href="<?= $menu_row->link;?>"><?= $menu_row->{'title'.$lang_sess};?></a></li>
				<? }?>
				
			<? }else{?>
				<li class="dropdown">
					<? if($menu_row->post_id){?>
						<a href="<?= base_url($pages[$menu_row->post_id]);?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $menu_row->title;?><span class="caret"></span></a>
					<? }else{?>
						<a href="<?= $menu_row->link;?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $menu_row->title;?><span class="caret"></span></a>
					<? }?>
					
					
					<ul class="dropdown-menu">
					<? foreach($menu_row->submenu as $submenuRow){?>
						<? if(!$submenuRow->hide){?>
							<? if(!$submenuRow->submenu){?>
								<? if($submenuRow->post_id){?>
									<li><a href="<?= base_url($pages[$submenuRow->post_id]);?>"><?= $submenuRow->{'title'.$lang_sess};?></a></li>
								<? }else{?>
									<li><a href="<?= $submenuRow->link;?>"><?= $submenuRow->{'title'.$lang_sess};?></a></li>
								<? }?>
							<? }else{?>
								<li class="dropdown">
									<? if($submenuRow->post_id){?>
										<a href="<?= base_url($pages[$submenuRow->post_id]);?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $submenuRow->title;?><span class="caret"></span></a>
									<? }else{?>
										<a href="<?= $submenuRow->link;?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $submenuRow->title;?><span class="caret"></span></a>
									<? }?>	
									<ul class="dropdown-menu">
									<? foreach($submenuRow->submenu as $subsubmenuRow){?>
										<? if(!$subsubmenuRow->hide){?>
											<? if($subsubmenuRow->post_id){?>
												<li><a href="<?= base_url($pages[$subsubmenuRow->post_id]);?>"><?= $subsubmenuRow->{'title'.$lang_sess};?></a></li>
											<? }else{?>
												<li><a href="<?= $subsubmenuRow->link;?>"><?= $subsubmenuRow->{'title'.$lang_sess};?></a></li>
											<? }?>
										<? }?> 
									<? }?>
									</ul>
								</li>
							<? }?>
						<? }?> 
					<? }?>
					</ul>
				</li>
			<? }?>
		<? }?>
	<? }?>
</ul>
<? }?> 
