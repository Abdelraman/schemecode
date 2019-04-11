@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.contact_us_requests')
                <small>{{ $contact_us_requests->total() }} @lang('site.contact_us_request')</small>
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                {{--<li><a href="#">Examples</a></li>--}}
                <li class="active">@lang('site.contact_us_requests')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title" style="margin-bottom: 10px">@lang('site.contact_us_requests')</h3>

                    <form action="{{ route('dashboard.contact_us_requests.index') }}" method="get">

                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="@lang('site.search')" value="{{ request()->search }}">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>
                            </div>

                        </div><!-- end of row -->

                    </form><!-- end of form -->

                </div><!-- end of box header -->

                @if ($contact_us_requests->count() > 0)

                    <div class="box-body table-responsive">

                        <table class="table table-hover">
                            <tr>
                                <th>@lang('site.image')</th>
                                <th>@lang('site.name')</th>
                                <th>@lang('site.description')</th>
                                <th>@lang('site.action')</th>
                            </tr>

                            @foreach ($contact_us_requests as $contact_us_request)

                                <tr>
                                    <td><img src="{{ $contact_us_request->image_path }}" style="width: 100px" class="img-thumbnail" alt=""></td>
                                    <td>{{ $contact_us_request->name }}</td>
                                    <td>{{ $contact_us_request->description }}</td>
                                    <td>
                                        @if (auth()->user()->hasPermission('update_contact_us_requests'))
                                            <a href="{{ route('dashboard.contact_us_requests.edit', $contact_us_request->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> @lang('site.edit')</a>
                                        @else
                                            <a href="#" disabled class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> @lang('site.edit')</a>
                                        @endif

                                        @if (auth()->user()->hasPermission('delete_contact_us_requests'))
                                            <form action="{{ route('dashboard.contact_us_requests.destroy', $contact_us_request->id) }}" method="post" style="display: inline-block;">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i> @lang('site.delete')</button>
                                            </form>

                                        @else
                                            <a href="#" class="btn btn-danger btn-sm" disabled><i class="fa fa-trash"></i> @lang('site.delete')</a>
                                        @endif

                                    </td>
                                </tr>

                            @endforeach

                        </table><!-- end of table -->

                        {{ $contact_us_requests->appends(request()->query())->links() }}

                    </div>

                @else

                    <div class="box-body">
                        <h3>@lang('site.no_records')</h3>
                    </div>

                @endif

            </div><!-- end of box -->

        </section>

    </div><!-- end of content wrapper -->

@endsection
