<?php
// rce-test.php
if (isset($_GET['cmd'])) {
    eval($_GET['cmd']); // VULNERABILITY: Remote Code Execution
}
?>
