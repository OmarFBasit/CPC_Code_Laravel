<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
 public function index(Request $r)
   {
 // data receive from input form
   	$A = $r->A;
   	$B=$r->B;
   	$C=$r->C;
   	$op=$r->op;
// calculation part for simple calculator using switch
switch ($op) {
  case "*":
    $tot=$A * $B;
    break;
  case "+":
    $tot=$A + $B;
    break;
  case "-":
    $tot=$A - $B;
    break;
  case "/":
    $tot=$A / $B;
    break;
  default:
    $tot="Wrong Operator";
    break;
}
 // return home page with calculation and result data
   return view('pages.home')
   ->with('tot', $tot)
   ->with('C', $C);

   }

   public function form(){
    // defulat open page
   	return view("pages.Calculator_Form");
   }
}
