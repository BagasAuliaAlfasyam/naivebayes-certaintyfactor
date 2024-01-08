<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SymtomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('symptoms')->insert([
            'code' => 'G01',
            'symptom' => 'Udang Mengambang',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G02',
            'symptom' => 'Ekor Berwarna Merah',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G03',
            'symptom' => 'Kali Jalan Berwarna Merah',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G04',
            'symptom' => 'Kematian Saat Ganti Cangkang',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G05',
            'symptom' => 'Gerakan Kali Jalan dan Ekor Berhenti',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G06',
            'symptom' => 'Udang Tenggelam',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G07',
            'symptom' => 'Ekor Berwarna Kemerahan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G08',
            'symptom' => 'Ekor Berwarna Putih',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G09',
            'symptom' => 'Tidak Nafsu Makan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G10',
            'symptom' => 'Cangkang Lunak',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G11',
            'symptom' => 'Udang Lemah',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G12',
            'symptom' => 'Berenang Tidak Tentu Arah',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G13',
            'symptom' => 'Kotoran Mengambang',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G14',
            'symptom' => 'Kotoran Berwarna Putih',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G15',
            'symptom' => 'Pertumbuhan Lambat',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G16',
            'symptom' => 'Udang Berenang Dipermukaan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G17',
            'symptom' => 'Udang Berenang dan berhenti di Dinding Tambak',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G18',
            'symptom' => 'Terdapat Bintik Putih di Cangkang',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G19',
            'symptom' => 'Tubuh Berwarna Merah',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G20',
            'symptom' => 'Cangkang Tipis',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G21',
            'symptom' => 'Cangkang Berwarna Gelap',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G22',
            'symptom' => 'Cangkang Bertekstur Kasar',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G23',
            'symptom' => 'Cangkang Berkerut',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G24',
            'symptom' => 'Insang Kuning',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G25',
            'symptom' => 'Insang Kecoklatan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G26',
            'symptom' => 'Ekor kaku',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G27',
            'symptom' => 'Tidak Seimbang Kadar Mineral Air',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('symptoms')->insert([
            'code' => 'G28',
            'symptom' => 'Kepala dan Dada Berwarna Kuning sedangkan Bagian Lain Pucat',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}