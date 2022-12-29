<?php

namespace App\Traits\Media;


use Illuminate\Support\Str;
use JetBrains\PhpStorm\ArrayShape;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

trait HasAvatar
{
    use InteractsWithMedia;

    private function getDefault(): string
    {
        return asset('assets/img/placeholder-avatar.jpg');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }
    public function getPreview(): string
    {
        $media=$this->getFirstMedia($this->getCollectionAvatar());
        if($media)
            return $media->getUrl('preview');

        return $this->getDefault();
    }
    public function getImage(): string
    {
        $media=$this->getFirstMedia($this->getCollectionAvatar());
        if($media)
            return asset('storage/'.Str::after($media->getFullUrl(),'storage/'));
        return $this->getDefault();
    }
    public function getImagePreview(): string
    {
        $media=$this->getFirstMedia($this->getCollectionAvatar());
        if($media)
            return $media->getUrl('preview');

        return $this->getDefault();
    }
    #[ArrayShape(['main' => "string", 'preview' => "string"])] public function getImageWithPreview(): array
    {
        $media=$this->getFirstMedia($this->getCollectionAvatar());
        if($media){
            return [
                'preview'=>asset('storage/'.Str::after($media->getFullUrl(),'storage/')),
                'thumbnail'=>$media->getUrl('preview')
            ];
        }

        return [
            'preview'=>$this->getDefault(),
            'thumbnail'=>$this->getDefault()
        ];
    }
}
