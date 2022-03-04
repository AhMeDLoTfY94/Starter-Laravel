<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\models\Offer;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class FoController extends Controller
{
    public function __construct()
    {

    }


    public function getfo(){
        return Offer::select('id',"name")->get();
    }

    public function stor(){
        Offer::create([

            "name" => "lotfy",
            "price" => '200',
            "photo" => "1213.png",
        ]);
    }

    public function create(){
        return view("offers.create");
    }

    public function store(Request $req)
    {
        $rules=[
            'name'=>"required | max:100|unique:offers,name",
            'price' => "required | numeric",

            ];

        $message=[
            'name.required' =>__('message.offer name required'),
            'price.required' =>__('message.offer price required'),
            'price.numeric'=>__('message.price must be number'),
            'name.unique' =>__('message.offer name must be unique') ,

        ];

        $validator = Validator::make($req->all(),$rules,$message) ;
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($req->all());
        }

        Offer::create([
            'name'=> $req -> name,
            'price'=> $req -> price,
            'photo'=> $req -> photo,

        ]);
        return redirect()->back()->with(["success" => "تم إضافه العرض بنجاح"]);

    }


}
