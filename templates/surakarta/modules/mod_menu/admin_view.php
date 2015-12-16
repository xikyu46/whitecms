	<? if($menu){?>
		<div id="jstree-proton-1">
	<ul>
		<? foreach($menu as $menu_row){?>
			<li data-jstree='{ "opened" : true  <? if($menu_row->id == $active){echo ', "selected" : true';}?>}'><a href="<?= base_url('admin/menu/edit/'.$menu_row->id);?>"><?= $menu_row->title;?> (<?= $menu_row->id;?>)</a>
			<? if($menu_row->submenu){?>
				<ul>
					<? foreach($menu_row->submenu as $submenuRow){?>
						<li data-jstree='{ "opened" : true <? if($submenuRow->id == $active){echo ', "selected" : true';}?>}'>
							<a href="<?= base_url('admin/menu/edit/'.$submenuRow->id);?>"><?= $submenuRow->title;?> (<?= $submenuRow->id;?>)</a>
							<? if($submenuRow->submenu){?>
							<ul>
								<? foreach($submenuRow->submenu as $subsubmenuRow){?>
									<li data-jstree='{ "opened" : true <? if($subsubmenuRow->id == $active){echo ', "selected" : true';}?>}'>
										<a href="<?= base_url('admin/menu/edit/'.$subsubmenuRow->id);?>"><?= $subsubmenuRow->title;?> (<?= $subsubmenuRow->id;?>)</a>
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
	</div>
	<? }?> 

	<script>
				$(function() {
					$('#jstree-proton-1').jstree({
						'core': {
							'themes': {
								'name': 'proton',
								'responsive': true
							}
						}
					}).bind("select_node.jstree", function (e, data) {
						var href = data.node.a_attr.href;
						document.location.href = href;
					})
				});
		</script>