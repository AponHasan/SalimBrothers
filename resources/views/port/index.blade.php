@extends('layouts.app')
@section('content')



<div class="addButton" align="center">
	<a href="/" class="btn btn-success btn-sm">Back to home</a>
<button type="button"name="add"id="add_data" class="btn btn-success btn-sm">Add Port</button>
</div>
<table align="center" class="table table-bordered table-stripd" id="student_table" style="width: 520px">
	<tr>

		<th>Port Name</th>
		<th align="center" width="180px">Action</th>
	</tr>
	@foreach($ports as $po)
	<tr class="port{{$po->id}}">
		
		<td>{{$po->port_name}}</td>
		<td>
			<a href="#" class="edit-modal btn btn-warning btn-sm" data-id="{{$po->id}}" data-title="{{$po->port_name}}" data-body="">
              <i class="glyphicon glyphicon-pencil">Edit</i>
            </a>

            <a href="#" class="delete-modal btn btn-danger btn-sm" data-id="{{$po->id}}" data-title="{{$po->port_name}}" >
              <i class="glyphicon glyphicon-trash">Delete</i>
            </a>


            <a href="#" class="show-modal btn btn-info btn-sm" data-id="{{$po->id}}" data-name="{{$po->port_name}}" >
            <i class="glyphicon glyphicon-eye-open">read</i></a>
		</td>
	</tr>
	@endforeach
</table>


@include('port.addportmodal')
@include('port.readportmodal')
@include('port.updatedeleteportmodal')
<script type="text/javascript">
	$(document).ready(function() 
	{
		// insert data
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

		//show details in modal
		 $(document).on('click', '.show-modal', function()
		   {
		      $('#show').modal('show');
		      $('#i').text($(this).data('id'));
		      $('#ti').text($(this).data('name'));
		      $('.modal-title').text('View Port');
		    });

		 //update
		  $(document).on('click', '.edit-modal', function() 
  {
      $('#footer_action_button').text(" Update Port");
      $('#footer_action_button').addClass('glyphicon-check');
      $('#footer_action_button').removeClass('glyphicon-trash');
      $('.actionBtn').addClass('btn-success');
      $('.actionBtn').removeClass('btn-danger');
      $('.actionBtn').addClass('edit');
      $('.modal-title').text('Port Edit');
      $('.deleteContent').hide();
      $('.form-horizontal').show();
      $('#pid').val($(this).data('id'));
      $('#t').val($(this).data('title'));      
      $('#myModal').modal('show');
  });

  $('.edit').click(function()
  {
      $('#btn-save').val("add");
      $('#frmProducts').trigger("reset");
      $('#myModal').modal('show');
  });


  $('.modal-footer').on('click', '.edit', function()
  {
    let sid = $('#pid').val();
    console.log(sid);
    let sfn = $('#t').val();
    console.log(sfn);
  $.ajax({
                url:'editPort',
                method:'POST',
                data:{
                        'id': $("#pid").val(),
                        'title': $('#t').val(),                        
                        '_token':"{{csrf_token()}}",
                      },
          success:function(data)
          {
            console.log(data);
            $('.port' + data.id).replaceWith(" "+
            "<tr class='student" + data.id + "'>"+
            "<td>" + data.id + "</td>"+
            "<td>" + data.title + "</td>"+            
            "<td>" + data.created_at + "</td>"+
            "<td><button class='edit-modal btn btn-warning btn-sm' data-id='" 
            + data.id + "' data-title='" + data.title + "'><span class='glyphicon glyphicon-pencil'></span></button><button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "' data-title='" 
            + data.title + "' ><span class='glyphicon glyphicon-trash'></span></button><button class='show-modal btn btn-info btn-sm' data-id='" 
            + data.id + "' data-title='" + data.title 
            + "' ><span class='glyphicon glyphicon-eye-open'></span></button></td>"+
            "</tr>");
            window.location.replace('/port');
            location.reload();
          }
      });
  });//end update


		//delete
		$(document).on('click', '.delete-modal', function()
		  {
		      var portid=$(this).data('id'); 
		      console.log(portid);
		      var portname=$(this).data('title');
		      console.log(portname)
		      
		    $('.poid').val(portid);
		    $('.poname').val(portname);
		    $('#footer_action_button').text(" Delete");
		    $('#footer_action_button').removeClass('glyphicon-check');
		    $('#footer_action_button').addClass('glyphicon-trash');
		    $('.actionBtn').removeClass('btn-success');
		    $('.actionBtn').addClass('btn-danger');
		    $('.actionBtn').addClass('delete');
		    $('.modal-title').text('Delete Port');
		    $('.deleteContent').show();
		    $('.form-horizontal').hide();
		    $('.title').html($(this).data('title'));
		    $('#myModal').modal('show');
		  });

		  $('.modal-footer').on('click', '.delete', function()
		  {
		       let pid = $('.poid').val();
		       console.log(pid);
		       let pname = $('.poname').val();
		       console.log(pname);
		    
		    $.ajax({		             
		              url:'/delete',
		              method:'POST',
		              data:{id:pid,'_token':"{{csrf_token()}}"},
		            success:function(data)
		            {
		              console.log(data);
		              window.location.replace('/port');
		              location.reload();
		            },

		          });
		    console.log("faild");
		  });	 

	}); //end docoment function 
</script>
@endsection