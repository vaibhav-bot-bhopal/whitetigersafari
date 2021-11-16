<?php

namespace App\Repository\News;

use App\Models\News;
use App\Repository\News\NewsInterface;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\fileExists;

class NewsRepository implements NewsInterface
{
    public function getAllNewses()
    {
        // Show All Newses
        return News::all();
    }

    public function storeNews($data)
    {
        $image = Request::file('image');
        $images = Request::file('images');
        $newFiles = '';

        // Create News
        if (fileExists($image)) {
            $newFile = time() . $image->getClientOriginalName();
            $image->storeAs('public/news_image', $newFile);
        }

        if (is_array($images)) {
            foreach ($images as $image) {
                $newImages = time() . $image->getClientOriginalName();
                $image->storeAs('public/news_images/', $newImages);
                $newFiles .= $newImages . ",";
            }
            $newFiles = rtrim($newFiles, ',');
        }

        $newses = News::create([
            'title' => Request::input('title'),
            'slug' => SlugService::createSlug(News::class, 'slug', Request::input('title')),
            'date' => Request::input('date'),
            'description' => Request::input('description'),
            'image' => $newFile,
            'images' => $newFiles
        ]);

        $newses->save();
        return $newses;
    }

    public function getNews($id)
    {
        // Edit News
        return News::find($id);
    }

    public function updateNews($data, $id = null)
    {
        // Update News
        $newses = News::find($id);
        $image = Request::file('image');
        $old_image = Request::input('h_image');

        if (is_null($image)) {
            $newses->image = $old_image;
        } else {
            $name = $image->getClientOriginalName();
            $newImage = $newses->image =  time() . $name;
            $image->storeAs('public/news_image', $newImage);
            $path = public_path() . "/storage/news_image/" . $old_image;
            unlink($path);
        }

        $newses->update([
            'title' => Request::input('title'),
            // 'slug' => SlugService::createSlug(News::class, 'slug', Request::input('title')),
            'date' => Request::input('date'),
            'description' => Request::input('description')
        ]);

        $newses->update();
        return $newses;
    }

    public function deleteNews($id)
    {
        // Delete News
        $newses = News::where('id', $id)->first();

        if (!$newses) {
            return redirect()->route('newses.index')->with('error', 'News not found !!');
        } else {
            News::where('id', $id)->delete();
            $image = "/public/news_image/" . $newses->image;
            if (Storage::exists($image)) {
                Storage::delete($image);
            }

            $images = explode(",", $newses->images);

            foreach ($images as $image) {
                $images = "/public/news_images/" . $image;
                if (Storage::exists($images)) {
                    Storage::delete($images);
                }
            }
            return $newses;
        }
    }
}
