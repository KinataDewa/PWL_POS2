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
                'barang_id' => 41,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 10,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 42,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 20,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 43,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 30,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 44,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 40,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 45,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 50,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 46,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 10,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 47,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 20,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 48,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 30,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 49,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 40,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 50,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 50,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ]
        ];
        DB::table('t_stok')->insert($data);
    }
}