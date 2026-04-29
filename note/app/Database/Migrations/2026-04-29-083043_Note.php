<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNotesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'etudiant_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => false,
            ],
            'matiere_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => false,
            ],
            'note' => [
                'type'       => 'DECIMAL',
                'constraint' => '5,2',
                'null'       => false,
                'comment'    => 'Note sur 20',
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
        
        // Clés étrangères
        $this->forge->addForeignKey('etudiant_id', 'etudiants', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('matiere_id', 'matieres', 'id', 'CASCADE', 'CASCADE');
        
        // Index pour les requêtes fréquentes
        $this->forge->addKey(['etudiant_id', 'matiere_id'], false, false, 'idx_etudiant_matiere');
        $this->forge->addKey('etudiant_id', false, false, 'idx_etudiant');
        
        $this->forge->createTable('notes');
    }

    public function down()
    {
        $this->forge->dropTable('notes');
    }
}