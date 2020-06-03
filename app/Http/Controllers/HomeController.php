<?php

namespace App\Http\Controllers;

use App\Services\CommonService;
use App\Http\Requests\HomeRequest;
use Illuminate\Http\Request;



class HomeController extends Controller
{


    private $error = 'error';
    private $message = 'message';

    /**
     * @var UserService
     */
    private $commonService;


    /**
     * UsersController constructor.
     * @param UserService $userService
     */
    public function __construct(CommonService $commonService)
    {
        $this->commonService = $commonService;

    }


    public function index(Request $request)
    {

        $data = $this->commonService->getImagetDetail($request->all());

        print_r($data); die();
        //return $this->respond($data);
    }

    public function showCompany($id = null)
    {
        //$companyData = $this->companyProfileService->getComapnyById($id);

        //return $this->respond($companyData);

    }
    /*
    public function searchCompany(Request $request)
    {
        $companyData = $this->companyProfileService->getAllComapnyDetail($request);

        if ($companyData) {

            return response()->json(['data' => $companyData], 200);

        }
        return response()->json([$this->error => __('messages.un_processable_request')], 400);

    }



    public function editCompany(Request $request)
    {
        //HomeRequest $request
        $validatedData = $request->validated();
        if($validatedData->fail()){
            die();
        }
        $validator = $this->companyProfileValidate($request->all(), 'PUT');

        if ($validator->fails()) {

            $validateMessge = Helper::customErrorMsg($validator->messages());

            return response()->json(['error' => $validateMessge], 400);

        }

        if ($validator->passes()) {
            $companyData = $this->companyProfileService->getUpdateCompany($request);
            if ($companyData) {
                return response()->json(['message' => __('messages.company_profile_edit_success')], 200);
            }

            return response()->json(['error' => __('messages.un_processable_request')], 400);

        }

    }
     * 
     */

}

