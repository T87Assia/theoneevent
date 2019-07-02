
    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Migration_Deco_et_Animation extends CI_Migration {
        public function up() {
            $this->dbforge->add_field(array(
                'Deco_et_Animation_id' => array(
                    'type' => 'INT',
                    'constraint' => 11,
                    'auto_increment' => TRUE
                ),
                'nama_Deco_et_Animation' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 15,
                ),
                'deskripsi' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 255
                ),
                'harga_Deco_et_Animation' => array(
                    'type' => 'DECIMAL',
                    'constraint' => 11
                ),
                'foto' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 255
                )
            ));
            $this->dbforge->add_key('Deco_et_Animation_id',TRUE);
            $this->dbforge->create_table('decoration');
        }

        public function down() {
            $this->dbforge->drop_table('decoration');
        }
    }
