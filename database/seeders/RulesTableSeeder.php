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
            1 => [1, 2, 3, 4], // Taura Syndrome Virus (TSV)
            2 => [10, 15], // Covert Mortality Nodavirus (CMNV)
            3 => [24, 25, 28], // Yellow Head Virus (YHV)
            4 => [9, 10, 13, 14, 15], // White Feces Disease (WFD)
            5 => [9, 16, 17, 18, 19], // White Spot Syndrome Virus (WSSV)
            6 => [7, 8, 9, 10, 11, 12], // Infectious Myonecrosis Virus (IMNV)
            7 => [5, 6, 9, 12], // Infectious Hypodermal and Hematopoietic Necrosis Virus (IHHNV)
            8 => [15, 24, 25], // Sindrom Penyakit Sulfat Asam (SPSA)
            9 => [20, 21, 22, 23], // Chronic Softshell Syndrome atau Softshelling (CSS)
            10 => [26, 27], // White Muscle Disease (WMD)
        ];

        $totalSymptoms = 28; // Jumlah total gejala

        foreach ($diseaseSymptomsMap as $diseaseId => $symptoms) {
            for ($symptomId = 1; $symptomId <= $totalSymptoms; $symptomId++) {
                if (in_array($symptomId, $symptoms)) {
                    $probability = 0.75; // Probabilitas untuk gejala yang terkait dengan penyakit
                    $cf = $probability; // Menambahkan nilai CF yang sama dengan probabilitas
                } else {
                    $probability = 0.01; // Probabilitas untuk gejala yang tidak terkait dengan penyakit
                    $cf = $probability; // Menambahkan nilai CF yang sama dengan probabilitas
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
