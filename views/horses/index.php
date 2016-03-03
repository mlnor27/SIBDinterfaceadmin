<?php

foreach($horse as $d) {
    ?>
    <h1><a href="<?php echo WEBROOT; ?>horses/view/<?php echo $d['horse_id']; ?>"><?php echo $d['name']; ?></a></h1>
    <?php
}
?>
