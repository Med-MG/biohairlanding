<?php 

require __DIR__ . '/vendor/autoload.php';

if(isset($_POST['submit'])){

$client = new \Google_Client();
$client->setApplicationName('Google Sheets API PHP Quickstart');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAuthConfig(__DIR__ . '/credentials.json');
$client->setAccessType('offline');

$service = new Google_Service_Sheets($client);
$spreadsheetId = "1VPDLAmNXI50q2PkGBG9bPdVhyl17q9ahDIQv2VFawEM";

$range = "biohair";
$values = [
    ["01", $_POST['full-name'], $_POST['city'], $_POST['phone'], $_POST['ordertype']],
];

$body = new Google_Service_Sheets_ValueRange([
    'values' => $values
]);

$params = [
    'valueInputOption' => 'RAW'
];

$insert = [
    "insertDataOption" => "INSERT_ROWS"
];

$result = $service->spreadsheets_values->append(
    $spreadsheetId,
    $range,
    $body,
    $params,
    $insert
);

header('location: index.php?order');

}
// $response = $service->spreadsheets_values->get($spreadsheetId, $range);
// $values = $response->getValues();

// if (empty($values)) {
//     print "No data found.\n";
// } else {
//     $mask = "%10s %-10s %s\n";
//     foreach ($values as $row) {
//         // Print columns A and E, which correspond to indices 0 and 4.
//        echo  sprintf($mask, $row[2], $row[1], $row[0]);
//     }
// }

?>
