<div class="col-sm-6">
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">PORT OF LOADING</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<select class="form-control p-input" name="invoice_port_of_loading">
	  			<option value="0">Select Port Of Loading</option>
	  			<option value="Nagoya Port">Nagoya Port</option>
	  			<option value="Osaka Port">Osaka Port</option>
	  			<option value="Kobe Port">Kobe Port</option>
	  			<option value="Yokohama Port">Yokohama Port</option>
	  			<option value="Moji Port">Moji Port</option>
	  			{{--@foreach($ports as $port)--}}
	  			{{--<option value="{{$port->port_name}}">{{$port->port_name}}</option>      	--}}
         		{{--@endforeach       --}}
		    </select>
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">PORT OF DISCHARGE</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<select class="form-control p-input" name="invoice_port_of_discharge" style="margin-top: 5px;">
		        <option value="0">Select Port Of Discharge</option>
		        <option value="chittagong Sea Port">chittagong Sea Port</option>
		        <option value="Mongla Port">Mongla Port</option>
		        {{--@foreach($ports as $port)--}}
	  			{{--<option value="{{$port->port_name}}">{{$port->port_name}}</option>      	--}}
         		{{--@endforeach--}}
		    </select>
	  	</div>
	</div>	  		
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">SAILED ON</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="text" class="form-control" style="margin-top: 5px;" name="invoice_sailed_no">
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">OCEAN VESSEL</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="text" class="form-control" style="margin-top: 5px;" name="invoice_ocean_vessel">
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">I R C NO.</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="text" class="form-control" style="margin-top: 5px;" name="invoice_irc_no">
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">COVER NOTE NO</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="text" class="form-control" style="margin-top: 5px;" name="invoice_cover_note">
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">LATTER OF CREDIT NO</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="text" class="form-control" style="margin-top: 5px;" name="invoice_latter_of_credit_no">
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">COUNTRY OF ORIGIN</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="text" class="form-control" style="margin-top: 5px;" name="invoice_country_of_orgin">
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">SHIPPING MARK</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="text" class="form-control" style="margin-top: 5px;" name="invoice_shipping_mark">
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">BIN/VAT REG NO</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="text" class="form-control" style="margin-top: 5px;" name="invoice_vat_reg_no">
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">BANK’S BIN NO</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="text" class="form-control" style="margin-top: 5px;" name="invoice_banks_bin_no">
	  	</div>
	</div>
</div>
<div class="col-sm-5">
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">H.S.CODE NO</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="text" class="form-control" style="margin-top: 5px;" name="invoice_hs_code_no">
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">LCAF NO</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="text" class="form-control" style="margin-top: 5px;" name="invoice_lcaf_no_">
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">TIN NO</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="text" class="form-control" style="margin-top: 5px;" name="invoice_tin_no">
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">DATED</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="DATE" class="form-control" style="margin-top: 5px;" name="invoice_dated">
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">DATE OF ISSUE</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="DATE" class="form-control" style="margin-top: 5px;" name="invoice_date_of_issue">
	  	</div>
	</div>
</div>