<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Sumber;
use App\Models\Rencana;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $pass=Hash::make('kosongkosong');
        User::create([
            'name'=>'ippankbro',
            'email'=>'irfanarfah.bigtv@gmail.com',
            'password'=> Hash::make('kosongkosong')
        ]);
        User::create([
            'name'=>'tetta',
            'email'=>'tetta@gmail.com',
            'password'=> Hash::make('kosongkosong')
        ]);
        User::create([
            'name'=>'bunda',
            'email'=>'bunda@gmail.com',
            'password'=> Hash::make('kosongkosong')
        ]);
// tambah data kategori
        Kategori::create([
            'nama'=>'Gaji',
            'type'=>'Pendapatan',
            'catatan'=>'meliputi blablablabla',
            'rencana_id'=>1
        ]);
        Kategori::create([
            'nama'=>'Pendapatan lain2',
            'type'=>'Pendapatan',
            'catatan'=>'meliputi blablablabla',
            'rencana_id'=>1
        ]);

        Kategori::create([
            'nama'=>'Belanja Harian',
            'type'=>'Pengeluaran',
            'catatan'=>'meliputi blablablabla',
            'rencana_id'=>2
        ]);
        Kategori::create([
            'nama'=>'Tagihan bulanan',
            'type'=>'Pengeluaran',
            'catatan'=>'meliputi blablablabla',
            'rencana_id'=>5
        ]);
        Kategori::create([
            'nama'=>'Pengeluaran Lain2',
            'type'=>'Pengeluaran',
            'catatan'=>'meliputi blablablabla',
            'rencana_id'=>3
        ]);
    // tambah data perencanaan
    Rencana::create([
        'nama'=>'Rencana Pendapatan',
        'pagu'=>'10000000',
        'catatan'=>'meliputi blablablabla'
    ]);

    Rencana::create([
        'nama'=>'Belanja Pokok',
        'pagu'=>'2000000',
        'catatan'=>'meliputi blablablabla'
    ]);
    Rencana::create([
        'nama'=>'Hiburan / rekreasi',
        'pagu'=>'5000000',
        'catatan'=>'meliputi blablablabla'
    ]);
    Rencana::create([
        'nama'=>'lain-lain',
        'pagu'=>'1000000',
        'catatan'=>'meliputi blablablabla'
    ]);
    Rencana::create([
        'nama'=>'Tagihan2 pinjaman',
        'pagu'=>'1000000',
        'catatan'=>'meliputi blablablabla'
    ]);

    // masukkan data sumber
    Sumber::create([
        'nama'=>'Kas Tetta',
        'norek'=>'1000000',
        'user_id'=>2,
        'catatan'=>'meliputi blablablabla'
    ]);

    Sumber::create([
        'nama'=>'Kas bunda',
        'norek'=>'1000000',
        'user_id'=>3,
        'catatan'=>'meliputi blablablabla'
    ]);
    
    Sumber::create([
        'nama'=>'Bank BCA',
        'norek'=>'1000000',
        'user_id'=>3,
        'catatan'=>'meliputi blablablabla'
    ]);
    Sumber::create([
        'nama'=>'Bank Mandiri',
        'norek'=>'1000000',
        'user_id'=>3,
        'catatan'=>'meliputi blablablabla'
    ]);
    Sumber::create([
        'nama'=>'Bank BSI',
        'norek'=>'1000000',
        'user_id'=>3,
        'catatan'=>'meliputi blablablabla'
    ]);
    Sumber::create([
        'nama'=>'Bank BNI',
        'norek'=>'1000000',
        'user_id'=>2,
        'catatan'=>'meliputi blablablabla'
    ]);



    }
}
