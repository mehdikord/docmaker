
@if(!empty($errors->all()))
<div class="alert alert-custom alert-danger fade show" role="alert">
    <div class="alert-icon"><i class="flaticon-warning"></i></div>
    <div class="alert-text">
        <h5>خطا !</h5>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="ki ki-close"></i></span>
        </button>
    </div>
</div>
@endif
