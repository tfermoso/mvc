<?php 
class Orm{
    protected $id;
    protected $tabla;
    protected $db;

    public function __construct($id,$tabla,$conn)
    {
        $this->id=$id;
        $this->tabla=$tabla;
        $this->db=$conn;
    }

    public function getAll(){
        $conn=$this->db;
        $sth = $conn->prepare('select * from profesores');
            $sth->execute();
            $profesores = $sth->fetchAll();
            var_dump($profesores);
            exit;
       
        /*
        $stm=$this->db->prepared("SELECT * FROM {$this->tabla}");
        $stm->execute();
        return $stm->fetchAll();
        */
    }   
}
?>