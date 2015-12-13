<? $this->load->view(tpldir('admin/header_view'));?>
<? $this->load->view(tpldir('admin/navbar_view'));?>


<script>
CKEDITOR.replace( 'editor' );
CKEDITOR.replace( 'editor-en' );
formGeneral('#formPageAdd');
function deletePage(id){
	bootbox.confirm('Anda yakin akan menghapus halaman ini? ',function(result){
		if (result === null) {                                             
			return false;                              
		} else {
			if(result == true){
				$.get(base_url+'admin/page/delete/'+id,function(data){
					if(data.resultCode == 1000){
						bootbox.alert(data.resultMsg,function(){
							if(data.resultData.openUrl){
								window.location.href=data.resultData.openUrl;
							}
						});
					}else{
						bootbox.alert(data.resultMsg);
					}
				},'json');
			}
		}
	});
}
</script>

<? $this->load->view(tpldir('admin/footer_view'));?>
