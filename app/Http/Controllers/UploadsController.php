<?php

namespace App\Http\Controllers;

use App\Upload;
use \Input as Input;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UploadsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('upload');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        if(Input::hasFile('file')) {
            echo "Din bild har laddats upp!";
            
            $file = Input::file('file');
            $file->move('uploads', $file->getClientOriginalName());
            
            $uniqueId = strtr(base64_encode(openssl_random_pseudo_bytes(11)), "+/=", "XXX");
            $imgUrl = "uploads/" . $file->getClientOriginalName();
            
            $upload = new Upload;
            $upload->uniqueId = $uniqueId;
            $upload->imgUrl = $imgUrl;
            $upload->save();
        
            return redirect('/' . $uniqueId);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $upload = Upload::where('uniqueId', $id)->first();
        return view('uploads')->with(compact('upload'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
