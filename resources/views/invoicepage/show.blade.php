
@extends('layouts.app')
@section('title','invoice')
@section('content')
    <div class="container">

            <div class="row">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                    <h4 style="font-weight: bold" align="center"><u>INVOICE</u></h4>
                </div>
                <div class="col-sm-3">
                    <label align="center"><b><u>Date : {{$invoice[0]->invoice_date}}</u></b></label>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    <p align="left" style="font-weight: bold">SOLD TO:</p>
                </div>
                <div class="col-sm-9">
                    <h5><b>M/S.F A AUTOMOBILES.</b></h5>
                    <p>1202 AMINBHAAN, (1st FLOOR), DOUBLE MOORING ROAD,<br>
                        BAREK BUILDING, CHITTAGONG, BANGLADESH.
                    </p>
                </div>
            </div>
        <div class="row portinfoc">
            @include('printpage.portinfoc')
            </div>
            <div class="row">
                <div class="col-sm-10">
                </div>
            </div>
            <br>
            <div class="hr">
            </div>
            <div class="productinfoc">
                @include('printpage.productinfoc')
               </div>
            </div>
            <div class="hr">
            </div>
            <div class="productresultc">
            @include('printpage.productresultc')
            </div>
            <div class="row">
               <p style="width: 100%;margin-left: 15px;line-height: unset;height: 150px;font-family: sans-serif; margin-top: 10px;">
                   {{$invoice[0]->invoice_note}}
               </p>
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
            </div>
        <div id="container"></div>
    </div>
<div class="printb" align="Right" style="margin-right: 80px;">
    <button style="font-weight: bold;" onclick="myFunction()" id="pbtn" class="btn btn-warning">Print</button>
    <input class="btn btn-warning" type="button" style="font-weight: bold;" id="getMessage" name="GetMessage" value="Print1" onclick="OpenAlert()"/>
</div>
<script>
    function OpenAlert(){
        document.getElementById("getMessage").style.visibility="hidden";
        window.print();
        location.reload();
    }
</script>
@endsection
