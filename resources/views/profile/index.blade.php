 @extends('layouts.front')
 
 @section('content')
 <div class="container">
      <hr color="#c0c0c0">
 
        <div class="row">
             
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($profiles as $profile)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="name">
                                    No.{{$profile->id, 20 }}
                                </div>
                                <div class="name">
                                    名前:{{$profile->name, 20 }}
                                </div>
                                <div class="gender">
                                    性別：{{ str_limit($profile->gender, 10) }}
                                </div>
                                <div class="hobby">
                                    趣味：{{ str_limit($profile->hobby, 50) }}
                                </div>
                                <div class="introduction">
                                    自己紹介：{{ str_limit($profile->introduction, 300) }}
                                </div>
                            </div>

                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
 </div>
    @endsection