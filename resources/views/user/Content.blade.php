<div class="blog-single gray-bg">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-8 m-15px-tb">
                @foreach($list as $content)
                <article class="article">
                    <div class="article-img">
                        <img src="/post/{{$content->image}}" title="" alt="">
                    </div>
                    <div class="article-title">
                        <h6><a href="#"></a></h6>
                        <h2>{{$content->heading}}</h2>
                        <div class="article-content">
                            <p>{{$content->description}}....</p>
                            </div>
                        <div class="media">
                            <div class="avatar">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" title="" alt="">
                            </div>
                            <div class="media-body">
                                <label>{{$user->name}}</label>
                                <span>{{$content->created_at}}</span>
                            </div>
                        </div>
                    </div>
                    @if(auth()->user())
                    <div class="nav tag-cloud">
                        <button class="btn"><a href="{{Route('user.blogdetail',$content->id)}}" style="text-decoration:none;">Read More</a></button>
                    </div>
                    @else
                    <div class="nav tag-cloud">
                        <button class="btn"><a href="{{Route('login')}}" style="text-decoration:none;">Read More</a></button>
                    </div>
                    @endif
                </article>
                @endforeach
                <div class="justify-center">
                {!! $list->links() !!}
                </div>
                <!-- contact us -->
                @if(auth()->user())
                @include('user.contact')
                @else

                @endif
                <!-- End contact us -->
            </div>
            <div class="col-lg-4 m-15px-tb blog-aside py-3">
                <!-- Author -->
                <div class="card">
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" title="" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$user->name}}</h5>
                        <p class="card-text">Hi!! Myself {{$user->name}}.This is my personal bloging site where I post my blogs so if you like it then Please register for more updates.</p>
                    </div>
                </div>

                <!-- End Author -->
                <!-- Latest Post -->
                <div class="widget widget-latest-post">
                    <div class="widget-title">
                        <h3>Latest Post</h3>
                    </div>
                    <div class="widget-body">
                        @foreach($desc_data as $data)
                        <div class="latest-post-aside media">
                            <div class="lpa-left media-body">
                                <div class="lpa-title">
                                    <h5><a href="{{Route('user.blogdetail',$content->id)}}">{{$data->heading}}</a></h5>
                                </div>
                                <div class="lpa-meta">
                                    <div class="name" style="font-size: small;">
                                        {{$user->name}}
                                    </div>
                                    <div class="date" style="font-size: small;">
                                        {{$data->created_at}}
                                    </div>
                                </div>
                            </div>
                            <div class="lpa-right">
                                <img src="/post/{{$data->image}}" title="" alt="Image error">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- End Latest Post -->
            </div>
        </div>
    </div>
</div>