<title>{{$page->title}}</title>

<h1>{{$page->title}}</h1>
<img src="{{Voyager::image($page->image)}}" alt="{{$page->title}}">
{!! $page->body !!}