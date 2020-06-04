<?php

namespace App\Repositories;

use DB;
use App\Models\ImageInfo;
use Illuminate\Support\Facades\Config;

class ImageInfoRepository {

    /**
     * get all department info
     * @return type
     */
    public function getAllImage() {

        $objImage = ImageInfo::select("*")
                ->get();



        return $objImage;
    }

    /**
     * get all department info
     * @return type
     */
    public function getImage($id) {

        $objImage = ImageInfo::select("*")
                ->where("id", $id)
                ->first();

        return $objImage;
    }

    /**
     * update image tbl and uplad image
     * @param type $data
     * @return boolean
     */
    public function updateImageInfo($data) {

        try {
       
             $objImg = ImageInfo::find(isset($data['HndId']) ? $data['HndId'] : null);
        $objImg->hyp_info = $data['InputUrl'];
            
        if (  !empty($data['InputImg']) &&gettype($data['InputImg']) == 'object') {
            $image = $data['InputImg'];
            $fileName = $image->getClientOriginalName();
            $existImgName = $objImg->src;
            $imageName = explode("/", $existImgName);

            if (!empty($imageName)) {

                  \File::delete(public_path('\\assets\\images\\\dashboard\\') . $imageName[(count($imageName) - 1)]);
            }
            $destinationPath = ltrim(Config::get('custom_config.IMG_STORAGE'), "/");
            $newImgName = rand() . $imageName[(count($imageName) - 1)];
            
            if (!file_exists($destinationPath)) {
                
                mkdir($destinationPath, 0777, true);
            }
           $data['InputImg']->move($destinationPath, $newImgName);
           $objImg->src = $destinationPath ."/" . $newImgName;
           
        }
          $objImg->save();
        
        
             return true;
        
        
        } catch (Exception $ex) {

            return false;
        }
   
       
    }

}
