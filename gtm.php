<?php

// sample GoToMeeting API call: create meeting
// docs: https://developer.citrixonline.com/api/gotomeeting-rest-api/apimethod/create-meeting

// display all errors
ini_set ('display_errors', 1);
error_reporting (E_ALL);

// set valid access_token from OAuth flow
$access_token = '1234...';

$url = "https://api.citrixonline.com/G2M/rest/meetings";
$headers = array (
    "Accept: application/json",
    "Content-Type: application/json",
    "Authorization: OAuth oauth_token=$access_token"
);
$data = array (
    'subject' => 'Sample meeting created via API',
    'starttime' => '2013-03-01T08:00:00',
    'endtime' => '2013-03-01T09:00:00',
    'timezonekey' => '',
    'meetingtype' => 'Scheduled',
    'passwordrequired' => 'false',
    'conferencecallinfo' => 'Hybrid' // normal PSTN + VOIP options
);
$data_json = json_encode ($data);

$ch = curl_init();
curl_setopt_array ($ch, array (
    CURLOPT_URL => $url,
    CURLOPT_HEADER => false,
    CURLOPT_FOLLOWLOCATION => false,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 10,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $data_json,
));

$results = curl_exec ($ch);
$info = curl_getinfo ($ch);
curl_close ($ch);

print "data sent: $data_json\n";
//print "headers sent: " . print_r($headers,1) . "\n"; 
//print "curl info: " . print_r($info,1) . "\n";

print "data returned: " . print_r($results,1 ) . "\n";
//print "data returned decoded: " . print_r(json_decode($results),1) . "\n";

/** sample output:

data sent: {"subject":"Sample meeting created via API","starttime":"2013-03-01T08:00:00","endtime":"2013-03-01T09:00:00","timezonekey":"","meetingtype":"Scheduled","passwordrequired":"false","conferencecallinfo":"Hybrid"}
data returned: [{"joinURL":"https:\/\/www3.gotomeeting.com\/join\/569897550","maxParticipants":51,"uniqueMeetingId":200000000016584808,"conferenceCallInfo":"United States: +1 (636) 277-0130\nAccess Code: 569-897-550","meetingid":569897550}]

**/