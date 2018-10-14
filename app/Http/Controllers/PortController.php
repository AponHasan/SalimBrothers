<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Port;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use DB;

class PortController extends Controller
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

    public function index()
    {
                $ports =DB::table('ports')
                    ->get();                    
        return view('port.index',compact('ports'));
    }

    public function get_port()
    {
         $ports =DB::table('ports')
                    ->get();                    
        return view('invoice',compact('ports'));
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

        $validation = Validator::make($request->all(), [
        
            'port_name'  => 'required|unique:ports',
        ]);

        $error_array = array();
        $success_output='';
        if ($validation->fails()) 
        {
            foreach($validation->messages()->getMessages() as $field_name => $messages)
            {
                $error_array[] = $messages;
            }
        }
        else
        {
            if($request->get('button_action') == "insert") 
            {
                $port = new Port([
                    
                    'port_name' =>  $request->get('port_name')
                ]);
                $port->save();
                $success_output = '<div class="alert alert-success">Data Inserted</div>';   
            }
        }
        $output = array(
            'error'     =>  $error_array,
            'success'   =>  $success_output
        );
        echo json_encode($output);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //  $port = Port::find($port_id);
        // return view('port.edit',compact('port','port_id'));
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

    public function editPort(Request $request)
    {
        $port=Port::find($request->id);
        $port->port_name= $request->get('title');       
        $port->save();
        return 'data update';
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
        return $id;
    }
    
    public function delete(Request $request)
    {
        $port=Port::find($request->id);
        $port->delete();
        return 'Delete successfully';
    }
}
