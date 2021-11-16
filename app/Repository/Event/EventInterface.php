<?php

namespace App\Repository\Event;

interface EventInterface
{
    public function getAllEvents();
    public function storeEvent($data);
    public function getEvent($id);
    public function updateEvent($data, $id = null);
    public function deleteEvent($id);
}
