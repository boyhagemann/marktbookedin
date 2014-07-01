@foreach($advertisements as $ad)
<h3>{{ $ad->title }}</h3>
<p>{{ $ad->body }}</p>
<p><a href="{{ URL::route('advertisements.show', $ad->slug) }}">{{ Lang::get('advertisements.index.item.readmore') }}</a></p>
@endforeach