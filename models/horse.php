<?php

Class horse extends Model {
    var $table = 'Horse';

    function selectAll() {
        $this->find();
    }

}

?>