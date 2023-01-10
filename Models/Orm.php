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
        $stm=$this->db->prepare("SELECT * FROM {$this->tabla}");
        $stm->execute();
        return $stm->fetchAll();
    }   
    public function getById($id){
        $stm=$this->db->prepare("select * from {$this->tabla} where id=:id");
        $stm->bindValue(":id",$id);
        $stm->execute();
        return $stm->fetch();
    }
    public function deleteById($id){
        $stm=$this->db->prepare("delete from {$this->tabla} where id=:id");
        $stm->bindValue(":id",$id);
        $stm->execute();
    }
    public function insertar($data){
        $sql="insert into {$this->tabla} ";
        $campos="(";
        $valores=" values (";
        foreach($data as $key=>$value){
            $campos.="{$key},";
            $valores.=":{$key},";
        }
        $campos=substr($campos,0,-1).")";
        $valores=substr($valores,0,-1).")";
        $sql=$sql.$campos.$valores;
        $stm=$this->db->prepare($sql);
        foreach($data as $key=>$value){
            $stm->bindValue(":{$key}",$value);
        }
        $stm->execute();  
    }
    public function updateById($id, $data);{
        $sql="update{$this->tabla} set";
        foreach ($variable as $key => $value) {
            $sql.="($key) =:{$key},";
        }
    }
}