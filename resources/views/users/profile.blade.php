@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            {{-- We must add the port number to the env file for Storage to work properly--}}
            @php
                $image_path = Storage::disk('public')->url($user->profile->image);
                $default_image_path = url('/svg/default_profile_image.jpg');
            @endphp

            @if (str_contains($image_path, '.jpg'))
                <img src="{{$image_path}}" class="rounded-circle" style="height: 250px;" alt="Profile Image">
            @else
                <img src="{{$default_image_path}}" class="rounded-circle" style="height: 250px;" alt="Profile Image">
            @endif


        </div>
        <div class="col-9 p-5">
            <div class="d-flex">
                <h1>{{ $user->username}}</h1>

                <button class="btn btn-primary  ms-4" style = "max-height: 35px;">Follow</button>
            </div>
            <div class="d-flex">

                <div class="pe-5"><strong>3</strong> Posts</div>
                <div class="pe-5"><strong>1k</strong> Followers</div>
                <div class="pe-5"><strong>300</strong> Following</div>
            </div>

            <div class="pt-4 font-weight-bold" style="font-weight:bold;">{{ $user->profile->title }}</div>
            <div> {{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>


            <div class="d-flex p-4">
                <div>
            <a href="{{route('profile.edit')}}" title= 'edit' ><botton class=" pe-5 btn btn-success btn-sm " style="background-color: #555555;"> Edit profile </botton></a>
            </div>

            <div class="ps-5">
            <a href="{{route('posts.create')}}" title= 'create' ><botton class="btn btn-success btn-sm pe-5" style="background-color: #555555;"> Create Post</botton></a>
            </div>
            </div>

            <!-- <div class="pt-4"><strong> moment you give up,is the moment you let someone else win</strong></div>
            <div>EX-EGC🏫 🎓</div>
            <div>Fencer🤺</div>
            <div>Computer science 💻</div>
            <div>
                #Pisces♓23/2
            </div> -->





        </div>

        <div class="row pt-4">
            {{-- if condition to prevent NULL access bug on empty profile page --}}
            @if ($postImages)
                @foreach ($postImages as $image)
                <div class="col-4">
                    <img src={{Storage::disk('public')->url($image->path)}} style="height: 450px; width: 400px;">
                </div>
                @endforeach
            @endif
            <div class="col-4">
                <img src="/svg/img3.jpeg" style="height: 450px; width: 400px;">
            </div>
            <div class="col-4">
                <img src="/svg/img2.jpeg" style="height: 450px; width: 400px;">
            </div>
            <div class="col-4">
                <img src="/svg/img1.jpeg" style="height: 450px; width: 400px;">
            </div>

        </div>
    </div>
    @endsection
