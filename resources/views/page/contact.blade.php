<!DOCTYPE html>
<html lang="en">

<head>
    <livewire:styles />
    <meta charset="UTF-8">
    <title>Document</title>
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <section id="contact" class="w-screen h-screen flex">
        <aside class="w-1/4 bg-cyan-500 p-10 pt-20 hidden md:flex flex-col justify-start gap-4 text-white">
            <h4 class="capitalize text-2xl">contact information</h4>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Voluptatibus inventore expedita, accusantium ut
                molestiae aut eaque.
            </p>
        </aside>
        <form action="" method="post">
            <main class="grow flex flex-col gap-4 p-20">
                <h4 class="capitalize font-bold text-2xl">send us a message</h4>
                <div class="flex flex-wrap gap-8 justify-center">
                    <div class="basis-96 grow flex flex-col items-start gap-1">
                        <label for="name" class="font-bold capitalize">name</label>
                        <input type="text" value="{{ old('name') }}"
                            class="w-full border-2 border-blue 400 rounded px-8 py-2 @error('name') border-red-400 @enderror" />
                        @error('name')
                            <span class="text-red-300 -mt-2">{{ $meaage }}</span>
                        @enderror
                    </div>
                    <div class="basis-96 grow flex flex-col items-start gap-1">
                        <label for="email" class="font-bold capitalize">email</label>
                        <input type="text" value="{{ old('email') }}" name="name"
                            class="w-full border-2 border-blue 400 rounded px-8 py-2 @error('email') border-red-400 @enderror" />
                        @error('email')
                            <span class="text-red-300 -mt-2">{{ $meaage }}</span>
                        @enderror
                    </div>
                    <div class="basis-96 grow flex flex-col items-start gap-1">
                        <label for="phone" class="font-bold capitalize">phone</label>
                        <input type="tel" value="{{ old('phone') }}" name="phone"
                            class="w-full border-2 border-blue 400 rounded px-8 py-2 @error('phone') border-red-400 @enderror" />
                        @error('phone')
                            <span class="text-red-300 -mt-2">{{ $meaage }}</span>
                        @enderror
                    </div>
                    <div class="basis-96 grow flex flex-col items-start gap-1">
                        <label for="subject" class="font-bold capitalize">subject</label>
                        <input type="subject" value="{{ old('subject') }}" name="subject"
                            class="w-full border-2 border-blue 400 rounded px-8 py-2 @error('subject') border-red-400 @enderror" />
                        @error('subject')
                            <span class="text-red-300 -mt-2">{{ $meaage }}</span>
                        @enderror
                    </div>
                    <div class="basis-80 grow flex flex-col items-start gap-1">
                        <label for="message" class="font-bold capitalize">message</label>
                        <textarea type="text" value="{{ old('message') }}" name="messaage"
                            class="w-full border-2 border-blue 400 rounded px-8 py-2 @error('message') border-red-400 @enderror" rows="8"></textarea>
                        @error('message')
                            <span class="text-red-300 -mt-2">{{ $meaage }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center justify-end">
                    <input type="submit" value="submit" class="px-8 py-2 bg-cyan-600 text-white rounded-lg font-bold cursor-pointer" />
                </div>
            </main>
        </form>
    </section>

</body>

</html>
