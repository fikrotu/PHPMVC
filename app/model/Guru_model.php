<?php

class Guru_model {
    private $table = 'data_guru';
    private $db;
    
    public function __construct() {
         $this->db = new Database;
    }

    public function getAllDataGuru() { 
         $this->db->query("SELECT * FROM " . $this->table);
         return $this->db->resultSet();
    }
    public function getGuruById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
     }
     public function tambahData ($data) {
          $query = "INSERT INTO data_guru VALUES
          ('', :Nama, :Komli, :Mapel)";
          $this->db->query($query);
          $this->db->bind('Nama', $data['Nama']);
          $this->db->bind('Komli', $data['Komli']);
          $this->db->bind('Mapel', $data['Mapel']);
          $this->db->execute();
          return $this->db->rowCount();
      }
      public function hapusData($id)
      {
          $query = "DELETE FROM data_guru WHERE id = :id";
          
          $this->db->query($query);
          $this->db->bind('id', $id);
  
          $this->db->execute();
  
          return $this->db->rowCount();
      }
  
  
      public function ubahdata($data)
      {
          $query = "UPDATE data_guru SET
                      Nama = :Nama,
                      Komli = :Komli,
                      Mapel= :Mapel
                      
                    WHERE id = :id";
          
          $this->db->query($query);
          $this->db->bind('Nama', $data['Nama']);
          $this->db->bind('Komli', $data['Komli']);
          $this->db->bind('Mapel', $data['Mapel']);
          
          $this->db->bind('id', $data['id']);
  
          $this->db->execute();
  
          return $this->db->rowCount();
      }
     
}