@extends('layouts.manage')
@section('main_title')
    فروشگاه
@endsection
@section('sub_title')
    همه پروژه ها
@endsection
@section('content')
    <div class="row">
        <!--begin::Column-->
        @foreach($projects as $project)
        <div class="col-md-3">
            <!--begin::Card-->
            <div class="card card-custom gutter-b card-stretch">
                <!--begin::Body-->
                <div class="card-body text-center pt-4">

                    <div class="mt-7">
                        <div class="symbol symbol-circle symbol-lg-90">
                            <img src="@if(!empty($project->logo)) {{asset(\Illuminate\Support\Facades\Storage::url($project->logo))}} @else {{asset('assets/media/default/api-default.svg')}} @endif" alt="image" />
                        </div>
                    </div>
                    <!--end::User-->

                    <!--begin::Name-->
                    <div class="my-4">
                        <a href="#"
                           class="text-dark font-weight-bold text-hover-primary font-size-h4">{{$project->name}}</a>
                    </div>
                    <!--end::Name-->

                    <!--begin::Label-->
                    <span
                        class="btn btn-text btn-light-dark btn-sm">{{$project->user->name}}</span>
                    <!--end::Label-->

                    <!--begin::Buttons-->
                    <div class="mt-9">
                        <a href="{{route('panel_store_show',['slug'=>$project->slug])}}"
                           class="btn btn-light-primary font-weight-bolder btn-sm py-3 px-6 text-uppercase">مشاهده مستندات</a>
                    </div>
                    <!--end::Buttons-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
    @endforeach
        <!--end::Column-->
    </div>
@endsection
