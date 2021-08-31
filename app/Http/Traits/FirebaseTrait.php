<?php
namespace App\Http\Traits;
use App\Models\user;
use App\Models\user_token;
use Auth;
//use Config;



trait FirebaseTrait{

    public function sendPushNotification($firebaseToken,$title,$body)
    {

       // $title = "Text";
        //$body = "Hello";


        $SERVER_API_KEY = env('Firebase_Server_Key');
        file_put_contents('test.txt',$SERVER_API_KEY);

        $data = [
            "to" => $firebaseToken,
            "notification" => [
                "title" => $title,
                "body" => $body,
            ]
        ];
        $dataString = json_encode($data);

        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

        $response = curl_exec($ch);

        //dd($response);
    }

}


?>
