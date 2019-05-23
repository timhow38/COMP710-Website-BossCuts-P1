<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        $data2 = array(
            'location' => '174 Clarkin Road Hamilton, New Zealand',
            'phone' => '07-855 6874',
            'barber1' => 'John Smith',
            'barber2' => 'Robert Downturn',
            'barber3' => 'Ally Sanders'
        );
        return view('pages.index')->with($data2); 
    }

    public function cuts(){
        $data = array(
            'title' => 'Hair Styles & Prices',
            'services' => ['High Fade', 'Buzz Cut', 'Razer Fade'],
            'priceskid' => ['Free', 'Free', 'Free'],
            'pricesstudent' => ['10', '12', '11'],
            'pricesadult' => ['15', '17', '16']
        );
        return view('pages.cuts')->with($data); 
    }
} 
