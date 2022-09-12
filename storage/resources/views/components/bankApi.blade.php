@php
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => 'https://api.paystack.co/bank',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => ['Authorization: Bearer sk_test_cce21b66c18045c137c6daccfc7923aff86f52a2', 'Cache-Control: no-cache'],
]);

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
    echo 'cURL Error #:' . $err;
} else {
    $data = json_decode($response, true);
    $data = $data['data'];
    foreach ($data as $key) {
        echo ' <option value =' . "'" . $key['code'].",". $key['name']. "'" . '>';
        echo $key['name'];
        echo '</option>';
    }
}
@endphp
