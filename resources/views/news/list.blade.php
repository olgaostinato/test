@extends('layout')
{{-- Поиск лекарств по алфавиту --}}



@section('content')

<h1>{{ $category->name }} ({{ $category->news_count }})</h1>

<ul>
@foreach($news as $new)
    @php $publish =  Carbon\Carbon::parse($new->publish) @endphp

   <li> {{  $publish->format('d').' '.$publish->locale('ru')->getTranslatedMonthName('Do MMMM').' '.$publish->format('y')  }}

       <br />
       <a href="{{route('news.show', ['id' => $new->id])}}" >
       {{ $new->name }}
       </a>
   </li>

@endforeach
</ul>

{{ $news->links() }}

@endsection

