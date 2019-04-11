@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.team_members')
                <small>{{ $team_members->total() }} @lang('site.team_member')</small>
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                {{--<li><a href="#">Examples</a></li>--}}
                <li class="active">@lang('site.team_members')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title" style="margin-bottom: 10px">@lang('site.team_members')</h3>

                    <form action="{{ route('dashboard.team_members.index') }}" method="get">

                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="@lang('site.search')" value="{{ request()->search }}">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('site.search')</button>
                                @if (auth()->user()->hasPermission('create_team_members'))
                                    <a href="{{ route('dashboard.team_members.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</a>
                                @else
                                    <a href="#" disabled class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</a>
                                @endif
                            </div>

                        </div><!-- end of row -->

                    </form><!-- end of form -->

                </div><!-- end of box header -->

                @if ($team_members->count() > 0)

                    <div class="box-body table-responsive">

                        <table class="table table-hover">
                            <tr>
                                <th>@lang('site.image')</th>
                                <th>@lang('site.name')</th>
                                <th>@lang('site.description')</th>
                                <th>@lang('site.action')</th>
                            </tr>

                            @foreach ($team_members as $team_member)

                                <tr>
                                    <td><img src="{{ $team_member->image_path }}" style="width: 100px" class="img-thumbnail" alt=""></td>
                                    <td>{{ $team_member->name }}</td>
                                    <td>{{ $team_member->description }}</td>
                                    <td>
                                        @if (auth()->user()->hasPermission('update_team_members'))
                                            <a href="{{ route('dashboard.team_members.edit', $team_member->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> @lang('site.edit')</a>
                                        @else
                                            <a href="#" disabled class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> @lang('site.edit')</a>
                                        @endif

                                        @if (auth()->user()->hasPermission('delete_team_members'))
                                            <form action="{{ route('dashboard.team_members.destroy', $team_member->id) }}" method="post" style="display: inline-block;">
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

                        {{ $team_members->appends(request()->query())->links() }}

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
