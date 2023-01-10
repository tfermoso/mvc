<?php 

clase Orm{
    $id protegido;
    $tabla protegida;
    $db protegido;

    función pública  __construct($id,$tabla,$conn)
    {
        $this->id=$id;
        $this->tabla=$tabla;
        $this->db=$conn;
    }

    función pública  getAll(){
        $stm=$this->db->prepare("SELECT * FROM {$this->tabla}");
        $stm->execute();
        return $stm->fetchAll();
    }   
    función pública  getById($id){
        $stm=$this->db->prepare("select * from {$this->tabla} where id=:id");
        $stm->bindValue(":id",$id);
        $stm->execute();
        return $stm->fetch();
    }
    función pública  deleteById($id){
        $stm=$this->db->prepare("delete from {$this->tabla} where id=:id");
        $stm->bindValue(":id",$id);
        $stm->execute();
    }
    public function insertar($data){
        $sql="insert into {$this->tabla} ";
        $campos="(";
        $valores=" valores (";
        foreach($data as $key=>$value ){
            $campos.="{$key}, ";
            $valores.=":{$key}, ";
        }
        $campos=substr($campos,0,-1).")";
        $valores=substr($valores,0,-1).")";
        $sql=$sql. $campos. $valores;
        $stm=$this->db->prepare($sql);
        foreach($data as $key=>$value ){
            $stm->bindValue(":{$key}",$value);
        }
        $stm->execute();



        
    }
    función pública  updateById($id,$data){
        $sql="update {$this->tabla} set ";
        foreach($data as $key=>$value ){
            $sql.="{$key} = :{$key},";
        }
        $sql=substr($sql,0,-1);
        $sql.=" donde id=:id ";
        $stm=$this->db->prepare($sql);
        foreach($data as $key=>$value ){
            $stm->bindValue(":{$key}",$value);
        }
        $stm->bindValue(":id",$id);
        $stm->execute();


    }
}