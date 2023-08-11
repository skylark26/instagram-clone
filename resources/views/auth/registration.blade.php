@extends('layouts.main')

@section("content")
    <div>
        <div class="lg:p-12 max-w-md max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
            <h1 class="lg:text-3xl text-xl font-semibold mb-6"> Sign in</h1>
            <p class="mb-2 text-black text-lg"> Register to manage your account </p>
            <form action="{{ route('register.post') }}" method="post">
                @csrf
                <div class="flex lg:flex-row flex-col lg:space-x-2">
                    <input type="text" name="name" placeholder="Name" class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800"
                           style="border: 1px solid #d3d5d8 !important;">
                </div>
                @if ($errors->has('name'))
                    <span>{{ $errors->first('name') }}</span>
                @endif
                <input type="text" name="email" placeholder="Email" class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800"
                       style="border: 1px solid #d3d5d8 !important;">
                @if ($errors->has('email'))
                    <span>{{ $errors->first('email') }}</span>
                @endif
                <input type="password" name="password" placeholder="Password" class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800"
                       style="border: 1px solid #d3d5d8 !important;">
                @if ($errors->has('password'))
                    <span>{{ $errors->first('password') }}</span>
                @endif
                <input type="password" name="password_confirmation" placeholder="Password confirmation" class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800"
                       style="border: 1px solid #d3d5d8 !important;">
                @if ($errors->has('password_confirmation'))
                    <span>{{ $errors->first('password_confirmation') }}</span>
                @endif
                <div class="flex justify-start my-4 space-x-1">
                    <div class="checkbox">
                        <input type="checkbox" id="chekcbox1" checked>
                        <label for="chekcbox1"><span class="checkbox-icon"></span> I Agree</label>
                    </div>
                    <a href="#"> Terms and Conditions</a>
                </div>
                <button type="submit"
                        class="bg-gradient-to-br from-pink-500 py-3 rounded-md text-white text-xl to-red-400 w-full">
                    Login
                </button>
                <div class="text-center mt-5 space-x-2">
                    <p class="text-base"> Do you have an account? <a href="form-login.html"> Login </a></p>
                </div>
            </form>
        </div>
    </div>
@endsection
