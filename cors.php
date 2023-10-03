<?php
// Allow requests from any origin (replace * with a specific origin if needed)
header("Access-Control-Allow-Origin: *");

// Allow specific HTTP methods (e.g., GET, POST, PUT, DELETE)
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

// Allow specific HTTP headers in requests
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Allow cookies and credentials to be sent with the request (if needed)
header("Access-Control-Allow-Credentials: true");
