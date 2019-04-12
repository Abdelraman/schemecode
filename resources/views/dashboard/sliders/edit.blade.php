@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.sliders')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.main')</a></li>
                <li><a href="{{ route('dashboard.sliders.index') }}">@lang('site.sliders')</a></li>
                <li class="active">@lang('site.edit')</li>
            </ol>
        </section>

        <section class="content">

            <form action="{{ route('dashboard.sliders.update', $slider->id) }}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}
                {{ method_field('put') }}

                <div class="box box-primary">

                    <div class="box-header with-border">

                        <h3 class="box-title">@lang('site.edit')</h3>

                    </div><!-- end of box header -->

                    <div class="box-body ">

                        @include('dashboard.partials._errors')

                        {{--title--}}
                        <div class="form-group">
                            <label>@lang('site.title')</label>
                            <input type="text" name="title" class="form-control" value="{{ $slider->title }}">
                        </div>

                        {{--last_word--}}
                        <div class="form-group">
                            <label>@lang('site.last_word')</label>
                            <input type="text" name="last_word" class="form-control" value="{{ $slider->last_word }}">
                        </div>

                        {{--description--}}
                        <div class="form-group">
                            <label>@lang('site.description')</label>
                            <textarea name="description" class="form-control" rows="5">{{ $slider->description }}</textarea>
                        </div>

                        {{--image preview--}}
                        <div class="form-group">
                            <img src="{{ $slider->image_path }}" class="img-thumbnail" style="width: 100px" alt="">
                        </div>

                        {{--image--}}
                        <div class="form-group">
                            <label>@lang('site.image')</label>
                            <input type="file" name="image" class="form-control">
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
