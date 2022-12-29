<?php


namespace App\Traits\Media;


use App\Classes\Interfaces\IAvatar;
use App\Classes\Interfaces\IImage;
use Spatie\MediaLibrary\HasMedia;

trait InteractWithImageService
{
    public function saveAvatar($image,IAvatar|HasMedia $model) : void  {
        $model->getFirstMedia($model->getCollectionAvatar())?$model->getMedia($model->getCollectionAvatar())->each->delete():null;
        $model->clearMediaCollection($model->getCollectionAvatar());
        $model
            ->addMedia($image)
            ->toMediaCollection($model->getCollectionAvatar());
    }

    public function saveImage($image,IImage $model){
        $model->getFirstMedia($model->getCollectionImage())?$model->getMedia($model->getCollectionImage())->each->delete():null;
        $model->clearMediaCollection($model->getCollectionImage());
        $model
            ->addMedia($image)
            ->toMediaCollection($model->getCollectionImage());
    }

}
