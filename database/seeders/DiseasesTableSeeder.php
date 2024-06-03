<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiseasesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('diseases')->insert([
            'code' => 'P01',
            'name' => 'Taura Syndrome Virus (TSV)',
            'probability' => '0.1',
            'appear' => '4',
            'information' => '<p>Virus ini menyebabkan penurunan produksi udang vaname. Gejala meliputi penurunan nafsu makan dan perubahan warna tubuh terutama menjadi kemerahan di daerah ekor dan kaki.</p>',
            'suggestion' => '<p>1. <em>Praktik Biosekuriti Tinggi:</em> Terapkan langkah-langkah biosekuriti yang ketat untuk mencegah penyebaran virus. Hindari penggunaan peralatan yang tercemar dan jaga kebersihan kolam.</p>
                            <p>2. <em>Penggunaan Bibit Sehat:</em> Pastikan menggunakan bibit yang bebas dari penyakit.</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P02',
            'name' => 'Covert Mortality Nodavirus (CMNV)',
            'probability' => '0.1',
            'appear' => '2',
            'information' => '<p>CMNV adalah virus yang menyebabkan kematian tersembunyi pada udang dengan gejala yang sulit dideteksi pada tahap awal. Udang yang terinfeksi sering menunjukkan penurunan nafsu makan dan pertumbuhan yang lambat.</p>',
            'suggestion' => '<p>1. <em>Pemantauan Rutin:</em> Lakukan pemantauan rutin terhadap kondisi kesehatan udang dan lingkungan perairan.</p>
                            <p>2. <em>Pengelolaan Kualitas Air:</em> Jaga kualitas air tetap baik untuk mengurangi risiko infeksi.</p>
                            <p>3. <em>Penggunaan Probiotik:</em> Pertimbangkan penggunaan probiotik untuk meningkatkan kesehatan udang.</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P03',
            'name' => 'Yellow Head Virus (YHV)',
            'probability' => '0.1',
            'appear' => '3',
            'information' => '<p>YHV menyebabkan perubahan warna kepala menjadi kuning dan dapat menyebabkan kematian massal pada udang vaname. Gejala lain termasuk penurunan nafsu makan dan pergerakan yang lamban.</p>',
            'suggestion' => '<p>1. <em>Karantina:</em> Lakukan karantina terhadap bibit yang baru datang sebelum dicampur dengan udang lainnya.</p>
                            <p>2. <em>Vaksinasi:</em> Jika memungkinkan, gunakan vaksin untuk mencegah infeksi YHV.</p>
                            <p>3. <em>Penggunaan Sistem Tertutup:</em> Pertimbangkan penggunaan sistem budidaya tertutup untuk mengurangi risiko kontaminasi dari lingkungan luar.</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P04',
            'name' => 'White Feces Disease (WFD)',
            'probability' => '0.1',
            'appear' => '4',
            'information' => '<p>Penyakit ini ditandai dengan munculnya feses berwarna putih pada udang yang terinfeksi. Penyebabnya bisa berbagai faktor, termasuk infeksi bakteri atau parasit.</p>',
            'suggestion' => '<p>1. <em>Manajemen Kualitas Air:</em> Jaga kualitas air tetap optimal dengan parameter yang sesuai.</p>
                            <p>2. <em>Penggunaan Pakan Berkualitas:</em> Pastikan pakan yang diberikan berkualitas tinggi dan sesuai kebutuhan udang.</p>
                            <p>3. <em>Pemantauan Kesehatan Rutin:</em> Lakukan pemantauan kesehatan udang secara rutin untuk mendeteksi dini gejala penyakit.</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P05',
            'name' => 'White Spot Syndrome Virus (WSSV)',
            'probability' => '0.1',
            'appear' => '5',
            'information' => '<p>WSSV adalah salah satu penyakit paling mematikan pada udang vaname, ditandai dengan munculnya bercak putih pada karapas udang. Penyakit ini dapat menyebabkan kematian massal dalam waktu singkat.</p>',
            'suggestion' => '<p>1. <em>Praktik Biosekuriti:</em> Terapkan biosekuriti ketat untuk mencegah masuknya virus ke dalam tambak.</p>
                            <p>2. <em>Pemantauan Rutin:</em> Lakukan pemantauan rutin terhadap kondisi udang dan lingkungan.</p>
                            <p>3. <em>Penggunaan Sistem Resirkulasi:</em> Pertimbangkan penggunaan sistem resirkulasi untuk mengurangi risiko infeksi dari lingkungan eksternal.</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P06',
            'name' => 'Infectious Myonecrosis Virus (IMNV)',
            'probability' => '0.1',
            'appear' => '6',
            'information' => '<p>IMNV menyebabkan nekrosis pada jaringan otot udang, yang mengakibatkan warna tubuh menjadi pucat dan rapuh. Penyakit ini dapat menyebabkan kematian yang signifikan dalam populasi udang.</p>',
            'suggestion' => '<p>1. <em>Praktik Biosekuriti:</em> Terapkan langkah-langkah biosekuriti yang ketat.</p>
                            <p>2. <em>Penggunaan Bibit Sehat:</em> Pastikan bibit yang digunakan bebas dari infeksi virus.</p>
                            <p>3. <em>Pemantauan Kesehatan:</em> Lakukan pemantauan kesehatan secara berkala untuk mendeteksi gejala awal infeksi.</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P07',
            'name' => 'Infectious Hypodermal and Hematopoietic Necrosis Virus (IHHNV)',
            'probability' => '0.1',
            'appear' => '4',
            'information' => '<p>Virus ini menyerang jaringan hipodermal dan hematopoietik pada udang. Gejalanya termasuk bercak putih pada cangkang, deformasi tubuh, dan kematian.</p>',
            'suggestion' => '<p>1. <em>Praktik Biosekuriti Ketat:</em> Terapkan langkah-langkah biosekuriti yang ketat untuk mencegah penyebaran virus.</p>
                            <p>2. <em>Pengelolaan Kualitas Air:</em> Jaga kualitas air tetap baik untuk mengurangi stres pada udang.</p>
                            <p>3. <em>Pemantauan Kesehatan:</em> Lakukan pemantauan kesehatan secara berkala untuk mendeteksi gejala dini.</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P08',
            'name' => 'Sindrom Penyakit Sulfat Asam (SPSA)',
            'probability' => '0.1',
            'appear' => '3',
            'information' => '<p>Sindrom ini terjadi akibat kondisi air yang mengandung kadar sulfat tinggi, menyebabkan stres dan kerusakan jaringan pada udang. Gejalanya meliputi perubahan warna tubuh dan nafsu makan yang menurun.</p>',
            'suggestion' => '<p>1. <em>Pengelolaan Kualitas Air:</em> Monitor dan kontrol kadar sulfat dalam air secara teratur.</p>
                            <p>2. <em>Penggunaan Penyangga:</em> Gunakan bahan penyangga untuk menetralkan kadar asam dalam air.</p>
                            <p>3. <em>Pemantauan Rutin:</em> Lakukan pemantauan rutin terhadap kondisi lingkungan perairan.</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P09',
            'name' => 'Bakteri Vibriosis',
            'probability' => '0.1',
            'appear' => '2',
            'information' => '<p>Vibriosis disebabkan oleh bakteri Vibrio spp., yang menyebabkan berbagai gejala seperti luka pada tubuh, penurunan nafsu makan, dan kematian pada udang.</p>',
            'suggestion' => '<p>1. <em>Kualitas Air:</em> Jaga kualitas air tetap baik dengan parameter yang sesuai.</p>
                            <p>2. <em>Penggunaan Antibiotik:</em> Gunakan antibiotik sesuai anjuran jika infeksi bakteri terdeteksi.</p>
                            <p>3. <em>Pemantauan Rutin:</em> Lakukan pemantauan kesehatan udang secara rutin untuk mendeteksi dini gejala penyakit.</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        // Penyakit 10
        DB::table('diseases')->insert([
            'code' => 'P10',
            'name' => 'White Muscle Disease (WMD)',
            'probability' => '0.1',
            'appear' => '3',
            'information' => '<p>Penyakit otot putih (WMD) adalah kondisi yang mempengaruhi otot udang, menyebabkan otot berubah menjadi warna putih dan rapuh. Penyebabnya bisa termasuk stres, kekurangan nutrisi, atau infeksi bakteri.</p>',
            'suggestion' => '<p>1. <em>Manajemen Stres:</em> Minimalkan stres pada udang dengan menjaga kondisi lingkungan yang stabil dan nyaman.</p>
                            <p>2. <em>Pemberian Nutrisi yang Tepat:</em> Pastikan udang mendapatkan pakan dengan nutrisi yang lengkap dan seimbang.</p>
                            <p>3. <em>Pemantauan Rutin:</em> Lakukan pemantauan rutin terhadap kondisi kesehatan udang dan kualitas air.</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
