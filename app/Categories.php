<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function setImageAttribute($image)
    {
        if (isset($this->attributes['img'])) {
            $file = public_path() . DIRECTORY_SEPARATOR . $this->attributes['img'];
            if (file_exists($file)) {
                @unlink($file);
            }
        }
        if (empty($image)) {
            $this->attributes['img'] = NULL;
        }
        else {
            $this->attributes['img'] = $image;
            $file = public_path() . DIRECTORY_SEPARATOR . $image;
            $img = \Image::make($file);
            $img->resize(400, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->save($file, 100);
        }
    }
}
