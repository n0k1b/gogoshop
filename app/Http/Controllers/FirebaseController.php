<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirebaseController extends Controller
{
    //

    public function sendPushNotification()
    {

        $title = "Text";
        $body = "Hello";
        $firebaseToken = "epht0Se5QIy3woz9wJq8k7:APA91bFceWjAw6bv_S7PNwLGjf0c15obywF0wnuXX3Q3YjtL20KY8Oj2EKo4_xdSPdav2z6QrtjxmWnRsP9JZ9gdvBL89p89XzF7KyVDjFaUlh1BFkOzYEFR3264GzrQPw5g-kkkKlz5";

        $SERVER_API_KEY = 'AAAACkd3hVY:APA91bHgFSXOwUPvR3sU_J6snRQ5G1jKHWyUiL_vabQwE9nr1Y8ZToe-7r34ZqRghdzcKCJ1eyZ0jW7r9co-ivcA8MoguMNE5qSK7lf7R1ZnfcsdbYN39mpPfUq-RC-W_PeZgYv99K-T';

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

        dd($response);
    }


}
