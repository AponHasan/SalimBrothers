<div class="row ">
	<div class="col-sm-3">
	    <label align="left" style="font-weight: bold; font-size: 13px;margin-bottom: 0px;padding-bottom: 0px;">DESCRIPTION OF GOODS:</label>
	</div>
	<div class="col-sm-1">      
	    <label align="left" style="font-weight: bold; font-size: 13px; margin-bottom: 0px;padding-bottom: 0px;">QTY</label>   
	</div>
	<div class="col-sm-2"> 
	    <label align="left" style="font-weight: bold; font-size: 13px; margin-bottom: 0px;padding-bottom: 0px;">FREIGHT</label>
	</div>
	<div class="col-sm-1" style="    padding: 0 0 0 8px;"> 
	     <label align="left" style="font-weight: bold; font-size: 13px; margin-bottom: 0px;padding-bottom: 0px;">UNIT PRICE</label>
	</div>
	<div class="col-sm-2" style="font-weight: bold; font-size: 13px; margin-bottom: 0px;padding-bottom: 0px;">
		<label>
			GROSS WEIGHT 
		</label>
	</div>
	<div class="col-sm-2"> 
	    <label align="left" style="font-weight: bold; font-size: 13px; margin-bottom: 0px;padding-bottom: 0px;margin-left: 8px;">TOTAL VALUE</label>
	</div>
	<div class="col-sm-1">
		
	</div>
</div>
		<div class="hr" style="width: 100%;background-color: black;height: 3px;">
		</div>
<div id="goods_container">	
	<div class="row container1">
	    <div align="left" class="col-sm-3" style="margin-top: 10px">
	    	<input type="text" name="invoice_description_of_goods" class="inputv" id="dogid" style="width: 270px;">
	    </div>
	    <div align="left" class="col-sm-1" style="margin-top: 10px">  
	    	<input type="number" onkeypress="isInputNumber(event)" name="invoice_quantity" class="inputv qty" id="qtyid" style="width: 70px;">
	    </div>
	    <div align="left" class="col-sm-2" style="margin-top: 10px">
			<input type="number" name="invoice_freight" class="inputv freid" id="freightid" style="width: 150px;">
	    </div>
	    <div align="left" class="col-sm-1" style="margin-top: 10px"> 
			<input type="number" onkeypress="isInputNumber(event)" name="invoice_unit_price" class="inputv unitsprice" id="unitsprice" style="width: 80px;">
	    </div>
	    <div align="left" class="col-sm-2" style="margin-top: 10px">
	    	<input type="number" name="invoice_gross_weight" class="inputv grossw" id="grossw">
	    </div>
	    <div align="left" class="col-sm-2" style="margin-top: 10px"> 
	    	<input type="text" name="invoice_total_value" class="inputv totalvalueid" id="totalvalueid"  style="width: 150px;margin-left: 8px;background-color: ghostwhite;">
	    </div>
	    <div class="col-sm-1">
		</div>	
	</div>
</div>
<div class="modal fade" id="numberModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <!-- <h4 class="modal-title">Modal Header</h4> -->
        </div>
        <div class="modal-body">
          <p style="color: red; font-weight: bold;">Character dosen't support in here.</p>
          <p style="color: green; font-weight: bold;">Enter Number only Please.</p>
        </div>
        <div class="modal-footer" align="center">
          <button  type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
        </div>
      </div>
      
    </div>
  </div>