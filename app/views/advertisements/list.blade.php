@foreach($advertisements as $ad)
<h3><a href="{{ $ad->url }}">{{ $ad->title }}</a></h3>
<p>{{ $ad->body }}</p>
@endforeach