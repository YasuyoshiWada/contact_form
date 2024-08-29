@extends('layouts.app')

@section('content')
<div class="contact_form">
    <div class="title text-center text-custom_brown text-3xl">Contact
    </div>
    <form action="/comfirm" method="post">
        @csrf
        <div class="contact_form_inner grid grid-cols-3 ml-10 mt-8">
            <label for="first_name" class="name text-xl text-custom_brown">
                お名前<span class="text-red-500">※</span>
            </label>
            <input type="text" name="last_name" class="name bg-custom_gray pl-5 mr-5 h-[3vh]" id="name"
            value="{{ old('last_name') }}" placeholder="例:高田">
            <input type="text" name="first_name" class="name bg-custom_gray pl-5 mr-5" id="name"
            value="{{ old('first_name') }}" placeholder="例:順次">
        </div>

        <div class="grid grid-cols-4 ml-10 mt-5">
            <label for="gender" class="gender text-xl text-custom_brown">
                性別<span class="text-red-500">※</span>
            </label>
            <div class="male ml-20">
                <input type="radio" value="male" name="gender" id="male">
                <label for="male">男性</label>
            </div>
            <div class="female">
                <input type="radio" value="female" name="gender" id="female">
                <label for="female">女性</label>
            </div>
            <div class="other">
                <input type="radio" value="other" name="gender" id="other">
                <label for="other">その他</label>
            </div>
        </div>
    </form>
</div>

@endsection
