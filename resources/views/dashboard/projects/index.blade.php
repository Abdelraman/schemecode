@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.projects')
                <small>{{ $projects->total() }} @lang('site.projects')</small>
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.main')</a></li>
                <li class="active">@lang('site.projects')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title" style="margin-bottom: 10px">@lang('site.projects')</h3>

                    <form action="{{ route('dashboard.projects.index') }}" method="get">

                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="@lang('site.search')" value="{{ request()->search }}">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>
                                <a href="{{ route('dashboard.projects.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</a>
                            </div>

                        </div><!-- end of row -->

                    </form><!-- end of form -->

                </div><!-- end of box header -->

                @if ($projects->count() > 0)

                    <div class="box-body table-responsive">

                        <table class="table table-hover">
                            <tr>
                                <th>@lang('site.title')</th>
                                <th>@lang('site.description')</th>
                                <th>@lang('site.link')</th>
                                <th>@lang('site.image')</th>
                            </tr>

                            @foreach ($projects as $project)

                                <tr>
                                    <td>{{ $project->title }}</td>
                                    <td>{{$project->description}}</td>
                                    <td>{{ $project->link }}</td>
                                    <td><img src="{{ $project->image_path }}" style="width: 100px" class="img-thumbnail" alt=""></td>
                                    <td>
                                        <a href="{{ route('dashboard.projects.edit', $project->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> @lang('site.edit')</a>
                                        <form action="{{ route('dashboard.projects.destroy', $project->id) }}" method="post" style="display: inline-block;">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i> @lang('site.delete')</button>
                                        </form>
                                    </td>
                                </tr>

                            @endforeach

                        </table><!-- end of table -->

                        {{ $projects->appends(request()->query())->links() }}

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
