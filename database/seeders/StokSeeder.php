<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 11,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 50,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 12,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 30,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 13,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 40,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 14,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 25,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 15,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 35,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 16,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 20,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 17,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 45,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 18,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 15,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 19,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 28,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 20,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 22,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ]
        ];
        DB::table('t_stok')->insert($data);
    }
}
