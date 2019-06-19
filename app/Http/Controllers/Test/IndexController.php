<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    private $data = [
        ['id'=>1,'username'=>'猩红收割者','age'=>158,'password'=>'admin'],
        ['id'=>2,'username'=>'虚空遁地兽','age'=>648,'password'=>'admin'],
        ['id'=>3,'username'=>'流浪法师','age'=>57,'password'=>'admin'],
        ['id'=>4,'username'=>'逆羽','age'=>26,'password'=>'admin'],
        ['id'=>5,'username'=>'幻翎','age'=>29,'password'=>'admin']
    ];
    public function list()
    {
        return $this->data;
    }

    public function edit(Request $request,int $id)
    {
        return response()->json($request->all(), 202);
    }

    public function add(Request $request)
    {
        $id = $this->data[0]['id'];
        for($i=0;$i<count($this->data);$i++){
            if($this->data[$i]['id']>$id){
                $id = $this->data[$i]['id'];
            }
        }
        $id++;
        $data = $request->all();
        $data['id'] = $id;

//        dump($data);
        array_push($this->data,$data);
        return $this->data;
    }

    public function del(Request $request,int $id)
    {
//        dump($id);
//        unset($this->data[]);
//        dump($this->data);
        for($i =0 ;$i<count($this->data);$i++){
            if($this->data[$i]['id']==$id){
                unset($this->data[$i]);
            }
        }
        return $this->data;
    }
}
