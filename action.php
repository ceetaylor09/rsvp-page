<?php
session_start();
if(isset($_POST['subscribe'])){
    $fname = $_POST['FNAME'];
    $lname = $_POST['LNAME'];
    $email = $_POST['EMAIL'];
    if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        // MailChimp API credentials
        // $apiKey = '1f3b12468cc35d76c2f13e0c27e5e18b-us6';
        // $listID = '903fade48b';
        $apiKey = '#';
        $listID = '#'; 
        
        
        // MailChimp API URL
        // $memberID = md5(strtolower($email));
        //$dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
        //$url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members/' . 
        $url = '#' . 
        //$memberID;
        
        // member information
        $json = json_encode([
            'email_address' => $email,
            'status'        => 'subscribed',
            'merge_fields'  => [
                'FNAME'     => $fname,
                'LNAME'     => $lname
            ]
        ]);
        
        // send a HTTP POST request with curl
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
    
    
        
    }
}
// redirect to thank you page
echo "<script type='text/javascript'> document.location = 'thank-you-page2.php'; </script>";
