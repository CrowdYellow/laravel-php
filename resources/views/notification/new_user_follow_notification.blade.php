<li class="list-group-item media " style="margin-top: 0;">
    <div class="media-left">
        <a href="{{url('users/'.$notification->data['id'])}}">
            <img class="media-object img-thumbnail" alt="{{ $notification->data['name'] }}" src="{{ $notification->data['photos'] }}" style="width:48px;height:48px;">
        </a>
    </div>
    <div class="media-body media-middle"><a href="{{url('users/'.$notification->data['id'])}}">{{ $notification->data['name'] }} </a> <i class="fa fa-heart-o"></i> 关注了你。</div>
</li>
