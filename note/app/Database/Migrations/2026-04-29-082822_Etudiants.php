<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEtudiantsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nom' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false,
            ],
            'prenom' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false,
            ],
            'option' => [
                'type'       => 'ENUM',
                'constraint' => ['dev', 'bddres', 'web'],
                'null'       => false,
            ],
            'niveau' => [
                'type'       => 'ENUM',
                'constraint' => ['S3', 'S4', 'L2'],
                'default'    => 'S3',
                'null'       => false,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', false, true);
        $this->forge->createTable('etudiants');
    }

    public function down()
    {
        $this->forge->dropTable('etudiants');
    }
}