<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Cookie;

class CartController extends Controller{
    public $product=array(
         array("name" => "Sledgehammer", "price" => 125.75),
         array("name" => "Axe", "price" => 190.50),
         array("name" => "Bandsaw", "price" => 562.13),
         array("name" => "Chisel", "price" => 12.9),
         array("name" => "Hacksaw", "price" => 18.45)
         );
    public function getAllCartInfo(){
        foreach ($this->product as $key => $value) {
        if(!null==Cookie::get($value['name'])){
           $cookiejson=Cookie::get($value['name']);
           $cookiearray=json_decode($cookiejson,true);
           $cookie[key($cookiearray)]['price']=$cookiearray[key($cookiearray)]['price'];
           $cookie[key($cookiearray)]['qty']=$cookiearray[key($cookiearray)]['qty'];
        }
        }
        if(isset($cookie)){
        return $cookie;
        }
    }
    public function getAllProductInfo(){

        return $product_json=json_encode($this->product);
    }
    public function remove($name){

        $response = new Response(view('welcome'));
        $response->withCookie(Cookie::forget($name));
        return $response;
    }
    public function destroy(){
        $response = new Response(view('welcome'));
        foreach ($this->product as $key => $value) {
            $response->withCookie(Cookie::forget($value['name']));
        }
        return $response;

    }
    public function add(Request $request){
        $info=$request->info;
        $name=$info['name'];
        if(null!==Cookie::get($name)){
        $existCart=json_decode(Cookie::get($name),true);
        $existCart[$name]['qty']++;
        $cartjson=json_encode($existCart);
        }else{
            $cartvalue[$name]['price']=$info['price'];
            $cartvalue[$name]['qty']=1;
            $cartjson=json_encode($cartvalue);
        }
        $response = new Response(view('welcome'));
        $response->withCookie(cookie($name, $cartjson, 86400));
        return $response;
    }
}
