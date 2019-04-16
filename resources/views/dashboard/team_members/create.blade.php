@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.team_members')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.team_members.index') }}">@lang('site.team_members')</a></li>
                <li class="active">@lang('site.add')</li>
            </ol>
        </section>

        <section class="content">

            <form action="{{ route('dashboard.team_members.store') }}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}
                {{ method_field('post') }}

                <div class="box box-primary">

                    <div class="box-header with-border">

                        <h3 class="box-title">@lang('site.add')</h3>

                    </div><!-- end of box header -->

                    <div class="box-body ">

                        @include('dashboard.partials._errors')

                        {{--name--}}
                        <div class="form-group">
                            <label>@lang('site.name')</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        </div>

                        {{--title--}}
                        <div class="form-group">
                            <label>@lang('site.title')</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                        </div>

                        {{--description--}}
                        <div class="form-group">
                            <label>@lang('site.description')</label>
                            <textarea name="description" class="form-control" rows="5">{{ old('description') }}</textarea>
                        </div>

                        {{--image--}}
                        <div class="form-group">
                            <label>@lang('site.image')</label>
                            <input type="file" name="image" class="form-control image">
                        </div>

                        {{--facebook link--}}
                        <div class="form-group">
                            <label>@lang('site.facebook_link')</label>
                            <input type="text" name="facebook_link" class="form-control" value="{{ old('facebook_link') }}">
                        </div>

                        {{--twitter link--}}
                        <div class="form-group">
                            <label>@lang('site.twitter_link')</label>
                            <input type="text" name="twitter_link" class="form-control" value="{{ old('twitter_link') }}">
                        </div>

                        {{--linkedin link--}}
                        <div class="form-group">
                            <label>@lang('site.linkedin_link')</label>
                            <input type="text" name="linkedin_link" class="form-control" value="{{ old('linkedin_link') }}">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
                        </div>

                    </div><!-- end of box body -->

                </div><!-- end of box -->

            </form><!-- end of form -->

        </section>

    </div><!-- end of content wrapper -->

@endsection
