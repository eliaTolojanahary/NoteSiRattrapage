<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EtudiantSeeder extends Seeder
{
    public function run()
    {
        // 5 étudiants L2 avec notes complètes pour TOUS les scénarios
        // Chaque étudiant a : S3 tronc commun + S4 pour les 3 options (dev, bddres, web)
        // L'étudiant a une "option principale" pour l'inscription, mais des notes dans toutes les options
        
        $etudiants = [
            [
                'nom'    => 'Razafinjoelina',
                'prenom' => 'Tahina',
                'option' => 'dev',        // Option principale
                'niveau' => 'L2',
            ],
            [
                'nom'    => 'Rakotomalala',
                'prenom' => 'Vahatriniana',
                'option' => 'bddres',     // Option principale
                'niveau' => 'L2',
            ],
            [
                'nom'    => 'Rabenanahary',
                'prenom' => 'Rojo',
                'option' => 'web',        // Option principale
                'niveau' => 'L2',
            ],
            [
                'nom'    => 'Rasoamanana',
                'prenom' => 'Andry',
                'option' => 'dev',        // Option principale
                'niveau' => 'L2',
            ],
            [
                'nom'    => 'Rajaonarison',
                'prenom' => 'Jemima',
                'option' => 'bddres',     // Option principale
                'niveau' => 'L2',
            ],
        ];
        
        $this->db->table('etudiants')->insertBatch($etudiants);
    }
}