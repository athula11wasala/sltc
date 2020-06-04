<?php

namespace App\Services;

use App\Repositories\ImageInfoRepository;
use App\Repositories\ContactInfoRepository;
use App\Models\ContactInfo;
use App\Models\ImageInfo;

class CommonService
{

    private $imageInfoRepository;
    private $contactInfoRepository;

    /**
     * CommonService constructor.
     * @param ImageRepository $ImageRepository
     */
    public function __construct(ImageInfoRepository $imageRepository, ContactInfoRepository $contactRepository) {
        $this->imageInfoRepository = $imageRepository;
        $this->contactInfoRepository = $contactRepository;
    }

    public function getImagetDetail() {

        $data['image'] = $this->imageInfoRepository->getAllImage();
        $data['contact'] = $this->contactInfoRepository->getAllContactInfo();
        
        return $data;
    }

    public function updateImagetDetail($data) {

     
        if ($data['HndType'] == "img") {

            return $this->imageInfoRepository->updateImageInfo($data);
        } else if ($data['HndType'] == "contact_info") {

            return $this->contactInfoRepository->updateContactInfo($data);
        }
    }

    public function retImageInfo($id, $type) {

       
        if ($type == "img") {

            return $this->imageInfoRepository->getImage($id);
        } else if ($type == "contact") {
            return $this->contactInfoRepository->getContact($id);
        }
    }

}


