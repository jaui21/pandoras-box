<?php
// Set sandbox (test mode) to true/false.
$sandbox = TRUE;

// Set PayPal API version and credentials.
$api_version = '85.0';
$api_endpoint = $sandbox ? 'https://api-3t.sandbox.paypal.com/nvp' : 'https://api-3t.paypal.com/nvp';
$api_username = $sandbox ? '[your api usernamen]' : 'LIVE_USERNAME_GOES_HERE';
$api_password = $sandbox ? '[your api password]' : 'LIVE_PASSWORD_GOES_HERE';
$api_signature = $sandbox ? '[your api signature]' : 'LIVE_SIGNATURE_GOES_HERE';
