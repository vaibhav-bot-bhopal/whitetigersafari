<?php

namespace App\Repository\Event;

use App\Models\Event;
use App\Repository\Event\EventInterface;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\fileExists;

class EventRepository implements EventInterface
{
    public function getAllEvents()
    {
        // Show Event
        return Event::all();
    }

    public function storeEvent($data)
    {
        $image = Request::file('image');
        $images = Request::file('images');
        $newFiles = '';

        // Event Create

        if (fileExists($image)) {
            $newFile = time() . $image->getClientOriginalName();
            $image->storeAs('public/event_image', $newFile);
        }

        if (is_array($images)) {
            foreach ($images as $image) {
                $newImages = time() . $image->getClientOriginalName();
                $image->storeAs('public/event_images/', $newImages);
                $newFiles .= $newImages . ",";
            }
            $newFiles = rtrim($newFiles, ',');
        } else {
            $newFiles = "default.png";
        }

        $events = Event::create([
            'title' => Request::input('title'),
            'slug' => SlugService::createSlug(Event::class, 'slug', Request::input('title')),
            'date' => Request::input('date'),
            'time' => Request::input('time'),
            'place' => Request::input('place'),
            'description' => Request::input('description'),
            'image' => $newFile,
            'images' => $newFiles
        ]);

        $events->save();
        return $events;
    }

    public function getEvent($id)
    {
        // Event Edit
        return Event::find($id);
    }

    public function updateEvent($data, $id = null)
    {
        // Event Update
        $events = Event::find($id);
        $image = Request::file('image');
        $old_image = Request::input('h_image');

        if (is_null($image)) {
            $events->image = $old_image;
        } else {
            $name = $image->getClientOriginalName();
            $newImage = $events->image =  time() . $name;
            $image->storeAs('public/event_image', $newImage);
            $path = public_path() . "/storage/event_image/" . $old_image;
            unlink($path);
        }

        $events->update([
            'title' => Request::input('title'),
            // 'slug' => SlugService::createSlug(Event::class, 'slug', Request::input('title')),
            'date' => Request::input('date'),
            'time' => Request::input('time'),
            'place' => Request::input('place'),
            'description' => Request::input('description')
        ]);

        $events->update();
        return $events;
    }

    public function deleteEvent($id)
    {
        // Event Delete
        if (session('locale') == 'en') {
            $events = Event::where('id', $id)->first();

            if (!$events) {
                return redirect()->route('events.index')->with('error', 'Event not found !!');
            } else {
                Event::where('id', $id)->delete();
                $image = "/public/event_image/" . $events->image;
                if (Storage::exists($image)) {
                    Storage::delete($image);
                }

                $images = explode(",", $events->images);

                foreach ($images as $image) {
                    $images = "/public/event_images/" . $image;
                    if (Storage::exists($images)) {
                        Storage::delete($images);
                    }
                }
                return $events;
            }
        }
    }
}
