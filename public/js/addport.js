		$('#add_data').click(function()
		{
			$('#portModal').modal('show');
			$('#port_form')[0].reset();
			$('#form_output').html('');
			$('#button_action').val('insert');
			$('#action').val('Add');
		}); //end #add-data function

		$('#port_form').on('submit',function(event)
		{
			event.preventDefault();
			var form_data = $(this).serialize();
			console.log(form_data);
			$.ajax({
					url:"{{route('port.index') }}",
					method:"POST",
					data:form_data,
					dataType:"json",
					success:function(data)
					{
						if (data.error.length>0)
						 {
						 	var error_html='';
					 	for(var count = 0; count < data.error.length; count++) 
							{
						 	error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';
						 	}
						 	$('#form_output').html(error_html);
						 }
						 else
						 {
						 	$('#form_output').html(data.success);
						 	$('#port_form')[0].reset();
						 	$('#action').val('Add');
						 	$('.modal-title').text('Add new port')
						 	$('#button_action').val('insert');
						 	window.location.replace('/port');
                      		location.reload();
						 }
					}
				  })
		});//end insert data
