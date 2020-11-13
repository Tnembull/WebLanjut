<?php

namespace App\Database\Seeds;

class ProdukSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_produk' => 'Baju',
                'deskripsi' => 'Baju Mahal Nihh',
            ],
            [
                'nama_produk' => 'Celana',
                'deskripsi' => 'Celana Mahal Nihh',
            ],
        ];
        $this->db->table('produk')->insertBatch($data);
        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)",
        //         $data
        // );

        // Using Query Builder

    }
}
