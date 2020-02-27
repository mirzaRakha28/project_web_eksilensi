<?php 
    class CategoryModel extends CI_Model{
        public function getCategory($id)
        {
            return $this->db->get_where('kategori',['id'=>$id])->row();
        }
        public function getAllCategory()
        {
            return $this->db->get_where('kategori', 1)->result();
        }
        public function editKategori($kategori,$deskripsi)
        {
            $data = array(
                'kategori' => $kategori,
                'deskripsi' => $deskripsi
             );
        
            $this->db->query(
                "UPDATE `kategori` 
                SET `deskripsi` = '$deskripsi'
                 WHERE `id` = $kategori");
        }
    }

?>