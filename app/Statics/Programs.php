<?php

namespace App\Statics;

trait Programs
{
    protected function getAll()
    {
        $data = [
            [
                'no' => '1',
                'program' => 'Pemukiman Masyarakat Bantaran',
                'image' => '11.jpeg'
            ],
            [
                'no' => '2',
                'program' => 'Sistem Jalan Layang',
                'image' => '2.jpeg'
            ],
            [
                'no' => '3',
                'program' => 'Sistem Jalan Layang',
                'image' =>  '3.jpeg'
            ],
            [
                'no' => '4',
                'program' => 'Sistem Jalan Layang',
                'image' => '5.jpeg'
            ],
            [
                'no' => '5',
                'program' => 'Sistem Jalan Layang',
                'image' => '1.jpeg'
            ],
            [
                'no' => '6',
                'program' => 'Sistem Rel Kereta Bawah Tanah',
                'image' => 'G.jpg'
            ],
            [
                'no' => '7',
                'program' => 'Sistem Rel Kereta Bawah Tanah',
                'image' => 'A.jpg'
            ],
            [
                'no' => '8',
                'program' => 'Sistem Sungai Bawah Tanah',
                'image' => '6.jpeg',
            ]
        ];

        // $data = [
        //     [
        //         'no' => '1',
        //         'program' => 'Pemeliharaan anak yatim piatu dan orang terlantar',
        //         'icon' => '<i class="icofont icofont-baby"></i>',
        //         'step' => [
        //             'Menyiapkan rumah tinggal',
        //             'pendidikan (fasilitas seragam gratis, pembiayaan, dan uang saku) ketrampilan dan lapangan pekerjaan'
        //         ]
        //     ],
        //     [
        //         'no' => '2',
        //         'program' => 'Sistem Jalan',
        //         'icon' => '<i class="icofont icofont-road"></i>',
        //         'step' => ['Pembuatan jalan layang untuk mengatasi macet']
        //     ],
        //     [
        //         'no' => '3',
        //         'program' => 'Sistem Rel Kereta Api',
        //         'icon' => '<i class="icofont icofont-train-line"></i>',
        //         'step' => [
        //             'Pembuatan Rel Kereta Api bawah tanah yang didesain tahan gempa dan berdampingan dengan sistem sungai'
        //         ]
        //     ],
        //     [
        //         'no' => '4',
        //         'program' => 'Sistem Sungai',
        //         'icon' => '<i class="icofont icofont-wave"></i>',
        //         'step' => [
        //             'Pembuatan sungai bawah tanah',
        //             'Pembuatan filtrasi',
        //             'Pembuatan tanggul',
        //             'Drainase untuk mengatasi sungai kotor dan banjir'
        //         ]
        //     ],
        //     [
        //         'no' => '5',
        //         'program' => 'Tata Kelola Kota',
        //         'icon' => '<i class="icofont icofont-architecture"></i>',
        //         'step' => ['Perbaikan pelayanan umum dan administrasi masyarakat dari tingkat RT, RW, Keluarahan, Kecamatan, dan pemerintah Kota Surakarta']
        //     ],
        //     [
        //         'no' => '6',
        //         'program' => 'Pemberdayaan Masyarakat',
        //         'icon' => '<i class="icofont icofont-nurse"></i>',
        //         'step' => [
        //             'Pelatihan kerja',
        //             'Membantu permodalan serta pemantauan wirausaha bagi pengangguran'
        //         ]
        //     ],
        //     [
        //         'no' => '7',
        //         'program' => 'Kembalinya Destinasi Wisata dan Budaya',
        //         'icon' => '<i class="icofont icofont-search-map"></i>',
        //         'step' => [
        //             'Pengembalian Kraton Surakarata sebagai fungsionalnya',
        //             'Mengembangkan wisata kuliner',
        //             'Membuat kampung wisata yang khas disetiap wilayahnya',
        //             'Mempromosikan kota Surakarta sebagai destinasi kota lama yang perlu dikunjungi'
        //         ]
        //     ],
        //     [
        //         'no' => '8',
        //         'program' => 'Penganganan Bencana Non-Alam Covid-19',
        //         'icon' => '<i class="icofont icofont-doctor-alt"></i>',
        //         'step' => [
        //             'Pengingkatan kepedulian masyarakan untuk menjaga yang terdampak covid-19',
        //             'Menyiapkan tempat pelayanan kesehatan di Puskesmas terdekat',
        //             'Meningkatkan disiplin protokoler kesehatan serta bekerjasama dengan Aparatur Negara'
        //         ]
        //     ],
        //     [
        //         'no' => '9',
        //         'program' => 'Pendidikan Yang Setara',
        //         'icon' => '<i class="icofont icofont-group-students"></i>',
        //         'step' => [
        //             'Penyamaan pembiayaan pendidikan dan fasilitasnya',
        //             'Peningkatan kuqlitas siswa/i dan guru serta orang tua dalam partisipasi pendidikan'
        //         ]
        //     ],
        //     [
        //         'no' => '10',
        //         'program' => 'Mendorong Terbitnya Perda Miras',
        //         'icon' => '<i class="icofont icofont-list"></i>',
        //         'step' => [
        //             'Menempatkan khusus miras di jurug (Solo Mini Bar)',
        //             'Mengawasi miras tidak untuk dijual selain di Solo Mini Bar'
        //         ]
        //     ],
        //     [
        //         'no' => '12',
        //         'program' => 'Peningkatan Pendapatan dan Aset Daerah',
        //         'icon' => '<i class="icofont icofont-money-bag"></i>',
        //         'step' => [
        //             'Mengaktifkan usaha daerah untuk menyentuh ekspor hasil dari UKM kampung wisata',
        //             'Membuka usaha-usaha milik Kota Surakarta serpeti Swalayan, SPBU, Rumah Makan, Travel Agent, E-Commerce, Ojek Online dan lain lain'
        //         ]
        //     ],
        //     [
        //         'no' => '13',
        //         'program' => 'Penganganan Limbah Rumah Tangga',
        //         'icon' => '<i class="icofont icofont-trash"></i>',
        //         'step' => [
        //             'Menendalikan banjir',
        //             'Memanfaatkan bank sampah'
        //         ]
        //     ]
        // ];
        return $data;
    }
}