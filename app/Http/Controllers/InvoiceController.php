<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Invoice;
use DB;
class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 public function __construct()
    {
        $this->middleware('auth');
    }
    public function addPort()
    {
        
    }
    public function index()
    {
        $invoice =DB::table('Invoices')->orderBy('id','dsc')
            ->get();
        return view('invoicepage.index',compact('invoice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'invoice_ref' => 'required',
            'invoice_date' => 'required',
            'invoice_product_type' => 'required',
            'invoice_port_of_loading' => 'required',
            'invoice_port_of_discharge' => 'required',
            'invoice_country_of_orgin' => 'required',
            'invoice_shipping_mark' => 'required',
            'invoice_dated' => 'required',
            'invoice_date_of_issue' => 'required',
            'invoice_quantity' => 'required',
            'invoice_freight' => 'required',
            'invoice_unit_price' => 'required',
            'invoice_gross_weight' => 'required',
            'invoice_total_value' => 'required',
            'invoice_total_in_word' => 'required',
            'invoice_brand' => 'required',
        ]);
        $invoice = new Invoice();
        $invoice->invoice_ref = $request->invoice_ref;
        $invoice->invoice_date = $request->invoice_date;
        $invoice->invoice_soldto = $request->invoice_soldto;
        $invoice->invoice_comapny = $request->invoice_comapny;
        $invoice->invoice_address = $request->invoice_address;
        $invoice->invoice_port_of_loading = $request->invoice_port_of_loading;
        $invoice->invoice_port_of_discharge = $request->invoice_port_of_discharge;
        $invoice->invoice_sailed_no = $request->invoice_sailed_no;
        $invoice->invoice_ocean_vessel = $request->invoice_ocean_vessel;
        $invoice->invoice_irc_no = $request->invoice_irc_no;
        $invoice->invoice_cover_note = $request->invoice_cover_note;
        $invoice->invoice_latter_of_credit_no = $request->invoice_latter_of_credit_no;
        $invoice->invoice_country_of_orgin = $request->invoice_country_of_orgin;
        $invoice->invoice_shipping_mark = $request->invoice_shipping_mark;
        $invoice->invoice_vat_reg_no = $request->invoice_vat_reg_no;
        $invoice->invoice_banks_bin_no = $request->invoice_banks_bin_no;
        $invoice->invoice_hs_code_no = $request->invoice_hs_code_no;
        $invoice->invoice_lcaf_no_ = $request->invoice_lcaf_no_;
        $invoice->invoice_tin_no = $request->invoice_tin_no;
        $invoice->invoice_dated = $request->invoice_dated;
        $invoice->invoice_date_of_issue = $request->invoice_date_of_issue;
        $invoice->invoice_quantity = $request->invoice_quantity;
        $invoice->invoice_freight = $request->invoice_freight;
        $invoice->invoice_unit_price = $request->invoice_unit_price;
        $invoice->invoice_gross_weight = $request->invoice_gross_weight;
        $invoice->invoice_total_value = $request->invoice_total_value;
        $invoice->invoice_total_in_word = $request->invoice_total_in_word;
        $invoice->invoice_product_type = $request->invoice_product_type;
        $invoice->invoice_chassis_no = $request->invoice_chassis_no;
        $invoice->invoice_year_model = $request->invoice_year_model;
        $invoice->invoice_serial_no = $request->invoice_serial_no;
        $invoice->invoice_machine_model = $request->invoice_machine_model;
        $invoice->invoice_brand = $request->invoice_brand;
        $invoice->invoice_note = $request->invoice_note;
        $invoice->save();
        return redirect()->route('invoicepage.index')->with('successMsg','Invoice Successfully Saved');
//        return 'invoice add successfull';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice =DB::table('Invoices')->where('id',$id)
            ->get();
        return view('invoicepage.show',compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
