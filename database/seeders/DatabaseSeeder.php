<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Status;
use App\Models\Category;
use App\Models\Role;
use App\Models\Cake;

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
        User::create([
            'role_id' => 0,
            'fullname' => 'user',
            'dob' => '2023-03-31',
            'phone_number' => '123456789999',
            'gender' => 'Male',
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345'),
            'address' => 'User Street, No.ABC123'
        ]);
        User::create([
            'role_id' => 1,
            'fullname' => 'admin',
            'dob' => '2023-03-01',
            'phone_number' => '000000000000',
            'gender' => 'Male',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'address' => 'Admin Street, No.XYZ'
        ]);

        Status::create([
            'id' => 1,
            'status_name' => 'Ongoing'
        ]);
        Status::create([
            'id' => 2,
            'status_name' => 'Delivered'
        ]);
        Status::create([
            'id' => 3,
            'status_name' => 'Finished'
        ]);

        Category::create([
            'id' => 1,
            'category_name' => 'Cheese'
        ]);
        Category::create([
            'id' => 2,
            'category_name' => 'Strawberry'
        ]);
        Category::create([
            'id' => 3,
            'category_name' => 'Chocolate'
        ]);

        Role::create([
            'id' => 0,
            'role_name' => 'user'
        ]);
        Role::create([
            'id' => 1,
            'role_name' => 'admin'
        ]);

        Cake::create([
            'category_id' => '3',
            'cake_name' => 'Black Forrest',
            'cake_ingredients' => '200 gram gula pasir halus, 150 gram margarin/butter lelehkan, 100 gram terigu protein sedang, 25 gram maizena, 25 gram cokelat bubuk, 15 gram cake emulsifier, 15 gram susu bubuk full cream, 8 kuning telur, 7 telur antero (telur utuh), 1-2 sdm cokelat pasta black forest, 1 sendok teh vanila',
            'cake_description' => 'Lembut dan lezat - Kue coklat biasanya sangat lembut dan lezat. Ketika Anda menggigitnya, rasanya begitu lembut dan padat di mulut Anda, dan aroma coklatnya sangat menggoda.',
            'excerpt' => 'Lembut dan lezat - Kue coklat biasanya sangat lembut dan lezat. Ketika Anda menggigitnya...',
            'cake_price' => 100000,
            'cake_photo' => "Black Forrest.jpeg"
        ]);

        Cake::create([
            'category_id' => '3',
            'cake_name' => 'Choco Fanta',
            'cake_ingredients' => '100 gram tepung terigu protein sedang, 8 butir telur, 200 gram gula pasir, 60 gram coklat bubuk, 100 gram mentega, lelehkan, 40 gram tepung maizena, 1/4 sendok teh vanili, 1 sendok makan emulsifier',
            'cake_description' => 'Coklat yang kaya - Kue coklat mengandung coklat yang kaya dan lezat yang memberikan cita rasa yang kuat dan otentik. Coklat ini juga menambahkan rasa yang mendalam ke kue yang enak.',
            'excerpt' => 'Coklat yang kaya - Kue coklat mengandung coklat yang kaya dan lezat yang memberikan cita rasa yang kuat dan...',
            'cake_price' => 120000,
            'cake_photo' => "choco fanta.jpeg"
        ]);

        Cake::create([
            'category_id' => '3',
            'cake_name' => 'Cat Forrester',
            'cake_ingredients' => '500 gram krim kocok / butter cream, 1 kaleng cherry hitam, 100 gram Dark Cooking Chocolate (DCC), 10 buah ceri merah',
            'cake_description' => 'Manis dan pahit yang seimbang - Kue coklat memiliki rasa manis yang sempurna dan sedikit pahit yang membuatnya menjadi kombinasi yang sempurna. Ini adalah kue yang cocok untuk siapa saja yang mencari sesuatu yang manis, namun tidak terlalu manis.',
            'excerpt' => 'Manis dan pahit yang seimbang - Kue coklat memiliki rasa manis yang sempurna dan sedikit pahit yang membuatnya menjadi kombinasi yang sempurna. Ini adalah kue yang cocok untuk...',
            'cake_price' => 90000,
            'cake_photo' => "Cat Forrester.jpeg"
        ]);

        Cake::create([
            'category_id' => '3',
            'cake_name' => 'ChocoLumer',
            'cake_ingredients' => '150 gram mentega, 150 gram gula pasir, 125 gram tepung terigu, 80 gram dark chocolate, 35 gram tepung cokelat atau bubuk cokelat, 4 butir telur, 1 sendok teh SP, 1 bungkus kecil vanili, 1 bungkus SKM cokelat, Secukupnya garam, 1/2 sendok teh baking powder',
            'cake_description' => 'Beragam jenis - Ada berbagai jenis kue coklat, mulai dari kue coklat panggang, kue coklat lava, kue coklat kukus, kue coklat tart, hingga brownies. Setiap jenis kue coklat memiliki rasa dan tekstur yang berbeda-beda, sehingga mudah untuk menemukan yang sesuai dengan selera Anda.',
            'excerpt' => 'Beragam jenis - Ada berbagai jenis kue coklat, mulai dari kue coklat panggang, kue coklat lava, kue coklat kukus, kue coklat tart, hingga brownies. Setiap jenis...',
            'cake_price' => 180000,
            'cake_photo' => "Choco Lumer.jpeg"
        ]);

        Cake::create([
            'category_id' => '1',
            'cake_name' => 'RedCheese',
            'cake_ingredients' => '7 butir Kuning Telur, 100 ml Susu Cair putih/coklat, 50 gr DCC Colatta, dilelehkan, 60 gr Coklat bubuk, 60 gr Minyak, 1/2 sdt cokelat pasta, 220 gr Tepung Bianca Sponge Cake (Kalau tepung biasa pakai 120gr)',
            'cake_description' => 'Cocok untuk semua orang - Kue keju dapat dinikmati oleh semua orang, dari anak-anak hingga orang dewasa. Kue keju juga bisa disesuaikan dengan berbagai jenis topping seperti buah-buahan, coklat atau karamel untuk memberikan variasi rasa dan menambahkan rasa manis.',
            'excerpt' => 'Cocok untuk semua orang - Kue keju dapat dinikmati oleh semua orang, dari anak-anak hingga orang dewasa. Kue keju juga...',
            'cake_price' => 140000,
            'cake_photo' => "RedCheese.jpeg"
        ]);

        Cake::create([
            'category_id' => '1',
            'cake_name' => 'CheeseCake',
            'cake_ingredients' => '350 gr putih telur , 1 sdt SP, 180 gr gula pasir, 140 gr tepung terigu protein sedang, 35 gr cokelat bubuk, 1/2 sdt baking powder, 100 gr DCC, 125 ml minyak sayur, 2 sachet SKM',
            'cake_description' => 'Mudah disajikan - Kue keju mudah disajikan dan dihidangkan untuk setiap kesempatan. Kue ini dapat menjadi pilihan yang sempurna untuk camilan di sore hari atau makanan penutup setelah makan malam.',
            'excerpt' => 'Mudah disajikan - Kue keju mudah disajikan dan dihidangkan untuk setiap kesempatan. Kue ini...',
            'cake_price' => 140000,
            'cake_photo' => "Cheese Cake.jpeg"
        ]);

        Cake::create([
            'category_id' => '1',
            'cake_name' => 'RedSource',
            'cake_ingredients' => '100 g terigu cakra, 75 g margarin, 1 sdm minyak, 200 g terigu cakra, 75 g margarin, 80 ml air, 30 g gula halus, 300 g tape, buang seratnya, haluskan, 1,5 sdm gula halus, Sejumput garam, 1 sdm margarin, 50 g keju parut, 25 g susu bubuk, 1 buah kuning telur, 2 sdm susu cair',
            'cake_description' => 'Beragam jenis - Ada berbagai jenis kue keju, mulai dari cheesecake New York style, kue keju jepang, hingga kue keju kukus. Setiap jenis kue keju memiliki rasa dan tekstur yang berbeda-beda, sehingga mudah untuk menemukan yang sesuai dengan selera Anda.',
            'excerpt' => 'Beragam jenis - Ada berbagai jenis kue keju, mulai dari cheesecake New York style, kue keju jepang, hingga...',
            'cake_price' => 130000,
            'cake_photo' => "RedSource Cheese.jpeg"
        ]);

        Cake::create([
            'category_id' => '1',
            'cake_name' => 'Oreo Cheesecake',
            'cake_ingredients' => '1 sachet luwak white coffee, 4 sdm air panas, 10 sdm/100gr tepung terigu pro sedang (segitiga biru), 2 butir telur suhu ruang, 4 sdm gula pasir, 1/2 sdt SP, 1/2 sdt baking powder, 3 sdm minyak goreng',
            'cake_description' => 'Warna yang menarik - Kue keju biasanya memiliki warna kuning pucat atau putih yang cantik dan menarik. Tampilannya yang indah membuat kue keju menjadi salah satu kue yang populer dan sering dijadikan hidangan di acara-acara tertentu.',
            'excerpt' => 'Warna yang menarik - Kue keju biasanya memiliki warna kuning pucat atau putih yang cantik dan menarik. Tampilannya yang...',
            'cake_price' => 135000,
            'cake_photo' => "OreoCheese Cake.jpeg"
        ]);

        Cake::create([
            'category_id' => '2',
            'cake_name' => 'StrawFruitCake',
            'cake_ingredients' => '380 gram mentega, 250 gram gula halus, 3 kuning telur, 1/2 sdt vanili, 500 gram terigu, 50 gram maizena, 50 gram susu bubuk, Chocochips',
            'cake_description' => 'Cocok untuk semua orang - Kue strawberry dapat dinikmati oleh semua orang, baik anak-anak maupun orang dewasa. Stroberi adalah buah-buahan yang umum dan dikenal oleh banyak orang, sehingga kue strawberry menjadi salah satu pilihan yang populer dan terus dicari.',
            'excerpt' => 'Cocok untuk semua orang - Kue strawberry dapat dinikmati oleh semua orang, baik anak-anak maupun orang dewasa. Stroberi adalah buah-buahan yang umum dan dikenal oleh...',
            'cake_price' => 200000,
            'cake_photo' => "StrawFruitCake.jpeg"
        ]);

        Cake::create([
            'category_id' => '2',
            'cake_name' => 'CylinderRed',
            'cake_ingredients' => '2 tahu yg kadar airnya dikit, 1 telur agak kecil, 2 baput dihaluskan, Garam, merica secukupnya , Kecap ikan , Baking powder 1/8 sdt, Daun bawang 1 dipotong kecil2',
            'cake_description' => 'Mudah disajikan - Kue strawberry mudah disajikan dan dihidangkan untuk setiap kesempatan. Kue ini dapat menjadi pilihan yang sempurna untuk camilan di sore hari atau makanan penutup setelah makan malam.',
            'excerpt' => 'Mudah disajikan - Kue strawberry mudah disajikan dan dihidangkan untuk setiap kesempatan. Kue ini dapat menjadi...',
            'cake_price' => 120000,
            'cake_photo' => "CylinderRed.jpeg"
        ]);

        Cake::create([
            'category_id' => '2',
            'cake_name' => 'SandreadCake',
            'cake_ingredients' => 'cokelat pasta 1/2 sdt, baking powder 1/2 sdt, garam 1/8 sdt, 1 kuning telur, tepung maizena 20 gram, cokelat bubuk 30 gram, kacang mede 50 gram, selai kacang 80 gram, gula tepung 150 gram, margarin 180 gram, tepung terigu 200 gram',
            'cake_description' => 'Beragam jenis - Ada berbagai jenis kue strawberry, mulai dari kue strawberry panggang, kue strawberry tart, kue strawberry shortcake, hingga kue roll stroberi. Setiap jenis kue strawberry memiliki rasa dan tekstur yang berbeda-beda, sehingga mudah untuk menemukan yang sesuai dengan selera Anda.',
            'excerpt' => 'Beragam jenis - Ada berbagai jenis kue strawberry, mulai dari kue strawberry panggang, kue strawberry tart, kue strawberry shortcake, hingga kue roll stroberi. Setiap jenis kue strawberry memiliki...',
            'cake_price' => 110000,
            'cake_photo' => "SandreadCake.jpeg"
        ]);

        Cake::create([
            'category_id' => '2',
            'cake_name' => 'RedPancake',
            'cake_ingredients' => 'Cokelat Pasta 1/4 sdt, Baking Powder 1/2 Sdt, Susu Bubuk 10 gram, Maizena 15 gram, Tepung Terigu 150 gram ,Pasta Vanilla 1/2 sdt, 1 Kuning Telur, Gula Tepung 75 gram, Garam 1/4 sdt, Blue Band Cake and Cookie 150 gram',
            'cake_description' => 'Warna yang menarik - Kue strawberry memiliki warna merah cerah yang menarik dan membuatnya terlihat sangat menggoda. Tampilannya yang indah ini membuat kue strawberry cocok untuk dihidangkan di acara-acara tertentu seperti pesta atau acara keluarga.',
            'excerpt' => 'Warna yang menarik - Kue strawberry memiliki warna merah cerah yang menarik dan membuatnya terlihat sangat menggoda. Tampilannya yang indah ini membuat kue strawberry...',
            'cake_price' => 115000,
            'cake_photo' => "RedPancake.jpeg"
        ]);
    }
}
