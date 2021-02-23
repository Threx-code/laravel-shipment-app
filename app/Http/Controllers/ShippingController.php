<?php

namespace App\Http\Controllers;

use App\Shipping;
use App\Payments;
use GuzzleHttp\Client;
use App\Mail\EmailSender;
use App\Mail\AdminNotifier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ShippingFormRequest;


class ShippingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * return the cost for shipping according to country
     *
     * 
     */
    public function getTransaction(Request $request)
    {
        $country = $request->country; 
        $trans_mode = $request->trans_mode;
        $kilo_weight = $request->kilo_weight;
        $shipping = 0;
        $trans = 0;
        $kilo = 0;

        if($country == "UK"){
            $shipping = 800;
        }
        if($country == "US"){
            $shipping = 1500;
        }
        if($trans_mode == "Base Fare by Air"){
            $trans = 50000;
            $kilo = $kilo_weight * 10000;
        }
        if($trans_mode == "Base Fare by Sea"){
            $trans = 15000;
            $kilo = $kilo_weight * 2000;
        }

         $total = $shipping + $trans + $kilo;
         $tax = $total / 10;
         $total = $total + $tax;

        echo '
        <p>Country of Origin: 
            <strong>'. $country .' </strong>
        </p>
        <p>Destination: 
            <strong>Nigeria </strong>
            </p>
        <p>Mode of Transport: 
            <strong>'. $trans_mode .' </strong>
        </p>
        <p>Item Weight: 
            <strong>'. $kilo_weight .' </strong>
        </p>
        <p>Initial Cost: 
            <strong>'. number_format($trans) .' </strong>
        </p>
        <p>Item Weight Cost: 
            <strong>'. number_format($kilo) .' </strong>
        </p>
        <p>Country Flat Rate: 
            <strong>'. number_format($shipping) .' </strong>
        </p>
        <p>Custom Tax: 
            <strong>'. number_format($tax) .' </strong>
        </p><hr>
        <p>Total: 
            <strong>'. number_format($total) .' </strong>
        </p>
          
        '; 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShippingFormRequest $request)
    {
        $country = $request->country; 
        $trans_mode = $request->trans_mode;
        $kilo_weight = $request->kilo_weight;
        $shipping = 0;
        $trans = 0;
        $kilo = 0;

        $unwanted_array = array("Select Country of Origin", "Select Mode of Transportation");

        

        $validator = $request->validated();

        if($validator){

            if(!in_array($country, $unwanted_array) && !in_array($trans_mode, $unwanted_array)){

                if($country == "UK"){
                    $shipping = 800;
                }
                if($country == "US"){
                    $shipping = 1500;
                }
                if($trans_mode == "Base Fare by Air"){
                    $trans = 50000;
                    $kilo = $kilo_weight * 10000;
                }
                if($trans_mode == "Base Fare by Sea"){
                    $trans = 15000;
                    $kilo = $kilo_weight * 2000;
                }
                
                    $total = $shipping + $trans + $kilo;
                    $tax = $total / 10; 
                    
                    echo $total = $total + $tax;

                Shipping::create([
                    'country_origin' => $country,
                    'country_destination' => 'Nigeria',
                    'transportation_mode' => $trans_mode, 
                    'kilo_weight' => $kilo_weight,
                    'shipping_total' => $total
                ]);

            }
            else{
                echo "Please Select Country and Transaction Mode";
            }
        } 
    }


     /**
     * get the response from paystack api
     *
     * @param response
     * @return array result
     */

    public function paystackTransaction(Request $request){
        $client = new Client();
        $url = "https://api.paystack.co/transaction/verify/".$request->reference;

        $headers = [
            'Authorization' => 'Bearer sk_test_545897a68f19f47e522eddbc18737a98baded9dc
            Cache-Control: no-cache'
        ];

        $response = $client->request('GET', $url, [
            'headers' => $headers
        ]);

        $result = json_decode($response->getBody(), true);

        if (array_key_exists('data', $result) && array_key_exists('status', $result['data']) && ($result['data']['status'] === 'success')){

            /* response data stored into the database for future conflict resolution*/
            $customerEmail = $result['data']['customer']['email'];
            $customer = Payments::create([
                'trans_id' => $result['data']['id'],
                'ref_code' => $result['data']['reference'],
                'amount' => $result['data']['amount']/100,
                'date' => $result['data']['transaction_date'],
                'currency' => $result['data']['currency'],
                'channel' => $result['data']['channel'],
                'auth_code' => $result['data']['authorization']['authorization_code'],
                'card_type' => $result['data']['authorization']['card_type'],
                'bank' => $result['data']['authorization']['bank'],
                'card_brand' => $result['data']['authorization']['brand'],
                'cus_id' => $result['data']['customer']['id'],
                'email' => $result['data']['customer']['email'],
                'customer_code' => $result['data']['customer']['customer_code'],
            ]);

            /* customers will receive email*/
            Mail::to($customerEmail)->send(new EmailSender($customer));

            /*add the admin email you want to receive notification here*/
            Mail::to('admin@frieghters.com')->send(new AdminNotifier($customer));

            echo "Yous Transaction has been successfully processed";
        }

        

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
