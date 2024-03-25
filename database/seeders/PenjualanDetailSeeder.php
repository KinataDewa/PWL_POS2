<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'barang_id' => 11,
                'harga' => 2000000,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 12,
                'harga' => 300000,
                'jumlah' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 13,
                'harga' => 10000,
                'jumlah' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 14,
                'harga' => 500000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 15,
                'harga' => 20000,
                'jumlah' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 16,
                'harga' => 100000,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 17,
                'harga' => 150000,
                'jumlah' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 18,
                'harga' => 25000,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 19,
                'harga' => 75000,
                'jumlah' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 20,
                'harga' => 100000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
            // [
            //     'penjualan_id' => 4,
            //     'barang_id' => 1,
            //     'harga' => 2100000,
            //     'jumlah' => 3,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'penjualan_id' => 4,
            //     'barang_id' => 2,
            //     'harga' => 320000,
            //     'jumlah' => 2,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'penjualan_id' => 5,
            //     'barang_id' => 3,
            //     'harga' => 12000,
            //     'jumlah' => 6,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'penjualan_id' => 5,
            //     'barang_id' => 4,
            //     'harga' => 550000,
            //     'jumlah' => 1,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'penjualan_id' => 5,
            //     'barang_id' => 5,
            //     'harga' => 24000,
            //     'jumlah' => 3,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'penjualan_id' => 6,
            //     'barang_id' => 6,
            //     'harga' => 80000,
            //     'jumlah' => 2,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'penjualan_id' => 6,
            //     'barang_id' => 7,
            //     'harga' => 180000,
            //     'jumlah' => 1,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'penjualan_id' => 6,
            //     'barang_id' => 8,
            //     'harga' => 30000,
            //     'jumlah' => 4,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'penjualan_id' => 7,
            //     'barang_id' => 9,
            //     'harga' => 70000,
            //     'jumlah' => 3,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'penjualan_id' => 7,
            //     'barang_id' => 10,
            //     'harga' => 95000,
            //     'jumlah' => 2,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'penjualan_id' => 7,
            //     'barang_id' => 1,
            //     'harga' => 2000000,
            //     'jumlah' => 1,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'penjualan_id' => 8,
            //     'barang_id' => 2,
            //     'harga' => 280000,
            //     'jumlah' => 3,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'penjualan_id' => 8,
            //     'barang_id' => 3,
            //     'harga' => 15000,
            //     'jumlah' => 2,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'penjualan_id' => 8,
            //     'barang_id' => 4,
            //     'harga' => 600000,
            //     'jumlah' => 1,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'penjualan_id' => 9,
            //     'barang_id' => 5,
            //     'harga' => 25000,
            //     'jumlah' => 5,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'penjualan_id' => 9,
            //     'barang_id' => 6,
            //     'harga' => 75000,
            //     'jumlah' => 2,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'penjualan_id' => 9,
            //     'barang_id' => 7,
            //     'harga' => 160000,
            //     'jumlah' => 3,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'penjualan_id' => 10,
            //     'barang_id' => 8,
            //     'harga' => 35000,
            //     'jumlah' => 4,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'penjualan_id' => 10,
            //     'barang_id' => 9,
            //     'harga' => 80000,
            //     'jumlah' => 2,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'penjualan_id' => 10,
            //     'barang_id' => 10,
            //     'harga' => 120000,
            //     'jumlah' => 1,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
