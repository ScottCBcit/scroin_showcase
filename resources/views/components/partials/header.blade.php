<header class="w-full top-0 bg-white text-black text-center ">
  <div class="p-4 flex flex-row justify-between">
    <ul class="flex justify-start ml-a">
      <li class="font-bold px-2">
        <a href="/">HOME</a>
      </li>
      <li class="font-bold px-2">
        <a href="/about">ABOUT</a>
      </li>
      <li class="font-bold px-2">
        <a href="/projects">PROJECTS</a>
      </li>
    </ul>
    <ul class="flex justify-end">
      @auth
      @if (auth()->user()->isAdmin())
      <li class="font-bold px-2">
        <a href="/admin" class="uppercase">Admin</a>
      </li>
      @endif
      <li>
        <p class="font-bold uppercase px-2"> {{ auth()->user()->name }} </p>
      </li>
      <li class="px-2">
        <a href="/logout" class="font-bold uppercase">Logout</a>
      </li>
      @else
      <li>
        <a href="/login" class="font-bold uppercase">Log In</a>
      </li>
      <li class="font-bold px-2">
        <a href="/register">REGISTER</a>
      </li>
      @endauth
    </ul>
  </div>
</header>