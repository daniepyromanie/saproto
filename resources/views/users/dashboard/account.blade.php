<div class="panel panel-default">
    <div class="panel-heading">
        <strong>Account information</strong>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" method="post" action="{{ route("user::dashboard", ["id" => $user->id]) }}">

            {!! csrf_field() !!}

            <div class="form-group">
                <label for="name_first" class="col-sm-4 control-label">Name</label>

                <div class="col-sm-8 control-label" style="text-align: left;">{{ $user->name }}</div>
            </div>

            <div class="form-group">
                <label for="name_first" class="col-sm-4 control-label">Bio Gender</label>

                <div class="col-sm-8 control-label" style="text-align: left;">
                    @if($user->gender == 1)
                        Male
                    @elseif($user->gender == 2)
                        Female
                    @elseif($user->gender == 0)
                        Unknown
                    @elseif($user->gender == 9)
                        Not applicable
                    @else
                        Invalid gender value
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="name_first" class="col-sm-4 control-label">Birthday</label>

                <div class="col-sm-8 control-label"
                     style="text-align: left;">{{ date('F j, Y', strtotime($user->birthdate)) }}</div>
            </div>

            <div class="form-group">
                <label for="name_first" class="col-sm-4 control-label">Nationality</label>

                <div class="col-sm-8 control-label" style="text-align: left;">{{ $user->nationality }}</div>
            </div>

            <hr>

            <div class="form-group">
                <label for="email" class="col-sm-4 control-label">E-mail</label>

                <div class="col-sm-8">
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}"
                           required>

                    <div class="checkbox">
                        <label>
                            <input name="receive_newsletter"
                                   type="checkbox" {{ ($user->receive_newsletter == 1 ? 'checked' : '') }}>
                            Receive the newsletter
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="phone" class="col-sm-4 control-label">Phone</label>

                <div class="col-sm-8">
                    <input type="phone" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">

                    <div class="checkbox">
                        <label>
                            <input name="phone_visible"
                                   type="checkbox" {{ ($user->phone_visible == 1 ? 'checked' : '') }}>
                            Show to members
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="receive_sms" type="checkbox" {{ ($user->receive_sms == 1 ? 'checked' : '') }}>
                            Receive text messages
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="website" class="col-sm-4 control-label">Homepage</label>

                <div class="col-sm-8">
                    <input type="text" class="form-control" id="website" name="website" value="{{ $user->website }}">
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-4 control-label">New Password</label>

                <div class="col-sm-8">
                    <input type="password" class="form-control" id="newpassword" name="newpassword">
                    <input type="password" class="form-control" id="newpassword2" name="newpassword2">
                </div>
            </div>

            <div class="form-group">
                <label for="old_pass" class="col-sm-4 control-label">Password</label>

                <div class="col-sm-8">
                    <input type="password" class="form-control" id="old_pass" name="old_pass"
                           placeholder="For changing e-mail or password">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-8 col-md-offset-4">
                    <div class="btn-group btn-group-justified" role="group">
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-primary">
                                Update account
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <strong>Membership</strong>
    </div>
    <div class="panel-body">
        <p style="text-align: center;">
            @if($user->member == null)
                You are not a member of {{ config('association.name') }}.
            @else
                You have been a member of {{ config('association.name') }}
                as of {{ date('F j, Y', strtotime($user->member->created_at)) }}.
            @endif
        </p>
        @if($user->member != null && $user->member->till != null)
            <p style="text-align: center;">
                Your membership will end on {{ date('F j, Y', strtotime($user->member->till)) }}.
            </p>
        @endif
    </div>
</div>