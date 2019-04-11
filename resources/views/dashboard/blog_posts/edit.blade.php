@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.blog_posts')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.main')</a></li>
                <li><a href="{{ route('dashboard.blog_posts.index') }}">@lang('site.blog_posts')</a></li>
                <li class="active">@lang('site.edit')</li>
            </ol>
        </section>

        <section class="content">

            <form action="{{ route('dashboard.blog_posts.update', $blog_post->id) }}" method="post" enctype="multipart/form-data">

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
                            <input type="text" name="title" class="form-control" value="{{ $blog_post->title }}">
                        </div>

                        {{--body--}}
                        <div class="form-group">
                            <label>@lang('site.body')</label>
                            <textarea name="body" class="form-control ckeditor">{{ $blog_post->body }}</textarea>
                        </div>

                        {{--image--}}
                        <div class="form-group">
                            <label>@lang('site.image')</label>
                            <input type="file" name="image" class="form-control image">
                        </div>

                        @if ($blog_post->image)
                            <div class="form-group">
                                <img src="{{ $blog_post->image_path }}" class="img-thumbnail" style="width: 100px;">
                            </div>
                        @endif

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> @lang('site.edit')</button>
                        </div>

                    </div><!-- end of box body -->

                </div><!-- end of box -->

            </form><!-- end of form -->

        </section>

    </div><!-- end of content wrapper -->

@endsection
