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
    
     public function retImageInfo($id)
    {
       
        return $this->imageInfoRepository->getImage($id);
    }

    
   /*
    public function updateReport($reportArray)
    {

        set_time_limit(1000);
        ini_set('memory_limit', '-1');
        $reportObject['simple_chart_image_file'] = '';
        $reportObject['simple_chart_keyword'] = '';
        $reportObject['extract_path'] = '';
        $reportObject = $this->reportRepository->updateReport($reportArray);

        if (isset($reportObject['id'])) {

            if ($reportArray['report_type'] == 'interactive') {

                $objInteractive = InteractiveReport::where("report_id", $reportObject['id'])->first();

                if (!empty($objInteractive)) {

                    $interactvieReport = $this->interactiveReportRepository->UpdateReport($reportArray, $reportObject['id'], !empty($objInteractive->id) ? $objInteractive->id : null);
                } else {

                    $interactvieReport = $this->interactiveReportRepository->saveReport($reportArray, $reportObject['id']);
                }

                if ($interactvieReport == null) {

                    $this->reportRepository->deleteReportRefTbl($reportObject['id']);

                    return false;
                }
            }

            $excel =  !empty($reportArray[ 'simple_chart_keyword' ]) ?  $reportArray[ 'simple_chart_keyword' ]:'';

            if ( gettype ( $excel ) == 'object' ) {

                $ChartResponse = $this->chartRepository->saveChart($reportObject['id'], $reportObject['simple_chart_keyword'], $reportObject['simple_chart_image_file'], $reportObject['extract_path']);
            }
             else {
                 $ChartResponse = $this->chartRepository->saveChartZip($reportObject['id'], $reportObject['simple_chart_keyword'], $reportObject['simple_chart_image_file'], $reportObject['extract_path']);
             }

            if (isset($ChartResponse['success']) && $ChartResponse['success'] == true) {

                //   print_r($objChartResponse['reportId']);
                return true;
            } else {

                //$this->reportRepository->deleteReportChartTbl($reportObject['id']);

                if (isset($ChartResponse['message'])) {

                    return ['success' => 'fail', 'message' => $ChartResponse['message']];

                }

                return false;
            }

        } else {

            $this->reportRepository->deleteReportRefTbl($reportObject['id']);
            return false;
        }

        return false;
    }
    * */
 

}


