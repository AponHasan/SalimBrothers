@extends('layouts.app')
@section('title','invoice')
@section('content')
<div class="container">
	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<form action="{{route('invoice.store')}}" method="POST">
		@csrf
		<div class="row">
	    	<div class="col-sm-4">
	    		<label> Ref :</label>
	    		<input type="text"  name="invoice_ref">
	    	</div>
	    	<div class="col-sm-4">      
	      		<h4 style="font-weight: bold" align="center"><u>INVOICE</u></h4>    
	    	</div>
	    	<div class="col-sm-3"> 
	      		<label align="center">Date :</label> 
	      		<input type="Date" name="invoice_date">
	    	</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-3">
				<p align="left" style="font-weight: bold">SOLD TO:</p>
			</div>
			<div class="col-sm-9">
				<label >Company &nbsp :</label>
				<input type="text" name="invoice_comapny">
				<br/>
				<label>Address &nbsp &nbsp :</label>
				<input type="text" name="invoice_address">
			</div>
		</div>        
	  <div class="row portinfo">
	  	@include('invoicepage.portinfo') 
	  </div>
		<div class="row">
			<div class="col-sm-10">				
			</div>			
		</div>
		<br>
		<div class="hr">
		</div>
		<div class="productinfo">
			@include('invoicepage.productinfo')
		</div>		
		
		<div class="hr">
		</div>
		<div class="productresult">
			@include('invoicepage.productresult')
		</div>
    <div class="row">
        <textarea class="form-control" name="invoice_note" placeholder="Describe Your Invoice Note" rows="5" id="comment"></textarea>
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
		<div class="row ">
			<div class="col-sm-10">

			</div>
			<div class="col-sm-1">
			    				<!--<a style=" position: absolute;margin-top: 25px;margin-left: 80px;" class="btn btn-success" value="">Save</a>-->

				<button style="    position: absolute;margin-top: 25px;margin-left: 80px;" type="submit"class="btn btn-success" value="" >Save</button>
				
			</div>
		</div>
	</form>
	<div id="container"></div>
</div>
<script type="text/javascript">
	$(document).ready(function() {

    	//calculate product quantity and unit price
         $('#goods_container').on('input','.unitsprice','.qty ',function(){
         	   var parent = $(this).closest('.row');
         	   var qt=parent.find('.qty').val();
             	var pre = parent.find('.freid').val();
             	console.log(pre);
         	   var up=parent.find('.unitsprice').val();
               console.log(up);
         	   var totalvalueid=parseFloat(qt)* parseFloat(up);

         	   parent.find('.totalvalueid').val(parseFloat(qt)* parseFloat(up)+ parseFloat(pre));

         });
}); //end document function


function isInputNumber(evt){
	var cha = String.fromCharCode(evt.which);
	if (!(/[0-9]/.test(cha)))
	{
	$('#numberModal').modal('show');
	}
}
    function ShowHideDiv() {
        var ddlms = document.getElementById("ddlms");
        var vehicle = document.getElementById("vehicle");
        var machine = document.getElementById("machine");
        vehicle.style.display = ddlms.value == "VEHICLE" ? "block" : "none";
        machine.style.display = ddlms.value == "MACHINERY" ? "block" : "none";
    }
</script>

@endsection