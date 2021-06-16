@extends('layouts.manage')
@section('head')
    <style>
        .img-data{
            width: 40px !important;
            height: 40px !important;
            border-radius: 5px !important;
        }
    </style>
@endsection

@section('main_title')
   پروژه ها
@endsection
@section('sub_title')
    همه پروژه ها
@endsection

@section('content')
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
                    <i class="fas fa-user-tie text-primary"></i>
                </span>
                <h3 class="card-label">لیست همه پروژه ها </h3>
            </div>
            <div class="card-toolbar">

                <!--begin::Button-->
                <button data-toggle="modal" data-target="#add_new" href="#" class="btn btn-primary font-weight-bolder">
                    <i class="fas fa-user-plus"></i>
                    پروژه جدید
                </button>
                <div class="modal fade" id="add_new" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> افزودن پروژه جدید</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i aria-hidden="true" class="ki ki-close"></i>
                                </button>
                            </div>
                            <form action="{{route('management_project_store')}}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>نام پروژه</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text bg-light-primary"><i class="la la-file-text icon-lg text-primary"></i></span></div>
                                            <input value="{{old('name')}}" type="text" class="form-control" name="name" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>نامک</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text bg-light-primary"><i class="la la-file-text icon-lg text-primary"></i></span></div>
                                            <input value="{{old('slug')}}" type="text" class="form-control" name="slug" required />
                                        </div>
                                    </div>
                                    <div class="form-group text-left">
                                        <label>لینک اصلی</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text bg-light-primary"><i class="la la-file-text icon-lg text-primary"></i></span></div>
                                            <input value="{{old('url')}}}" type="text" class="form-control" name="url" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>تصویر لوگو‌</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text bg-light-primary"><i class="la la-image icon-lg text-primary"></i></span></div>
                                            <input type="file" class="form-control" name="logo"  />
                                        </div>
                                        <small class="text-danger">اختیاری</small>

                                    </div>
                                    <div class="form-group">
                                        <label>توضیحات پروژه</label>
                                        <textarea name="description" id="" class="form-control" rows="7">{{old('description')}}</textarea>
                                        <small class="text-danger">اختیاری</small>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">بستن</button>
                                    <button type="submit" class="btn btn-success font-weight-bold">افزودن پروژه</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end::Button-->
            </div>
        </div>
        <div class="card-body">
            <!--begin: Search Form-->
            <form class="kt-form kt-form--fit mb-15">

            </form>            <!--begin: Datatable-->
            @if(!count($projects))
                @include('management.component.no_data',['message'=>'هیچ پروژهی یافت نشد !'])
            @else
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>نام کامل</th>
                            <th>نامک</th>
                            <th>لینک اصلی</th>
                            <th>توضیحات</th>
                            <th>ابزار</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td>
                                    <img class="img-data mr-2" src="@if(!empty($project->logo)) {{asset(\Illuminate\Support\Facades\Storage::url($project->logo))}} @else {{asset('assets/media/default/api-default.svg')}} @endif" alt="">
                                    {{$project->name}}
                                </td>
                                <td>{{$project->slug}}</td>
                                <td dir="ltr" {{$project->url}}</td>
                                <td>{{$project->description}}</td>
                                <td class="text-center">
                                    <a href="{{route('management_project_show',['project'=>$project->id])}}"  title="مشاهده جزئیات" class="btn btn-icon btn-light-success btn-sm"><i class="fas fa-eye"></i></a>
                                    <button data-toggle="modal" data-target="#edit_{{$project->id}}"  title="ویرایش" class="btn btn-icon btn-light-primary btn-sm"><i class="flaticon2-edit"></i></button>
                                    <button onclick="delbrand({{$project->id}})" title="حذف"  class="btn btn-icon btn-light-danger mr-1 btn-sm"><i class="flaticon2-trash"></i></button>
                                    <div class="modal fade" id="edit_{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> ویرایش اطلاعات : {{$project->name}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <i aria-hidden="true" class="ki ki-close"></i>
                                                    </button>
                                                </div>
                                                <form action="{{route('management_project_update',['project'=>$project->id])}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group text-left">
                                                            <label>نام پروژه</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text bg-light-primary"><i class="la la-file-text icon-lg text-primary"></i></span></div>
                                                                <input value="{{$project->name}}" type="text" class="form-control" name="name" required />
                                                            </div>
                                                        </div>
                                                        <div class="form-group text-left">
                                                            <label>نامک</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text bg-light-primary"><i class="la la-file-text icon-lg text-primary"></i></span></div>
                                                                <input value="{{$project->slug}}" type="text" class="form-control" name="slug" required />
                                                            </div>
                                                        </div>
                                                        <div class="form-group text-left">
                                                            <label>لینک اصلی</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text bg-light-primary"><i class="la la-file-text icon-lg text-primary"></i></span></div>
                                                                <input value="{{$project->url}}" type="text" class="form-control" name="url" required />
                                                            </div>
                                                        </div>
                                                        <div class="form-group text-left">
                                                            <label>تصویر لوگو‌</label>
                                                            <div class="alert alert-warning" role="alert">
                                                                فقط در صورت ویرایش لوگو فعلی، فایل جدید را انتخاب کنید
                                                            </div>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text bg-light-primary"><i class="la la-image icon-lg text-primary"></i></span></div>
                                                                <input type="file" class="form-control" name="logo"  />
                                                                <small class="text-danger">اختیاری</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group text-left">
                                                            <label>توضیحات پروژه</label>
                                                            <textarea name="description" id="" class="form-control" rows="7">{{$project->description}}</textarea>
                                                            <small class="text-danger">اختیاری</small>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">بستن</button>
                                                        <button type="submit" class="btn btn-success font-weight-bold">ویرایش</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    {{$projects->links()}}

                </div>
            @endif

        </div>
    </div>

@endsection

@section('script')
    <script>
        function delbrand(id) {
            Swal.fire({
                title: 'آیا مطمئن هستید؟',
                text: "آیا مطمئن هستید پروژه مورد نظر حذف شود؟",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#1BC5BD',
                cancelButtonColor: '#F64E60',
                confirmButtonText: 'حذف شود',
                cancelButtonText: 'خیر'
            }).then((result) => {
                if (result.value) {
                    window.open('/management/projects/delete/'+id,'_self');
                }
            })

        }

    </script>

@endsection

