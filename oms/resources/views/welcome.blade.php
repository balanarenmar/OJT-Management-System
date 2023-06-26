<h1>Listings</h1>
    {{-- variable from the Route--}}
    <p>{{$heading}}</p>



    @unless (count($blog_posts) == 0)
        @foreach ($blog_posts as $post)
            <h2> 
                <a href="/blogpost/{{$post['id']}}">
                {{$post['title']}} 
                </a>
            </h2>
            <p> {{$post['description']}} </p>
        @endforeach
    @else
        <p>There are no blog posts</p>  
    @endunless

   


