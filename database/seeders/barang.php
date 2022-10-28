<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            ['nama_barang' => 'Komisan not comunicate', 'harga' => 25000, 'foto' => 'manga1.jpg'],
            ['nama_barang' => 'Komisan not comunicate1', 'harga' => 35000, 'foto' => 'manga2.jpg'],
            ['nama_barang' => 'Komisan not comunicate2', 'harga' => 45000, 'foto' => 'manga3.jpg'],
            ['nama_barang' => 'Takagi san ', 'harga' => 50000, 'foto' => 'takagi1.jpg'],
            ['nama_barang' => 'Chain Saw Man', 'harga' => 65000, 'foto' => 'chain.jpg'],
            
        ]);
    }
}
