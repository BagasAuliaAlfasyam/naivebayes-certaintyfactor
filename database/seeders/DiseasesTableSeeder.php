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
            'information' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla numquam necessitatibus alias a distinctio veniam possimus maxime eligendi nihil ipsam, itaque odit asperiores nisi dignissimos quisquam doloribus aspernatur impedit dolores.</p>',
            'suggestion' => '<p>1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae architecto qui, optio laboriosam corrupti tenetur, veniam reprehenderit dolores nam iure, ad esse minus ex voluptatem similique aperiam obcaecati incidunt nisi.</p>

            <p>2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quos recusandae assumenda et odit perspiciatis adipisci. Debitis neque, dolor ab inventore rem obcaecati non deserunt totam voluptate, dolores, ex dignissimos?</p>

            <p>3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quo quidem incidunt aliquam, doloribus atque fuga possimus vitae ea asperiores quos, molestias odit, labore repudiandae blanditiis sit distinctio? Iste, perspiciatis!</p>

            <p>4. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam quisquam itaque excepturi saepe voluptate quod vel nesciunt, quidem sint distinctio est blanditiis, sunt quibusdam ipsa quaerat error assumenda. Deserunt, nesciunt!</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P03',
            'name' => 'Yellow Head Virus (YHV)',
            'probability' => '0.1',
            'appear' => '3',
            'information' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla numquam necessitatibus alias a distinctio veniam possimus maxime eligendi nihil ipsam, itaque odit asperiores nisi dignissimos quisquam doloribus aspernatur impedit dolores.</p>',
            'suggestion' => '<p>1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae architecto qui, optio laboriosam corrupti tenetur, veniam reprehenderit dolores nam iure, ad esse minus ex voluptatem similique aperiam obcaecati incidunt nisi.</p>

            <p>2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quos recusandae assumenda et odit perspiciatis adipisci. Debitis neque, dolor ab inventore rem obcaecati non deserunt totam voluptate, dolores, ex dignissimos?</p>

            <p>3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quo quidem incidunt aliquam, doloribus atque fuga possimus vitae ea asperiores quos, molestias odit, labore repudiandae blanditiis sit distinctio? Iste, perspiciatis!</p>

            <p>4. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam quisquam itaque excepturi saepe voluptate quod vel nesciunt, quidem sint distinctio est blanditiis, sunt quibusdam ipsa quaerat error assumenda. Deserunt, nesciunt!</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P04',
            'name' => 'White Faces Disease (WFD)',
            'probability' => '0.1',
            'appear' => '4',
            'information' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla numquam necessitatibus alias a distinctio veniam possimus maxime eligendi nihil ipsam, itaque odit asperiores nisi dignissimos quisquam doloribus aspernatur impedit dolores.</p>',
            'suggestion' => '<p>1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae architecto qui, optio laboriosam corrupti tenetur, veniam reprehenderit dolores nam iure, ad esse minus ex voluptatem similique aperiam obcaecati incidunt nisi.</p>

            <p>2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quos recusandae assumenda et odit perspiciatis adipisci. Debitis neque, dolor ab inventore rem obcaecati non deserunt totam voluptate, dolores, ex dignissimos?</p>

            <p>3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quo quidem incidunt aliquam, doloribus atque fuga possimus vitae ea asperiores quos, molestias odit, labore repudiandae blanditiis sit distinctio? Iste, perspiciatis!</p>

            <p>4. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam quisquam itaque excepturi saepe voluptate quod vel nesciunt, quidem sint distinctio est blanditiis, sunt quibusdam ipsa quaerat error assumenda. Deserunt, nesciunt!</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P05',
            'name' => 'WhiteHidronefrosis Spot Syndrome Virus (WSSV)',
            'probability' => '0.1',
            'appear' => '5',
            'information' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla numquam necessitatibus alias a distinctio veniam possimus maxime eligendi nihil ipsam, itaque odit asperiores nisi dignissimos quisquam doloribus aspernatur impedit dolores.</p>',
            'suggestion' => '<p>1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae architecto qui, optio laboriosam corrupti tenetur, veniam reprehenderit dolores nam iure, ad esse minus ex voluptatem similique aperiam obcaecati incidunt nisi.</p>

            <p>2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quos recusandae assumenda et odit perspiciatis adipisci. Debitis neque, dolor ab inventore rem obcaecati non deserunt totam voluptate, dolores, ex dignissimos?</p>

            <p>3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quo quidem incidunt aliquam, doloribus atque fuga possimus vitae ea asperiores quos, molestias odit, labore repudiandae blanditiis sit distinctio? Iste, perspiciatis!</p>

            <p>4. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam quisquam itaque excepturi saepe voluptate quod vel nesciunt, quidem sint distinctio est blanditiis, sunt quibusdam ipsa quaerat error assumenda. Deserunt, nesciunt!</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P06',
            'name' => 'Invectious Myonecrosis Virus (IMNV)',
            'probability' => '0.1',
            'appear' => '6',
            'information' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla numquam necessitatibus alias a distinctio veniam possimus maxime eligendi nihil ipsam, itaque odit asperiores nisi dignissimos quisquam doloribus aspernatur impedit dolores.</p>',
            'suggestion' => '<p>1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae architecto qui, optio laboriosam corrupti tenetur, veniam reprehenderit dolores nam iure, ad esse minus ex voluptatem similique aperiam obcaecati incidunt nisi.</p>

            <p>2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quos recusandae assumenda et odit perspiciatis adipisci. Debitis neque, dolor ab inventore rem obcaecati non deserunt totam voluptate, dolores, ex dignissimos?</p>

            <p>3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quo quidem incidunt aliquam, doloribus atque fuga possimus vitae ea asperiores quos, molestias odit, labore repudiandae blanditiis sit distinctio? Iste, perspiciatis!</p>

            <p>4. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam quisquam itaque excepturi saepe voluptate quod vel nesciunt, quidem sint distinctio est blanditiis, sunt quibusdam ipsa quaerat error assumenda. Deserunt, nesciunt!</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P07',
            'name' => 'Invectious Hepatopancreatic and Haemotopoietic Necrosis Virus (IHHNV)',
            'probability' => '0.1',
            'appear' => '4',
            'information' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla numquam necessitatibus alias a distinctio veniam possimus maxime eligendi nihil ipsam, itaque odit asperiores nisi dignissimos quisquam doloribus aspernatur impedit dolores.</p>',
            'suggestion' => '<p>1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae architecto qui, optio laboriosam corrupti tenetur, veniam reprehenderit dolores nam iure, ad esse minus ex voluptatem similique aperiam obcaecati incidunt nisi.</p>

            <p>2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quos recusandae assumenda et odit perspiciatis adipisci. Debitis neque, dolor ab inventore rem obcaecati non deserunt totam voluptate, dolores, ex dignissimos?</p>

            <p>3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quo quidem incidunt aliquam, doloribus atque fuga possimus vitae ea asperiores quos, molestias odit, labore repudiandae blanditiis sit distinctio? Iste, perspiciatis!</p>

            <p>4. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam quisquam itaque excepturi saepe voluptate quod vel nesciunt, quidem sint distinctio est blanditiis, sunt quibusdam ipsa quaerat error assumenda. Deserunt, nesciunt!</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P08',
            'name' => 'Sindrom Penyakit Sulfat Asam (SPSA)',
            'probability' => '0.1',
            'appear' => '3',
            'information' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla numquam necessitatibus alias a distinctio veniam possimus maxime eligendi nihil ipsam, itaque odit asperiores nisi dignissimos quisquam doloribus aspernatur impedit dolores.</p>',
            'suggestion' => '<p>1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae architecto qui, optio laboriosam corrupti tenetur, veniam reprehenderit dolores nam iure, ad esse minus ex voluptatem similique aperiam obcaecati incidunt nisi.</p>

            <p>2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quos recusandae assumenda et odit perspiciatis adipisci. Debitis neque, dolor ab inventore rem obcaecati non deserunt totam voluptate, dolores, ex dignissimos?</p>

            <p>3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quo quidem incidunt aliquam, doloribus atque fuga possimus vitae ea asperiores quos, molestias odit, labore repudiandae blanditiis sit distinctio? Iste, perspiciatis!</p>

            <p>4. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam quisquam itaque excepturi saepe voluptate quod vel nesciunt, quidem sint distinctio est blanditiis, sunt quibusdam ipsa quaerat error assumenda. Deserunt, nesciunt!</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P09',
            'name' => 'Chronic Softshell Syndrome atau Softshelling (CSS)',
            'probability' => '0.1',
            'appear' => '4',
            'information' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla numquam necessitatibus alias a distinctio veniam possimus maxime eligendi nihil ipsam, itaque odit asperiores nisi dignissimos quisquam doloribus aspernatur impedit dolores.</p>',
            'suggestion' => '<p>1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae architecto qui, optio laboriosam corrupti tenetur, veniam reprehenderit dolores nam iure, ad esse minus ex voluptatem similique aperiam obcaecati incidunt nisi.</p>

            <p>2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quos recusandae assumenda et odit perspiciatis adipisci. Debitis neque, dolor ab inventore rem obcaecati non deserunt totam voluptate, dolores, ex dignissimos?</p>

            <p>3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quo quidem incidunt aliquam, doloribus atque fuga possimus vitae ea asperiores quos, molestias odit, labore repudiandae blanditiis sit distinctio? Iste, perspiciatis!</p>

            <p>4. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam quisquam itaque excepturi saepe voluptate quod vel nesciunt, quidem sint distinctio est blanditiis, sunt quibusdam ipsa quaerat error assumenda. Deserunt, nesciunt!</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('diseases')->insert([
            'code' => 'P10',
            'name' => 'Body Cramp (BC)',
            'probability' => '0.1',
            'appear' => '2',
            'information' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla numquam necessitatibus alias a distinctio veniam possimus maxime eligendi nihil ipsam, itaque odit asperiores nisi dignissimos quisquam doloribus aspernatur impedit dolores.</p>',
            'suggestion' => '<p>1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae architecto qui, optio laboriosam corrupti tenetur, veniam reprehenderit dolores nam iure, ad esse minus ex voluptatem similique aperiam obcaecati incidunt nisi.</p>

            <p>2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quos recusandae assumenda et odit perspiciatis adipisci. Debitis neque, dolor ab inventore rem obcaecati non deserunt totam voluptate, dolores, ex dignissimos?</p>

            <p>3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quo quidem incidunt aliquam, doloribus atque fuga possimus vitae ea asperiores quos, molestias odit, labore repudiandae blanditiis sit distinctio? Iste, perspiciatis!</p>

            <p>4. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam quisquam itaque excepturi saepe voluptate quod vel nesciunt, quidem sint distinctio est blanditiis, sunt quibusdam ipsa quaerat error assumenda. Deserunt, nesciunt!</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
