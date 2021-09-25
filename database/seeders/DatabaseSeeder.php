<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Konten;
use App\Models\Artikel;
use App\Models\Program;
use App\Models\Kategori;
use App\Models\Sponsor;
use App\Models\Pengaturan;
use App\Models\DetailProgram;
use App\Models\JenisProgram;
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

        Program::create([
            'jenis_id' => 1,
            'nama_program'   => 'Kenapa harus Skema ?',
            'slug'  => 'about',
            'keterangan' => '<div>Alasan kenapa kalian harus bergabung dengan SMK 5 Pandan Wangi</div>',
            'status' => '1',
            'foto' => 'no_image.png'
        ]);

        Program::create([
            'jenis_id' => 2,
            'nama_program'   => 'Kepala Sekolah',
            'slug'  => 'about-sambutan',
            'keterangan' => '<p class="font-warna2 justify-content-between">Selamat datang di website SMK 5 Pandan Wangi yang saya tujukan untuk seluruh unsur pimpinan, guru, karyawan dan siswa serta khalayak umum guna dapat mengakses seluruh informasi tentang sekolah kami. Tentunya dalam penyajian informasi masih banyak kekurangan, oleh karena itu kepada seluruh civitas akademika dan masyarakat uadamum dapat memberikan saran dan kritik demi kemajuan lebih lanjut.<br></p><p class="font-warna2 justify-content-between">Saya berharap Website ini dapat dijadikan wahana interaksi yang positif baik antar civitas akademika maupun masyarakat pada umumnya, sehingga dapat menjalin silaturahmi yang erat disegala unsur. Mari kita bekerja dan berkarya dengan mengharap ridho sang Kuasa dan keikhlasan yang tulus demi anak bangsa.<br><br><br></p><strong>- Sutomo, S.T, M.T</strong>',
            'status' => '0',
            'foto' => 'images/yYkY8BKaiubDbqNt8didzauSGDcyRSyLFz8PbHo1.png'
        ]);
        
        Program::create([
            'jenis_id' => 3,
            'nama_program'   => 'Video Profile Skema',
            'slug'  => 'about-videprofil',
            'keterangan' => '<p class="font-warna2">Video profil sekolah memperkenalkan kepada kalian hal-hal berkaitan dengan lingkungan sekolah, fasilitas umum sekolah, fasilitas pembelajaran, ruang belajar, kegiatan siswa dan masih banyak lagi.<br><br></p><p class="font-warna2">Supaya kalian tidak penasaran apa saja yang ada di dalam SMK 5 Pandan Wangi, segera tonton video profilnya. Yuk!!<br><br></p>',
            'status' => '0',
            'foto' => 'images/dZ4my8LKUn7ZKDFleIOgCC9wsk9vAArk6O3D7xjr.png'
        ]);

        Program::create([
            'jenis_id' => 4,
            'nama_program'   => 'Program Keahlian',
            'slug'  => 'about-program',
            'keterangan' => '<p class="font-warna2">SMK 5 pandan wangi memiliki tiga program keahlian yang bisa kalian pilih. Ketiga program keahlian ini saling berkaitan satu sama lain. Sehingga dengan dukungan guru-guru kami yang keren nantinya kalian bisa mempelajari ketiganya.</p>',
            'status' => '1',
            'foto' => 'no_image.png'
        ]);
        
        Program::create([
            'jenis_id' => 5,
            'nama_program'   => 'Teknik Elektronika (TE)',
            'slug'  => 'jurusan-fitur1',
            'keterangan' => '<p class="font-warna2">perancangan, pengembangan, serta produksi perangkat listrik, elektronik dan robotik</p>',
            'status' => '0',
            'foto' => 'elektronika.png'
        ]);

        Program::create([
            'jenis_id' => 6,
            'nama_program'   => 'Rekayasa Perangkat Lunak (RPL)',
            'slug'  => 'jurusan-fitur2',
            'keterangan' => '<p class="font-warna2">Mempelajari seluruh aspek produksi software seperti aplikasi web dan aplikasi mobile.</p>',
            'status' => '0',
            'foto' => 'rpl.png'
        ]);
        
        Program::create([
            'jenis_id' => 7,
            'nama_program'   => 'Teknik Jaringan Akses (TJA)',
            'slug'  => 'jurusan-fitur3',
            'keterangan' => '<p class="font-warna2">Mempelajari cara merakit, instalasi, dan perbaikan komputer, instalasi jaringan Local Area Network (LAN) dan Wide Area Network (WAN), serta internet of things (IoT).</p>',
            'status' => '0',
            'foto' => 'elektronika.png'
        ]);

        Program::create([
            'jenis_id' => 8,
            'nama_program'   => 'Galeri Aktivitas',
            'slug'  => 'aktivitas',
            'keterangan' => 'Yuk, pelajari lebih dalam tentang Skema',
            'status' => '1',
            'foto' => 'no_image.png'
        ]);

        Program::create([
            'jenis_id' => 9,
            'nama_program'   => 'Success Story (Alumni)',
            'slug'  => 'success-stori',
            'keterangan' => '<div>&nbsp; &nbsp;</div>',
            'status' => '1',
            'foto' => 'no_image.png'
        ]);
        
        JenisProgram::create([
            'nama_jenis' => 'about'
        ]);
        JenisProgram::create([
            'nama_jenis' => 'sambutan'
        ]);
        JenisProgram::create([
            'nama_jenis' => 'Video Profil'
        ]);
        JenisProgram::create([
            'nama_jenis' => 'Program Keahlian'
        ]);
        JenisProgram::create([
            'nama_jenis' => 'keahlian1'
        ]);
        JenisProgram::create([
            'nama_jenis' => 'keahlian2'
        ]);
        JenisProgram::create([
            'nama_jenis' => 'keahlian3'
        ]);
        JenisProgram::create([
            'nama_jenis' => 'aktivitas'
        ]);
        JenisProgram::create([
            'nama_jenis' => 'succes story'
        ]);

        DetailProgram::create([
            'program_id' => '1',
            'judul' => 'fasilitas Lengkap',
            'keterangan' => 'Penunjang belajar dengan kualitas premium.',
            'foto' => 'no_image.png'
        ]);

        DetailProgram::create([
            'program_id' => '1',
            'judul' => 'Lingkungan Nyaman',
            'keterangan' => 'Berada di lingkungan yang asri, aman, dan kondusif.',
            'foto' => 'no_image.png'
        ]);

        DetailProgram::create([
            'program_id' => '1',
            'judul' => 'Pengajar Kompeten',
            'keterangan' => 'Guru yang up-to-date dengan perkembangan industri',
            'foto' => 'no_image.png'
        ]);

        DetailProgram::create([
            'program_id' => '1',
            'judul' => 'Kerjasama Luas',
            'keterangan' => 'Memperbesar kesempatan bekerja sebelum lulus.',
            'foto' => 'no_image.png'
        ]);

        DetailProgram::create([
            'program_id' => '4',
            'judul' => 'Teknik Elektronika (TE)',
            'keterangan' => ' ',
            'foto' => 'no_image.png'
        ]);

        DetailProgram::create([
            'program_id' => '4',
            'judul' => 'Rekayasa Perangkat Lunak(RPL)',
            'keterangan' => ' ',
            'foto' => 'no_image.png'
        ]);

        DetailProgram::create([
            'program_id' => '4',
            'judul' => 'Teknik Jaringan Akses (TJA)',
            'keterangan' => ' ',
            'foto' => 'no_image.png'
        ]);

        DetailProgram::create([
            'program_id' => '5',
            'judul' => 'Elektronika',
            'keterangan' => 'siswa nantinya dituntut dan mempelajari merancang sirkuit elektronika, perangkat VLSI, dan sistem perangkat lainnya Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam natus cumque quam aperiam? Ipsa, totam consequuntur impedit perferendis odit reiciendis.',
            'foto' => 'no_image.png'
        ]);

        DetailProgram::create([
            'program_id' => '5',
            'judul' => 'Robotika',
            'keterangan' => 'siswa nantinya akan mempelajari membangun robot dan memperogramnya. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium deleniti illo dolore soluta at saepe corporis laborum voluptas iusto ullam!',
            'foto' => 'no_image.png'
        ]);

        DetailProgram::create([
            'program_id' => '5',
            'judul' => 'Kesempatan Bekerja',
            'keterangan' => 'sLulusan RPL banyak bekerja pada posisi mobile developer, web developer, database engineer, system analyst, UI/UX designer, freelancer/kerja remote, dan berwirausaha dibidang IT.',
            'foto' => 'no_image.png'
        ]);

        DetailProgram::create([
            'program_id' => '6',
            'judul' => 'Web Developer',
            'keterangan' => 'Siswa nantinya akan belajar dan dituntut untuk bisa membuat aplikasi berbasis web dengan teknologi pemrograman sesuai standar industri. Back-end menggunakan Node JS/Laravel, dan Front-end menggunakan React JS/Vue JS.',
            'foto' => 'no_image.png'
        ]);
        DetailProgram::create([
            'program_id' => '6',
            'judul' => 'Mobile Developer',
            'keterangan' => 'Siswa nantinya akan belajar dan dituntut untuk bisa membuat aplikasi berbasis mobile dengan teknologi pemrograman sesuai standar industri. Bahasa pemrograman yang dipelajari meliputi Java, Kotlin, Swift (iOS), React Native, dan Flutter.',
            'foto' => 'no_image.png'
        ]);
        DetailProgram::create([
            'program_id' => '6',
            'judul' => 'Kesempatan Bekerja',
            'keterangan' => 'sLulusan RPL banyak bekerja pada posisi mobile developer, web developer, database engineer, system analyst, UI/UX designer, freelancer/kerja remote, dan berwirausaha dibidang IT.',
            'foto' => 'no_image.png'
        ]);

        DetailProgram::create([
            'program_id' => '7',
            'judul' => 'Jaringan Kabel dan Nirkabel',
            'keterangan' => 'Siswa nantinya akan belajar dan dituntut untuk bisa membangun jaringan berskala kecil hingga besar dengan peralatan jaringan seperti cisco, mikrotik, access-point, switch, dll',
            'foto' => 'no_image.png'
        ]);
        DetailProgram::create([
            'program_id' => '7',
            'judul' => 'Administrasi server',
            'keterangan' => 'siswa nantinya akan mempelajari membangun robot dan memperogramnya. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium deleniti illo dolore soluta at saepe corporis laborum voluptas iusto ullam!',
            'foto' => 'no_image.png'
        ]);
        
        DetailProgram::create([
            'program_id' => '7',
            'judul' => 'Kesempatan Bekerja',
            'keterangan' => 'sLulusan RPL banyak bekerja pada posisi mobile developer, web developer, database engineer, system analyst, UI/UX designer, freelancer/kerja remote, dan berwirausaha dibidang IT.',
            'foto' => 'no_image.png'
        ]);

        Konten::create([
            'nama_konten' => 'ppdb',
            'slug' => 'ppdb',
            'keterangan' => '<div>asdfsf</div>',
            'foto' => 'aktivitas/vOLuWcsI2rxwywtgNmm38YPA0c0yxSN7OXmhlSyI.jpg',
            'jenis_konten_id' => '0',
            'status' => '1'
        ]);

        Konten::create([
            'nama_konten' => 'outbond',
            'slug' => 'outbond',
            'keterangan' => '<div>ada</div>',
            'foto' => 'aktivitas/jSTemoLTVfg0klPfLvl10br5yOUbzH9niC1BkssW.jpg',
            'jenis_konten_id' => '0',
            'status' => '1'
        ]);

        Konten::create([
            'nama_konten' => 'sebelum ujian',
            'slug' => 'sebelum-ujian',
            'keterangan' => '<div>adsa</div>',
            'foto' => 'aktivitas/Y07peJJRj9GUDclS94HQmEyHPtDZxLzwOBVriV9T.jpg',
            'jenis_konten_id' => '0',
            'status' => '1'
        ]);

        Konten::create([
            'nama_konten' => 'kerajinan',
            'slug' => 'kerajinan',
            'keterangan' => '<div>adadaw</div>',
            'foto' => 'aktivitas/zhkHpwEWg0KJE2XRECKptoDx16nRAMp93MrE25GB.jpg',
            'jenis_konten_id' => '0',
            'status' => '1'
        ]);

        Konten::create([
            'nama_konten' => 'ekstrakurikuler',
            'slug' => 'ekstrakurikuler',
            'keterangan' => '<div>sfsf</div>',
            'foto' => 'aktivitas/chb7KPlw2mKq2TwDcyNB8BdW6WN4SFY8pTfNbfju.jpg',
            'jenis_konten_id' => '0',
            'status' => '0'
        ]);

        Konten::create([
            'nama_konten' => 'yudistiono (jogo rogo.com)',
            'slug' => 'adwawa',
            'keterangan' => '<div>kuriulum yang selalu up-to-date dan menyesuaikan dengan kebutuhan pasan industri membuat lulusan smk 5 pandan wangi dapat bersaing dan diandalakan oleh perusahaan.</div>',
            'foto' => 'success/uC8FyKJUIuAPpegAZ5VCsMiYf1XCkMT8Xn8ucTfj.png',
            'jenis_konten_id' => '1',
            'status' => '1'
        ]);

        Konten::create([
            'nama_konten' => 'Rika cahya (Telkom Akses Jember)',
            'slug' => 'rika-cahya',
            'keterangan' => '<div>saya bangga menjadi bagian dari SMK 5 Pandan Wangi. karena sesalu mendukung dalam memberikan fasilitas dan kemudahan dalama mennunjang pembelajaran dan pendidikan yang baik. SMK pandan wangi pilihan utuk mempersiapkan diri didunia kerja.</div>',
            'foto' => 'success/dS8uusf8M5nURKmJOv29veXoA2nu4sEZWmc2Fipi.png',
            'jenis_konten_id' => '1',
            'status' => '1'
        ]);

        Konten::create([
            'nama_konten' => 'cobaa',
            'slug' => 'cobaa',
            'keterangan' => '<div>cobaaaea</div>',
            'foto' => 'no_image.png',
            'jenis_konten_id' => '1',
            'status' => '0'
        ]);

        Konten::create([
            'nama_konten' => 'Kamp Pramuka',
            'slug' => 'kamp-pramuka',
            'keterangan' => '<div>cobaaaea</div>',
            'foto' => 'aktivitas/ENrQbOs7y6ytacllqyk7l7bGClmTR5n1AoeIqj09.jpg',
            'jenis_konten_id' => '0',
            'status' => '1'
        ]);

        Sponsor::create([
            'nama' => 'Yayasan Pondok Telkom Akses',
            'status' => '1',
            'foto' => 'sponsor/btmNg9HwZMRdK20g5Uss4pNQLv9Y3bqmBukgbcQ7.png'
        ]);

        Sponsor::create([
            'nama' => 'Telkom Indonesia',
            'status' => '1',
            'foto' => 'sponsor/FlYNillSm9ydJ5oiwdawWPxe6YFQEDybrURlbGnA.png'
        ]);
        Sponsor::create([
            'nama' => 'DOT indonesia',
            'status' => '1',
            'foto' => 'sponsor/aQOQUDVk2HP7IwtznX5duL0HxGPA2BnGT56j9Nhg.png'
        ]);
        Sponsor::create([
            'nama' => 'Ruijie',
            'status' => '1',
            'foto' => 'sponsor/zN6DYXGY1nMA3huc9fkzG0OzjJFEHKbEcGfaa6vK.png'
        ]);
        Sponsor::create([
            'nama' => 'Oracle Academy',
            'status' => '1',
            'foto' => 'sponsor/CWHWlfBUdU8MLgEOkpsOsNh18uzTAcxreRZmHHH4.png'
        ]);
        Sponsor::create([
            'nama' => 'Cisco',
            'status' => '1',
            'foto' => 'sponsor/jap7MrXVHj8FExusNk1FuTyASq1YMxB5aHRt1obl.png'
        ]);
        Sponsor::create([
            'nama' => 'Gsuite',
            'status' => '1',
            'foto' => 'sponsor/vL4fqzgpFZpYAwco7YWblxWjIPAY6NtYF4vthGMQ.png'
        ]);
        Sponsor::create([
            'nama' => 'Mikrotik',
            'status' => '1',
            'foto' => 'sponsor/G1Y3OjhrQ47MS1qCdFMkBHxM8RLDQAHzjFIhK75R.png'
        ]);
        
        Kategori::create([
            'nama' => 'Pengumuman siswa',
            'slug' => 'pengumuman-siswa'
        ]);
        Kategori::create([
            'nama' => 'Pengumuman Karyawan',
            'slug' => 'pengumuman-karyawan'
        ]);

        Artikel::create([
                'kategori_id' => 1,
                'user_id'   => 1,
                'title' => 'Rapat Guru besar',
                'slug'  => 'rapat-guru-besar',
                'author' => 'random',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias sapiente voluptatibus eligendi iusto quos maiores',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi maiores laboriosam, pariatur facilis suscipit rerum eligendi labore unde dolorem recusandae ad accusantium voluptatum blanditiis laudantium saepe qui aperiam! Iste doloribus omnis ut. Magni quas repellendus, facere dolore voluptatibus libero et nemo illum at ab? Omnis aliquam laborum non totam libero! Et, ducimus? Repellat, animi? Vero dolorem explicabo velit natus laudantium!'
            ]);

        Artikel::create([
                'kategori_id' => 1,
                'user_id'   => 1,
                'title' => 'Penerimaan Siswa Baru',
                'slug'  => 'penerimaan-siswa-baru',
                'author' => 'random',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias sapiente voluptatibus eligendi iusto quos maiores',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi maiores laboriosam, pariatur facilis suscipit rerum eligendi labore unde dolorem recusandae ad accusantium voluptatum blanditiis laudantium saepe qui aperiam! Iste doloribus omnis ut. Magni quas repellendus, facere dolore voluptatibus libero et nemo illum at ab? Omnis aliquam laborum non totam libero! Et, ducimus? Repellat, animi? Vero dolorem explicabo velit natus laudantium!'
            ]);
        Artikel::create([
                'kategori_id' => 1,
                'user_id'   => 1,
                'title' => 'Bakti Masyarakat',
                'slug'  => 'bakti-masyarakat',
                'author' => 'random',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias sapiente voluptatibus eligendi iusto quos maiores',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi maiores laboriosam, pariatur facilis suscipit rerum eligendi labore unde dolorem recusandae ad accusantium voluptatum blanditiis laudantium saepe qui aperiam! Iste doloribus omnis ut. Magni quas repellendus, facere dolore voluptatibus libero et nemo illum at ab? Omnis aliquam laborum non totam libero! Et, ducimus? Repellat, animi? Vero dolorem explicabo velit natus laudantium!'
            ]);
        Pengaturan::create([
            'nama' => 'SMK 5 Pandan Wangii',
            'moto'   => 'THE REAL TECHNOLOGY SCHOOL',
            'detailmoto' => 'Menjadi Pelopor Smk Bidang Teknologi dan Infomratika di indonesia',
            'fb'  => 'http://facebook.com/yudis.tiono.3',
            'twitter' => 'https://twitter.com/@yudistiono8',
            'instagram' => 'http://instagram.com/',
            'video_profile'   => 'https://www.youtube.com/embed/HZMEF6DnsYQ',
            'alamat' => 'sumberpandan, Grujugan, \r\n   bondowoso',
            'no_hp'  => '087234123554',
            'email' => 'smk5pandanwangi@school.or.id',
            'foto'  => 'vector-logo.png'
            ]);
    }
}
