<?php

namespace vendor\framework;
class Application  {
    private $id = null;

    public function run()
    {
        $uri = $_SERVER['REQUEST_URI']; // /oop/project/index.php/site/contact
        $data = explode("/", $uri);

        $className = ucfirst($data[4]) . "Controller"; // site -> SiteController
        $className = "controllers\\" . $className; // controllers\SiteController
        $functionName = $data[5];
        if (isset($data[6])) {
            $this->id = $data[6];
        }

        $object = new $className();
        if (is_null($this->id)) {
            $object->$functionName();
        } else {
            $object->$functionName($this->id);
        }
    }
}