<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatesUsers extends Migration
{
    public function up()
    {
        // Create field
        $this->forge->addField([
            'id' => [
                'type'              => 'int',
                'constraint'        => 11,
                'auto_increment'    => true,
                'unsigned'          => true
            ],
            'username' => [
                'type'              => 'varchar',
                'constraint'        => 255
            ],
            'password' => [
                'type'              => 'varchar',
                'constraint'        => 255
            ],
            'created_at' => [
                'type'              => 'datetime',
                'null'              => true
            ],
            'update_at' => [
                'type'              => 'datetime',
                'null'              => true
            ],
        ]);

        // Create primary key id
        $this->forge->addKey('id');
        // Create table tb_user
        $this->forge->createTable('tb_user');
    }

    public function down()
    {
        $this->forge->dropTable('tb_user');
    }
}
