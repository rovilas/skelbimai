<?php

namespace Core;

use Helper\DBHelper;

class AbstractModel
{
    protected $data;

    protected $table;

    protected $id;

    public function getId()
    {
        return $this->id;
    }


    public function save()
    {
        $this->assignData();
        if (!isset($this->id)) {
            $this->create();
        } else {
            $this->update();
        }
    }

    protected function update()
    {
        $db = new DBHelper();
        $db->update($this->table, $this->data)->where('id', $this->id)->exec();
    }

    protected function create()
    {
        $db = new DBHelper();
        $db->insert($this->table, $this->data)->exec();
    }

    protected function assignData()
    {
        $this->data = [];
    }

    public function delete()
    {
        $db = new DBHelper();
        $db->delete()->from($this->table)->where('id', $this->id)->exec();
    }

    public static function isValueUnic($colum, $value, $table)
    {
        $db = new DBHelper();
        $rez = $db->select()->from($table)->where($colum, $value)->get();
        return empty($rez);
    }

    public static function count($table)
    {
        $db = new DBHelper();
        // SELECT count(*) FROM ads;
        $rez= $db->select('count(*)')->from($table)->where('active',1)->get();
        return $rez[0][0];

    }


}
