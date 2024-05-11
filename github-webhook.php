<?php
// GitHub Webhook code
if (isset($_GET['hub_signature'])) {
  $hubSignature = $_GET['hub_signature'];
  $hubChallenge = $_GET['hub_challenge'];
  $hubEvent = $_GET['hub_event'];

  if (hash_equals(hash_hmac('sha1', '9405', $_SERVER['REMOTE_ADDR']), $hubSignature)) {
    // Handle the GitHub webhook event (e.g., update repository data)
  } else {
    http_response_code(401);
    echo 'Invalid webhook signature';
    exit;
  }
} else {
  http_response_code(401);
  echo 'Invalid webhook request';
  exit;
}
?>
