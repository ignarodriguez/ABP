<?php
// file: model/CommentMapper.php
require_once(__DIR__."/../core/PDOConnection.php");
require_once(__DIR__."/../model/Campeonato.php");
/**
 * Class CampeonatoMapper
 *
 */
class CampeonatoMapper {
 
  /**
   * Reference to the PDO connection
   * @var PDO
   */
  private $db;
  
  public function __construct() {
    $this->db = PDOConnection::getInstance();
  }
  
  public function save(Campeonato $campeonato) {
    $stmt = $this->db->prepare("INSERT INTO Campeonato(idCampeonato, fechaInicio, fechaFin, inicioInscripcion, finInscripcion, reglas) values (?,?,?,?,?,?)");
    $stmt->execute(array($campeonato->getIdCampeonato(), $campeonato->getFechaInicio(), $campeonato->getFechaFin(), $campeonato->getInicioInscripcion(), $campeonato->getFinInscripcion(), $campeonato->getReglas()));    
    return $this->db->lastInsertId();
  }
}
