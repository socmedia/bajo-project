@extends('layouts/landing')

@section('content')
<x-header />
<x-about />
<x-project :projects="$programs" />
<x-ig-feed />
<x-yt-feed />
@endsection
