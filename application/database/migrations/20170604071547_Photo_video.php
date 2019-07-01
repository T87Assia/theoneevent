
    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Migration_Photo_video extends CI_Migration {
        public function up() {
            $this->dbforge->add_field(array(
                'Photo_video_id' => array(
                    'type' => 'INT',
                    'constraint' => 11,
                    'auto_increment' => TRUE
                ),
                'nama_Photo_video' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 255
                ),
                'deskripsi' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 255
                ),
                'harga_Photo_video' => array(
                    'type' => 'DECIMAL',
                    'constraint' => 11
                )
            ));
            $this->dbforge->add_key('Photo_video_id',TRUE);
            $this->dbforge->create_table('Photo_video');
        }

        public function down() {
            $this->dbforge->drop_table('Photo_video');
        }
    }
