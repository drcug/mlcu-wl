<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Gift;
use App\Donation;

class DonationController extends Controller
{
    public function index(Request $request)
    {
    $gifts = Gift::orderBy('sort', 'asc')->get();

    return view('list', [
        'gifts' => $gifts
    ]);

    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required|min:1',
        ]);
        
        $donation = new Donation;
        $donation->gift_id = $request->gift_id;
        $donation->amount = $request->amount;
        $donation->donor = $request->donor;
        $donation->email = $request->email;
        $donation->comment = $request->comment;
        $donation->save();
    
        
        return redirect('/');
    }
}
