
<div>
    @foreach ( $this->posts as $pubpost) 
    <div class="col-md-8">
      <div class="blog-post" style="">
        <div class="row" style="padding: 10px;">
          <div class="col-md-4">
            <img src="{{ asset( 'storage/' .$pubpost->thumbnail) }}" class="img-fluid" alt="Blog Post Image">
          </div>
          <div class="col-md-8">
            <div class="row"> <img src="{{asset($pubpost->user->profile_photo_url)}}" style="height: 50px; margin-top: -6px; width: 50px; margin-left: 14px; border-radius: 50px;"alt=""> <h2 style="margin-top:10px; margin-left: 4px; font-weight: bold;font-size: 16px;">{{ $pubpost->title }}</h2></div>
            
            <div class="row"> <h4 style="margin-top: -5px; margin-left: 25px; font-size: 12px;">{{ $pubpost->user->name }}</h4>  <h4 style="margin-top: -5px; margin-left: 20px; font-size: 10px;">{{ $pubpost->published_at->diffForHumans() }}</h4></div>
            <p style="margin-top:10px; font-size: 13px;">{{ $pubpost->getExcerpt()}}</p>
            <a style="text-decoration: none; background-color: rgb(27, 140, 216); text-align: left;" href="{{ url('blog_details',$pubpost->id) }}" target="_blank" style=" background-color: rgb(27, 140, 216); text-align: left;" class="btn btn-primary">Read More <i class="fa-solid fa-arrow-right-long"></i></a>
           
          </div>
        </div>
      </div>
      
    </div>
    
    @endforeach
    <div class="my-5 " style="font-size:11px">
        {{$this->posts->links('pagination::bootstrap-5') }}
    </div>
</div>