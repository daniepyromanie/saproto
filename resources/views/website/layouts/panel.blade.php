@extends('website.layouts.content')

@section('container')

    <div id="container" class="container container-nobg">

        @if (Session::has('flash_message'))
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ Session::get('flash_message') }}
            </div>
        @endif

        @foreach($errors->all() as $e)
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ $e }}
            </div>
        @endforeach

        <div class="col-md-6 col-md-offset-3 col-xs-12 col-xs-offset-0">

            <div class="panel panel-default">
                <div class="panel-heading">
                    @section('panel-title')
                    @show
                </div>
                <div class="panel-body clearfix">
                    @section('panel-body')
                    @show
                </div>
                <div class="panel-footer clearfix">
                    @section('panel-footer')
                    @show
                </div>
            </div>

        </div>

    </div>

@endsection