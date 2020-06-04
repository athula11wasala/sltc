<?php

namespace App\Http\Controllers;

use App\Services\CommonService;
use App\Http\Requests\HomeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;


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
    public function __construct(CommonService $commonService) {
        $this->commonService = $commonService;
    }

    /***
     * landing front & backend view
     */
    public function index(Request $request) {

        $data = $this->commonService->getImagetDetail();
        if (Route::getFacadeRoot()->current()->uri() == "backend") {

            return view('/home_backend')->with(['data' => $data['image'], 'contact' => $data['contact']]);
        }

        return view('/home_front')->with(['data' => $data['image'], 'contact' => $data['contact']]);
    }

    /**
     * modify image db
     * @param HomeRequest $request
     * @return type
     */
    public function postImageInfo(HomeRequest $request) {

        if ($this->commonService->updateImagetDetail($request->all()) == true) {

            return Redirect::to("backend/")
                            ->with("message", "Successfully Updated.");
        }
        return Redirect::to("backend/")
                        ->with("messageWarning", "Something Went wrong.");
        ;
    }
    
    /**
     * retive image info
     * @param type $id
     * @param type $type
     * @return type
     */
    public function RetriveImgInfo($id = null, $type = null) {

        $data = $this->commonService->retImageInfo($id, $type);

        return view('/edit_home')->with(['data' => $data]);
    }

}


