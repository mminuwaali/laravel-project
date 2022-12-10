<form action="{{ route('register.store') }}" method="post"
class="w-full bg-white flex flex-col px-[18%] py-20 md:p-1/5 gap-8 justify-center">
@csrf
    <div class="w-full flex flex-col items-start justify-center gap-2">
        <img src="" alt="">
        <h2 class="font-bold text-3xl md:text-4xl">Sign up to get account</h2>
        <span>Or
            <a href="{{ route('login.index') }}" class="text-blue-700 font-thinbold">log in if you have an account</a>
        </span>
    </div>
    <div class="grow w-full flex flex-col gap-2 capitalize">
        <div class="w-full flex flex-col items-start gap-1">
            <label for="name" class="font-bold">name</label>
            <input type="text" value="{{ old('name') }}" name="name"
                class="w-full border-2 border-blue 400 rounded px-8 py-2 @error('name') border-red-400 @enderror" />
            @error('name')
                <span class="text-red-300 -mt-2">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-full flex flex-col items-start gap-1">
            <label for="email" class="font-bold">email address</label>
            <input type="email" value="{{ old('email') }}" name="email"
                class="w-full border-2 border-blue 400 rounded px-8 py-2 @error('email') border-red-400 @enderror" />
            @error('email')
                <span class="text-red-300 -mt-2">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-full flex flex-col items-start gap-1">
            <label for="username" class="font-bold">username</label>
            <input type="text" value="{{ old('username') }}" name="username"
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
        <div class="w-full flex flex-col items-start gap-1">
            <label for="password_confirmation" class="font-bold">repeat password</label>
            <input type="password" name="password_confirmation"
                class="w-full border-2 border-blue 400 rounded px-8 py-2 @error('password_confirmation') border-red-400 @enderror" />
            @error('password_confirmation')
                <span class="text-red-300 -mt-2">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="grow w-full flex flex-col gap-2 capitalize">
        <input type="submit" value="register" class="bg-blue-600 text-white capitalize p-2 rounded cursor-pointer" />
    </div>
</form>
