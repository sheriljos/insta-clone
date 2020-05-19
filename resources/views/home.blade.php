@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 d-flex justify-content-center">
            <img src="https://scontent-amt2-1.cdninstagram.com/v/t51.2885-19/s320x320/67635540_771784243296529_6906501480065269760_n.jpg?_nc_ht=scontent-amt2-1.cdninstagram.com&_nc_ohc=edyKn43hi_kAX-J_F70&oh=3c235456c016a817c246fe5e75213c31&oe=5EE8707C" 
                alt="profile pic"
                width=160
                class="rounded-circle">
        </div>
        <div class="col-9">
            <div>
                <h3>{{ $user->username }}</h3>
            </div>
            <div class="d-flex pt-2 pb-3">
                <div class="pr-4"><strong>34 </strong>posts</div>
                <div class="pr-4"><strong>1040 </strong>followers</div>
                <div class="pr-4"><strong>62 </strong>following</div>
            </div>
            <div><strong>{{ $user->profile->title }}</strong></div>
        <div>{{ $user->profile->description }}</div>
            <div>
            <a href="#" class="nounderline dark-color"><strong>{{ $user->profile->url }}</strong></a>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://images.pexels.com/photos/668353/pexels-photo-668353.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                    alt="profile pic"
                    class="w-100 h-100">
        </div>
        <div class="col-4">
            <img src="https://images.pexels.com/photos/1028705/pexels-photo-1028705.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                    alt="profile pic"
                    class="w-100 h-100">
        </div>
        <div class="col-4">
            <img src="https://images.pexels.com/photos/161599/scent-sticks-fragrance-aromatic-161599.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" 
                    alt="profile pic"
                    class="w-100 h-100">
        </div>
    </div>
</div>
@endsection
