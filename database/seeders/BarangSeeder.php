<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Samsung S23',
                'harga_beli' => 14000000,
                'harga_jual' => 15000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'macbook Air M1',
                'harga_beli' => 17000000,
                'harga_jual' => 18000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Jabra Elite 2',
                'harga_beli' => 500000,
                'harga_jual' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Logitich 1',
                'harga_beli' => 250000,
                'harga_jual' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Gamen 1',
                'harga_beli' => 500000,
                'harga_jual' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Iphone 13',
                'harga_beli' => 12000000,
                'harga_jual' => 13000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'macbook Air M2',
                'harga_beli' => 18000000,
                'harga_jual' => 20000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Fiil T1 Lite',
                'harga_beli' => 450000,
                'harga_jual' => 600000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Logitich 2',
                'harga_beli' => 400000,
                'harga_jual' => 500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Gamen 2',
                'harga_beli' => 800000,
                'harga_jual' => 950000,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        DB::table('m_barang')->insert($data);
    }
}