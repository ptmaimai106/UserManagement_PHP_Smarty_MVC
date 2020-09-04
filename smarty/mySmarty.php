<?php
require_once('Smarty.class.php');

class mySmarty extends Smarty{
    function __construct()
    {
        parent::__construct();

        $this->error_reporting = E_ALL & ~E_NOTICE;
        $this->setTemplateDir('../View');
        $this->setCompileDir('../View_C');
    }
}