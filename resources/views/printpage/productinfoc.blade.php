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
    <div class="col-sm-2" style="    padding: 0 0 0 8px;">
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

</div>
<div class="hr" style="width: 100%;background-color: black;height: 3px;">
</div>
<div id="goods_container">
    <div class="row container1">
        @if($invoice[0]->invoice_product_type=="VEHICLE")
            <div align="left" class="col-sm-12" style="margin-top: 10px">
                <p style="margin-bottom: 0px"><b>USED VEHICLE AND EQUIPMENTS</b><br>
            </div>
            <div align="left" class="col-sm-3" style="margin-top: 10px">
                {{--<input type="text" name="invoice_description_of_goods" class="inputv" id="dogid" style="width: 270px;">--}}
                <p>{{$invoice[0]->invoice_brand}}.
                    <br>
                    &ensp;&ensp;&ensp; CHASSIS NO   # {{$invoice[0]->invoice_chassis_no}}.
                    <br>&ensp;&ensp;&ensp; YEAR MODEL # {{$invoice[0]->invoice_year_model}}.
                    <br>&ensp;&ensp;&ensp; TV NAVI
                    <br>&ensp;&ensp;&ensp; H.S.CODE NO.	{{$invoice[0]->invoice_hs_code_no}}.
                </p>
            </div>
            @elseif($invoice[0]->invoice_product_type=="MACHINERY")
            <div align="left" class="col-sm-12" style="margin-top: 10px">
                <p style="margin-bottom: 0px"><b>USED MACHINERY AND EQUIPMENTS</b><br>
            </div>
            <div align="left" class="col-sm-3" style="margin-top: 10px">
                {{--<input type="text" name="invoice_description_of_goods" class="inputv" id="dogid" style="width: 270px;">--}}
                <p>{{$invoice[0]->invoice_machine_model}}.
                    <br>
                    &ensp;&ensp;&ensp; SERIAL NO   # {{$invoice[0]->invoice_serial_no}}.
                    <br>&ensp;&ensp;&ensp; YEAR MODEL # {{$invoice[0]->invoice_year_model}}.
                    <br>&ensp;&ensp;&ensp; TV NAVI
                    <br>&ensp;&ensp;&ensp; H.S.CODE NO.	{{$invoice[0]->invoice_hs_code_no}}.
                </p>
            </div>
        @endif



        <div align="left" class="col-sm-1" style="margin-top: 10px">
            {{--<input type="number" onkeypress="isInputNumber(event)" name="invoice_quantity" class="inputv qty" id="qtyid" style="width: 70px;">--}}
            {{$invoice[0]->invoice_quantity}}.
            Unit
        </div>
        <div align="left" class="col-sm-2" style="margin-top: 10px">
            {{--<input type="text" name="invoice_freight" class="inputv" id="freightid" style="width: 150px;">--}}
            USD {{$invoice[0]->invoice_freight}}.

        </div>
        <div align="left" class="col-sm-2" style="margin-top: 10px">
            {{--<input type="number" onkeypress="isInputNumber(event)" name="invoice_unit_price" class="inputv unitsprice" id="unitsprice" style="width: 80px;">--}}
            USD {{$invoice[0]->invoice_unit_price}}.

        </div>
        <div align="left" class="col-sm-2" style="margin-top: 10px">
            {{--<input type="text" name="invoice_gross_weight" class="inputv grossw" id="grossw">--}}
            {{$invoice[0]->invoice_gross_weight}}.
            KGS
        </div>
        <div align="left" class="col-sm-2" style="margin-top: 10px">
            {{--<input type="text" name="invoice_total_value" class="inputv totalvalueid" id="totalvalueid"  style="width: 150px;margin-left: 8px;background-color: ghostwhite;">--}}
            USD. {{$invoice[0]->invoice_total_value}}.

        </div>
        <div class="col-sm-1">
        </div>
    </div>
