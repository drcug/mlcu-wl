<?php

namespace App\Http\Controllers;
use Mail;
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

        
        $donation = new Donation;
        $donation->gift_id = $request->gift_id;
        $donation->amount = $request->amount;
        $donation->donor = $request->donor;
        $donation->email = $request->email;
        $donation->comment = $request->comment;
        $donation->uuid = uniqid($donation->email,true); 
        $donation->save();
        return redirect()->action('DonationController@thanks', $donation->uuid);

    }
    
    public function thanks($donationId) {
        $donation = Donation::where('uuid',$donationId)->first();

        Mail::send('mail', ['donation' => $donation], function ($message) use ($donation) {
            $subject = "Grazie, ". $donation->donor . "!";
            $recipient = $donation->email;
            $message->from('mlcuwedding0903@gmail.com', 'Maria Luisa e Carlo Umberto');
            $message->to($recipient)->subject($subject);
        });
        return view('thanks', [
        'donation' => $donation
        ]);
    }

}
