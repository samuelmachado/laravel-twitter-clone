<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
    @foreach(auth()->user()->follows as $user)
        <li class="mb-4">
           
                <a href="{{route('profile', $user)}}" class="flex items-center text-sm">
                    <img src="{{$user->avatar}}" width="40" height="40" class="rounded-full mr-2" alt="">
                    {{$user->name}}
                </a>
           
        </li>
    @endforeach
</ul>