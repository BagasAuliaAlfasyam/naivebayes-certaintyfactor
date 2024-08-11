<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diseaseSymptomsMap = [
            1 => [1 => 0.6, 2 => 0.2, 3 => 0.2, 4 => 0.2], // Taura Syndrome Virus (TSV)
            2 => [10 => 0.6, 15 => 0.4], // Covert Mortality Nodavirus (CMNV)
            3 => [24 => 0.5, 25 => 0.2, 28 => 0.3], // Yellow Head Virus (YHV)
            4 => [9 => 0.4, 10 => 0.2, 13 => 0.2, 14 => 0.2, 15 => 0.2], // White Feces Disease (WFD)
            5 => [9 => 0.3, 16 => 0.2, 17 => 0.2, 18 => 0.2, 19 => 0.2], // White Spot Syndrome Virus (WSSV)
            6 => [7 => 0.4, 8 => 0.2, 9 => 0.2, 10 => 0.2, 11 => 0.2, 12 => 0.2], // Infectious Myonecrosis Virus (IMNV)
            7 => [5 => 0.3, 6 => 0.3, 9 => 0.2, 12 => 0.2], // Infectious Hypodermal and Hematopoietic Necrosis Virus (IHHNV)
            8 => [15 => 0.5, 24 => 0.3, 25 => 0.2], // Sindrom Penyakit Sulfat Asam (SPSA)
            9 => [20 => 0.4, 21 => 0.3, 22 => 0.2, 23 => 0.2], // Chronic Softshell Syndrome atau Softshelling (CSS)
            10 => [26 => 0.6, 27 => 0.4], // White Muscle Disease (WMD)
        ];

        $totalSymptoms = 28; // Jumlah total gejala

        foreach ($diseaseSymptomsMap as $diseaseId => $symptoms) {
            for ($symptomId = 1; $symptomId <= $totalSymptoms; $symptomId++) {
                if (array_key_exists($symptomId, $symptoms)) {
                    $probability = $symptoms[$symptomId]; // Ambil probabilitas dari array
                    $cf = $probability; // Menambahkan nilai CF yang sama dengan probabilitas
                } else {
                    $probability = 0.01; // Probabilitas untuk gejala yang tidak terkait dengan penyakit
                    $cf = 0; // Menambahkan nilai CF yang sama dengan probabilitas
                }

                DB::table('rules')->insert([
                    'disease_id' => $diseaseId,
                    'symptom_id' => $symptomId,
                    'probability' => $probability,
                    'cf_pakar' => $cf, // Menambahkan kolom certainty_factor
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            }
        }
    }
}
