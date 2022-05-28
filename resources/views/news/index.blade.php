@extends('layout')
{{-- Поиск лекарств по алфавиту --}}



@section('content')

<h1>Список новостных категорий</h1>

<ul>
@foreach ($categories as $category)
<li>
    <a href="{{route('news.list', ['id' => $category->id])}}" >
    {{ $category->name }} ({{ $category->news_count }})
    </a>
    </li>
@endforeach
</ul>

@endsection
