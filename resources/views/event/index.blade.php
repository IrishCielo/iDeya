@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            Side bar
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Event Listings</div>
                    <div class="col-md-5">
                        <br>
                        <a class="btn btn-primary btn-block" href="" role="button">Create Event</a>
                    </div>
                <div class="card-body">
                    <table class="table table table-bordered table-striped .table-responsive">
                        <thead class="thead-dark">
                        <tr>
                            <th>Event Title</th>
                            <th>Event Type</th>
                            <th>Date</th>
                            <th>Event Budget</th>
                            <th>Number of Participants</th>
                            <th>Guest Speaker</th>                         
                            <th>Registration Fee</th>
                            <th>Number of Days</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $event)
                                <tr>
                                    <td> <a href="{{route('event.details', compact('event'))}}">{{$event->title}}</a> </td>
                                    <td> {{$event->eventType->name}} </td>
                                    <td> {{$event->date}} </td>
                                    <td> {{$event->eventbudget}} </td>
                                    <td> {{$event->eventParticipants->count()}} / {{$event->expected_no}} </td>
                                    <td> {{$event->guestspeaker}} </td>
                                    <td> {{$event->reg_fee}} </td>
                                    <td> {{$event->no_of_days}} </td>
                                    <td> {{$event->status}} </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
