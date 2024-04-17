@extends("layout.master")

@section("title", "Create Account")

@section("content")
  <div class="bg-gray-200 max-w-sm m-auto p-2 py-6 rounded">

    <form action="{{route('user.store')}}" method="post">
      @csrf

      <h3 class="text-xl mb-3 font-medium">Sign up</h3>

      @if(session('success'))
        <div class="success-alert">
            {{ session('success') }}
        </div>
      @endif

      <div class="field">
        <label for="email" class="label">Email</label>
        <input type="email" class="input" name="email" value="{{old('email' )}}">
        @error("email")
          <div class="error">{{$message}}</div>
        @enderror
      </div>

      <div class="field">
        <label for="password" class="label">Password</label>
        <input type="password" class="input" name="password" >
        @error("password")
          <div class="error">{{$message}}</div>
        @enderror
      </div>

      <div class="mt-3">
        <button class="blue-btn">Login</button>
      </div>

    </form>
    
  </div>
@endsection