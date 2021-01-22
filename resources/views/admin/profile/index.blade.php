@extends('layouts.profile')
@section('title','登録済みのプロフィール')

@section('content')
<div class="container">
    <div class="row">
        <h2>プロフィール</h2>
    </div>
     <div class="row">
        <div class="col-md-4">
            <a href="{{ action('Admin\ProfileController@add') }}" role="button" class="btn btn-primary">新規作成</a>
        </div>
        <div class="col-md-8">
            <form action="{{ action('Admin\ProfileController@index')}}" method="get">
                 <div class="form-group row">
                       
                        <div class="col-md-2">
                            {{ csrf_field() }}
                           
                        </div>
                    </div>
            </form>
        </div>
    </div>
    
     <div class="row">
            <div class="admin-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="20%">名前</th>
                                <th width="10%">性別</th>
                                <th width="40%">趣味</th>
                                <th width="50%">自己紹介</th>
                                <th width="10%">操作</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $profile)
                                <tr>
                                    <th>{{ $profile->id }}</th>
                                    <td>{{ \Str::limit($profile->name, 30) }}</td>
                                    <td>{{ \Str::limit($profile->gender, 50) }}</td>
                                    <td>{{ \Str::limit($profile->hobby, 50) }}</td>
                                    <td>{{ \Str::limit($profile->introduction, 150) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{action('Admin\ProfileController@edit',['id'=>$profile->id]) }}">編集</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
@endsection