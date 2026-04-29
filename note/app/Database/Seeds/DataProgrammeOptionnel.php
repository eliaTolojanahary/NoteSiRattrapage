<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProgrammeOptionSeeder extends Seeder
{
    public function run()
    {
        // Structure: [matiere_code, option, semestre, est_optionnelle]
        // Source: PDF Matiere.pdf
        
        $this->db->table('matieres')->select('id, code')->get()->getResult();
        $matieres = $this->db->table('matieres')->select('id, code')->get()->getResultArray();
        
        // Créer un mapping code => id pour faciliter l'insertion
        $codeToId = [];
        foreach ($matieres as $m) {
            $codeToId[$m['code']] = $m['id'];
        }
        
        $programme = [];
        
        // ======== SEMESTRE 3 (tous les parcours) ========
        // Ces matières sont obligatoires pour TOUS
        $s3_obligatoires = ['INF201', 'INF202', 'INF203', 'INF208', 'MTH201', 'ORG201'];
        foreach ($s3_obligatoires as $code) {
            foreach (['dev', 'bddres', 'web'] as $option) {
                $programme[] = [
                    'matiere_id'      => $codeToId[$code],
                    'option'          => $option,
                    'semestre'        => 'S3',
                    'est_optionnelle' => 0,
                ];
            }
        }
        
        // ======== SEMESTRE 4 - PARCOURS DEV ========
        // INF207 : obligatoire dev
        $programme[] = [
            'matiere_id'      => $codeToId['INF207'],
            'option'          => 'dev',
            'semestre'        => 'S4',
            'est_optionnelle' => 0,
        ];
        
        // INF210 : Mini-projet dev (obligatoire)
        $programme[] = [
            'matiere_id'      => $codeToId['INF210'],
            'option'          => 'dev',
            'semestre'        => 'S4',
            'est_optionnelle' => 0,
        ];
        
        // 1 UE parmi [INF204, INF205, INF206] → optionnelle en dev
        foreach (['INF204', 'INF205', 'INF206'] as $code) {
            $programme[] = [
                'matiere_id'      => $codeToId[$code],
                'option'          => 'dev',
                'semestre'        => 'S4',
                'est_optionnelle' => 1,
            ];
        }
        
        // 1 UE parmi [MTH204, MTH205, MTH206] → optionnelle en dev
        foreach (['MTH204', 'MTH205', 'MTH206'] as $code) {
            $programme[] = [
                'matiere_id'      => $codeToId[$code],
                'option'          => 'dev',
                'semestre'        => 'S4',
                'est_optionnelle' => 1,
            ];
        }
        
        // MTH203 : obligatoire dev
        $programme[] = [
            'matiere_id'      => $codeToId['MTH203'],
            'option'          => 'dev',
            'semestre'        => 'S4',
            'est_optionnelle' => 0,
        ];
        
        // ======== SEMESTRE 4 - PARCOURS BDDRES ========
        // INF205 : obligatoire bddres
        $programme[] = [
            'matiere_id'      => $codeToId['INF205'],
            'option'          => 'bddres',
            'semestre'        => 'S4',
            'est_optionnelle' => 0,
        ];
        
        // INF211 : Mini-projet bddres (obligatoire)
        $programme[] = [
            'matiere_id'      => $codeToId['INF211'],
            'option'          => 'bddres',
            'semestre'        => 'S4',
            'est_optionnelle' => 0,
        ];
        
        // 1 UE parmi [INF204, INF206, INF207] → optionnelle en bddres
        foreach (['INF204', 'INF206', 'INF207'] as $code) {
            $programme[] = [
                'matiere_id'      => $codeToId[$code],
                'option'          => 'bddres',
                'semestre'        => 'S4',
                'est_optionnelle' => 1,
            ];
        }
        
        // 1 UE parmi [MTH202, MTH205, MTH206] → optionnelle en bddres
        foreach (['MTH202', 'MTH205', 'MTH206'] as $code) {
            $programme[] = [
                'matiere_id'      => $codeToId[$code],
                'option'          => 'bddres',
                'semestre'        => 'S4',
                'est_optionnelle' => 1,
            ];
        }
        
        // MTH203 : obligatoire bddres
        $programme[] = [
            'matiere_id'      => $codeToId['MTH203'],
            'option'          => 'bddres',
            'semestre'        => 'S4',
            'est_optionnelle' => 0,
        ];
        
        // ======== SEMESTRE 4 - PARCOURS WEB ========
        // INF209 : Web dynamique (obligatoire)
        $programme[] = [
            'matiere_id'      => $codeToId['INF209'],
            'option'          => 'web',
            'semestre'        => 'S4',
            'est_optionnelle' => 0,
        ];
        
        // INF212 : Mini-projet web (obligatoire)
        $programme[] = [
            'matiere_id'      => $codeToId['INF212'],
            'option'          => 'web',
            'semestre'        => 'S4',
            'est_optionnelle' => 0,
        ];
        
        // 1 UE parmi [INF204, INF205, INF206] → optionnelle en web
        foreach (['INF204', 'INF205', 'INF206'] as $code) {
            $programme[] = [
                'matiere_id'      => $codeToId[$code],
                'option'          => 'web',
                'semestre'        => 'S4',
                'est_optionnelle' => 1,
            ];
        }
        
        // 1 UE parmi [MTH202, MTH204, MTH206] → optionnelle en web
        foreach (['MTH202', 'MTH204', 'MTH206'] as $code) {
            $programme[] = [
                'matiere_id'      => $codeToId[$code],
                'option'          => 'web',
                'semestre'        => 'S4',
                'est_optionnelle' => 1,
            ];
        }
        
        // MTH203 : obligatoire web
        $programme[] = [
            'matiere_id'      => $codeToId['MTH203'],
            'option'          => 'web',
            'semestre'        => 'S4',
            'est_optionnelle' => 0,
        ];
        
        $this->db->table('programme_option')->insertBatch($programme);
    }
}