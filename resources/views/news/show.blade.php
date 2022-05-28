@extends('layout')
{{-- Поиск лекарств по алфавиту --}}



@section('content')

<a href="{{route('news.list',['id' => $new->category[0]->id])}}"> > {{ $new->category[0]->name }}</a>

<h1>{{ $new->name }} (просмотров - {{ $new->count_view }})</h1>
{{  Carbon\Carbon::parse($new->publish)->format('d').' '.Carbon\Carbon::parse($new->publish)->locale('ru')->getTranslatedMonthName('Do MMMM').' '.Carbon\Carbon::parse($new->publish)->format('y')  }}

{!! $new->new_text !!}

@include('news.top3', [$newsTop3])

@endsection


