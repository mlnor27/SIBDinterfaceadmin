<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo $class ?></h4>
            </div>

            <form action="<?php echo WEBROOT.$class.'/add'; ?>" method="post" id="frmAddChapter">
                <?php
                global $class;
                global $content;
                $toto = false;

                $k = 0;
                foreach ($content['columns' . $class] as $t) {
                    foreach ($t as $value) {
                        if (!$k == 0) {
                            echo '<div class="form-group">
                                <div class="modal-body">
                                    <th> ' . $value . ' </th>
                                    <input type="text" name="' . $value . '"/><br/>
                                </div>
                             </div>';
                        }
                        $k++;
                    }

                }
                ?>
                <div class="modal-footer">
                    <button id="addChapter" class="col-md-6 btn btn-sm btn-primary btn-block" type="submit"
                             aria-label="Close">Ajouter
                    </button>
            </form>
            <button type="button" class="col-md-6 btn btn-sm btn-primary btn-block" data-dismiss="modal">Retour</button>
        </div>
    </div>


</div>
</div>