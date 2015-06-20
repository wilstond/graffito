@extends('layouts.admin')

@section('content')

@include('partials.header')

<header>
    <div id="bg_image"></div>
    <div id="blackoverlay" ></div>
</header>

<main>
    
    <div id="admin-container">
        
        <h3>Reported Posts</h3>
        
        <table>
            <thead>
                <tr>
                    <th>Post</th>
                    <th>Unpublish</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td><img src="{{'../'.$post->image}}" /></td>
                    <td>
                        <a href="{{url('admin/unpublish/'.$post->id)}}"><i class="fa fa-close fa-3x"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
    
</main>

@endsection
