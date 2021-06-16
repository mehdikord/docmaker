@extends('layouts.manage')
@section('head')
    <style>
        pre{
            border-radius: 7px!important;
        }
    </style>
@endsection
@section('main_title')
    پروژه ها
@endsection
@section('sub_title')
    {{$project->name}}
@endsection

@section('content')
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container-fluid ">
            <!--begin::Chat-->
            <div class="d-flex flex-row">
                <!--begin::Aside-->
                <div class="flex-row-auto offcanvas-mobile w-350px w-xl-400px" id="kt_chat_aside">
                    <!--begin::Card-->
                    <div class="card card-custom">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin:Search-->
                            <div class="input-group">
                                <button data-toggle="modal" data-target="#add_new_folder" class="btn btn-outline-primary btn-sm mr-3"><i class="fas fa-folder-plus"></i> پوشه جدید</button>
                                <div class="modal fade" id="add_new_folder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"> افزودن پوشه جدید</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <form action="{{route('management_project_add_folder',['project'=>$project->id])}}" method="post">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>نام پوشه</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text bg-light-primary"><i class="la la-file-text icon-lg text-primary"></i></span></div>
                                                            <input value="{{old('name')}}" type="text" class="form-control" name="name" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">بستن</button>
                                                    <button type="submit" class="btn btn-success font-weight-bold">افزودن پوشه</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <button data-toggle="modal" data-target="#add_new_url" class="btn btn-outline-success btn-sm mr-3"><i class="fas fa-plus"></i> درخواست جدید</button>
                                <div class="modal fade" id="add_new_url" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"> افزودن درخواست جدید</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <form action="{{route('management_project_add_url',['project'=>$project->id])}}" method="post">
                                                @csrf
                                                <div class="modal-body form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>انتخاب پوشه</label>
                                                        <div class="input-group">
                                                            <select name="folder_id" class="form-control" id="">
                                                                <option ></option>
                                                                @foreach($project->folders as $ch_folder)
                                                                    <option value="{{$ch_folder->id}}">{{$ch_folder->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>عنوان درخواست</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text bg-light-primary"><i class="la la-file-text icon-lg text-primary"></i></span></div>
                                                            <input value="{{old('title')}}" type="text" class="form-control" name="title" required />
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>آدرس</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text bg-light-primary"><i class="la la-file-text icon-lg text-primary"></i></span></div>
                                                            <input value="{{old('url')}}" type="text" class="form-control" name="url" required />
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>نوع درخواست</label>
                                                        <div class="input-group">
                                                            <select name="url_method" class="form-control" id="">
                                                                <option value="get">GET</option>
                                                                <option value="post">POST</option>
                                                                <option value="put">PUT</option>
                                                                <option value="path">PATH</option>
                                                                <option value="delete">DELETE</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>توضیحات</label>
                                                        <div class="input-group">
                                                            <textarea name="description" id="" rows="3" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <span class="float-left"><h6 class="text-info">مقادیر ارسالی</h6></span>
                                                        <span class="float-right"><button type="button" class="btn btn-sm btn-success add-option"><i class="fas fa-plus"></i> افزودن</button></span>
                                                    </div>
                                                    <div class="form-group col-md-12 new-options">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>پاسخ سرور ( Response )</label>
                                                        <div class="input-group">
                                                            <textarea name="url_response" id="" rows="5" dir="ltr" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">بستن</button>
                                                    <button type="submit" class="btn btn-success font-weight-bold">افزودن درخواست</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--end:Search-->
                            <hr>

                            <!--begin:Users-->
                            <div class="mt-7 scroll scroll-pull">
                                @foreach($project->folders as $folder)
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex flex-column">
                                                <a data-toggle="collapse" href="#collapse_folder_{{$folder->id}}" role="button" aria-expanded="false" aria-controls="collapse_folder_{{$folder->id}}" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg"><i class="fas fa-folder fa-2x text-primary"></i> {{$folder->name}}</a>
                                            </div>
                                        </div>
                                        <div class="d-flex  align-items-end">
                                            <span class="label label-sm label-dark">{{$folder->urls()->count()}} </span><i onclick="delfolder({{$folder->id}})" class="fas fa-trash text-danger ml-2"></i>
                                        </div>

                                    </div>
                                    <div class="collapse @if(!empty(request('folder')) && request('folder') == $folder->id) show @endif " id="collapse_folder_{{$folder->id}}">
                                        <div class="card card-body p-4 mb-3">
                                            @foreach($folder->urls as $url)
                                               <div class="@if(request('req') == $url->id) bg-light-primary p-1 @endif">
                                                   {!! url_method_badge($url->method) !!}
                                                   <a class="ml-2 text-dark " href="{{route('management_project_show',['project'=>$project->id])}}?folder={{$folder->id}}&req={{$url->id}}">{{$url->title}}</a>
                                               </div>
                                                @if(!$loop->last)
                                                    <hr>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                                @if($project->urls()->whereNull('folder_id')->exists())
                                        @foreach($project->urls()->whereNull('folder_id')->get() as $url)
                                            <div class="@if(request('req') == $url->id) bg-light-primary p-1 @endif">
                                                {!! url_method_badge($url->method) !!}
                                                <a class="ml-2 text-dark" href="{{route('management_project_show',['project'=>$project->id])}}?req={{$url->id}}">{{$url->title}}</a>
                                            </div>
                                            @if(!$loop->last)
                                                <hr>
                                            @endif
                                        @endforeach
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-row-fluid ml-lg-8" id="kt_chat_content">
                    <div class="card card-custom">
                        @if(!empty(request('req')) && !empty(get_url_with_id(request('req'))))
                            @php
                                $req = get_url_with_id(request('req'));
                            @endphp
                        <div class="card-header align-items-center px-4 py-3">
                            <div class=" flex-grow-1">
                                <div class="text-dark-75 font-weight-bold font-size-h5">
                                    {{$req->title}}
                                    <span class="float-right">
                                        <button data-toggle="modal" data-target="#req_edit_{{$req->id}}" class="btn btn-primary">ویرایش درخواست‌ <i class="fas fa-edit"></i></button>
                                        <button onclick="delreq({{$req->id}})" class="btn btn-danger"> حذف <i class="fas fa-trash"></i></button>
                                    </span>
                                    <div class="modal fade" id="req_edit_{{$req->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> افزودن درخواست جدید</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <i aria-hidden="true" class="ki ki-close"></i>
                                                    </button>
                                                </div>
                                                <form action="{{route('management_project_update_url',['url'=>$req->id])}}" method="post">
                                                    @csrf
                                                    <div class="modal-body form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>انتخاب پوشه</label>
                                                            <div class="input-group">
                                                                <select name="folder_id" class="form-control" id="">
                                                                    <option ></option>
                                                                    @foreach($project->folders as $ch_folder)
                                                                        <option @if($req->folder_id == $ch_folder->id) selected @endif value="{{$ch_folder->id}}">{{$ch_folder->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>عنوان درخواست</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text bg-light-primary"><i class="la la-file-text icon-lg text-primary"></i></span></div>
                                                                <input value="{{$req->title}}" type="text" class="form-control" name="title" required />
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>آدرس</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text bg-light-primary"><i class="la la-file-text icon-lg text-primary"></i></span></div>
                                                                <input value="{{$req->url}}" type="text" class="form-control" name="url" required />
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-6"> @if($req->method == 'get') selected @endif
                                                            <label>نوع درخواست</label>
                                                            <div class="input-group">
                                                                <select name="url_method" class="form-control" id="">
                                                                    <option @if($req->method == 'get') selected @endif value="get">GET</option>
                                                                    <option @if($req->method == 'post') selected @endif value="post">POST</option>
                                                                    <option @if($req->method == 'put') selected @endif value="put">PUT</option>
                                                                    <option @if($req->method == 'path') selected @endif value="path">PATH</option>
                                                                    <option @if($req->method == 'delete') selected @endif value="delete">DELETE</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>توضیحات</label>
                                                            <div class="input-group">
                                                                <textarea name="description" id="" rows="3" class="form-control">{{$req->description}}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <span class="float-left"><h6 class="text-info">مقادیر ارسالی</h6></span>
                                                            <span class="float-right"><button type="button" class="btn btn-sm btn-success add-option"><i class="fas fa-plus"></i> افزودن</button></span>
                                                        </div>
                                                        @if(count($req->params))
                                                            @foreach($req->params as $edit_param)
                                                                <div class="input-group my-1 col-md-12">
                                                                    <input type="text" name="val_name[]" placeholder="نام" value="{{$edit_param->name}}" class="form-control">
                                                                    <select title="نوع مقدار" class="form-control" name="val_type[]" id="">
                                                                        <option @if($edit_param->type == 'string') selected @endif value="string">string</option>
                                                                        <option @if($edit_param->type == 'int') selected @endif value="int">int</option>
                                                                        <option @if($edit_param->type == 'bool') selected @endif value="bool">bool</option>
                                                                        <option @if($edit_param->type == 'array') selected @endif value="array">array</option>
                                                                        <option @if($edit_param->type == 'file') selected @endif value="file">file</option>
                                                                        <option @if($edit_param->type == 'timestamp') selected @endif value="timestamp">timestamp</option>
                                                                    </select>
                                                                    <select title="اجباری است ؟" class="form-control" name="val_required[]" id="">
                                                                        <option @if($edit_param->required == 1) selected @endif value="1">اجباری</option>
                                                                        <option @if($edit_param->required == 0) selected @endif value="0">غیر اجباری</option>
                                                                    </select>
                                                                    <input type="text" name="val_description[]" class="form-control" placeholder="توضیح" value="{{$edit_param->description}}"/>
                                                                    <button type="button" class="mr-2 btn btn-danger remove-option">حذف</button>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                        <div class="form-group col-md-12 new-options">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>پاسخ سرور ( Response )</label>
                                                            <div class="input-group">
                                                                <textarea name="url_response" id="" rows="5" dir="ltr" class="form-control">{{$req->response}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">بستن</button>
                                                        <button type="submit" class="btn btn-primary font-weight-bold">ویرایش درخواست</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="scroll scroll-pull" data-mobile-height="350">
                                <div class="messages">
                                    @if(!empty($req->description))
                                        <div class="alert alert-custom alert-dark" role="alert">
                                            <div class="alert-icon"><i class="fas fa-info-circle"></i></div>
                                            <div class="alert-text">{{$req->description}}</div>
                                        </div>
                                    @endif
                                        <div class="card card-custom">
                                            <div class="card-header ribbon ribbon-clip ribbon-right  {{url_method_badge_bg_color($req->method)}}">
                                                <div class="ribbon-target" style="top: 15px; height: 45px;">
                                                    <span class="ribbon-inner {{url_method_badge_color($req->method)}}"></span><span class="font-14 text-bold-3">{{strtoupper($req->method)}}</span>
                                                </div>
                                                <h5 class="card-title">
                                                    {{$req->url}}
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="mt-10 mb-5">
                                            <h5 dir="ltr" class="text-right text-danger">Url Params : </h5>
                                        </div>
                                        @if(count($req->params))
                                        <table dir="ltr" class="table">
                                            <thead class="{{url_method_badge_bg_color($req->method)}} text-dark text-right">
                                                <th>name</th>
                                                <th>type</th>
                                                <th>required</th>
                                                <th>description</th>
                                            </thead>
                                            <tbody>
                                                @foreach($req->params as $param)
                                                    <tr class="text-right">
                                                        <td class="font-13 text-bold-2">{{$param->name}}</td>
                                                        <td><span class="badge {{param_type_bg_color($param->type)}} p-2 font-12">{{$param->type}}</span></td>
                                                        <td>
                                                            @if($param->required == 1)
                                                                <i class="fas fa-check text-success fa-2x"></i>
                                                            @else
                                                                <i class="fas fa-times text-danger fa-2x"></i>

                                                            @endif
                                                        </td>
                                                        <td>{{$param->description}}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @else
                                            <div class="alert alert-custom alert-light-primary fade show mb-5" role="alert">
                                                <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                                <div class="alert-text">نیازی به مقادیر ارسالی ندارد !</div>
                                                <div class="alert-close">

                                                </div>
                                            </div>
                                        @endif
                                        <div class="mt-10 mb-5">
                                            <h5 dir="ltr" class="text-right text-danger">Url Response : </h5>
                                        </div>
                                        <div>
                                            @if(!empty($req->response))
                                            <pre class="text-right p-4 font-13 bg-light-primary json-area" dir="ltr"  id="json-container"></pre>
                                            <script>
                                                const data = {!! $req->response !!}

                                                document.getElementById('json-container').innerHTML = JSON.stringify(data, null, 2);
                                            </script>
                                            @endif
                                        </div>
                                </div>
                            </div>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        var optionCounter=1;
        $('.add-option').click(function() {
            $('.new-options').append(`
        <div class="input-group my-1 col-md-12">
            <input type="text" name="val_name[]" placeholder="نام" class="form-control">
            <select title="نوع مقدار" class="form-control" name="val_type[]" id="">
                <option value="string">string</option>
                <option value="int">int</option>
                <option value="bool">bool</option>
                <option value="array">array</option>
                <option value="file">file</option>
                <option value="timestamp">timestamp</option>
            </select>
             <select title="اجباری است ؟" class="form-control" name="val_required[]" id="">
                <option value="1">اجباری</option>
                <option value="0">غیر اجباری</option>
            </select>
            <input type="text" name="val_description[]" class="form-control" placeholder="توضیح"/>
            <button type="button" class="mr-2 btn btn-danger remove-option">حذف</button>
        </div>
        `);
            optionCounter++;
        });
        $(document).on('click', '.remove-option', function (){
            $(this).closest('.input-group').remove();
        });
        function delreq(id) {
            Swal.fire({
                title: 'آیا مطمئن هستید؟',
                text: "آیا مطمئن هستید درخواست مورد نظر حذف شود؟",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#1BC5BD',
                cancelButtonColor: '#F64E60',
                confirmButtonText: 'حذف شود',
                cancelButtonText: 'خیر'
            }).then((result) => {
                if (result.value) {
                    window.open('/management/projects/delete/url/'+id,'_self');
                }
            })

        }
        function delfolder(id) {
            Swal.fire({
                title: 'آیا مطمئن هستید؟',
                text: "آیا مطمئن هستید پوشه مورد نظر با همه محتویات حذف شود؟",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#1BC5BD',
                cancelButtonColor: '#F64E60',
                confirmButtonText: 'حذف شود',
                cancelButtonText: 'خیر'
            }).then((result) => {
                if (result.value) {
                    window.open('/management/projects/delete/folder/'+id,'_self');
                }
            })

        }
    </script>
@endsection
