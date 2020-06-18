<?php
// start session, destroy session and set status to success
session_start();
session_destroy();
echo json_encode(['status' => 'success']);

