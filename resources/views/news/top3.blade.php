<h2>Топ 3 новостей   </h2>



@foreach($newsTop3 as $item)

    @php $publish =  Carbon\Carbon::parse($item->publish) @endphp

    <li> {{  $publish->format('d').' '.$publish->locale('ru')->getTranslatedMonthName('Do MMMM').' '.$publish->format('y')  }}

        <br />
        <a href="{{route('news.show', ['id' => $item->id])}}" >
            {{ $item->name }}
        </a>
    </li>

@endforeach

