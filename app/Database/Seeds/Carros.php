<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Carros extends Seeder
{
    public function run()
    {
        $modelo = ['Sedan', 'Gol', 'Fusca', 'Polo', 'Saveiro'];
        $placa = ['FRE3272','UKE2076','TUL7144','ERP6528','AYE0455'];
        for($x = 0; $x < 5; $x++){
            $data = [
                'modelo' => $modelo[$x],
                'Marca'    => 'Volkswagen',
                'placa'=> $placa[$x]
                
            ];
            $this->db->table('tb_carros')->insert($data);
        }
        

        
    }
}