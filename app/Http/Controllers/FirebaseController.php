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
        $firebaseToken = "dAwZHN74Sz-jTcPDxj1iIz:APA91bGahsVEZlYMUYnt0UCT6NA95o3KoZ_uYwXymQiQdncj9pGSsvL8QcWR25sqn0g3wS0KfX7xzCO2yc4Uc8tXPZlUwE6L4N6V6eG4xdvtKbbjW1710C178axGTBLEo8rm_ItKJuXe";

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
