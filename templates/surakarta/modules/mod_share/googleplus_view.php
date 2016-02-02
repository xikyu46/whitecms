<? if($details){?>
	
	<a href=# onclick="plus_share('<?= current_url();?>')">link share</a>
	
<script>
function plus_share(url,e){
	u = url;
	window.open('https://plus.google.com/share?url='+encodeURIComponent(u),'sharer','toolbar=0,status=0,width=626,height=436');
    return false;
}

</script>
	
<? }?>