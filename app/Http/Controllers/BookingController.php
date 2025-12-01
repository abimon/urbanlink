<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $data = [
            'units' => Booking::all()
        ];
        return view('dashboard.bookings', $data);
    }
    function sms($message, $phone)
    {
        $curl = curl_init();
        $data = json_encode(array(
            "mobile" => $phone,
            "response_type" => "json",
            "sender_name" => "23107",
            "service_id" => 0,
            "message" => $message
        ));
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => 'https://api.mobitechtechnologies.com/sms/sendsms',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 15,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data),
                CURLOPT_HTTPHEADER => array(
                    'h_api_key: b123e31006efde04f74addb39db9604ebcf9e3f972743e1d47df0d4ef52b1078',
                    'Content-Type: application/json'
                ),
            )
        );

        $response = curl_exec($curl);
        $result = json_decode($response);
        curl_close($curl);
    }
    public function create($property)
    {
        
    }

    public function store()
    {
        try {
            Booking::create([
                'property' => request('pID'),
                'name' => request('name'),
                'email' => request('email'),
                'contact' => request('contact'),
                'tour_date' => request('tour_date').' '.request('tour_time'),
            ]);
            $cmessage = "Hello " . request('name') . ", Your tour request has been received successifuly. Our agent will get back to you soon to confirm. Thank you for choosing Urban Links Properties.";
            $Amessage = "Hello, A client, " . request('name') . ", of phone number " . request('contact') . ", has booked a tour. Kindly follow-up ASAP. Thank you. Urban Links Properties.";
            $phone = request('contact');
            $this->sms($cmessage, $phone);
            $this->sms($Amessage, '0701583807');
            return redirect()->back();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
