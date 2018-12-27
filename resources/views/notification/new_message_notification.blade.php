<li class="list-group-item media " style="margin-top: 0;">
    <div class="media-left">
        <a href="{{url('users/'.$notification->data['id'])}}">
            <img class="media-object img-thumbnail" alt="等车的猪" src="{{ $notification->data['photos'] }}" style="width:48px;height:48px;">
        </a>
    </div>
    <div class="media-body media-middle"><a href="{{url('users/'.$notification->data['id'])}}">{{ $notification->data['name'] }} </a> <i class="fa fa-envelope-o"></i> 给你发了一条私信。</div>
</li>
