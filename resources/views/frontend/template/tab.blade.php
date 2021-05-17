@php
    $latest = DB::table('posts')->orderBy('id','desc')->limit(5)->get();
$favourite = DB::table('posts')->orderBy('id','desc')->inRandomOrder()->limit(5)->get();
$highest = DB::table('posts')->orderBy('id','asc')->inRandomOrder()->limit(5)->get();
@endphp

<div class="tab-header">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified" role="tablist">
        <li role="presentation" class="active"><a href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="false">
  @if(session()->get('lang')== 'english')
    Latest
    @else
    नयाँ

    @endif
</a></li>
        <li role="presentation" ><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab" aria-expanded="true">
     @if(session()->get('lang')== 'english')
    Popular
    @else
    लोकप्रिय
    @endif
</a></li>
        <li role="presentation" ><a href="#tab23" aria-controls="tab23" role="tab" data-toggle="tab" aria-expanded="true">
     @if(session()->get('lang')== 'english')
    Oldest
    @else
    पुरानो
    @endif
 </a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content ">
        <div role="tabpanel" class="tab-pane in active" id="tab21">
            <div class="news-titletab">
            
            @foreach($latest as $row)	
                <div class="news-title-02">
<h4 class="heading-03"><a href="{{route('singlepage',['id'=>$row->id])}}">
@if(session()->get('lang')== 'english')
    {{ $row->title_en }}
    @else
    {{ $row->title_np }}
    @endif

</a> </h4>
         </div>
                 @endforeach
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="tab22">
            <div class="news-titletab">

 @foreach($favourite as $row)	
                <div class="news-title-02">
<h4 class="heading-03"><a href="{{route('singlepage',['id'=>$row->id])}}">
@if(session()->get('lang')== 'english')
    {{ $row->title_en }}
    @else
    {{ $row->title_np }}
    @endif

</a> </h4>
         </div>
                 @endforeach
                 
            </div>                                          
        </div>
        <div role="tabpanel" class="tab-pane fade" id="tab23">	
            <div class="news-titletab">
                
 @foreach($highest as $row)	
                <div class="news-title-02">
<h4 class="heading-03"><a href="{{route('singlepage',['id'=>$row->id])}}">
@if(session()->get('lang')== 'english')
    {{ $row->title_en }}
    @else
    {{ $row->title_np }}
    @endif

</a> </h4>
         </div>
                 @endforeach
                 
            </div>						                                          
        </div>
    </div>
</div>
@php
    $latest = DB::table('posts')->orderBy('id','desc')->limit(5)->get();
$favourite = DB::table('posts')->orderBy('id','desc')->inRandomOrder()->limit(5)->get();
$highest = DB::table('posts')->orderBy('id','asc')->inRandomOrder()->limit(5)->get();
@endphp

<div class="tab-header">
    @php
    $add=DB::table('adds')->where('page',1)->where('place',7)->latest()->first();
@endphp
@if($add)
<a href="{{$add->link}}">

    <img src="{{asset($add->img)}}" alt="">
</a>
@endif
</div>
<div class="tab-header">
    @php
    $add=DB::table('adds')->where('page',1)->where('place',8)->latest()->first();
@endphp
@if($add)
<a href="{{$add->link}}">

    <img src="{{asset($add->img)}}" alt="">
</a>
@endif
</div>
