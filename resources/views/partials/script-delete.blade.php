<script>
	$(()=>{
		$.ajaxSetup({
			headers:{'X-CSRF-TOKEN':
			$('meta([name="csrf-token"]').attr('content')}
		})
	$('[data-toggle=toolip]').toolip()
	$('a.btn-danger').click((e)=>{
		let that = $(e.currentTarget)
		e.preventDefault()
		swal({
			title:'{{$text}}',
			type:'error',
			showCancelButton:true,
			confirmButtonColor:'#DD6B55',
			confirmButtonText:'@lang('Oui')',
			showCancelButtonText:'@lang('Non')',
		}).then(()=>{
			if(result.value){
				$.ajax({
					url:that.attr('href'),
					type:'DELETE'
				})
				.done(()=>{
					@switch($return)
					  @case('removeTr')

	    that.parents('tr').remove()

	                              @break
	                              @case('reload')
	                                 location.reload()
	                                 @break
	                               @endswitch
                               })
				               .fail(()=>{
				               	swal({
				               		title:'@lang('Il semble y avoir une erreur sur le serveur, veillez réessayer plus tard...')',
				               		type:'warning'
				               	})

				               })

				}
			})
		})
	})
</script>