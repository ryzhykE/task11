<?php


abstract class ActivRecord extends MySql
{
    public static function findAll()
    {
        $db = new MySql();
        $data = $db->select('*')->from(static::$table)->query([], static::class);
        return $data;
    }

    public function isNew()
    {
        return !empty($this->key);
    }

    public function insert()
    {
        if($this->isNew())
        {
            $columns = [];
            $data = [];
            foreach ($this as $column => $value) {
                $columns[] = $column;
                $data[] = $value;
            }
            $key =  '`' . implode('`, `',$columns) . '`';
            $value = implode(', ', $data);
            $db = new MySql();
            $db->inserter(static::$table,$key)->values($value)->execute();
        }
    }


    public function saves ()
    {
        if (empty($this->key)) {
            $this->insert();
        } else {
            $this->update();
        }
    }

    public function update()
    {
        $columns = [];
        $data = [];
        foreach ($this as $item => $value) {
            if ('data' == $item) {
                continue;
            }
            $columns[] = $item;
            $data = $value;
        }
        $db = new MySql();
        $key =  '`' . implode('`, `',$columns) . '`';
        $db->update(static::$table)->setkey("`data` = " .$this->data)->where( $key . " = " .$this->key)->execute();
    }

    public function delete()
    {
        $columns = [];
        $data = [];
        foreach ($this as $item => $value) {
            if ('data' == $item) {
                continue;
            }
            $columns[] = $item;
        }
        $key =  '`' . implode('`, `',$columns) . '`';
        $db = new MySql();
        $res = $db->delites()->from(static::$table)->where($key . " = " . "'$this->key'")->execute();
    }

}