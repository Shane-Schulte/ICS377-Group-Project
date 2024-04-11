<?php
require_once 'config.php';

class Page {
    protected $content;
    protected $header;
    protected $footer;
    protected $docRoot;
    protected $path;

    public function __construct(){
        $config = new Config();
        $this->docRoot = $config->getDocRoot();
        $this->path = $config->getPath();
        $this->header = $this->path . "/includes/header.php";
        $this->footer = $this->path . "/includes/footer.php";
    }

    public function setContent($content){
        $this->content = $content;
    }

    public function display(){
        $docRoot = $this->docRoot;
        include($this->header);
        echo $this->content;
        include($this->footer);
    }
}