<?php

namespace App\Services;

use App\Repositories\ImageInfoRepository;
use App\Models\ContactInfo;
use App\Models\ImageInfo;

class CommonService
{

    private $imageInfoRepository;

    /**
     * CommonService constructor.
     * @param ImageRepository $ImageRepository
     */
    public function __construct(ImageInfoRepository $imageRepository)
    {
        $this->imageInfoRepository = $imageRepository;
    }
    
     public function getImagetDetail()
    {
       
        return $this->imageInfoRepository->getAllImage();
    }
    
     public function updateImagetDetail($data)
    {
     
         if($data['HndType']== "img"){
             
            return $this->imageInfoRepository->updateImageInfo($data);
         }
       
        
    }
	
	  public function retImageInfo($id)
    {
       
        return $this->imageInfoRepository->getImage($id);
    }


    
 

}


