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
        
        Movie::create([
            'title' => 'To Catch a Killer',
            'slug' => 'to-catch-a-killer',
            'description' => 'Baltimore. Malam tahun baru. Seorang petugas polisi yang berbakat tetapi bermasalah (Shailene Woodley) direkrut oleh kepala penyelidik FBI (Ben Mendelsohn) untuk membantu membuat profil dan melacak individu yang terganggu yang meneror kota.',
            'release_date' => '2023-04-06',
            'poster_url' => 'https://image.tmdb.org/t/p/w500/mFp3l4lZg1NSEsyxKrdi0rNK8r1.jpg',
            'age_rating' => 15,
            'ticket_price' => 47000
        ]);
        
        
        User::create([
            'name' => 'Fachry Anwar',
            'age' => 19,
            'password' => bcrypt('anjay'),
            'username' => 'fachryanwar',
            'is_admin' => true
        ]);
    }
}
