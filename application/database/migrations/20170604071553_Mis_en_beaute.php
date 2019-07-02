
    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Migration_Mis_en_beaute extends CI_Migration {
        public function up() {
            $this->dbforge->add_field(array(
                'Mis_en_beaute_id' => array(
                    'type' => 'INT',
                    'constraint' => 11,
                    'auto_increment' => TRUE
                ),
                'nama_Mis_en_beaute' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 50
                ),
                'gambar' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 255
                ),
                'deskripsi' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 255
                ),
                'harga_Mis_en_beaute' => array(
                    'type' => 'DECIMAL',
                    'constraint' => 11
                )
            ));
            $this->dbforge->add_key('Mis_en_beaute_id',TRUE);
            $this->dbforge->create_table('Mis_en_beaute');
        }

        public function down() {
            $this->dbforge->drop_table('Mis_en_beaute');
        }
    }
