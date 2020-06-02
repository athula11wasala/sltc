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
  
        $contactInfo = new ContactInfo();
        $contactInfo->type = "1";
        $contactInfo->description = "+94 11 2100 500 / +94 71 1100 500";
        $contactInfo->save ();

        $contactInfo = new ContactInfo();
        $contactInfo->type = "2";
        $contactInfo->description = "info@sltc.ac.lk";
        $contactInfo->save ();

        $contactInfo = new ContactInfo();
        $contactInfo->type = "3";
        $contactInfo->description = "Main Campus Ingiriya Road, Padukka, Sri Lanka.";
        $contactInfo->save ();
    }
}
