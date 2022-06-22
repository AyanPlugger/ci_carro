<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pessoas extends Seeder
{
    public function run()
    {
        $nome = ['Ana', 'Gustavo', 'João', 'Victor', 'Fabio'];
        for($x = 0; $x < 5; $x++){
            $data = [
                'nome' => $nome[$x],
                'profissao'    => 'Administrador',
                'idade'=> 20,
                'senha'=>MD5("123")
            ];
            $this->db->table('tb_pessoas')->insert($data);
        }
        

        
    }
}