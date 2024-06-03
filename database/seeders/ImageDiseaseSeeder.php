<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ImageDiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sourceDirectory = public_path('assets/imagedisease');
        $destinationDirectory = public_path('storage/images');

        $files = File::files($sourceDirectory);

        foreach ($files as $file) {
            $filename = $file->getFilename();
            $diseaseId = (int)explode('.', $filename)[0];
            $destinationPath = $destinationDirectory . '/' . $filename;

            if (!File::exists($destinationDirectory)) {
                File::makeDirectory($destinationDirectory, 0755, true);
            }

            File::copy($file->getPathname(), $destinationPath);

            // Simpan informasi file ke database
            DB::table('image_diseases')->insert([
                'disease_id' => $diseaseId,
                'filename' => $filename,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
