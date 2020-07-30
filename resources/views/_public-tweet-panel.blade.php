<div class="border border-blue-400 round-lg p-4 py-6 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea name="body" id="" class="w-full" placeholder="Type here!" ></textarea>
        <hr class="my-4">
        <footer class="flex justify-between">
        <img src="{{auth()->user()->avatar}}" width="50" height="50" class="rounded-full mr-2" alt="">
        <button 
            type="submit"
            class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white"
        >
            Tweet-a-roo!
        </button>
        </footer>
    </form>
    @error('body')
        <p class="text-red-500 text-sm mt-2">{{$message}}</p>
    @enderror
</div>