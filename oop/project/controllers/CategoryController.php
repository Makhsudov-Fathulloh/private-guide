<?php

namespace controllers;

class CategoryController
{
    public function list() {
        echo "category list";
        echo "<br>";
    }

    public function create() {
        echo "category create";
    }

    public function update($id) {
        echo "category update: $id";
    }
}