<div class="col-sm-6">
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">PORT OF LOADING</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<select class="form-control p-input" name="StudentDepartment">
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
	  		<select class="form-control p-input" name="StudentDepartment" style="margin-top: 5px;">
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
	  		<input type="text" class="form-control" style="margin-top: 5px;" name="sailesno">
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">OCEAN VESSEL</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="text" class="form-control" style="margin-top: 5px;" name="oceanvalue">
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">I R C NO.</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="text" class="form-control" style="margin-top: 5px;" name="ircno">
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">COVER NOTE NO</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="text" class="form-control" style="margin-top: 5px;" name="covernoteno">
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">LATTER OF CREDIT NO</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="text" class="form-control" style="margin-top: 5px;" name="latterofcredit">
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">COUNTRY OF ORIGIN</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="text" class="form-control" style="margin-top: 5px;" name="contryoforigin">
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">SHIPPING MARK</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="text" class="form-control" style="margin-top: 5px;" name="shippingmark">
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">BIN/VAT REG NO</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="text" class="form-control" style="margin-top: 5px;" name="binvat">
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">BANK’S BIN NO</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="text" class="form-control" style="margin-top: 5px;" name="banksbin">
	  	</div>
	</div>
</div>
<div class="col-sm-5">
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">H.S.CODE NO</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="text" class="form-control" style="margin-top: 5px;" name="hscode">
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">LCAF NO</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="text" class="form-control" style="margin-top: 5px;" name="lcafno">
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">TIN NO</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="text" class="form-control" style="margin-top: 5px;" name="tinno">
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">DATED</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="DATE" class="form-control" style="margin-top: 5px;" name="dated">
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-sm-5">
	  		<label style="margin-top: 5px;">DATE OF ISSUE</label>
	  	</div>
	  	<div class="col-sm-6">
	  		<input type="DATE" class="form-control" style="margin-top: 5px;" name="dateofissue">
	  	</div>
	</div>
</div>