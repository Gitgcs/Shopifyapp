<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "df052ece61ae967faa833fa00b1f6c0f";
$scopes = "read_orders,write_products";
$redirect_uri = "http://gcs.infinityfreeapp.com/apps/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();