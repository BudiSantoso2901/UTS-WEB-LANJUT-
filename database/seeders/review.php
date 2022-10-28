<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class review extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review')->insert([
            ['id_barang' => 6, 'nama' => 'The Quintessential Quintuplets', 'isi' =>'Futaro telah memimpin lima quintuplets ke titik di mana mereka dapat lulus dan mengejar impian mereka sendiri. Sekarang, akhirnya, mereka telah mencapai festival sekolah terakhir mereka. Setelah memutuskan untuk menjadikan kesempatan ini sesuatu yang tak terlupakan, Futaro mencari perasaannya terhadap kelima quintuplets.'],
        //     ['id_barang' => 2, 'nama' => 'Manga Komi San', 'isi' =>'Kisah cerita komi dan tadano'],
        //     ['id_barang' => 3, 'nama' => 'Manga Komi San', 'isi' =>'Cerita komi san yang ingin mempunyai 100 teman itu nyata,yang ketik 100 teman itu nyata tanpa emot, ada rohman,ada budi, ada jaki,ada yota ,ada rashel'],
        //     ['id_barang' => 4, 'nama' => 'Takagi San', 'isi' =>'Kisah cerita romance sekolah menengah antara takagi dan nishikata'],
        //     ['id_barang' => 5, 'nama' => 'Chain Saw Man', 'isi' =>'Chainsaw Man adalah sebuah seri manga shōnen asal Jepang yang ditulis dan diilustrasikan oleh Tatsuki Fujimoto. Manga ini dimuat berseri dalam majalah Weekly Shōnen Jump terbitan Shueisha sejak bulan Desember 2018, dan telah diterbitkan menjadi dua belas volume tankōbon per bulan Oktober 2022.'],
         ]);
    }
}
