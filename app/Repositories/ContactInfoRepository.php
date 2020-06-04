<?php

namespace App\Repositories;

use DB;
use App\Models\ContactInfo;
use Illuminate\Support\Facades\Config;

class ContactInfoRepository {

    /**
     * get all contact info
     * @return type
     */
    public function getAllContactInfo() {

        $objContact = ContactInfo::selectRaw("id,description,symbol,
                   (CASE WHEN tbl_contact_info.type = 1 THEN 'tel'
                   WHEN tbl_contact_info.type = 2 THEN 'email'
                    ELSE 'address' END) AS type")
                ->get();
      
        return $objContact;
    }

    /**
     * get select contact info
     * @return type
     */
    public function getContact($id) {

        $objContact =  ContactInfo::selectRaw("id,description,symbol,
                   (CASE WHEN tbl_contact_info.type = 1 THEN 'tel'
                   WHEN tbl_contact_info.type = 2 THEN 'email'
                    ELSE 'address' END) AS type")
                ->where("id", $id)
                ->first();

        return $objContact;
    }

    /**
     * update contact info
     * @param type $data
     * @return boolean
     */
    public function updateContactInfo($data) {

        try {
       
             $objContact = ContactInfo::find(isset($data['HndId']) ? $data['HndId'] : null);
             $objContact->description = $data['InputContact'];
             $objContact->save();
              return true;
        
        } catch (Exception $ex) {

            return false;
        }

       
    }

   
}
