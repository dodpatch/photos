<?php
namespace App\Repositories;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;


class ImageRepository extends BaseRepository
{
	public function __construct(Image $image){

    $this->model = $image;
	}
}