<div class="row ">
	<div class="col-sm-4">
	    <p align="left" style="font-weight: bold; font-size: 16px;margin-bottom: 0px;padding-bottom: 0px;">DESCRIPTION OF GOODS:</p>
	</div>
	<div class="col-sm-2">      
	    <p align="left" style="font-weight: bold; font-size: 16px; margin-bottom: 0px;padding-bottom: 0px;">QUANTITY</p>   
	</div>
	<div class="col-sm-3"> 
	    <p align="left" style="font-weight: bold; font-size: 16px; margin-bottom: 0px;padding-bottom: 0px;">GROSS WEIGHT (KGS)</p>
	</div>
	<div class="col-sm-2"> 
	     <p align="left" style="font-weight: bold; font-size: 16px; margin-bottom: 0px;padding-bottom: 0px;">MEAS-MENT</p>
	</div>
	
	<div class="col-sm-1">
		
	</div>
</div>
		<div class="hr" style="width: 100%;background-color: black;height: 3px;">
		</div>
<div id="goods_container">	
	<div class="row container1">
	    <div align="left" class="col-sm-4" style="margin-top: 10px">
	    	<input type="text" name="dog[]" class="inputv" id="dogid" style="width: 285px;">
	    </div>
	    <div align="left" class="col-sm-2" style="margin-top: 10px">  
	    	<input type="number" onkeypress="isInputNumber(event)" name="qty[]" class="inputv qty" id="qtyid" style="width: 100px;"> 
	    </div>
	    <div align="left" class="col-sm-3" style="margin-top: 10px">
			<input type="number"onkeypress="isInputNumber(event)" name="totalvalue[]" class="inputv unitsprice" id="totalvalueid" style="width: 150px;">
	    </div>
	    <div align="left" class="col-sm-2" style="margin-top: 10px"> 
			<input type="number" onkeypress="isInputNumber(event)" name="" class="inputv" id="" style="width: 150px;margin-left: 3px;">
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

