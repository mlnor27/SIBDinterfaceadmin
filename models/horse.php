<?php

Class horse extends Model {

    var $table = 'Horse';

    function selectAll() {
        return $this->find();
    }

}

?>