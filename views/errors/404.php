<?php

use App\Services\Page;

?>
<!doctype html>
<html lang="en">
<?php
Page::getPagePart('head');
?>
<body>
<?php
Page::getPagePart('navbar');
?>
<div class="container">
    <h2 class="mt-4">404 Not Found</h2>
</div>

</body>
</html>
