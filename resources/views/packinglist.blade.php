@extends('layouts.app')
@section('content')
<div class="container">
	<form method="Post" action="{{url('invoice')}}}">
		<div class="row">
	    	<div class="col-sm-4">
	    		<label> Ref :</label>
	    		<input type="text" name="ref">
	    	</div>
	    	<div class="col-sm-4">      
	      		<h4 style="font-weight: bold" align="center"><u>PACKING LIST</u></h4>    
	    	</div>
	    	<div class="col-sm-3"> 
	      		<label align="center">Date :</label> 
	      		<input type="Date" name="date">
	    	</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-3">
				<p align="left" style="font-weight: bold">SOLD TO:</p>
			</div>
			<div class="col-sm-9">			
				<label >Company &nbsp :</label>
				<input type="text" name="company">
				<br/>
				<label>Address &nbsp &nbsp :</label>
				<input type="text" name="address">			
			</div>
		</div>        
	  <div class="row portinfo">
	  	@include('invoicepage.portinfo') 
	  </div>
		<div class="row">
			<div class="col-sm-10">				
			</div>			
			<div class="col-sm-1">
				<button align="right"  class="btn btn-success add_form_field"><span style="font-size:16px; font-weight:bold;">Add new Field</span></button>
			</div>
		</div>
		<br>
		<div class="hr">
		</div>
		<div class="productinfo">
			@include('packingpage.productinfo')
		</div>		
		
		<div class="hr">
		</div>
		<div class="productresult">
			@include('packingpage.productresult')
		</div>
		<div class="row">
			<div class="col-sm-7">
				
			</div>
			<div class="col-sm-5">
					<hr>
				<h3 align="left">Salim Brothers Int’l Limited </h3>
			</div>
		</div>
		<div class="hr1">
		</div>
		<p class="footer" align="center" >Indenter, Importer & Exporter of 		Japanese Reconditioned Vehicles & Used Japanese Diesel & Gasoline Engines Etc.
			Light & Heavy Machinery Equipments Suppliers.
		</p>
	</form>
	<input type="text" name="bdt" id="bdt" />
	<input type="button" name="sr1" value="Click Here" onClick="convertAmount()"/>

	<div id="container"></div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		// add dynamic infut field
    var max_fields      = 10;
    var wrapper         = $(".container1");
    var add_button      = $(".add_form_field");      
    var x = 1;
    $(add_button).click(function(e){
        e.preventDefault();
        if(x < max_fields){
            x++;          
            $(wrapper).append('<div class="row container1">                                                                                    <div align="left" class="col-sm-4" style="margin-top: 10px">                                    <input type="text" name="dog[]" class="inputv" id="dogid" style="width: 285px;margin-left: 15px;"></div>                                                                                   <div align="left" class="col-sm-2" style="margin-top: 10px">                                    <input type="number" onkeypress="isInputNumber(event)" name="qty[]" class="inputv qty" id="qtyid" style="width: 100px;margin-left: 35px;"></div>                                        <div align="left" class="col-sm-3" style="margin-top: 10px">                                    <input type="number" onkeypress="isInputNumber(event)" name="unitsprice[]" class="inputv unitsprice" id="unitsprice" style="width: 150px;margin-left:46px"></div>                        <div align="left" class="col-sm-2" style="margin-top: 10px">                                    <input type="text" name="totalvalue[]" class="inputv totalvalueid" id="totalvalueid"  style="width: 150px;margin-left:60px"></div>                       <div class="col-sm-1 delete"><a href="#" style="height:30px;width: 47px;margin-left: 44px;padding-top:4px;margin-top: 10px;padding-left: 2px;" class="btn btn-danger ">Delete</a>  </div> </div>'); 
            //add input box
        }
  else
  {
  alert('You Reached the limits')
  }

    var dom=$('.row').children().children("#qtyid");
    //console.log(dom);
    });
  //delete dynamically create input field
    $(wrapper).on("click",".delete", function(e){
        e.preventDefault(); $(this).parent('div').remove(); x--;
        total();
    })       
    	//calculate product quantity and unit price
         $('#goods_container').on('input','.unitsprice','.qty',function(){

         		// $('.totalvalueid').attr("value", "0");
         	   var parent = $(this).closest('.row');
         	   // var selfvalue= $(this).val();
         	   var qt=parent.find('.qty').val();
         	   // console.log(qt);
         	   var up=parent.find('.unitsprice').val();
               // console.log(up);
         	   // var totalvalueid=parseFloat(qt)* parseFloat(up);         	   
         	   // parent.find('.totalvalueid').val(parseFloat(qt)* parseFloat(up));
         	   total();

         });

         $('#goods_container').on('input','.qty',function(){
         	   var parent = $(this).closest('.row');
         	   var qt=parent.find('.qty').val();
         	   // console.log(qt);
         	   total();

         });

         //calculate total value
         function total(){
         	var total = 0;
         	var totalq = 0;
         	$(".unitsprice").each(function(){
         		var unitsprice = $(this).val()-0;
         		total +=unitsprice;
         		$('.total').val(total);
         		// console.log(total);
         	})

         	$(".qty").each(function(){
         		var qty = $(this).val()-0;
         		totalq +=qty;
         		$('.totalq').val(totalq);
         		// console.log(totalq);
         	});

         	 $('.total').val(total);
         	 $('.totalq').val(totalq);
         }





}); //end document function

function isInputNumber(evt){
	var cha = String.fromCharCode(evt.which);
	if (!(/[0-9]/.test(cha)))
	{
	$('#numberModal').modal('show');
	}
}
    
</script>

@endsection