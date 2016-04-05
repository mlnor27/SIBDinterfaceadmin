<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo $class ?></h4>
            </div>

            <form action="" method="post" id="frmAddChapter">
                <?php
                global $class;
                global $content;
                $toto = false;

                foreach ($content['columns' . $class] as $t) {
                    foreach ($t as $value) {
                        echo '<div class="form-group">
                        <div class="modal-body">
                        <th> ' . $value . ' </th>
                            <input type="text" /><br/>
                        </div>
                            </div>';
                    }
                }
                ?>
                <div class="modal-footer">
                    <button id="addChapter" class="col-md-6 btn btn-sm btn-primary btn-block" type="submit"
                            data-dismiss="modal" aria-label="Close">Ajouter
                    </button>
            </form>
            <button type="button" class="col-md-6 btn btn-sm btn-primary btn-block" data-dismiss="modal">Retour</button>
        </div>
    </div>


</div>
</div>