@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.site_settings')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.main')</a></li>
                <li class="active">@lang('site.site_settings')</li>
            </ol>
        </section>

        <section class="content">

            <form action="{{ route('dashboard.site_settings.store') }}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}
                {{ method_field('post') }}

                <div class="box box-primary">

                    <div class="box-header with-border">

                        <h3 class="box-title">@lang('site.site_settings')</h3>

                    </div><!-- end of box header -->

                    <div class="box-body ">

                        @include('dashboard.partials._errors')

                        {{--name--}}
                        <div class="form-group">
                            <label>@lang('site.name')</label>
                            <input type="text" name="name" class="form-control" value="{{ setting('name') }}">
                        </div>

                            @if (setting('logo'))
                                <img src="{{ asset('uploads/' . setting('logo')) }}" class="img-thumbnail" style="width: 100px;" alt="">
                            @endif

                        {{--logo--}}
                        <div class="form-group">
                            <label>@lang('site.logo')</label>
                            <input type="file" name="logo" class="form-control">
                        </div>

                        {{--about--}}
                        <div class="form-group">
                            <label>@lang('site.about_us')</label>
                            <textarea name="about_us" class="form-control ckeditor">{{ setting('about_us') }}</textarea>
                        </div>

                        {{--email--}}
                        <div class="form-group">
                            <label>@lang('site.email')</label>
                            <input type="email" name="email" class="form-control" value="{{ setting('email') }}">
                        </div>

                        {{--phone--}}
                        <div class="form-group">
                            <label>@lang('site.phone')</label>
                            <input type="phone" name="phone" class="form-control" value="{{ setting('phone') }}">
                        </div>

                        {{--website--}}
                        <div class="form-group">
                            <label>@lang('site.website')</label>
                            <input type="text" name="website" class="form-control" value="{{ setting('website') }}">
                        </div>

                        {{--address--}}
                        <div class="form-group">
                            <label>@lang('site.address')</label>
                            <input type="text" name="address" class="form-control" value="{{ setting('address') }}">
                        </div>

                        {{--contact us description--}}
                        <div class="form-group">
                            <label>@lang('site.contact_us_description')</label>
                            <textarea name="contact_us_description" class="form-control ckeditor">{{ setting('contact_us_description') }}</textarea>
                        </div>

                        {{--google maps lng--}}
                        <div class="form-group">
                            <label>@lang('site.google_maps_api_key')</label>
                            <input type="text" name="google_maps_api_key" class="form-control" value="{{ setting('google_maps_api_key') }}">
                        </div>

                        {{--google maps lng--}}
                        <div class="form-group">
                            <label>@lang('site.google_maps_lng')</label>
                            <input type="text" name="google_maps_lng" class="form-control" value="{{ setting('google_maps_lng') }}">
                        </div>

                        {{--google maps lat--}}
                        <div class="form-group">
                            <label>@lang('site.google_maps_lat')</label>
                            <input type="text" name="google_maps_lat" class="form-control" value="{{ setting('google_maps_lat') }}">
                        </div>

                        {{--facebook link--}}
                        <div class="form-group">
                            <label>@lang('site.facebook_link')</label>
                            <input type="url" name="facebook_link" class="form-control" value="{{ setting('facebook_link') }}">
                        </div>

                        {{--twitter link--}}
                        <div class="form-group">
                            <label>@lang('site.twitter_link')</label>
                            <input type="url" name="twitter_link" class="form-control" value="{{ setting('twitter_link') }}">
                        </div>

                        {{--linkedin link--}}
                        <div class="form-group">
                            <label>@lang('site.linkedin_link')</label>
                            <input type="url" name="linkedin_link" class="form-control" value="{{ setting('linkedin_link') }}">
                        </div>

                    </div><!-- end of box body -->

                </div><!-- end of box -->

                <div class="box box-primary">

                    <div class="box-header with-border">

                        <h3 class="box-title">@lang('site.seo')</h3>

                    </div><!-- end of box header -->

                    <div class="box-body ">

                        {{--meta title--}}
                        <div class="form-group">
                            <label>Meta title</label>
                            <input type="text" name="meta_title" class="form-control" value="{{ setting('meta_title') }}">
                        </div>

                        {{--meta keywords--}}
                        <div class="form-group">
                            <label>Meta Keywords (comma separated)</label>
                            <textarea name="meta_keywords" class="form-control">{{ setting('meta_keywords') }}</textarea>
                        </div>

                        {{--meta description--}}
                        <div class="form-group">
                            <label>Meta Description</label>
                            <textarea name="meta_description" class="form-control">{{ setting('meta_description') }}</textarea>
                        </div>

                        @if (setting('og_image'))
                            <img src="{{ asset('uploads/' . setting('og_image')) }}" class="img-thumbnail" style="width: 100px;" alt="">
                        @endif

                        {{--og image--}}
                        <div class="form-group">
                            <label>Social Media Image (used when some one share your link)</label>
                            <input type="file" name="og_image" class="form-control">
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