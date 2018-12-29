{{--侧边栏 start--}}
<div class="col-md-3">
    <div class="box">
        <div class="padding-md ">
            <div class="list-group text-center">
                <a href="{{url('notification/message')}}" class="list-group-item">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    &nbsp;私信
                </a>
                <a href="{{url('notification/notification')}}" class="list-group-item">
                    <i class="fa fa-bell" aria-hidden="true"></i>
                    &nbsp;通知
                </a>
                <a href="{{url('notification/system')}}" class="list-group-item ">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    &nbsp;系统
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
