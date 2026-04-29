<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MatiereSeeder extends Seeder
{
    public function run()
    {
        // Les matières communes à tous les parcours ou spécifiques
        // Source: PDF Matiere.pdf
        
        $matieres = [
            // Semestre 3 (tous les parcours)
            ['code' => 'INF201', 'nom' => 'Programmation orientée objet'],
            ['code' => 'INF202', 'nom' => 'Bases de données objets'],
            ['code' => 'INF203', 'nom' => 'Programmation système'],
            ['code' => 'INF208', 'nom' => 'Réseaux informatiques'],
            ['code' => 'MTH201', 'nom' => 'Méthodes numériques'],
            ['code' => 'ORG201', 'nom' => 'Bases de gestion'],
            
            // Semestre 4 - Optionnelles en S4
            ['code' => 'INF204', 'nom' => 'Système d\'information géographique'],
            ['code' => 'INF205', 'nom' => 'Système d\'information'],
            ['code' => 'INF206', 'nom' => 'Interface Homme/Machine'],
            
            // Semestre 4 - Obligatoires ou spécifiques par parcours
            ['code' => 'INF207', 'nom' => 'Eléments d\'algorithmique'],
            ['code' => 'INF209', 'nom' => 'Web dynamique'],
            ['code' => 'INF210', 'nom' => 'Mini-projet de développement'],
            ['code' => 'INF211', 'nom' => 'Mini-projet de bases de données et/ou de réseaux'],
            ['code' => 'INF212', 'nom' => 'Mini-projet de Web et design'],
            
            // Mathématiques S4
            ['code' => 'MTH202', 'nom' => 'Analyse des données'],
            ['code' => 'MTH203', 'nom' => 'MAO'],
            ['code' => 'MTH204', 'nom' => 'Géométrie'],
            ['code' => 'MTH205', 'nom' => 'Equations différentielles'],
            ['code' => 'MTH206', 'nom' => 'Optimisation'],
        ];
        
        $this->db->table('matieres')->insertBatch($matieres);
    }
}