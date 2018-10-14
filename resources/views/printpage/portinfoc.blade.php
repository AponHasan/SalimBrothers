<div class="col-sm-12 printc">
    <div class="row">
        <div class="col-sm-3 printc">
            <label >INVOICE OF</label>
        </div>
        <div class="col-sm-9 printc">
            : &nbsp;RECONDITIONED USE VEHICLE.
        </div>
    </div><div class="row">
        <div class="col-sm-3 printc">
            <label >PORT OF LOADING</label>
        </div>
        <div class="col-sm-9 printc">
            : &nbsp{{$invoice[0]->invoice_port_of_loading}}.

        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 printc">
            <label >PORT OF DISCHARGE</label>
        </div>
        <div class="col-sm-9 printc">
            : &nbsp{{$invoice[0]->invoice_port_of_discharge}}.
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 printc">
            <label >SAILED ON</label>
        </div>
        <div class="col-sm-9 printc">
            : &nbsp{{$invoice[0]->invoice_sailed_no}}.
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 printc">
            <label >H.S.CODE NO</label>
        </div>
        <div class="col-sm-9 printc">
            : &nbsp{{$invoice[0]->invoice_hs_code_no}}.
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 printc">
            <label >OCEAN VESSEL</label>
        </div>
        <div class="col-sm-9 printc">
            : &nbsp{{$invoice[0]->invoice_ocean_vessel}}.
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 printc">
            <label style="margin-top: 5px;">LCAF NO</label>
        </div>
        <div class="col-sm-9 printc">
            : &nbsp{{$invoice[0]->invoice_lcaf_no_}}.
            &nbsp;<label >I R C NO</label>: &nbsp;            : &nbsp{{$invoice[0]->invoice_irc_no}}.

        </div>
    </div>

    <div class="row">
        <div class="col-sm-3 printc">
            <label >COVER NOTE NO</label>
        </div>
        <div class="col-sm-9 printc">
            : &nbsp{{$invoice[0]->invoice_port_of_discharge}}.
 &nbsp; <label >DATED</label>:             : &nbsp{{$invoice[0]->invoice_port_of_discharge}}.
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3 printc">
            <label>LATTER OF CREDIT NO</label>
        </div>
        <div class="col-sm-9 printc">
            : &nbsp{{$invoice[0]->invoice_latter_of_credit_no}}.
            . &nbsp;<label >DATE OF ISSUE </label> :             : &nbsp{{$invoice[0]->invoice_date_of_issue}}.

        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <label >BANK’S BIN NO</label>
        </div>
        <div class="col-sm-9 printc ">
            : &nbsp{{$invoice[0]->invoice_banks_bin_no}}.

        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <label >COUNTRY OF ORIGIN</label>
        </div>
        <div class="col-sm-9 printc ">
            : &nbsp{{$invoice[0]->invoice_country_of_orgin}}.
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3 printc">
            <label style="margin-top: 5px;">TIN NO.</label>
        </div>
        <div class="col-sm-9 printc">
            : &nbsp{{$invoice[0]->invoice_tin_no}}.
            &nbsp; <label >BIN/VAT REG NO</label>             : &nbsp{{$invoice[0]->invoice_vat_reg_no}}.

        </div>
    </div>

    <div class="row">
        <div class="col-sm-3 printc">
            <label >CONSIGNEE</label>
        </div>
        <div class="col-sm-9 printc">
            : &nbsp;NRBC BANK LIMITED. O.R.NIZAM ROAD BRANCH,
            ATLANTA TRADE CENTER, 23/A, O.R NIZAM ROAD, WARD NO.15
            KOTOWALY, CHITTAGONG, BANGLADESH
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 printc">
            <label >SHIPPING MARK</label>
        </div>
        <div class="col-sm-9 printc">
            : &nbsp{{$invoice[0]->invoice_shipping_mark}}.
        </div>
    </div>
</div>