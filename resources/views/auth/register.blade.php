@extends('layouts.guest')
@section('title', 'register')
@section('content')
<div class="flex justify-center">
  <div class="bg-white border shadow-2xl p-4 justify-center">
      <form action="{{route('registerUser')}}" method="post">
        <div class="py-2">
          <label for="user_name">Username</label> <br>
          <input type="text" name="username" class="outline px-1">
        </div>
        <div class="py-2">
          <label for="email">Email</label> <br>
          <input type="email" name="email" class="outline px-1">
        </div>
        <div class="py-2">
          <label for="password">Password</label> <br>
          <input type="password" name="password" class="outline px-1">
        </div>
        <div class="py-2">
          <label>Confirm Password</label> <br>
          <input type="password" name="password_confirmation" class="outline px-1">
        </div>
        <div class="flex justify-center">
          <input type="submit" value="Register" class="border border-(--lightpurp) bg-(--lightpurp) px-2 py-1 cursor-pointer hover:bg-(--darkblue) text-white transition-all duration-300">
        </div>
      </form>
  </div>

</div>
@endsection

