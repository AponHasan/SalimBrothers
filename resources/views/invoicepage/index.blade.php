@extends('layouts.app')
@section('content')
    <div align="center" class="title">
        <h2>All Invoice</h2>
    </div>
    <div class="row">


        @if(session('successMsg'))
            <div class="alert alert-success">
                <span><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="material-icons">close</i>
                </button></span>
                <span>
                      <b> Success: - </b> {{ session('successMsg') }}</span>
            </div>
        @endif
        <div class="col-12">
            <table id="order-listing" class="table table-striped" style="width:100%;">
                <thead>
                <tr>
                    <th>S. No</th>
                    <th>Product</th>
                    <th>company</th>
                    <th>Address</th>
                    <th>Date</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total Value</th>
                    <th>Gross Weight</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>


                @foreach ($invoice as $key=>$inv)
                    <tr class="post{{$inv->id}}">
                        <td>{{$key+1}}</td>
                        <td>{{$inv->invoice_product_type}}</td>
                        <td>{{$inv->invoice_comapny}}</td>
                        <td>{{$inv->invoice_address}}</td>
                        <td>{{$inv->invoice_date}}</td>
                        <td>{{$inv->invoice_quantity}}</td>
                        <td>{{$inv->invoice_unit_price}}</td>
                        <td>{{$inv->invoice_total_value}}</td>
                        <td>{{$inv->invoice_gross_weight}}</td>
                        <td>
                            {{--<a class="btn btn-warning btn-sm">Print</a>--}}
                            <a href="{{route('invoice.show',$inv->id)}}" class="btn btn-warning btn-sm">
                                <i class="material-icons"></i>
                                Print
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection