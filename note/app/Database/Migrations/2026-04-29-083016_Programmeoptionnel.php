<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProgrammeOptionTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'matiere_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => false,
            ],
            'option' => [
                'type'       => 'ENUM',
                'constraint' => ['dev', 'bddres', 'web'],
                'null'       => false,
            ],
            'semestre' => [
                'type'       => 'ENUM',
                'constraint' => ['S3', 'S4'],
                'null'       => false,
            ],
            'est_optionnelle' => [
                'type'    => 'TINYINT',
                'default' => 0,
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
        
        // Clé étrangère vers matieres
        $this->forge->addForeignKey('matiere_id', 'matieres', 'id', 'CASCADE', 'CASCADE');
        
        // Index composite pour les requêtes fréquentes (option + semestre)
        $this->forge->addKey(['option', 'semestre'], false, false, 'idx_option_semestre');
        
        $this->forge->createTable('programme_option');
    }

    public function down()
    {
        $this->forge->dropTable('programme_option');
    }
}