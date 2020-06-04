<?php

use Illuminate\Database\Seeder;
use App\Models\ContactInfo;

class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  
         DB::table("tbl_contact_info")->truncate();
        $contactInfo = new ContactInfo();
        $contactInfo->type = "1";
        $contactInfo->description = "+94 11 2100 500 / +94 71 1100 500";
        $contactInfo->symbol = "ඇමතීම්";
        $contactInfo->save ();

        $contactInfo = new ContactInfo();
        $contactInfo->type = "2";
        $contactInfo->symbol = "විද්යුත් තැපෑල";
        $contactInfo->description = "info@sltc.ac.lk";
        $contactInfo->save ();

        $contactInfo = new ContactInfo();
        $contactInfo->type = "3";
        $contactInfo->symbol = "ලිපිනය";
        $contactInfo->description = "Main Campus Ingiriya Road, Padukka, Sri Lanka.";
        $contactInfo->save ();
    }
}
