<?php

require_once ('lib/ActivRecord.php');

class MY_TEST extends ActivRecord
{
    public static $table = 'MY_TEST';
    public $key;
    public $data;
}