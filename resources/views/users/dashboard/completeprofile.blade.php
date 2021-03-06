@extends('website.layouts.panel')

@section('page-title')
    Complete membership profile
@endsection

@section('panel-title')
    Complete membership profile
@endsection

@section('panel-body')

    <form method="POST" action="{{ route('user::memberprofile::complete') }}">

        {!! csrf_field() !!}

        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label for="birthdate" class="control-label">Birthdate</label>
                    <input type="text" class="form-control datetime-picker" id="birthdate" name="birthdate"
                           placeholder="2011-04-20" required>
                    <sup>Cannot be changed afterwards</sup>
                </div>
                <div class="col-md-6">
                    <label for="gender" class="control-label">Gender</label>
                    <select id="gender" name="gender" class="form-control" required>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        <option value="9">More complicated</option>
                    </select>
                    <sup>Cannot be changed afterwards</sup>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label for="nationality" class="control-label">Nationality</label>
                    <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Dutch"
                           required>
                    <sup>Cannot be changed afterwards</sup>
                </div>
                <div class="col-md-6">
                    <label for="phone" class="control-label">Phone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="+31534894423" required>
                    <sup>Can only be updated, not removed</sup>
                </div>
            </div>
        </div>
        @endsection

        @section('panel-footer')
            <button type="submit" class="btn btn-success pull-right">Complete profile</button>

    </form>
@endsection

@section('javascript')

    @parent

    <script type="text/javascript">
        // Initializes datetimepickers for consistent options
        $('.datetime-picker').datetimepicker({
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                next: "fa fa-chevron-right",
                previous: "fa fa-chevron-left"
            },
            format: 'YYYY-MM-DD'
        });
    </script>

@endsection
