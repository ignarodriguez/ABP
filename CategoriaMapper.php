<?php
// file: model/CategoriaMapper.php
require_once(__DIR__."/../core/PDOConnection.php");
require_once(__DIR__."/../model/Categoria.php");
/**
 * Class CampeonatoMapper
 *
 */
class CategoriaMapper {
 
  /**
   * Reference to the PDO connection
   * @var PDO
   */
  private $db;
  
  public function __construct() {
    $this->db = PDOConnection::getInstance();
  }
  
  public function save(Campeonato $categoria) {
    $stmt = $this->db->prepare("INSERT INTO Campeonato(idCategoria, nivel, tipo) values (?,?,?)");
    $stmt->execute(array($categoria->getIdCategoria(), $categoria->getNivel(), $categoria->getTipo()));    
    return $this->db->lastInsertId();
  }
}
