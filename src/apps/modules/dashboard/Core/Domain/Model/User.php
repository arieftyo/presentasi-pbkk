<?php

namespace Its\Example\Dashboard\Core\Domain\Model;

class User {
    protected $id;
    protected $nama;

    public function __construct($id, $nama)
    {
        $this->id = $id;
        $this->nama = $nama;
    }

    public function isExist()
    {
        return isset($this->id);
    }

}

?>