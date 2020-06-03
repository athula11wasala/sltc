<?php

use Illuminate\Database\Seeder;
use App\Models\ImageInfo;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
        DB::table("tbl_image_info")->delete();

        $imageInfo = new ImageInfo();
        $imageInfo->src = "assets/notice/covid_home/tile1.jpg";
        $imageInfo->hyp_info = "https://www.sltc.ac.lk/covid19-sltc-updates";
        $imageInfo->save ();
		
		$imageInfo = new ImageInfo();
        $imageInfo->src = "assets/notice/covid_home/tile7.jpg";
        $imageInfo->hyp_info = "https://www.sltc.ac.lk/covid19-sltc-updates";
        $imageInfo->save ();
		
		$imageInfo = new ImageInfo();
        $imageInfo->src = "assets/notice/covid_home/tile2.jpg";
        $imageInfo->hyp_info = "https://www.sltc.ac.lk/covid19-sltc-updates";
        $imageInfo->save ();
		
		$imageInfo = new ImageInfo();
        $imageInfo->src = "assets/notice/covid_home/tile6.jpg";
        $imageInfo->hyp_info = "https://www.sltc.ac.lk/online-payments";
        $imageInfo->save ();
		
		$imageInfo = new ImageInfo();
        $imageInfo->src = "assets/notice/covid_home/tile8.jpg";
        $imageInfo->hyp_info = "https://www.sltc.ac.lk/education/schools-and-faculties";
        $imageInfo->save ();
		
		$imageInfo = new ImageInfo();
        $imageInfo->src = "assets/notice/covid_home/tile4.jpg";
        $imageInfo->hyp_info = "https://www.sltc.ac.lk/who-we-are/president-message";
        $imageInfo->save ();
		
		$imageInfo = new ImageInfo();
        $imageInfo->src = "assets/notice/covid_home/tile5.jpg";
        $imageInfo->hyp_info = "http://research.sltc.ac.lk";
        $imageInfo->save ();
		
		$imageInfo = new ImageInfo();
        $imageInfo->src = "assets/notice/covid_home/tile3.jpg";
        $imageInfo->hyp_info = "https://www.sltc.ac.lk/study/multiple-entry-degree-completion-options";
        $imageInfo->save ();
		
		
		
    }
}
