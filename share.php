<?php
// share.php - simple share stub: generates a public page for a result_id (reuses submit.php view)
if (!isset($_GET['result_id'])) { echo "Missing result id"; exit; }
header('Location: submit.php?result_id=' . intval($_GET['result_id']));
 
