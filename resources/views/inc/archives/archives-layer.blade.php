<ol class="list-unstyled">

    @foreach ($archives as $month)

    <li class="lead text-center">

        <a href="/archives/?month={{ $month['month']}}&year={{$month['year'] }}">

                {{$month['month']. ' ' . $month['year'] }}

        </a>

    </li>

    @endforeach

</ol>