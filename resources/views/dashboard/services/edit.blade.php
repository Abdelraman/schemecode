@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.services')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.main')</a></li>
                <li><a href="{{ route('dashboard.services.index') }}">@lang('site.services')</a></li>
                <li class="active">@lang('site.edit')</li>
            </ol>
        </section>

        <section class="content">

            <form action="{{ route('dashboard.services.update', $service->id) }}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}
                {{ method_field('put') }}

                <div class="box box-primary">

                    <div class="box-header with-border">

                        <h3 class="box-title">@lang('site.edit')</h3>

                    </div><!-- end of box header -->

                    <div class="box-body ">

                        @include('dashboard.partials._errors')

                        {{--icon--}}
                        <div class="form-group">
                            <div role="iconpicker" data-icon="{{ $service->icon }}" data-iconset="fontawesome4" data-iconset-version="4.7.0" data-rows="5" data-cols="10" data-icon="" name="icon"></div>
                        </div>
                        
                        {{--title--}}
                        <div class="form-group">
                            <label>@lang('site.title')</label>
                            <input type="text" name="title" class="form-control" value="{{ $service->title }}">
                        </div>

                        {{--description--}}
                        <div class="form-group">
                            <label>@lang('site.description')</label>
                            <textarea name="description" class="form-control" rows="5">{{ $service->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> @lang('site.edit')</button>
                        </div>

                    </div><!-- end of box body -->

                </div><!-- end of box -->

            </form><!-- end of form -->

        </section>

    </div><!-- end of content wrapper -->

@endsection
