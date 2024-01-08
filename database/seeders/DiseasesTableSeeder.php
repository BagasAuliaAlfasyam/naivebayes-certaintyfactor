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
            'name' => 'Taura Syndrome Virus (TVS)',
            'probability' => '0.1',
            'appear' => '4',
            'information' => '<p>Virus ini menyebabkan penurunan produksi udang vaname. Gejala meliputi penurunan nafsu makan dan perubahan warna tubuh.</p>',
            'suggestion' => '<p>1. <em>Praktik Biosekuriti Tinggi:</em> Terapkan langkah-langkah biosekuriti yang ketat untuk mencegah penyebaran virus.</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P02',
            'name' => 'Covert Mortality Nodavirus (CMNV)',
            'probability' => '0.1',
            'appear' => '2',
            'information' => '<p><em>Nodavirus</em> dapat menyebabkan kematian mendadak pada udang. Gejalanya meliputi kehilangan nafsu makan dan perilaku aneh.</p>',
            'suggestion' => '<p>1. Terapi radiasi, kemoterapi, dan operasi bedah untuk mengangkat sel kanker.</p>

            <p>2. <em>Immunotheraphy</em> untuk memperkuat sistem kekebalan tubuh agar mampu membubuh sel kanker. Obat yang diberikan adalah <em>interleukin-2</em> dan <em>interferon</em>.</p>

            <p>3. Diberikan cyroablation untuk membekukan sel kanker agar tidak berkembang.</p>

            <p>4. Arterialembolization yaitu menyuntikkan bahan khusus ke pembuluh darah utama ginjal untuk menhambat suplai oksigen dan nutrisi kelokasi sel kanker agar sel kanker mati kelaparan.</p>

            <p>5. Tergetedtheraphy, semacam kemoterapi yang langsung ke sasaran (bagian ginjal yang terserang kanker), sehingga bisa memperkecil efek samping obat mempertahankan kualitas hidup pasien. Obat tergetedtheraphy adalah sarafenib, suitinib.</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P03',
            'name' => 'Yellow Head Virus (YHV)',
            'probability' => '0.1',
            'appear' => '3',
            'information' => '<p>Infeksi Ginjal (pyelonephritis) merupakan infeksi yang disebabkan oleh bacterial pada ginjal dan pelvis renal</p>',
            'suggestion' => '<p>1. Tidak menahan hasrat buang air kecil.</p>

            <p>2. Mengkonsumsi air yang cukup.</p>

            <p>3. Selain itu, jika anda mengalami penyakit sambelit, sebaiknya segera ditangani. Karena hal tersebut dapat menyebabkan infeksi kandung kemih yang nantinya juga akan mempengaruhi ginjal.</p>

            <p>4. Hal yang juga perlu diperhatikan adalah ketika anda ketoilet, pastikan bahwa bagian sensitif terhadap bakteri dicuci dengan bersih.</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P04',
            'name' => 'White Faces Disease (WFD)',
            'probability' => '0.1',
            'appear' => '4',
            'information' => '<p>Sindrom Nefrotik adalah keadaan klinis yang disebabkan oleh kerusakan glomerules karena ada peningkatan permeabilitas glomerules terhadap protein plasma menimbulkan proteinura, hipoalbuminemia, hiperlipidemia dan edema.</p>',
            'suggestion' => '<p>1. Obat antihipertensi untuk menurunkan tekanan darah tinggi.</p>

            <p>2. Diuretik yanbg berfungsi untuk membuang cairan yang berlebihan dari dalam tubuh melalui urin.</p>

            <p>3. Obat antikoagulan yang digunakan untuk menurunkan resiko penggumpalan darah.</p>

            <p>4. Steroid untuk menangani peradangan atau glomerulonefritis perubahan minimal.</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P05',
            'name' => 'WhiteHidronefrosis Spot Syndrome Virus (WSSV)',
            'probability' => '0.1',
            'appear' => '5',
            'information' => '<p>Hidronefrosis merupakan suatu keadaan pelebaran dari pelvis ginjal dan kalises.</p>',
            'suggestion' => '<p>1. Makanan yang mengandung banyak air seperti daun peterseli dan semangkan dapat membantu memperlancar aliran urin yang membantu pembilasan batu dari saluran kencing.</p>

            <p>2. memasang selang masuk melewati kandung kemih dan ureter untuk memungkinkan urin mengalir keluar.</p>

            <p>3. Menusukkan pipa kedalam ginjal lewat kulit terdekat, untuk memungkinkan sumbatan keluar dari sana.</p>

            <p>4. Antibiotik untuk mengobati infeksi.</p>

            <p>5. Pembedahan untuk mengangkat sumbatannya.</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P06',
            'name' => 'Invectious Myonecrosis Virus (IMNV)',
            'probability' => '0.1',
            'appear' => '6',
            'information' => '<p>kanker kandung kemih adalah salah satu penyakit nonagresif yang terjadi didalam lapisan sel transisi kandung kemih, kanker kandung kemih kambuh secara alami. Terkadang kanker kandung kemih ditemukan menyerang lapisan lebih dalam pada jaringan kandung kemih.</p>',
            'suggestion' => '<p>1. Berhenti merokok.</p>

            <p>2. Menghindari paparan zat kimia.</p>

            <p>3. Banyak mengkonsumsi buah-buahan.</p>

            <p>4. Pemasangan kateter melalui utera untuk mengosongkan kandung kemih.</p>

            <p>5. Pasien dengan kanker kandung kemih memerlukan pembedahan untuk mengangkat tumor.</p>

            <p>6. Pemberikan analgesik, terapi radiasi, dan obat-obatan anti kanker (kemoterapi).</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P07',
            'name' => 'Invectious Hepatopancreatic and Haemotopoietic Necrosis Virus (IHHNV)',
            'probability' => '0.1',
            'appear' => '4',
            'information' => '<p>Ginjal Polikistik adalah banyaknya kistik (cytstic) pada ginjal</p>',
            'suggestion' => '<p>1. Obat nyeri, kecuali ibuprofen karena dapat memperburuk penyakit ginjal.</p>

            <p>2. Obat tekanan darah.</p>

            <p>3. Antibiotik.</p>

            <p>4. Diet rendah garam.</p>

            <p>5. Diuretik (pil air) untuk membantu mengeluarkan kelebihan cairan dari tubuh.</p>

            <p>6. Operasi untuk mengeringankan kista dan membantu meringankan gejala.</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P08',
            'name' => 'Sindrom Penyakit Sulfat Asam (SPSA)',
            'probability' => '0.1',
            'appear' => '3',
            'information' => '<p>Nefritis Interstisial disebut juga tubulo-interstitial nephritis adalah peradangan sel nefron pada bagian interstitium ginjal yaitu sekitar tubulus.</p>',
            'suggestion' => '<p>1. Selalu kontrol tekanan darah.</p>

            <p>2. Hindari konsumsi obat-obatan dan produk herbal dalam jangka panjang jika tidak direkomendasikan dokter.</p>

            <p>3. Kortikosteroid bisa mempercepat pemulihan fungsi ginjal.</p>

            <p>4. Jika kortikosteroid tidak bekerja, obat yang lebih kuat seperti siklofosfamid dapat dicoba</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P09',
            'name' => 'Chronic Softshell Syndrome atau Softshelling (CSS)',
            'probability' => '0.1',
            'appear' => '4',
            'information' => '<p>Sistitis Interstisialis meradangan kandung kemih yang menimbulkan rasa nyeri.</p>',
            'suggestion' => '<p>1. Dilatasi (pelebaran) kandung kemih dengan tekanan hidrostatik (tenaga air)</p>

            <p>2. Antispasmodik.</p>

            <p>3. Obat-obatan (elmiron, nalmafen).</p>

            <p>4. Klorapaktin (dimasukan kedalam kandung kemih).</p>

            <p>5. Anti depresi (memberikan efek pereda nyeri).</p>

            <p>6. DMSO (dimetilsulfoksida), untuk mengurangi peradangan.</p>

            <p>7. Pembedahan.</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P10',
            'name' => 'Body Cramp (BC)',
            'probability' => '0.1',
            'appear' => '2',
            'information' => '<p>Infeksi Saluran Kemih merupakan penyakit dengan kondisi dimana dapat mikroorgasisme dalam urin dengan jumlahnya sangat banyak dan mampu menimbulkan infeksi pada saluran kemih.</p>',
            'suggestion' => '<p>1. Minum air putih.</p>

            <p>2. Jangan menahan buang air kecil.</p>

            <p>3. Mengkonsumsi air minum.</p>

            <p>4. Perhatikan area kandung kemih.</p>

            <p>5. Perhatikan area kandung kemih.</p>

            <p>6. Mengonsumsi dosis rendah antibiotik dalam preiode yang lebih lama untuk membantu mecegah infeksi berulang.</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}