<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Movie;
use App\Models\BalanceHistory;
use App\Models\TicketPurchased;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Movie::create([
            'title' => 'Guardians of the Galaxy Vol. 3',
            'slug' => 'avatar-the-way-of-water',
            'description' => 'Peter Quill masih trauma karena kehilangan Gamora. Ia perlu mengumpulkan timnya untuk melindungi alam semesta dan salah satu anggota mereka. Jika mereka gagal, Guardian akan berakhir.',
            'release_date' => '2023-05-03',
            'poster_url' => 'https://image.tmdb.org/t/p/w500/nAbpLidFdbbi3efFQKMPQJkaZ1r.jpg',
            'age_rating' => 12,
            'ticket_price' => 41000
        ]);
        
        Movie::create([
            'title' => 'Split',
            'slug' => 'split',
            'description' => 'Ketika ketiga gadis remaja sedang menunggu ayah mereka di dalam mobil, seorang pria misterius menculik dan membawa mereka ke dalam sebuah bunker. Sang penculik yang bernama Kevin (James McAvoy) adalah seorang pria dengan gangguan jiwa yang membuatnya memiliki 23 kepribadian yang berbeda, yang diantaranya adalah seorang wanita dan anak berumur 9 tahun yang bernama Hedwig.  Sebagai salah satu gadis yang diculik, Casey berusaha meloloskan diri dengan meyakinkan salah satu kepribadian Kevin untuk melepaskan mereka. Akan tetapi hal tersebut tidaklah mudah, terlebih setelah Hedwig memperingatkan mereka akan the Beast yang merupakan kepribadian Kevin yang paling berbahaya.',
            'release_date' => '2017-01-19',
            'poster_url' => 'https://image.tmdb.org/t/p/w500/lli31lYTFpvxVBeFHWoe5PMfW5s.jpg',
            'age_rating' => 10,
            'ticket_price' => 45000
        ]);
        
        Movie::create([
            'title' => 'Top Gun: Maverick',
            'slug' => 'top-gun-maverick',
            'description' => 'Setelah lebih dari tiga puluh tahun mengabdi sebagai salah satu penerbang top Angkatan Laut, dan menghindari kenaikan pangkat yang akan menjatuhkannya, Pete Maverick Mitchell mendapati dirinya melatih satu detasemen lulusan TOP GUN untuk misi khusus yang tidak ada kehidupan. pilot pernah melihat.',
            'release_date' => '2022-05-24',
            'poster_url' => 'https://image.tmdb.org/t/p/w500/jeGvNOVMs5QIU1VaoGvnd3gSv0G.jpg',
            'age_rating' => 14,
            'ticket_price' => 57000
        ]);
        
        Movie::create([
            'title' => 'The Batman',
            'slug' => 'the-batman',
            'description' => 'Ketika seorang pembunuh berantai sadis mulai membunuh tokoh-tokoh politik penting di Gotham, Batman terpaksa menyelidiki korupsi tersembunyi di kota itu dan mempertanyakan keterlibatan keluarganya.',
            'release_date' => '2022-03-01',
            'poster_url' => 'https://image.tmdb.org/t/p/w500/seyWFgGInaLqW7nOZvu0ZC95rtx.jpg',
            'age_rating' => 13,
            'ticket_price' => 53000
        ]);
        
        Movie::create([
            'title' => 'Smile',
            'slug' => 'smile',
            'description' => 'Setelah menyaksikan kejadian aneh dan traumatis yang melibatkan seorang pasien, Dr. Rose Cotter mulai mengalami kejadian menakutkan yang tidak dapat dia jelaskan. Saat teror luar biasa mulai mengambil alih hidupnya, Rose harus menghadapi masa lalunya yang bermasalah untuk bertahan hidup dan melarikan diri dari kenyataan barunya yang mengerikan.',
            'release_date' => '2022-09-23',
            'poster_url' => 'https://image.tmdb.org/t/p/w500/67Myda9zANAnlS54rRjQF4dHNNG.jpg',
            'age_rating' => 11,
            'ticket_price' => 38000
        ]);
        
        
        User::create([
            'name' => 'Fachry Anwar',
            'age' => 19,
            'password' => bcrypt('asoy'),
            'email' => 'fachryanwar@gmail.com'
        ]);
        
        User::create([
            'name' => 'Mazaya Nur',
            'age' => 19,
            'password' => bcrypt('sayang'),
            'email' => 'mazayanur@gmail.com'
        ]);
        
        // BalanceHistory::create([
        //     'amount' => 20000,
        //     'description' => 'Top Up',
        //     'user_id' => 2
        // ]);
        
        // TicketPurchased::create([
        //     'movie_id' => 2,
        //     'tanggal' => '2023-08-01',
        //     'waktu' => '13:00:00',
        //     'seat' => 'A5',
        //     'user_id' => 1
        // ]);

        // TicketPurchased::create([
        //     'movie_id' => 3,
        //     'tanggal' => '2023-08-01',
        //     'waktu' => '13:00:00',
        //     'seat' => 'A6',
        //     'user_id' => 1
        // ]);
    }
}
