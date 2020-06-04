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

    /*
      public function uploadReport($report_array, $request = 'POST', $id = null, $flag = false)
      {

      $objReport = ImageInfo::find ( isset( $id ) ? $id : null );
      $data = [];
      $data[ 'success' ] = true;
      $data[ 'simple_chart_keyword' ] = null;
      $data[ 'simple_chart_image_file' ] = null;
      $data[ 'extract_path' ] = null;
      $flag = true;


      if ( !empty( $report_array[ 'simple_cover_image' ] ) ) {

      if ( gettype ( $report_array[ 'simple_cover_image' ] ) == 'object' ) {

      $image = $report_array[ 'simple_cover_image' ];
      $fileName = $image->getClientOriginalName ();

      if ( $request == 'PUT' ) {

      $existImgName = $objReport->cover;
      $imageName = explode ( "/", $existImgName );

      if ( !empty( $imageName ) ) {

      \File::delete ( public_path ( ltrim ( Config::get ( 'custom_config.REPORTS_STORAGE' ), "/" ) ) . Config::get ( 'custom_config.REPORTS_COVER' )
      . $imageName[ (count ( $imageName ) - 1) ] );
      }

      }
      $destinationPath = ltrim ( Config::get ( 'custom_config.REPORTS_STORAGE' ), "/" ) . Config::get ( 'custom_config.REPORTS_COVER' );

      if ( !file_exists ( $destinationPath ) ) {
      mkdir ( $destinationPath, 0777, true );
      }

      $report_array[ 'simple_cover_image' ]->move ( $destinationPath, $fileName );

      $objReport->cover = $fileName;

      if ( $objReport->save () ) {


      $flag = true;
      }

      }

      }


      if ( !empty( $report_array[ 'simple_chart_keyword' ] ) ) {

      if ( gettype ( $report_array[ 'simple_chart_keyword' ] ) == 'object' ) {
      $objHelper = new Helper();
      $destinationPath = ltrim ( Config::get ( 'custom_config.REPORTS_STORAGE' ), "/" ) . Config::get ( 'custom_config.REPORTS_CHART_KEYWORD' );

      $image = $report_array[ 'simple_chart_keyword' ];
      $fileName = $objReport->id . "_"  . rand() . 'chart_keyword.' . $image->getClientOriginalExtension ();

      if ( $request == 'PUT' ) {

      $existImgName = $objReport->id . "_" . 'chart_keyword';

      $imageName = $objHelper->getlocationFileName ( $destinationPath, $existImgName );

      if ( !empty( $imageName ) ) {

      \File::delete ( public_path ( ltrim ( Config::get ( 'custom_config.REPORTS_STORAGE' ), "/" ) ) . Config::get ( 'custom_config.REPORTS_CHART_KEYWORD' )
      . $imageName );
      }

      }

      if ( !file_exists ( $destinationPath ) ) {
      mkdir ( $destinationPath, 0777, true );
      }

      $report_array[ 'simple_chart_keyword' ]->move ( $destinationPath, $fileName );
      $data[ 'simple_chart_keyword' ] = $destinationPath . $fileName;
      $flag = true;
      }


      }

      if ( !empty( $report_array[ 'simple_chart_image_file' ] ) ) {

      if ( gettype ( $report_array[ 'simple_chart_image_file' ] ) == 'object' ) {

      $objHelper = new Helper();
      $destinationPath = ltrim ( Config::get ( 'custom_config.REPORTS_STORAGE' ), "/" );
      $destinationExtractPath = ltrim ( Config::get ( 'custom_config.REPORTS_STORAGE' ), "/" ) . Config::get ( 'custom_config.REPORTS_CHART_FILENAME' );

      $image = $report_array[ 'simple_chart_image_file' ];
      $fileName = $objReport->id .  rand(). 'chart_img.' . $image->getClientOriginalExtension ();

      if ( $request == 'PUT' ) {

      $existImgName = $objReport->id . 'chart_img';
      $imageName = $objHelper->getlocationFileName ( $destinationPath, $existImgName );

      if ( !empty( $imageName ) ) {

      \File::delete ( public_path ( ltrim ( Config::get ( 'custom_config.REPORTS_STORAGE' ), "/" ) )
      . $imageName );
      }

      }

      if ( !file_exists ( $destinationPath ) ) {
      mkdir ( $destinationPath, 0777, true );
      }

      $report_array[ 'simple_chart_image_file' ]->move ( $destinationPath, $fileName );
      $data[ 'simple_chart_image_file' ] = $destinationPath . $fileName;
      $data[ 'extract_path' ] = $destinationExtractPath;
      $flag = true;
      }

      }


      if ( !empty( $report_array[ 'simple_exec_summary_pdf' ] ) ) {

      if ( gettype ( $report_array[ 'simple_exec_summary_pdf' ] ) == 'object' ) {

      $image = $report_array[ 'simple_exec_summary_pdf' ];
      $fileName = $image->getClientOriginalName ();

      if ( $request == 'PUT' ) {

      $existPdfName = $objReport->summary_pdf;
      $pdfeName = explode ( "/", $existPdfName );

      if ( !empty( $pdfeName ) ) {


      \File::delete ( public_path ( ltrim ( Config::get ( 'custom_config.REPORTS_STORAGE' ), "/" ) ) . Config::get ( 'custom_config.REPORTS_SUMMERY_PDF' )
      . "/" . $pdfeName[ (count ( $pdfeName ) - 1) ] );
      }

      }
      $destinationPath = ltrim ( Config::get ( 'custom_config.REPORTS_STORAGE' ), "/" ) . Config::get ( 'custom_config.REPORTS_SUMMERY_PDF' );

      if ( !file_exists ( $destinationPath ) ) {
      mkdir ( $destinationPath, 0777, true );
      }

      $report_array[ 'simple_exec_summary_pdf' ]->move ( $destinationPath, $fileName );

      $objReport->summary_pdf = $fileName;
      if ( $objReport->save () ) {
      $flag = true;
      }

      }

      }


      if ( !empty( $report_array[ 'simple_full_pdf' ] ) ) {

      if ( gettype ( $report_array[ 'simple_exec_summary_pdf' ] ) == 'object' ) {
      $image = $report_array[ 'simple_full_pdf' ];
      $fileName = $image->getClientOriginalName ();

      if ( $request == 'PUT' ) {

      $existPdfName = $objReport->full_pdf;
      $pdfeName = explode ( "/", $existPdfName );

      if ( !empty( $pdfeName ) ) {


      \File::delete ( public_path ( ltrim ( Config::get ( 'custom_config.REPORTS_STORAGE' ), "/" ) ) . Config::get ( 'custom_config.REPORTS_FULL_PDF' )
      . "/" . $pdfeName[ (count ( $pdfeName ) - 1) ] );
      }

      }
      $destinationPath = ltrim ( Config::get ( 'custom_config.REPORTS_STORAGE' ), "/" ) . Config::get ( 'custom_config.REPORTS_FULL_PDF' );

      if ( !file_exists ( $destinationPath ) ) {
      mkdir ( $destinationPath, 0777, true );
      }

      $report_array[ 'simple_full_pdf' ]->move ( $destinationPath, $fileName );

      $objReport->full_pdf = $fileName;
      if ( $objReport->save () ) {
      $flag = true;
      }
      }

      }

      if ( !empty( $report_array[ 'simple_enterprise_pdf' ] ) ) {
      if ( gettype ( $report_array[ 'simple_enterprise_pdf' ] ) == 'object' ) {

      $image = $report_array[ 'simple_enterprise_pdf' ];
      $fileName = $image->getClientOriginalName ();

      if ( $request == 'PUT' ) {

      $existPdfName = $objReport->enterprise_pdf;
      $pdfeName = explode ( "/", $existPdfName );

      if ( !empty( $pdfeName ) ) {

      \File::delete ( public_path ( ltrim ( Config::get ( 'custom_config.REPORTS_STORAGE' ), "/" ) ) . Config::get ( 'custom_config.REPORTS_ENTERPRISES_PDF' )
      . "/" . $pdfeName[ (count ( $pdfeName ) - 1) ] );
      }

      }
      $destinationPath = ltrim ( Config::get ( 'custom_config.REPORTS_STORAGE' ), "/" ) . Config::get ( 'custom_config.REPORTS_ENTERPRISES_PDF' );

      if ( !file_exists ( $destinationPath ) ) {
      mkdir ( $destinationPath, 0777, true );
      }

      $report_array[ 'simple_enterprise_pdf' ]->move ( $destinationPath, $fileName );

      $objReport->enterprise_pdf = $fileName;
      if ( $objReport->save () ) {
      $flag = true;
      }

      }

      }

      return $data;
      }

     */
}
