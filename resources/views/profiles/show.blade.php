 @extends('layouts.app')

@section('content')
<header class="mb-6 relative">
        <img
        src="/images/default-profile-banner.jpg"
        class="mb-2"
        >

<div class="flex justify-between items-center  mb-4">
    <div>
        <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
        <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
    </div>
    <div>
        <a href="" class="rounded-full rounded-lg border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
        <a href="" class="bg-blue-500 rounded-lg shadow py-2 px-4 text-white text-xs">Follow Me</a>

    </div>


</div>
<p class="text-sm">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam voluptas impedit minus debitis velit? Voluptatem, repudiandae expedita placeat magnam, dolorem quisquam natus aliquid modi illum consectetur necessitatibus, velit debitis ad?
</p>

<img src="{{$user->avatar}}" width="40" height="40" class="rounded-full mr-2 absolute" style="width:150px; left: calc(50% - 75px); top:128px" alt="">

</header>
@include('_timeline', [
    'tweets' => $user->tweets
])
@endsection