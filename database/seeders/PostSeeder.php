<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = array(
            [
                'thumbnail'  => 'posts/04-18-2022/hannah-busing-Zyx1bK9mqmA-unsplash.jpg',
                'title' => 'Peduli Kemanusiaan Bersama Donasi ACT',
                'body' => '<p style="margin: 32px 0px 35px; overflow-wrap: break-word; color: rgb(0, 0, 0); font-family: Lato; font-size: 17px;">Donasi adalah suatu hal yang mulia, terutama pada masa pandemi yang penuh dengan ketidakpastian ini. Dengan berdonasi, tentunya kita telah mengamalkan suatu kebaikan, dan menunjukkan bahwa sifat kemanusiaan masih ada di dunia ini. Selain itu, terdapat juga banyak manfaat yang bisa dirasakan oleh&nbsp;<a href="https://blog.wecare.id/2020/12/manfaat-donasi-sedekah/" style="outline: 0px; color: rgb(255, 87, 0); display: inline-block; overflow-wrap: break-word; word-break: break-all; -webkit-tap-highlight-color: transparent; transition: all 0.4s ease 0s;">masyarakat dan diri kita sendiri</a>.</p><p style="margin: 32px 0px 35px; overflow-wrap: break-word; color: rgb(0, 0, 0); font-family: Lato; font-size: 17px;">Dalam melakukan donasi atau penggalangan dana, tentunya kita ingin dana tersebut sampai ke tangan yang tepat melalui proses yang cepat. Di masa yang mengharuskan kita untuk menjaga jarak,&nbsp;<a href="https://blog.wecare.id/2020/12/donasi-online/" style="outline: 0px; color: rgb(255, 87, 0); display: inline-block; overflow-wrap: break-word; word-break: break-all; -webkit-tap-highlight-color: transparent; transition: all 0.4s ease 0s;">donasi&nbsp;<em>online</em></a>&nbsp;menjadi suatu pilihan yang banyak dipilih. Umumnya, orang memilih untuk donasi&nbsp;<em>online</em>&nbsp;hanya pada&nbsp;<em>platform</em>&nbsp;yang sudah terpercaya.</p><h2 id="Mengenal" style="color: rgb(0, 0, 0); font-weight: 700; margin: 32px 0px; font-family: Roboto; line-height: 36px; font-size: 30px; overflow-wrap: break-word;">Megenal ACT</h2><p style="margin: 32px 0px 35px; overflow-wrap: break-word; color: rgb(0, 0, 0); font-family: Lato; font-size: 17px;">ACT (Aksi Cepat Tanggap) adalah yayasan yang berfokus pada gerakan sosial dan kemanusiaan. Semenjak yayasan ini diresmikan pada tanggal 21 April 2015, ACT sudah mulai berkembang dan melebarkan sayapnya sehingga memiliki program tanggap darurat dan pascabencana. Selain itu, ACT juga menaungi pengembangan dan pemberdayaan masyarakat.</p><p style="margin: 32px 0px 35px; overflow-wrap: break-word; color: rgb(0, 0, 0); font-family: Lato; font-size: 17px;">Selain program darurat dan bencana, ACT juga memiliki program yang berkaitan dengan spiritual seperti Wakaf, Qurban dan Zakat. Hal – hal tersebut membuat ACT menjadi semakin dikenal oleh masyarakat luas, didukung donatur publik, dan memiliki mitra yang banyak. Adapun beberapa mitra ACT yaitu, Aice, BNI, Mandiri, Unilever, Telkomsel, Astra Internasional, Rumah Zakat, Muslim Aid, RRI, NET, dan masih banyak lagi.</p><p style="margin: 32px 0px 35px; overflow-wrap: break-word; color: rgb(0, 0, 0); font-family: Lato; font-size: 17px;">ACT membuktikan kredibilitasnya dalam menyalurkan donasi dengan memberikan laporan keuangan tahunan secara rutin. Laporan keuangan tersebut juga diaudit oleh Kantor Akuntan Publik, setelah itu dipublikasikan melalui media massa. ACT juga selalu aktif untuk mengajak seluruh lembaga kemanusiaan dan lapisan masyarakat untuk terlibat dalam kebaikan.</p><p style="margin: 32px 0px 35px; overflow-wrap: break-word; color: rgb(0, 0, 0); font-family: Lato; font-size: 17px;">ACT hadir untuk mewujudkan peradaban yang lebih baik, beradab dan mulia dengan cara menjalin kerja sama berbasis kerelawanan dan kedermawanan. ACT juga memiliki tujuan untuk menjadi lembaga kemanusiaan yang berbasis&nbsp;<em>global</em>&nbsp;dan&nbsp;<em>professional</em>. Dengan keyakinan penuh, ACT percaya hal – hal tersebut di atas dapat dicapai bersama – sama.</p><p style="margin: 32px 0px 35px; overflow-wrap: break-word; color: rgb(0, 0, 0); font-family: Lato; font-size: 17px;">Baca juga bagaimana&nbsp;<a href="https://blog.wecare.id/2021/04/bantu-korban-bencana-alam/" style="outline: 0px; color: rgb(255, 87, 0); display: inline-block; overflow-wrap: break-word; word-break: break-all; -webkit-tap-highlight-color: transparent; transition: all 0.4s ease 0s;">membantu korban bencana alam</a>&nbsp;bisa memberikan manfaat bagi si donatur.</p><h2 id="Legalitas" style="color: rgb(0, 0, 0); font-weight: 700; margin: 32px 0px; font-family: Roboto; line-height: 36px; font-size: 30px; overflow-wrap: break-word;">Legalitas ACT</h2><p style="margin: 32px 0px 35px; overflow-wrap: break-word; color: rgb(0, 0, 0); font-family: Lato; font-size: 17px;">Mengenai legalitas, tentunya ACT sudah mengurus hal tersebut. Sejak peresmiannya pada tahun 2015, ACT memiliki Akta Pendirian Nomor 2 dan memperoleh pengesahan dari Kementerian Hukum dan HAM RI dengan Surat Keputusan Nomor C-1714.HT.01.02.TH 2005.&nbsp;</p><p style="margin: 32px 0px 35px; overflow-wrap: break-word; color: rgb(0, 0, 0); font-family: Lato; font-size: 17px;">ACT juga memiliki izin Pengumpulan Uang dan Barang (PUB) dari Kemensos dan diperbaharui setiap tiga bulan sekali sesuai dengan peraturan dan ketentuan yang ada di Indonesia. Berdasarkan data – data tersebut, sudah tidak perlu ragu lagi untuk memberikan kepercayaan kepada yayasan ini untuk menyalurkan donasi kepada yang membutuhkan.</p><p style="margin: 32px 0px 35px; overflow-wrap: break-word; color: rgb(0, 0, 0); font-family: Lato; font-size: 17px;"></p><p class="has-text-color has-background has-vivid-cyan-blue-color has-very-light-gray-background-color" style="margin: 32px 0px 35px; overflow-wrap: break-word; padding: 20px 30px; background-color: rgb(238, 238, 238); color: rgb(6, 147, 227); font-family: Lato; font-size: 17px;"><a href="https://wecare.id/lumbungairbanten/" target="_blank" rel="noreferrer noopener" style="outline: 0px; color: inherit; display: inline-block; overflow-wrap: break-word; word-break: break-all; -webkit-tap-highlight-color: transparent; transition: all 0.4s ease 0s;">Bantu Bangun Lumbung Air Wakaf di Banten bersama ACT</a></p><h2 id="Donasi" style="color: rgb(0, 0, 0); font-weight: 700; margin: 32px 0px; font-family: Roboto; line-height: 36px; font-size: 30px; overflow-wrap: break-word;">Donasi Bersama ACT</h2><p style="margin: 32px 0px 35px; overflow-wrap: break-word; color: rgb(0, 0, 0); font-family: Lato; font-size: 17px;">Pandemi Covid-19 yang terjadi di Indonesia dari tahun 2020 tidak menghentikan ACT untuk tetap menjunjung tinggi rasa kepedulian dan kemanusiaan. Dengan kolaborasi, ACT mampu merangkul mitra – mitranya untuk menyebar kebaikan dalam masa yang sulit ini. Berikut beberapa kegiatannya:</p><ul style="margin: 32px 0px 80px; padding: 0px 0px 0px 20px; list-style: inherit; -webkit-tap-highlight-color: transparent; color: rgb(0, 0, 0); font-family: Lato; font-size: 17px;"><li style="margin: 0px 0px 20px; padding: 0px; list-style: inherit; -webkit-tap-highlight-color: transparent; line-height: 1;">ACT bersama AFPI mendonasikan APD untuk pertugas medis garda depan yang menangani Covid-19.</li><li style="margin: 0px 0px 20px; padding: 0px; list-style: inherit; -webkit-tap-highlight-color: transparent; line-height: 1;">ACT Yogyakarta bersama GrabFood mendonasikan makanan selama bulan Ramadhan 1441H.</li><li style="margin: 0px; padding: 0px; list-style: inherit; -webkit-tap-highlight-color: transparent; line-height: 1;">ACT bersama PT Atomy menyalurkan donasi kepada korban gempa Sulawesi Barat.</li></ul><p style="margin: 32px 0px 35px; overflow-wrap: break-word; color: rgb(0, 0, 0); font-family: Lato; font-size: 17px;">Saat ini, WeCare.id juga berkolaborasi dengan ACT, bersama kami marilah kita sebarkan kebaikan pada masa yang sulit ini. Kamu bisa berdonasi pada kampanye&nbsp;<span style="font-weight: bolder;">donasi ACT</span>&nbsp;di WeCare.id, seperti&nbsp;<a href="https://wecare.id/huniankorbanbencana/" style="outline: 0px; color: rgb(255, 87, 0); display: inline-block; overflow-wrap: break-word; word-break: break-all; -webkit-tap-highlight-color: transparent; transition: all 0.4s ease 0s;">“Bangun Hunian Layak Untuk Saudara Terdampak Bencana”</a>,&nbsp;<a href="about:blank" style="outline: 0px; color: rgb(255, 87, 0); display: inline-block; overflow-wrap: break-word; word-break: break-all; -webkit-tap-highlight-color: transparent; transition: all 0.4s ease 0s;">“Bantu Petani untuk Ketahanan Pangan Negeri”</a>&nbsp;dan masih banyak lagi. Kamu dapat menemukan kampanye lain yang ingin kamu donasikan dengan menggunakan aplikasi WeCare.id, tersedia di AppStore dan Google Play. Ayo unduh&nbsp;<a href="https://app.wecare.id/wecareapp" style="outline: 0px; color: rgb(255, 87, 0); display: inline-block; overflow-wrap: break-word; word-break: break-all; -webkit-tap-highlight-color: transparent; transition: all 0.4s ease 0s;">aplikasi WeCare.id</a>&nbsp;untuk kemudahan membantu sesama</p>',
                'category_id' => 1,
                'author' => 'Darulirfan'
            ],
            [
                'thumbnail'  => 'posts/04-18-2022/emily-underworld-Ko3EMBFggok-unsplash.jpg',
                'title' => '5 Cara Menjaga Kesehatan Mental untuk Hidup Lebih Baik',
                'body' => '<p><font color="#000000" face="Lato"><span style="font-size: 17px;">Belakangan ini, isu kesehatan mental menjadi topik hangat yang sering diperbincangkan oleh banyak orang. Mulai dari postingan di media sosial, tema webinar, hingga buku yang beredar. Tentu saja ini menjadi tren positif seiring meningkatnya kesadaran masyarakat terhadap pentingnya isu ini. Lantas, bagaimana cara menjaganya agar hidup menjadi lebih bermakna? Yuk, simak penjelasannya berikut ini.</span></font></p><p><font color="#000000" face="Lato"><span style="font-size: 17px;"><br></span></font></p><h4>Pengertian Kesehatan Mental</h4><p>Jika kita berbicara tentang makna kesehatan yang sesungguhnya, maka tak hanya sebatas kesehatan fisik semata. Lebih dari itu, tidak ada kesehatan yang utuh tanpa kondisi mental yang sehat. Menurut World Health Organization/WHO (2018) bahwa kesehatan adalah keadaan aman, tenteram, dan nyaman baik fisik, mental, maupun sosial secara keseluruhan, bukan hanya bebas dari suatu gangguan ataupun penyakit tertentu.</p><p><br></p><h4>Jenis-jenis Gangguan Mental</h4><p>Ada kalanya, kondisi mental kita mengalami gangguan akibat beberapa hal yang pernah dialami. Tanpa disadari, gangguan ini mampu mempengaruhi kehidupan pribadi bahkan orang lain. Maka dari itu, penting untuk kita mengetahui jenis-jenis gangguan mental berikut ini.</p><p><b>1. Depresi</b></p><p>Depresi seringkali ditandai dengan kesedihan, perasaan bersalah berlebihan, sisi emosional yang sulit terkendali, gangguan tidur dan nafsu makan, dan kesulitan untuk berkonsentrasi. Orang yang mengalami depresi juga tak jarang memiliki gangguan pada kondisi fisik.&nbsp;</p><p><b>2. Gangguan Kecemasan</b></p><p>Orang dengan gangguan kecemasan akan merespon situasi tertentu dengan rasa takut dan panik. Selain itu juga ditandai dengan detak jantung yang lebih cepat dan tubuh berkeringat.&nbsp;</p><p><b>3. Bipolar</b></p><p>Gangguan ini terdiri dari dua kondisi atau suasana hati yaitu manic episode dan depressive episode. Manic episode adalah kondisi dimana suasana hati begitu gembira, bersemangat, mudah tersinggung, dan beraktivitas secara berlebihan. Sebaliknya, depressive episode adalah kondisi dengan suasana hati yang begitu sedih dan putus asa.</p><p><b>4. PTSD (Post-Traumatic Stress Disorder)</b></p><p>Gangguan stres pasca-trauma (PTSD) adalah suatu kondisi yang muncul akibat peristiwa traumatis atau menakutkan di masa lalu. Seperti kematian tak terduga dari orang yang dicintai, pelecehan seksual, atau bencana alam.&nbsp;</p><p><br></p><h4>Cara Menjaga Kesehatan Mental</h4><p>Sangat penting untuk selalu menjaga kesehatan baik secara fisik maupun mental. Hal ini dilakukan agar hidup kita menjadi jauh lebih bahagia dan bermakna. Berikut ini terdapat 5 cara menjaga mental agar tetap sehat.</p><p><b>1. Bicara tentang perasaanmu</b></p><p>Membicarakan tentang perasaanmu saat menghadapi masalah, ternyata akan meringankan beban yang ada di hati. Tentu saja, ini akan berdampak baik untuk kondisi mentalmu.&nbsp;</p><p><b>2. Aktif berolahraga</b></p><p>Olahraga teratur dapat meningkatkan konsentrasi, membangkitkan hormon kebahagiaan, bahkan membuat tidur kita jauh lebih nyenyak. Olahraga dapat membuat otak dan organ-organ tubuh kita menjadi sehat dan aktivitas ini juga berdampak positif terhadap mental.&nbsp;</p><p><b>3. Makan dengan baik</b></p><p>Bahagia ternyata sederhana. Seringkali kita menemukan kebahagiaan hanya dengan makan sepotong kue favorit. Hal ini menunjukkan bahwa menjaga kesehatan fisik dan mental juga perlu dukungan dari makanan yang kita konsumsi, terutama dari kandungan nutrisi.</p><p><b>4. Melakukan sesuatu yang kamu suka&nbsp;</b></p><p>Apa aktivitas yang paling kamu sukai? Menggambar, menulis, atau menonton film? Apapun itu, ternyata selain mengonsumsi makanan favorit, melakukan aktivitas yang kamu suka juga sangat membantu dalam menjaga kondisi mentalmu.&nbsp;</p><p><b>5. Peduli kepada orang lain</b></p><p>Menjaga hubungan baik dengan orang lain, saling memberi hadiah, dan saling membantu satu sama lain juga mampu memberikan kebahagiaan tersendiri dalam hati.&nbsp;</p><p>Melalui berbagi kepada sesama di aplikasi WeCare.id, maka otomatis tak hanya kesehatan mental saja yang terjaga, namun ada orang-orang di luar sana yang terselamatkan dengan kebaikan yang kamu lakukan.</p><p><br></p>',
                'category_id' => 1,
                'author' => 'Darulirfan'
            ]
        );

        $this->create_post($post[0]);
        $this->create_post($post[1]);
    }

    public function create_post($data)
    {
        $isExists = Post::where('slug', \Str::slug($data['title']))->exists();

        $data['slug'] = ($isExists) ? \Str::slug($data['title'].'-'.substr(md5(time()), 0, 8)) : \Str::slug($data['title']);


        Post::create($data);
    }
}
