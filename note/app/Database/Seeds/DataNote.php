<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NoteSeeder extends Seeder
{
    public function run()
    {
        // 5 étudiants L2 avec notes complètes :
        // - S3 (tronc commun) : 6 matières obligatoires
        // - S4 dev : 5 matières (3 obl + 2 opt)
        // - S4 bddres : 5 matières (3 obl + 2 opt)
        // - S4 web : 5 matières (3 obl + 2 opt)
        
        $matieres = $this->db->table('matieres')->select('id, code')->get()->getResultArray();
        $codeToId = [];
        foreach ($matieres as $m) {
            $codeToId[$m['code']] = $m['id'];
        }
        
        $etudiants = $this->db->table('etudiants')->select('id, nom')->get()->getResultArray();
        $etudiantMap = [];
        foreach ($etudiants as $e) {
            $etudiantMap[$e['nom']] = $e['id'];
        }
        
        $notes = [];
        
        // ========================================
        // ÉTUDIANT 1 : Razafinjoelina (option dev)
        // ========================================
        $etu1 = $etudiantMap['Razafinjoelina'];
        
        // S3 Tronc commun
        $notes[] = ['etudiant_id' => $etu1, 'matiere_id' => $codeToId['INF201'], 'note' => 10.5];
        $notes[] = ['etudiant_id' => $etu1, 'matiere_id' => $codeToId['INF202'], 'note' => 14];
        $notes[] = ['etudiant_id' => $etu1, 'matiere_id' => $codeToId['INF203'], 'note' => 11];
        $notes[] = ['etudiant_id' => $etu1, 'matiere_id' => $codeToId['INF208'], 'note' => 10];
        $notes[] = ['etudiant_id' => $etu1, 'matiere_id' => $codeToId['MTH201'], 'note' => 6.5];
        $notes[] = ['etudiant_id' => $etu1, 'matiere_id' => $codeToId['ORG201'], 'note' => 13];
        
        // S4 Dev
        $notes[] = ['etudiant_id' => $etu1, 'matiere_id' => $codeToId['INF207'], 'note' => 9.5];
        $notes[] = ['etudiant_id' => $etu1, 'matiere_id' => $codeToId['INF210'], 'note' => 12.2];
        $notes[] = ['etudiant_id' => $etu1, 'matiere_id' => $codeToId['INF204'], 'note' => 12];     // Opt
        $notes[] = ['etudiant_id' => $etu1, 'matiere_id' => $codeToId['MTH203'], 'note' => 11.33];
        $notes[] = ['etudiant_id' => $etu1, 'matiere_id' => $codeToId['MTH206'], 'note' => 12.25]; // Opt
        
        // S4 Bddres
        $notes[] = ['etudiant_id' => $etu1, 'matiere_id' => $codeToId['INF205'], 'note' => 11];
        $notes[] = ['etudiant_id' => $etu1, 'matiere_id' => $codeToId['INF211'], 'note' => 10.5];
        $notes[] = ['etudiant_id' => $etu1, 'matiere_id' => $codeToId['INF206'], 'note' => 9.8];    // Opt
        $notes[] = ['etudiant_id' => $etu1, 'matiere_id' => $codeToId['MTH203'], 'note' => 11.33];
        $notes[] = ['etudiant_id' => $etu1, 'matiere_id' => $codeToId['MTH202'], 'note' => 8];      // Opt
        
        // S4 Web
        $notes[] = ['etudiant_id' => $etu1, 'matiere_id' => $codeToId['INF209'], 'note' => 13];
        $notes[] = ['etudiant_id' => $etu1, 'matiere_id' => $codeToId['INF212'], 'note' => 11.5];
        $notes[] = ['etudiant_id' => $etu1, 'matiere_id' => $codeToId['INF205'], 'note' => 10];     // Opt
        $notes[] = ['etudiant_id' => $etu1, 'matiere_id' => $codeToId['MTH203'], 'note' => 11.33];
        $notes[] = ['etudiant_id' => $etu1, 'matiere_id' => $codeToId['MTH204'], 'note' => 9.5];   // Opt
        
        // ========================================
        // ÉTUDIANT 2 : Rakotomalala (option bddres)
        // ========================================
        $etu2 = $etudiantMap['Rakotomalala'];
        
        // S3 Tronc commun
        $notes[] = ['etudiant_id' => $etu2, 'matiere_id' => $codeToId['INF201'], 'note' => 12];
        $notes[] = ['etudiant_id' => $etu2, 'matiere_id' => $codeToId['INF202'], 'note' => 15];
        $notes[] = ['etudiant_id' => $etu2, 'matiere_id' => $codeToId['INF203'], 'note' => 10];
        $notes[] = ['etudiant_id' => $etu2, 'matiere_id' => $codeToId['INF208'], 'note' => 14];
        $notes[] = ['etudiant_id' => $etu2, 'matiere_id' => $codeToId['MTH201'], 'note' => 9];
        $notes[] = ['etudiant_id' => $etu2, 'matiere_id' => $codeToId['ORG201'], 'note' => 11];
        
        // S4 Dev
        $notes[] = ['etudiant_id' => $etu2, 'matiere_id' => $codeToId['INF207'], 'note' => 8.5];
        $notes[] = ['etudiant_id' => $etu2, 'matiere_id' => $codeToId['INF210'], 'note' => 11];
        $notes[] = ['etudiant_id' => $etu2, 'matiere_id' => $codeToId['INF204'], 'note' => 10];     // Opt
        $notes[] = ['etudiant_id' => $etu2, 'matiere_id' => $codeToId['MTH203'], 'note' => 10.5];
        $notes[] = ['etudiant_id' => $etu2, 'matiere_id' => $codeToId['MTH205'], 'note' => 11];    // Opt
        
        // S4 Bddres
        $notes[] = ['etudiant_id' => $etu2, 'matiere_id' => $codeToId['INF205'], 'note' => 16];
        $notes[] = ['etudiant_id' => $etu2, 'matiere_id' => $codeToId['INF211'], 'note' => 14];
        $notes[] = ['etudiant_id' => $etu2, 'matiere_id' => $codeToId['INF207'], 'note' => 12];    // Opt
        $notes[] = ['etudiant_id' => $etu2, 'matiere_id' => $codeToId['MTH203'], 'note' => 10.5];
        $notes[] = ['etudiant_id' => $etu2, 'matiere_id' => $codeToId['MTH206'], 'note' => 13];    // Opt
        
        // S4 Web
        $notes[] = ['etudiant_id' => $etu2, 'matiere_id' => $codeToId['INF209'], 'note' => 12];
        $notes[] = ['etudiant_id' => $etu2, 'matiere_id' => $codeToId['INF212'], 'note' => 10.5];
        $notes[] = ['etudiant_id' => $etu2, 'matiere_id' => $codeToId['INF204'], 'note' => 11];    // Opt
        $notes[] = ['etudiant_id' => $etu2, 'matiere_id' => $codeToId['MTH203'], 'note' => 10.5];
        $notes[] = ['etudiant_id' => $etu2, 'matiere_id' => $codeToId['MTH202'], 'note' => 12];    // Opt
        
        // ========================================
        // ÉTUDIANT 3 : Rabenanahary (option web)
        // ========================================
        $etu3 = $etudiantMap['Rabenanahary'];
        
        // S3 Tronc commun
        $notes[] = ['etudiant_id' => $etu3, 'matiere_id' => $codeToId['INF201'], 'note' => 13];
        $notes[] = ['etudiant_id' => $etu3, 'matiere_id' => $codeToId['INF202'], 'note' => 12];
        $notes[] = ['etudiant_id' => $etu3, 'matiere_id' => $codeToId['INF203'], 'note' => 11];
        $notes[] = ['etudiant_id' => $etu3, 'matiere_id' => $codeToId['INF208'], 'note' => 13];
        $notes[] = ['etudiant_id' => $etu3, 'matiere_id' => $codeToId['MTH201'], 'note' => 8.5];
        $notes[] = ['etudiant_id' => $etu3, 'matiere_id' => $codeToId['ORG201'], 'note' => 14];
        
        // S4 Dev
        $notes[] = ['etudiant_id' => $etu3, 'matiere_id' => $codeToId['INF207'], 'note' => 10];
        $notes[] = ['etudiant_id' => $etu3, 'matiere_id' => $codeToId['INF210'], 'note' => 12];
        $notes[] = ['etudiant_id' => $etu3, 'matiere_id' => $codeToId['INF205'], 'note' => 11];    // Opt
        $notes[] = ['etudiant_id' => $etu3, 'matiere_id' => $codeToId['MTH203'], 'note' => 11.5];
        $notes[] = ['etudiant_id' => $etu3, 'matiere_id' => $codeToId['MTH204'], 'note' => 10];   // Opt
        
        // S4 Bddres
        $notes[] = ['etudiant_id' => $etu3, 'matiere_id' => $codeToId['INF205'], 'note' => 13];
        $notes[] = ['etudiant_id' => $etu3, 'matiere_id' => $codeToId['INF211'], 'note' => 11.5];
        $notes[] = ['etudiant_id' => $etu3, 'matiere_id' => $codeToId['INF204'], 'note' => 10.5]; // Opt
        $notes[] = ['etudiant_id' => $etu3, 'matiere_id' => $codeToId['MTH203'], 'note' => 11.5];
        $notes[] = ['etudiant_id' => $etu3, 'matiere_id' => $codeToId['MTH205'], 'note' => 9];    // Opt
        
        // S4 Web
        $notes[] = ['etudiant_id' => $etu3, 'matiere_id' => $codeToId['INF209'], 'note' => 15];
        $notes[] = ['etudiant_id' => $etu3, 'matiere_id' => $codeToId['INF212'], 'note' => 14];
        $notes[] = ['etudiant_id' => $etu3, 'matiere_id' => $codeToId['INF206'], 'note' => 13];   // Opt
        $notes[] = ['etudiant_id' => $etu3, 'matiere_id' => $codeToId['MTH203'], 'note' => 11.5];
        $notes[] = ['etudiant_id' => $etu3, 'matiere_id' => $codeToId['MTH206'], 'note' => 10];  // Opt
        
        // ========================================
        // ÉTUDIANT 4 : Rasoamanana (option dev)
        // ========================================
        $etu4 = $etudiantMap['Rasoamanana'];
        
        // S3 Tronc commun
        $notes[] = ['etudiant_id' => $etu4, 'matiere_id' => $codeToId['INF201'], 'note' => 11];
        $notes[] = ['etudiant_id' => $etu4, 'matiere_id' => $codeToId['INF202'], 'note' => 13];
        $notes[] = ['etudiant_id' => $etu4, 'matiere_id' => $codeToId['INF203'], 'note' => 12];
        $notes[] = ['etudiant_id' => $etu4, 'matiere_id' => $codeToId['INF208'], 'note' => 11];
        $notes[] = ['etudiant_id' => $etu4, 'matiere_id' => $codeToId['MTH201'], 'note' => 9];
        $notes[] = ['etudiant_id' => $etu4, 'matiere_id' => $codeToId['ORG201'], 'note' => 12];
        
        // S4 Dev
        $notes[] = ['etudiant_id' => $etu4, 'matiere_id' => $codeToId['INF207'], 'note' => 11];
        $notes[] = ['etudiant_id' => $etu4, 'matiere_id' => $codeToId['INF210'], 'note' => 13];
        $notes[] = ['etudiant_id' => $etu4, 'matiere_id' => $codeToId['INF205'], 'note' => 11];   // Opt
        $notes[] = ['etudiant_id' => $etu4, 'matiere_id' => $codeToId['MTH203'], 'note' => 10.5];
        $notes[] = ['etudiant_id' => $etu4, 'matiere_id' => $codeToId['MTH205'], 'note' => 10];  // Opt
        
        // S4 Bddres
        $notes[] = ['etudiant_id' => $etu4, 'matiere_id' => $codeToId['INF205'], 'note' => 12];
        $notes[] = ['etudiant_id' => $etu4, 'matiere_id' => $codeToId['INF211'], 'note' => 12.5];
        $notes[] = ['etudiant_id' => $etu4, 'matiere_id' => $codeToId['INF206'], 'note' => 10.5]; // Opt
        $notes[] = ['etudiant_id' => $etu4, 'matiere_id' => $codeToId['MTH203'], 'note' => 10.5];
        $notes[] = ['etudiant_id' => $etu4, 'matiere_id' => $codeToId['MTH202'], 'note' => 11];   // Opt
        
        // S4 Web
        $notes[] = ['etudiant_id' => $etu4, 'matiere_id' => $codeToId['INF209'], 'note' => 14];
        $notes[] = ['etudiant_id' => $etu4, 'matiere_id' => $codeToId['INF212'], 'note' => 12.5];
        $notes[] = ['etudiant_id' => $etu4, 'matiere_id' => $codeToId['INF204'], 'note' => 11.5]; // Opt
        $notes[] = ['etudiant_id' => $etu4, 'matiere_id' => $codeToId['MTH203'], 'note' => 10.5];
        $notes[] = ['etudiant_id' => $etu4, 'matiere_id' => $codeToId['MTH206'], 'note' => 11.5]; // Opt
        
        // ========================================
        // ÉTUDIANT 5 : Rajaonarison (option bddres)
        // ========================================
        $etu5 = $etudiantMap['Rajaonarison'];
        
        // S3 Tronc commun
        $notes[] = ['etudiant_id' => $etu5, 'matiere_id' => $codeToId['INF201'], 'note' => 14];
        $notes[] = ['etudiant_id' => $etu5, 'matiere_id' => $codeToId['INF202'], 'note' => 16];
        $notes[] = ['etudiant_id' => $etu5, 'matiere_id' => $codeToId['INF203'], 'note' => 13];
        $notes[] = ['etudiant_id' => $etu5, 'matiere_id' => $codeToId['INF208'], 'note' => 12];
        $notes[] = ['etudiant_id' => $etu5, 'matiere_id' => $codeToId['MTH201'], 'note' => 10.5];
        $notes[] = ['etudiant_id' => $etu5, 'matiere_id' => $codeToId['ORG201'], 'note' => 15];
        
        // S4 Dev
        $notes[] = ['etudiant_id' => $etu5, 'matiere_id' => $codeToId['INF207'], 'note' => 12];
        $notes[] = ['etudiant_id' => $etu5, 'matiere_id' => $codeToId['INF210'], 'note' => 14];
        $notes[] = ['etudiant_id' => $etu5, 'matiere_id' => $codeToId['INF204'], 'note' => 12.5];  // Opt
        $notes[] = ['etudiant_id' => $etu5, 'matiere_id' => $codeToId['MTH203'], 'note' => 11.5];
        $notes[] = ['etudiant_id' => $etu5, 'matiere_id' => $codeToId['MTH206'], 'note' => 13];   // Opt
        
        // S4 Bddres
        $notes[] = ['etudiant_id' => $etu5, 'matiere_id' => $codeToId['INF205'], 'note' => 17];
        $notes[] = ['etudiant_id' => $etu5, 'matiere_id' => $codeToId['INF211'], 'note' => 15];
        $notes[] = ['etudiant_id' => $etu5, 'matiere_id' => $codeToId['INF207'], 'note' => 13.5]; // Opt
        $notes[] = ['etudiant_id' => $etu5, 'matiere_id' => $codeToId['MTH203'], 'note' => 11.5];
        $notes[] = ['etudiant_id' => $etu5, 'matiere_id' => $codeToId['MTH206'], 'note' => 14.5]; // Opt
        
        // S4 Web
        $notes[] = ['etudiant_id' => $etu5, 'matiere_id' => $codeToId['INF209'], 'note' => 13];
        $notes[] = ['etudiant_id' => $etu5, 'matiere_id' => $codeToId['INF212'], 'note' => 12];
        $notes[] = ['etudiant_id' => $etu5, 'matiere_id' => $codeToId['INF205'], 'note' => 14];    // Opt
        $notes[] = ['etudiant_id' => $etu5, 'matiere_id' => $codeToId['MTH203'], 'note' => 11.5];
        $notes[] = ['etudiant_id' => $etu5, 'matiere_id' => $codeToId['MTH204'], 'note' => 12];   // Opt
        
        $this->db->table('notes')->insertBatch($notes);
    }
}