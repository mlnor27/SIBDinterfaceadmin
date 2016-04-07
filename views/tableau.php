<script type="text/javascript" language="javascript" src="<?php WEBROOT ?>js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="<?php WEBROOT ?>css/jquery.dataTables.min.css">
<script type="text/javascript" language="javascript" src="<?php WEBROOT ?>js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php WEBROOT ?>js/tableformations.js"></script>
<?php

global $class;
global $content;

echo '<h2>' . $class . '</h2>';
?>
<div class="table-responsive">

    <table id="example" class="table" cellspacing="0" width="100%">
        <thead>
        <?php

        echo '<th></th>';
        foreach ($content['columns' . $class] as $t) {
            foreach ($t as $value) {
                echo '<th> ' . $value . ' </th>';
            }
        }
        ?>
        </thead>
        <tbody>
        <?php

        foreach ($content[$class] as $data) {
            echo '<tr>';
            $classId = $class . '_id';
            $id = $data->$classId;
            echo '<td> <input type="checkbox" name="check[]" value="' . $id . '"> </td>';
            foreach ($data as $value) {
                echo '<td> ' . $value . ' </td>';
            }

            echo '<td><a href="' . WEBROOT . $class . '/delete/' . $id . '"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>';
            echo '<td><a href="' . WEBROOT . $class . '/update/' . $id . '"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>';
            echo '</tr>';
        }

        ?>
        </tbody>
    </table>
    <form>
        <button type="button" data-toggle="modal"
                data-target="#myModal"> Ajouter
        </button>
    </form>

    <?php include("addobject.php") ?>

</div>