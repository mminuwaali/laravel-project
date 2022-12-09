<form action="{{ route('login.store') }}" method="post"
    class="w-full bg-white flex flex-col px-[18%] py-20 md:p-1/5 gap-8 justify-center items-center">
    <div class="w-full flex flex-col items-start justify-center gap-2">
        <img src="" alt="">
        <h2 class="font-bold text-3xl md:text-4xl">Sign in to your account</h2>
        <span>Or <a href="{{ route('register.index') }}" class="text-blue-700 font-thinbold">register if you don't have an
                account</a></span>
    </div>
    <div class="w-full flex flex-col gap-2 capitalize justify-center">
        <div class="w-full flex flex-col items-start gap-1">
            <label for="username" class="font-bold">username</label>
            <input type="text" name="username"
                class="w-full border-2 border-blue 400 rounded px-8 py-2 @error('username') border-red-400 @enderror" />
            @error('username')
                <span class="text-red-300 -mt-2">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-full flex flex-col items-start gap-1">
            <label for="password" class="font-bold">password</label>
            <input type="password" name="password"
                class="w-full border-2 border-blue 400 rounded px-8 py-2 @error('password') border-red-400 @enderror" />
            @error('password')
                <span class="text-red-300 -mt-2">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="w-full flex flex-col gap-2 capitalize">
        <span class="w-full flex items-center justify-between">
            <div class="flex gap-2 items-center w-full">
                <input type="checkbox" name="remember" />
                <i class="capitalize">remember me</i>
            </div>
            <a href="#" class="capitalize whitespace-nowrap text-blue-400">forgot your password?</a>
        </span>
        <input type="submit" value="sign in" class="bg-blue-600 text-white capitalize p-2 rounded cursor-pointer" />
    </div>
</form>
