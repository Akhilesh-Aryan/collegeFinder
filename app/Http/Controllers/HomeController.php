<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    public function homepage(){
        return view('home',["data"=>Record::all()]);
    }
    public function insertDetails(Request $req){
        $req->validate([
            'title'=>'required|min:4',
            'type'=>'required',
            'est_year'=>'required',
            'city'=>'required',
            'state'=>'required',
            'logo'=>'required|mimes:jpg,png',
        ]);
        $filename = time(). "." .$req->logo->extension();
        $req->logo->move(public_path('images'),$filename);
       $r = new Record();
          $r->title = $req->title;
          $r->type = $req->type;
          $r->est_year = $req->est_year;
          $r->city = $req->city;
          $r->state = $req->state;
          $r->logo = $filename;
          $r->save();
        return redirect()->back();
    }
    public function delete($id){
        Record::find($id)->delete();
        return redirect()->back();
    }
    public function update($edit_id){
        $data['record'] = Record::find($edit_id);
        return view('edit',$data);
    }

    public function updateDetails(Request $req){
        $req->validate([
        'title'=>'required|min:4',
        'type'=>'required',
        'est_year'=>'required',
        'city'=>'required',
        'state'=>'required',
        'logo'=>'required|mimes:jpg,png',
       ]);
       $filename = time(). "." .$req->logo->extension();
       $req->logo->move(public_path('images'),$filename);
       Record::find($req->id)->update([
           "title"=>$req->title,
           "type"=>$req->type,
           "est_year"=>$req->est_year,
           "city"=>$req->city,
           "state"=>$req->state,
           "logo"=>$filename
           ]);
           return "Record Updated Successfully!! Go back";
    }
}
