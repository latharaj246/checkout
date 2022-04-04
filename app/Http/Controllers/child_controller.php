<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\child_regs;
use App\Models\card;

class child_controller extends Controller
{
 public function cardNumberGenerate()
  {
    $n = rand(7900000000000009,7999999999999990);
    $m = $n;
    $ans = 0;
    $digits = [];
    while ($m) {
      array_push($digits, ($m % 10));
      $m = intval($m / 10);
    }
    for ($i = 0; $i < 16; $i++) {
      if ($i % 2 == 0) {
        $ans += $digits[$i];
      } else {
        if ($digits[$i] == 5) {
          $ans += 1;
        } else if ($digits[$i] == 6) {
          $ans += 1;
        } else if ($digits[$i] == 7) {
          $ans += 1;
        } else if ($digits[$i] == 8) {
          $ans += 1;
        } else if ($digits[$i] == 9) {
          $ans += 1;
        } else {
          $ans += 2 * $digits[$i];
        }
      }
    }
    $result= $n - $ans % 10;
    return $result;
  }
 
  public function checkCardNumber($n)
  {
    $m = $n;
    $ans = 0;
    $digits = [];
    while ($m) {
      array_push($digits, ($m % 10));
      $m = intval($m / 10);
    }
    for ($i = 0; $i < 16; $i++) {
      if ($i % 2 == 0) {
        $ans += $digits[$i];
      } else {
        if ($digits[$i] == 5) {
          $ans += 1;
        } else if ($digits[$i] == 6) {
          $ans += 1;
        } else if ($digits[$i] == 7) {
          $ans += 1;
        } else if ($digits[$i] == 8) {
          $ans += 1;
        } else if ($digits[$i] == 9) {
          $ans += 1;
        } else {
          $ans += 2 * $digits[$i];
        }
      }
    }
    if($ans%10==0){
      return true;
    }
      return false;
   
  }
 

  public function cvvGenerate()
  {
    $cvv=rand(100,999);
      return $cvv;
    
  }
  //

  public function child_reg(Request $c)
  {
    // return $c;
    $c->validate([
      'firstName' => 'required|min:2|max:20',
      'lastName' => 'required |min:2|max:20',
      'dob' => 'required',
      'email' => 'email|unique:child_regs|min:5|max:40',
      'phone' => 'required|min:10',
      'limit' => 'required'

    ]);


    $child = new child_regs();
    $child->firstName = $c->firstName;
    $child->lastName = $c->lastName;
    $child->dob = $c->dob;
    $child->email = $c->email;
    $child->phone = $c->phone;
    $child->limit = $c->limit;
    $child->save();


    return redirect('card');
  }


  public function card()
  {

    $child = child_regs::where('email', "rustam@gmail.com")->first();
    // echo '<pre>';
    // var_dump($child['id']);
    // die;

    $ca = card::all();
    return redirect("card")->with('data', $ca)->with('child', $child);
  }


  public function viewcard()
  {
    // $obj = new child_controller();
    // $var = $obj->cardNumberGenerate();
    // // return $var;
    // $cvv =new child_controller();
    // $cvvno=$cvv->cvvGenerate();

    $obj = new child_controller();
    $cvvno=$obj->cvvGenerate();
    $data= $obj->cardNumberGenerate();
    return view('realcard')->with('data',$data)->with('cvv',$cvvno);
  }
}
