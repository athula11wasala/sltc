<?php

namespace App\Http\Controllers;

use App\Services\CommonService;
use App\Http\Requests\HomeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class HomeController extends Controller
{
    /**
     * @var commonService
     */
    private $commonService;


    /**
     * HomeController constructor.
     * @param CommonService $commonService
     */
    public function __construct(CommonService $commonService)
    {
        $this->commonService = $commonService;

    }
    
    public  function Homeindex(){
     
        $data = $this->commonService->getImagetDetail();
      
        return view('/home_front')->with(['data'=>$data['image'],'contact'=>$data['contact']  ]);
    }

    public function index(Request $request)
    {

        $data = $this->commonService->getImagetDetail();
       
        return view('/home_backend')->with(['data'=>$data['image'],'contact'=>$data['contact']  ]);
        
    }
    
    public function postImageInfo(HomeRequest $request){
    
        if( $this->commonService->updateImagetDetail($request->all()) == true){
            
             return Redirect::to("backend/")
                                ->with("message", "Successfully Updated.");
        }
        return Redirect::to("backend/")
                             ->with("messageWarning", "Something Went wrong.");;
        
    }
    
    public function backEndImageInfo($id = null,$type=null){
            
        $data = $this->commonService->retImageInfo($id,$type);
     
       return view('/edit_home')->with(['data'=>$data]);
        
    }

    
}

