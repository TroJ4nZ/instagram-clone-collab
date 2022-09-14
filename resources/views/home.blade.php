@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/svg/avatar.jpg" class="rounded-circle" style="height: 250px;">



        </div>
        <div class="col-9 p-5">
            <div>
                <h1>{{ $user->username}}</h1>
            </div>
            <div class="d-flex">

                <div class="pe-5"><strong>3</strong> Posts</div>
                <div class="pe-5"><strong>1k</strong> Followers</div>
                <div class="pe-5"><strong>300</strong> Following</div>
            </div>

            <div class="pt-4"><strong> moment you give up,is the moment you let someone else win</strong></div>
            <div>EX-EGC🏫 🎓</div>
            <div>Fencer🤺</div>
            <div>Computer science 💻</div>
            <div>
                #Pisces♓23/2
            </div>





        </div>

        <div class="row pt-4">
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