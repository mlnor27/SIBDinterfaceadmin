<?php
global $class;
global $content;
$k = false;
foreach ($content[$class] as $data) {
    foreach ($data as $key => $value) {
        if (!$k) {
            $idClass = $value;
        }
        $k = true;
    }
}

?>
<form action="<?php echo WEBROOT . $class . '/updateObject/' . $idClass; ?>" method="post" id="frmAddChapter">

    <?php
    $toto = false;
    foreach ($content[$class] as $data) {
        foreach ($data as $key => $value) {
            if (!$toto) {
                echo '<div class="form-group">
                                    <div class="modal-body">
                                        <label> ' . $key . ' </label>';
                                         if ($key == "description") {
                                             echo '<textarea rows="4" cols="50" name="'.$key.'">'.$value.'</textarea>';

                                        } else {
                                             echo '<input type = "text" name = "' . $key . '" value = " ' . $value . '" /><br />';
                                         }
                                    echo '</div>
                                </div>';
            }
        }
        $toto = true;
    } ?>


    <button id="addChapter" class=" btn btn-sm btn-primary btn-block" type="submit"
            aria-label="Close">Modifier
    </button>
</form>
<a class="btn btn-md btn-primary btn-block" href="../../<?php echo $class ?>">Retour</a>
