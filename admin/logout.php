<?php
// Start session
session_start();

// Destroy all created session, so there's no session saved
session_destroy();

// Redirect to home or beranda
header("location: ../");