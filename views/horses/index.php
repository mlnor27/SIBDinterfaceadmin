<?php
global $content;
$tab = array_keys($content['horse']);
var_dump($tab);

foreach($content['horse'] as $d) {
   echo'
    <table>
        <tr>
            <th>
                '.$tab[1].'
            </th>
        <th>
                '.$tab[2].'
            </th>
        <th>
                '.$tab[19].'
            </th>
        <th>
                '.$tab[20].'
            </th>
        </tr>
        <tr>
            <td>
        <h1><a href="'.WEBROOT.'horses/view/'.$d['horse_id'].'">'.$d['name'].'</a></h1>
            </td>
            <td>
                '.$d['description'].'
            </td>
            <td>
                '.$d['price'].'
            </td>
            <td>
                '.$d['level'].'
            </td>
        </tr>
    </table>';

}

?>
