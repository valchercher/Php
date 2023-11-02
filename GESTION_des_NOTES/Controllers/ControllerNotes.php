<?php
require_once '../Models/notesmodel.php';

class NotesController {
    private $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function outputNiveau() {
        $niveau = $this->model->getNiveau();

    // donnes en json
        header('Content-Type: application/json; charset=utf-8');
         echo json_encode($niveau);
    }
}