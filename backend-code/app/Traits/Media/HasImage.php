<?php

namespace App\Traits\Media;


use Illuminate\Support\Str;
use JetBrains\PhpStorm\ArrayShape;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

trait HasImage
{
    use InteractsWithMedia;

    private function getDefault(): string
    {
        return asset('assets/img/placeholder-course.jpg');
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
        $media=$this->getFirstMedia($this->getCollectionImage());
        if($media)
            return $media->getUrl('preview');

        return $this->getDefault();
    }
    public function getPath(): string
    {
        $media=$this->getFirstMedia($this->getCollectionImage());
        return $media->getPath();
    }
    public function getImage(): string
    {

        $media=$this->getFirstMedia($this->getCollectionImage());
        if($media)
            return asset('storage/'.Str::after($media->getFullUrl(),'storage/'));
        return $this->getDefault();
    }
    public function getImagePreview(): string
    {
        $media=$this->getFirstMedia($this->getCollectionImage());
        if($media)
            return $media->getUrl('preview');

        return $this->getDefault();
    }
    #[ArrayShape(['main' => "string", 'preview' => "string"])] public function getImageWithPreview(): array
    {
        $media=$this->getFirstMedia($this->getCollectionImage());
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
    public function getImageResource(): array
    {
        $media = $this->getMedia($this->getCollectionImage());
        return $media->transform(function (Media $item){
            return array_merge([
                'size'=>$item->getHumanReadableSizeAttribute(),
                'extension'=>$item->getExtensionAttribute(),
                'date'=>$item->created_at->format('M d Y'),
                'name'=>$item->name
            ],$this->getImageWithPreview());
        })->first();
    }
}
