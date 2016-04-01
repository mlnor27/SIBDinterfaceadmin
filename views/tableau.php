<div class="table-responsive">
    <table id="example" class="table" cellspacing="0" width="100%">
        <thead>
        <?php
        global $class;
        global $content;
        $toto = false;
        foreach ($content[$class] as $data) {
            foreach ($data as $key => $value) {
                if (!$toto) {
                    echo '<th> ' . $key . ' </th>';
                }
            }
            $toto = true;
        }
        ?>
        </thead>
        <tbody>
        <?php
        foreach ($content[$class] as $data) {
            echo '<tr>';
            $classId = $class . '_id';
            $id = $data->$classId;
            foreach ($data as $value) {
                    echo '<td> ' . $value . ' </td>';
            }
            echo '<td><a href="' . WEBROOT . $class . '/delete/' . $id . '"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>';
            echo '<td><a href="' . WEBROOT . $class . '/delete/' . $id . '"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a></td>';
            echo '<td><a href="' . WEBROOT . $class . '/delete/' . $id . '"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>';

            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>