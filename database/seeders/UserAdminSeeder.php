<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use App\Models\Stok;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UserAdminSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();
        Admin::create (
            [
            'kode_admin'     => 'adm-001',
            'nama_admin'     => 'arya',
            'level'          => 'superadmin',
            'jenis_kelamin'  => 'Laki-Laki',
            'email'          => 'arya@gmail.com',
            'alamat'         => 'Griya Parung panjang',
            'no_tlpn'        => '081293209055',
            'password'       => bcrypt('superadmin'),
            'remember_token' => Str::random(60),
            ]
        );
        Admin::create (
            [
            'kode_admin'     => 'adm-002',
            'nama_admin'     => 'ucok',
            'level'          => 'admin',
            'jenis_kelamin'  => 'Laki-Laki',
            'email'          => 'ucok@gmail.com',
            'alamat'         => 'Legok Permai',
            'no_tlpn'        => '081234567890',
            'password'       => bcrypt('admin'),
            'remember_token' => Str::random(60),
            ]
        );
        Admin::create (
            [
            'kode_admin'     => 'adm-003',
            'nama_admin'     => 'mei',
            'level'          => 'kasir',
            'jenis_kelamin'  => 'Perempuan',
            'email'          => 'mei@gmail.com',
            'alamat'         => 'Tangerang Barat',
            'no_tlpn'        => '082211334455',
            'password'       => bcrypt('kasir'),
            'remember_token' => Str::random(60),
            ]
        );


        User::truncate();
        User::create (
            [
            'kode_user'      => 'usr-001',
            'nama_user'      => 'Agus',
            'jenis_kelamin'  => 'Laki-Laki',
            'email'          => 'agus@gmail.com',
            'alamat'         => 'Griya Parung panjang',
            'no_tlpn'        => '081293209055',
            'password'       => bcrypt('agus1'),
            'remember_token' => Str::random(60),
            ]
        );
        User::create (
            [
            'kode_user'      => 'usr-002',
            'nama_user'      => 'mel',
            'jenis_kelamin'  => 'Laki-Laki',
            'email'          => 'mel@gmail.com',
            'alamat'         => 'Legok Permai',
            'no_tlpn'        => '081234567890',
            'password'       => bcrypt('mel2'),
            'remember_token' => Str::random(60),
            ]
        );
        User::create (
            [
            'kode_user'      => 'usr-003',
            'nama_user'      => 'rian3',
            'jenis_kelamin'  => 'Perempuan',
            'email'          => 'rian@gmail.com',
            'alamat'         => 'Tangerang Barat',
            'no_tlpn'        => '082211334455',
            'password'       => bcrypt('rian3'),
            'remember_token' => Str::random(60),
            ]
        );

        DB::table('genders')->insert([
            'gender' => 'Laki-Laki',
        ]);
        DB::table('genders')->insert([
            'gender' => 'Perempuan',
        ]);


        DB::table('kategoris')->insert([
            'kategori' => 'Dog Food',
        ]);
        DB::table('kategoris')->insert([
            'kategori' => 'Cat Food',
        ]);
        DB::table('kategoris')->insert([
            'kategori' => 'Aksesoris',
        ]);

        
        DB::table('satuans')->insert([
            'satuan' => 'Kg',
        ]);
        DB::table('satuans')->insert([
            'satuan' => 'Pack',
        ]);
        DB::table('satuans')->insert([
            'satuan' => 'Sack',
        ]);


        DB::table('paystats')->insert([
            'paystat' => 'Paid',
        ]);
        DB::table('satuans')->insert([
            'paystat' => 'Unpaid',
        ]);
        DB::table('satuans')->insert([
            'paystat' => 'Cancel',
        ]);

        
        $dt = Carbon::now();
        $dateNow = $dt->toDateTimeString();
        Stok::truncate();

        DB::table('stoks')->insert([
            'kategori_id' => '1',
            'satuan_id'   => '1',
            'kode_barang' => 'KB-001',
            'nama_barang' => 'Sakura',
            'stok'        => '10',
            'harga_jual'  => '110.000',
            'harga_beli'  => '100.000',
            'deskripsi'   => 'makannan terjangkau untung anjing anda',
            'gambar'      => 'ssd',
            'expired'     => $dateNow,
        ]);

        DB::table('stoks')->insert([
            'kategori_id'    => '2',
            'satuan_id'      => '2',
            'kode_barang'    => 'KB-002',
            'nama_barang'    => 'Proplan',
            'stok'           => '20',
            'harga_jual'     => '220.000',
            'harga_beli'     => '200.000',
            'gambar'         => 'ssai',
            'deskripsi'      => 'ini merupakan makanan terbaik untuk kucing',
            'expired'        => $dateNow,
        ]);

        DB::table('stoks')->insert([
            'kode_barang'    => 'KB-003',
            'kategori_id'    => '3',
            'satuan_id'      => '3',
            'nama_barang'    => 'Bottime',
            'stok'           => '30',
            'harga_jual'     => '330.000',
            'harga_beli'     => '300.000',
            'gambar'         => 'sssat',
            'deskripsi'      => 'ini merupakan makanan terbaik untuk kucing dan anjing',
            'expired'        => $dateNow,
        ]);
    }
}
