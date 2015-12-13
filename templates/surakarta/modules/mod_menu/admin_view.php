<? if($menu){?>
<ul>
	<? foreach($menu as $menu_row){?>
		<li><a href="<?= base_url('admin/menu/edit/'.$menu_row->id);?>"><?= $menu_row->title;?>(<?= $menu_row->id;?>)</a>
		<? if($menu_row->submenu){?>
			<ul>
				<? foreach($menu_row->submenu as $submenuRow){?>
					<li>
						<a href="<?= base_url('admin/menu/edit/'.$submenuRow->id);?>"><?= $submenuRow->title;?>(<?= $submenuRow->id;?>)</a>
						<? if($submenuRow->submenu){?>
						<ul>
							<? foreach($submenuRow->submenu as $subsubmenuRow){?>
								<li>
									<a href="<?= base_url('admin/menu/edit/'.$subsubmenuRow->id);?>"><?= $subsubmenuRow->title;?>(<?= $subsubmenuRow->id;?>)</a>
								</li>
							<? }?>
						</ul>
					<? }?>
					</li>
				<? }?>
			</ul>
		<? }?>
		</li>
	<? }?>
</ul>
<? }?> 
