<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Repository\Event\EventInterface;
use Illuminate\Support\Facades\View;

class EventController extends Controller
{
    protected $event;

    public function __construct(EventInterface $event)
    {
        $this->event = $event;
    }

    // Display Events from DB
    public function index()
    {
        $events = $this->event->getAllEvents();

        // Event Show
        if (View::exists('admin.event.index')) {
            return view('admin.event.index', compact('events'));
        }
    }

    // Add Events in DB
    public function create()
    {
        // Add Event
        if (View::exists('admin.event.create')) {
            return view('admin.event.create');
        } else {
            return view('errors.404');
        }
    }

    // Store Event Data in DB
    public function store(StoreEventRequest $request)
    {
        // Event Create
        $this->event->storeEvent($request->validated());
        return redirect()->route('events.index')->with('success', __('message.event-success'));
    }

    // Edit Event Data
    public function edit($id)
    {
        $events = $this->event->getEvent($id);

        // Event Edit
        if ($events) {
            return view('admin.event.edit', compact('events'));
        } else {
            return redirect()->route('events.index')->with('error', __('message.event-error'));
        }
    }

    // Update Event Data in DB
    public function update(UpdateEventRequest $request, $id)
    {
        // Event Update
        $this->event->updateEvent($request->validated(), $id);
        return redirect()->route('events.index')->with('success', __('message.event-update'));
    }

    // Delete Event from DB
    public function destroy($id)
    {
        // Event Delete
        $this->event->deleteEvent($id);
        return redirect()->route('events.index')->with('error', __('message.event-delete'));
    }
}
