<?php
require_once('page.php');

$page = new Page();
$content = <<<EOD
            <h2>About Me</h2>
EOD;

$page->setContent($content);
$page->display();
?>