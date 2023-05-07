<?php

namespace App\Models;

class Users {
    private $table = null;
    private $id = null;

    public function __construct($id=null, $data=[])
    {
        $this->table = database()->table('users');
        $this->id = ($id == null) ? rand(1, 99999999) : $id;

        if($id == null) {
            $data['id'] = $this->id;
            $this->table->insert($data);
        }
    }

    public function getName() : string
    {
        $users = $this->table->select([
            'id' => $this->id
        ]);

        if(count($users) < 1) return '';

        return $users[0]['name'];
    }

    public function setName($value) : void
    {
        $this->table->update([
            'name' => $value
        ], [
            'id' => $this->id
        ]);
    }
}