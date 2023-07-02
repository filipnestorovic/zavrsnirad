@extends('admin.adminTemplate')
@section('content')
    <nav class="breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Event</li>
        </ol>
    </nav>
    <div class="mb-4 wow fadeIn">
        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">
            <div class="col-xl-4 col-md-12">
                <form action="{{ route('addEvent') }}" id="formEvent" method="post">
                    {{ csrf_field() }}
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-header text-center font-weight-bold text-uppercase py-3">Add event</h5>
                            <div class="md-form input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Event</span>
                                </div>
                                <input type="text" name="event_name" id="event_name" class="form-control" data-value="event_name" value="" required="">
                            </div>
                            <div class="md-form input-group input-group-sm mb-3">
                                <button type="submit" id="addBrandButton" class="btn btn-primary btn-lg btn-block">Add event</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-8 col-md-12">
                <div class="card">
                    <h5 class="card-header text-center font-weight-bold text-uppercase py-3">
                    </h5>
                    <div class="card-body">
                        <div id="tableEvent" class="table-editable">
                            <table class="table table-bordered table-responsive-sm table-striped text-center">
                                <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Event</th>
                                    <th class="text-center"></th>
                                </tr>
                                </thead>
                                <tbody id="tableEventBody">
                                @isset($events)
                                    @foreach($events as $event)
                                        <tr>
                                            <td class="pt-3-half">{{$event->id_event}}</td>
                                            <td class="pt-3-half">{{$event->event_name}}</td>
                                            <td>
                                                <span class="table-edit"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 editEventBtn" data-toggle="modal" data-target="#editEvent" value="{{$event->id_event}}">EDIT</button></span>
                                                <span class="table-remove"><a href="{{ route('deleteEvent',['id' => $event->id_event]) }}"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 deleteEventBtn">DELETE</button></a></span>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editEvent" tabindex="-1" role="dialog" aria-labelledby="editEventForm" aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="editCouponTitle">Edit Coupon</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editEventForm" action="{{ route('editEvent') }}" method="POST" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <input type="hidden" name="eventIdModal" id="eventIdModal" value=""/>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Event</span>
                            </div>
                            <input type="text" name="eventNameModal" id="eventNameModal" class="form-control" data-value="eventNameModal" value="" autocomplete="off">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm waves-effect">Edit event</button>
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <style>
        #tableEventBody td {
            vertical-align: middle;
        }
    </style>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.editEventBtn').click(function(){
                let id = $(this).val();
                $.ajax({
                    type: "GET",
                    url: baseURL + "getEvent/" + parseInt(id),
                    dataType: 'json',
                    success: function (data) {
                        $('#eventIdModal').val(data.id_event);
                        $('#eventNameModal').val(data.event_name);
                    },
                    error: function (req, err) {
                        console.log(req);
                    }
                })
            });
            $('.deleteEventBtn').click(function () {
                return confirm('Are you sure that you want to delete event?');
            });
        });
    </script>
@endsection
