<?php

use Illuminate\Database\Seeder;
use App\Pages;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <20 ; $i++) { 
                
            $page = new Pages();
            $page->title ='Peru 8K HDR 60FPS (FUHD)';
            $page->content = 'Peru 8K HDR explores the people and landscapes of Peru. This footage was captured in natively in 8K UHD (4320p) and 60fps resolution with the brand new Red Helium 8K Super35mm sensor. Using the most up to date technology we created this video to deliver the most realistic and cinematic experience possible today, especially when viewed in HDR!';
            $page->url = 'https://www.youtube.com/embed/1La4QzGeaaQ';
            $page->nick = 'Jan Nowak';
            $page->save();
}
}
}
