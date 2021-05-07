<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;

class GoogleCalendarController extends Controller
{
    //

    public function index(){

        $events = Event::get();
        return Inertia::render('GoogleComponent', [
            'events' => collect($events)->map(function ($event) {

                return [
                    'id' => $event->id,
                    'name' => $event->name,
                    'start' => $event->start->dateTime,
                    'end' => $event->end->dateTime,
                    'edit_url' =>route('event.edit', $event->id),
                ];
            }),
            'create_url' =>route('event.create'),
        ]);
    }
    public function create()
    {
        return Inertia::render('google/EventFormComponent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // Event::create([
        //     'name' => 'A new event from Laravel & vue3 with Inertia js',
        //     'startDateTime' => Carbon\Carbon::now(),
        //     'endDateTime' => Carbon\Carbon::now()->addHour(),
        //  ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
