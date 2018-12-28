{{--侧边栏 start--}}
<div class="col-md-3">
    <div class="box">
        <div class="padding-md ">
            <div class="list-group text-center">
                <a href="{{url('users/'.user()->id.'/edit')}}" class="list-group-item">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                    &nbsp;个人信息
                </a>
                <a href="{{url('users/'.user()->id.'/photo')}}" class="list-group-item ">
                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                    &nbsp;修改头像
                </a>
                <a href="{{url('users/'.user()->id.'/password')}}" class="list-group-item ">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    &nbsp;修改密码
                </a>
            </div>
        </div>
    </div>
</div>
{{--侧边栏 end--}}
@section('js')
    <script>
        $(document).ready(function(){
            $(".list-group a").each(function(){
                $this = $(this);
                if ($this[0].href != ''){
                    if (String(window.location).indexOf($this[0].href) != -1){
                        $this.addClass("active");
                    }
                }
            });
        });
    </script>
@endsection
