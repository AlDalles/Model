<?php


namespace Hillel;


abstract class model
{

    public function getID():int
    {
        return array_values(get_object_vars($this))[0];

    }

    protected function getRealClassName()
    {
            $position = strrpos(static::class, '\\');

        if ($position) {
            return substr(static::class, ($position) + 1);
        }
        else return static::class;
    }


    public static function findById($id)
    {
        $sql = 'SELECT * FROM ' . strtolower(substr(static::class, (strrpos(static::class, '\\')) + 1)) . ' WHERE id = ' . $id;
        var_dump($sql);
    }

    public function create()
    {
        $cols = get_object_vars($this);

        $values = array_map(fn($item) => ':' . $item, array_values($cols));

        $sql = 'INSERT INTO ' . strtolower($this->getRealClassName()) . ' (' . implode(', ', array_keys($cols)) . ') 
        VALUES (' . implode(', ', $values) . ')';
        var_dump($sql);


    }

    public function delete()
    {
        $sql = 'DELETE ' . strtolower($this->getRealClassName()) . ' WHERE id = ' . $this->getID();
        var_dump($sql);
    }


    public function update()
    {
        $sql = 'UPDATE ' . strtolower($this->getRealClassName()) . ' set name = :' . array_values(get_object_vars($this))[1] . ', email = :' . array_values(get_object_vars($this))[2] . ' WHERE id = ' . $this->getID();
        var_dump($sql);


    }

    public function save()
    {

        if (model::findById($this->getID())) {
            $this->update();

        } else {
            $this->create();
        }


    }

}