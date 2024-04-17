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

      <div class="flex gap-2">
        <div class="field">
          <label for="fname" class="label">First Name</label>
          <input type="text" class="input" name="fname" id="fname" value="{{old('fname')}}">
          @error("fname")
          <div class="error">{{$message}}</div>
          @enderror
        </div>

        <div class="field">
          <label for="lname" class="label">Last Name</label>
          <input type="text" class="input" id="lname" name="lname" value="{{old('lname')}}">
          @error("lname")
          <div class="error">{{$message}}</div>
          @enderror
        </div>
      </div>

      <div class="field">
        <label for="email" class="label">Email</label>
        <input type="email" class="input" name="email" value="{{old('email', '@gmail.com')}}">
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

      <div class="field">
        <label for="password_confirmation" class="label">Confirm Password</label>
        <input type="password" class="input" name="password_confirmation">
        @error("password_confirmation")
          <div class="error">{{$message}}</div>
          @enderror
      </div>

      <div class="mt-3">
        <button class="blue-btn">Create User</button>
      </div>

    </form>
    
  </div>
@endsection