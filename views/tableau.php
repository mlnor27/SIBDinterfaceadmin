<?php

global $class;
global $content;
$Select = false;
$Update = false;
$Insert = false;
$Delete = false;

$tables_priv = $content['privhorses'][0]->Table_priv;

$tab = explode(',', $content['privhorses'][0]->Table_priv);
foreach ($tab as $t) {
    if ($t == 'Select') {
        $Select = true;
    }
    if ($t == 'Update') {
        $Update = true;
    }
    if ($t == 'Insert') {
        $Insert = true;
    }
    if ($t == 'Delete') {
        $Delete = true;
    }

}

echo '<h2>' . $class . '</h2>';
?>
<div class="table-responsive">

    <table id="example" class="table" cellspacing="0" width="100%">
        <thead>
        <?php

        echo '<th>check</th>';
        if ($Delete) {
            echo '<th>delete</th>';
        }
        if ($Update) {
            echo '<th>update</th>';
        }
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
            $classId = $class . '_id';
            $id = $data->$classId;
            echo '<tr>';
            echo '<td> <input type="checkbox" name="check[]" value="' . $id . '"> </td>';
            if ($Delete) {
                echo '<td><a href="' . WEBROOT . $class . '/delete/' . $id . '"><i class="material-icons">delete_forever</i></a></td>';
            }
            if ($Update) {
                echo '<td><a href="' . WEBROOT . $class . '/update/' . $id . '"><i class="material-icons">mode_edit</i></a></td>';
            }
            foreach ($data as $key=>$value) {
                if ($key = 'descrption') {
                    echo '<td> ' . substr($value, 0,25) . ' </td>';
                } else {
                    echo '<td> ' . $value . ' </td>';
                }
            }

            echo '</tr>';
        }

        ?>
        </tbody>
    </table>
</div>
<?php if($Insert) { ?>
<form>
    <button type="button" data-toggle="modal"
            data-target="#myModal"> Ajouter
    </button>
</form>

<?php } include("addobject.php") ?>
