<?php

class Place {
    private $place_name;
    private $pic_link;
    private $how_long;

    function __construct($place_name, $pic_link, $how_long) {
        $this->place_name = $place_name;
        $this->pic_link = $pic_link;
        $this->how_long = $how_long;
    }

    function getPlace() {
        return $this->place_name;
    }

    function setPlace($place_name) {
        $this->place_name = $place_name;
    }

    function getPic() {
        return $this->pic_link;
    }

    function setPic($pic_link) {
        $this->pic_link = $pic_link;
    }

    function getHowLong() {
        return $this->how_long;
    }

    function setHowLong($how_long) {
        $this->how_long = $how_long;
    }

    function save() {
        array_push($_SESSION['place_list'], $this);
    }

    static function deleteAll() {
        $_SESSION['place_list'] = [];
    }

    static function getAll() {
        return $_SESSION['place_list'];
    }
}
