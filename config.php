<?php

class Config {
    protected $username;
    protected $password;
    protected $docRoot;
    protected $path;

    public function __construct(){
        $isLocal = in_array($_SERVER['HTTP_HOST'], ['localhost', '127.0.0.1']);

        if ($isLocal){
            $this->path = $_SERVER["DOCUMENT_ROOT"] . "/ICS377/";
            $this->docRoot = "http://" . $_SERVER['HTTP_HOST'] . "/ICS377/";
            $this->username = "root";
            $this->password = "";
        } else {
            $this->docRoot = "http://" . $_SERVER['HTTP_HOST'] . "/~ics377sp2415/";
            if (isset($_SERVER["CONTEXT_DOCUMENT_ROOT"])) {
                $this->path = $_SERVER["CONTEXT_DOCUMENT_ROOT"] . "/~ics377sp2415/";
            }
        }
    }

    public function getDocRoot() {
        return $this->docRoot;
    }

    public function getPath() {
        return $this->path;
    }
}