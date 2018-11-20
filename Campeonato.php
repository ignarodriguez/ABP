<?php

// file: model/Campeonato.php
require_once(__DIR__ . "/../core/ValidationException.php");

/**
 * Class Campeonato
 *
 */
class Campeonato {

    private $idCampeonato;
    private $fechaInicio;
    private $fechaFin;
    private $inicioInscripcion;
    private $finInscripcion;
    private $reglas;

    public function __construct($idCampeonato = NULL, $fechaInicio = NULL, $fechaFin = NULL, $inicioInscripcion = NULL, $finInscripcion = NULL, $reglas = NULL) {

        $this->idCampeonato = $idCampeonato;
        $this->fechaInicio = $fechaInicio;
        $this->fechaFin = $fechaFin;
        $this->inicioInscripcion = $inicioInscripcion;
        $this->finInscripcion = $finInscripcion;
        $this->reglas = $reglas;
    }

    public function getIdCampeonato() {
        return $this->idCampeonato;
    }

    public function getFechaInicio() {
        return $this->fechaInicio;
    }

    public function getFechaFin() {
        return $this->fechaFin;
    }

    public function getInicioInscripcion() {
        return $this->inicioInscripcion;
    }

    public function getFinInscripcion() {
        return $this->finInscripcion;
    }

    public function getReglas() {
        return $this->reglas;
    }

    public function setIdCampeonato($idCampeonato) {
        $this->idCampeonato = $idCampeonato;
    }

    public function setFechaInicio($fechaInicio) {
        $this->fechaInicio = $fechaInicio;
    }

    public function setFechaFin($fechaFin) {
        $this->fechaFin = $fechaFin;
    }

    public function setInicioInscripcion($inicioInscripcion) {
        $this->inicioInscripcion = $inicioInscripcion;
    }

    public function setFinInscripcion($finInscripcion) {
        $this->finInscripcion = $finInscripcion;
    }

    public function setReglas($reglas) {
        $this->reglas = $reglas;
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
        if ($this->idCampeonato == NULL) {
            $errors["idCampeonato"] = "Identificador de campeonato no encontrado";
        }
        if ($this->fechaInicio == NULL) {
            $errors["fechaInicio"] = "Fecha de inicio de campeonato no encontrada";
        }
        if ($this->fechaFin == NULL) {
            $errors["fechaFin"] = "Fecha de finalización de campeonato no encontrada";
        }
        if ($this->inicioInscripcion == NULL) {
            $errors["inicioInscripcion"] = "Fecha de inicio de inscipciones de campeonato no encontrada";
        }
        if ($this->finInscripcion == NULL) {
            $errors["finIncsipcion"] = "Fecha de finalización de inscripciones de campeonato no encontrada";
        }
        if (sizeof($errors) > 0) {
            throw new ValidationException($errors, "Creacion de campeonato no valida");
        }
    }

}
