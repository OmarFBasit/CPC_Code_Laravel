<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
 public function index(Request $r)
   {

   	$A = $r->A;
   	$B=$r->B;
   	$C=$r->C;
   	$op=$r->op;

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
    $tot="Wrong Operatore";
    break;
}
   return view('pages.home')
   ->with('tot', $tot)
   ->with('C', $C);




   }

   public function form(){
   	return view("pages.Calculator_Form");
   }
}
