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
    
    public function howto(Request $request)
    {
     return view('howto');
    }

    public function contact(Request $request)
    {
     return view('contact');
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

        
            $res = "";
        $subject = "Grazie, ". $donation->donor . "!";
        
        $html_content = "<html><h3>Grazie mille, ". $donation->donor ." ! </h3></html>";
        $html_content .= "<br/><p>Il tuo contributo è di ".$donation->amount." &euro; per il seguente regalo:</p>";
        $html_content .= "<p><b>".$donation->gift->name.".</b></p>";
        $html_content .= "<br/><p>Il tuo commento è: ".$donation->comment.".</p>";
        $html_content .= "<p>Ecco le coordinate bancarie a cui inviare il bonifico:</p>";
        $html_content .= "<br/><p><b>IBAN: BE60733056254370</b>";
        $html_content .= "<br/><b>BIC/SWIFT: KREDBEBB</b>";
        $html_content .= "<br/><b>Intestatario: Maria Luisa Francesca Libardi</b>";
        $html_content .= "<br/><b>Comunicazione: Lista Nozze - ".$donation->gift->name."</b>";
        $html_content .= "<br/><br/><b>Ammontare bonifico: ".$donation->amount." &euro; </b></p>";
        $html_content .= "<br/><p>Grazie di cuore per il tuo sostegno!</p>";
        $html_content .= "<br/><p>Maria Luisa e Carlo Umberto</p>";
        
        $data = "username=".urlencode("mlcuwedding0903@gmail.com");
        $data .= "&api_key=".urlencode("7ca7ab63-807c-4abd-b1ba-d309194581d0");
        $data .= "&from=".urlencode("mlcuwedding0903@gmail.com");
        $data .= "&from_name=".urlencode("Maria Luisa e Carlo Umberto");
        $data .= "&to=".urlencode($donation->email);
        $data .= "&subject=".urlencode($subject);
        $data .= "&body_html=".urlencode($html_content);
    
        $header = "POST /mailer/send HTTP/1.0\r\n";
        $header .= "Content-Type: application/x-www-form-urlencoded\r\n";
        $header .= "Content-Length: " . strlen($data) . "\r\n\r\n";
        $fp = fsockopen('ssl://api.elasticemail.com', 443, $errno, $errstr, 30);
    
        if(!$fp)
          echo "ERROR. Could not open connection";
        else {
          fputs ($fp, $header.$data);
          while (!feof($fp)) {
            $res .= fread ($fp, 1024);
          }
          fclose($fp);
        }
        
        
        return view('thanks', [
        'donation' => $donation
        ]);
    }

}
