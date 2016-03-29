<table class="table bootstrap-datatable countries">
    <thead>
    <tr>
        <th></th>
        <?php
            foreach ($content_for_layout as $k=>$item) {
                echo "<th>$k</th>";
            }
        ?>
    </tr>
    </thead>
    <tbody>
        <?php
            for ($i=0;$i<=count($content_for_layout);$i++){
                echo "<tr>";

                for ($j=0;$j<=count($content_for_layout[$j]);$j++){
                    echo "<td>$content_for_layout[$i][$j]</td>";
                }

                echo "<td><img src='".WEBROOT."img/Crayon.png' alt='Modifier'></td>";
                echo "<td><img src='".WEBROOT."img/Trash.png' alt='Supprimer'></td>";

                echo "</tr>";
            }
        ?>
    </tbody>
</table>