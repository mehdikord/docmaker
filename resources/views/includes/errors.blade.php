@if(!empty($errors->all()))
    <div dir="rtl" class="alert alert-danger" role="alert">
        <h4 class="alert-heading text-iranyekan">خطا !</h4>
        <hr>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </div>
@endif
