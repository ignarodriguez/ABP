
<?php

// file: model/Categoria.php
require_once(__DIR__ . "/../core/ValidationException.php");

/**
 * Class Categoria
 *
 */
class Categoria {

    private $idCategoria;
    private $nivel;
    private $tipo;

    public function __construct($idCategoria = NULL, $nivel = NULL, $tipo = NULL) {

        $this->idCategoria = $idCategoria;
        $this->nivel = $nivel;
        $this->tipo = $tipo;
    }

    public function getIdCategoria() {
        return $this->idCategoria;
    }

    public function getNivel() {
        return $this->nivel;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

    public function setNivel($nivel) {
        $this->nivel = $nivel;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    /**
     * Checks if the current instance is valid
     * for being inserted in the database.
     *
     * @throws ValidationException if the instance is
     * not valid
     *
     * @return void
     */
    public function checkIsValidForCreate() {
        $errors = array();
        if ($this->idCategoria == NULL) {
            $errors["idCategoria"] = "Identificador de categoria no encontrado";
        }
        if ($this->tipo == NULL) {
            $errors["tipo"] = "Categoria de campeonato no encontrada";
        }
        if ($this->nivel == NULL) {
            $errors["nivel"] = "Nivel de campeonato no encontrado";
        }
        if (sizeof($errors) > 0) {
            throw new ValidationException($errors, "Creacion de campeonato no valida");
        }
    }

}
