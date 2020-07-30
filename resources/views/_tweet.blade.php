<div class="flex p-4 border-b border-b-grey-300">
    <div class="mr-4 flex-shrink-0">
    <a href="{{route('profile', $tweet->user)}}">
            <img src="{{$tweet->user->avatar}}"  width="40" height="40" class="rounded-full mr-2" alt="">
        </a>
    </div>
    <div>
        <a href="{{route('profile', $tweet->user)}}">
        <h5 class="font-bold mb-4">{{$tweet->user->name}}</h5>
        </a>
        <p>
            {{$tweet->body}}
        </p>
    </div>
</div>
