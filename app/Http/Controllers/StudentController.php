<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
	public function get_students(){
	static $students = array(0=> "Diana",1=> "Nazgul");
	return $students;

	}
	public function index($id){
	$students=$this->get_students();
	return view('StudentName',["name"=>$students[$id]]);
	}

	public function index1($date){
	return view('StudentDate')->with('date',$date);
	}

	public function index2($age){
	return view('StudentAge',compact('age'));
	}
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
