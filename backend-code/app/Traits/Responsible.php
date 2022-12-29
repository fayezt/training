<?php

namespace App\Traits;


use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Collection;
use Str;


trait Responsible
{
    public function returnWithPaginator(string $message,Paginator $paginator,ResourceCollection $resourceCollection): JsonResponse
    {
        $total=$paginator->total();
        $per_page=$paginator->perPage();
        $pages=ceil($total/$per_page);
        $per_page=$per_page>$total?$total:$per_page;
        return $this->returnWithSuccess(
            $message,
            [
                'items'=>$resourceCollection,
                'total'=>$total,
                'next'=>Str::after($paginator->nextPageUrl(),'.de'),
                'previous'=>Str::after($paginator->previousPageUrl(),'.de'),
                'current_page'=>$paginator->currentPage(),
                'number_pages'=>$pages,
                'items_per_page'=>$per_page
            ]
        );
    }
    /**
     * @param Collection $collection
     * @param string $message
     * @param int $code
     * @param string $status
     * @return JsonResponse
     */
    public function returnWithCollection (ResourceCollection $collection, $message='Successfully', $code=200,$status='success'): JsonResponse
{
    return response()->json(['status'=>$status,'data'=>$collection,'message'=>$message,'code'=>$code],$code);
}

    /**
     * @param Model $model
     * @param string $message
     * @param int $status
     * @return JsonResponse
     */
    public function returnWithModel (Model|JsonResource $model, $message='Successfully',  $code=200,$status='success'): JsonResponse
    {
        return response()->json(['status'=>$status,'data'=>$model,'message'=>$message,'code'=>$code],$code);
    }

    /**
     * @param null $data
     * @param string $message
     * @param int $status
     * @return JsonResponse
     */
    public function returnWithError( $message='Failed',$errors=null,$code=500,$status='failed'): JsonResponse
    {
        return response()->json(['status'=>$status,'errors'=>$errors,'message'=>$message,'code'=>$code],$code);
    }

    /**
     * @param null $data
     * @param string $message
     * @param int $status
     * @return JsonResponse
     */
    public function returnWithSuccess($message='Successfully',$data=null, $status='success',$code=200): JsonResponse
    {
        return response()->json(['status'=>$status,'data'=>$data,'message'=>$message,'code'=>$code],$code);
    }
}
