<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Customer;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AnaSayfaController extends Controller
{
    public function index(){
        $veri=[];

        return view("merhaba",compact(['veri']));

    }
    public function test(){
        return view("sayfa.test");
    }
    public function cek($id,$id1){

        $veri=Company::join('customer','customer.company_id','company.id')->where('company.id',$id)->where('customer.birth_date','>',$id1)->get();

        return view("sayfa.liste",compact(['veri']));
    }
    public function cek1($id,$id1){

        $veri=Company::where('id',$id)->with('customer')->whereHas('customer', function ($query) use ($id1) {
            return $query->where('customer.birth_date','>',$id1);
        })->first();

        return view("sayfa.liste1",compact(['veri']));
    }
    public function cek2($id,$id1){

        $veri = Company::where('id',$id)->with(['customer'=>function($query) use ($id1) {
            $query->where('birth_date','>',$id1);
        }])->first();

        if($veri){

            return view("sayfa.liste2",compact(['veri']));
        }else{
            return "Firma YOk";
        }
    }




}
