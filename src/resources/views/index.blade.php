@extends('layouts.app')

@section('content')
<div class="contact_form">
    <div class="title text-center text-custom_brown text-3xl">Contact
    </div>
    <form action="/comfirm" method="post">
        @csrf
        <div class="form_group grid grid-cols-12 ml-10 mt-8">
            <label for="first_name" class="name text-xl text-custom_brown col-span-3">
                お名前<span class="text-red-500">※</span>
            </label>
            <div class="grid grid grid-cols-2 col-span-7">
                <input type="text" name="last_name" class="name bg-custom_gray pl-5 mr-5" id="name"
                value="{{ old('last_name') }}" placeholder="例:高田">
                <input type="text" name="first_name" class="name bg-custom_gray pl-5 mr-5" id="name"
                value="{{ old('first_name') }}" placeholder="例:順次">
            </div>
            <div></div>
        </div>

        <div class="form_group grid grid-cols-4 justify-center ml-10 mt-5 gap-10">
            <label for="gender" class="gender text-xl text-custom_brown">
                性別<span class="text-red-500">※</span>
            </label>
            <div class="gender_group grid grid-cols-3 col-span-2">
                <div class="male">
                    <input type="radio" value="male" name="gender" id="male" checked>
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
                <div></div>
            </div>
        </div>

        <div class="form_group grid grid-cols-12 ml-10 mt-5 items-center">
            <label for="email" class="text-xl text-custom_brown col-span-3" >メールアドレス<span class="text-red-500">※</span></label>
            <input type="email" name="email" placeholder="test@example.com" class="email col-span-7 bg-custom_gray">
            <div></div>
        </div>

        <div class="form_group grid grid-cols-12 ml-10 mt-5 items-center ">
            <label for="tel" class="text-xl text-custom_brown col-span-3">電話番号<span class="text-red-500">※</span></label>
            <div class="tel_group  grid grid-cols-3 col-span-7">
                <div class="input_group">
                    <input type="text" name="tel_1" placeholder="080" maxlength="4" class="bg-custom_gray w-[17vw]">
                    <span class="">-</span>
                </div>
                <div class="input_group">
                    <input type="text" name="tel_2" placeholder="1234" maxlength="4" class="bg-custom_gray w-[17vw]">
                    <span class="">-</span>
                </div>
                <div class="input_group">
                    <input type="text" name="tel_3" placeholder="5678" maxlength="4" class="bg-custom_gray w-[17vw]">
                </div>
            </div>
            <div></div>
        </div>

        <div class="form_group grid grid-cols-4 ml-10 mt-5">
            <label for="address"  class="text-xl text-custom_brown">住所<span class="text-red-500">※</span></label>
            <input type="text" name="address" placeholder="例:徳島県鳴門市蓮根町" class="bg-custom_gray col-span-2">
            <div></div>
        </div>

        <div class="form_group grid grid-cols-4 ml-10 mt-5">
            <label for="building" class="text-xl text-custom_brown">建物名</label>
            <input type="text" class="bg-custom_gray col-span-2">
            <div></div>
        </div>

        <div class="form_group">
            <label for="detail" class="text-xl text-custom_brown">お問い合わせの種類<span class="text-red-500">※</span></label>
            
        </div>
    </form>
</div>

@endsection
