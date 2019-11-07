@extends('main_index')

@section('content')

    <div class="container">
        @if(isset($details))
        <div class="row">
            <div class="col-md-12" style="margin-left: 15px;">
                <h3>
                    @if(count($search) <= 1)
                    Найдена {{count($search)}} специальность по вашему запросу "{{$query}}"
                    @elseif(count($search) > 1)
                    Найдены {{count($search)}} специальности по вашему запросу "{{$query}}"
                    @endif
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @foreach($details as $search)
                    <div class="specialities_block">
                    <a href="{{route('specialty.show',

                            [
                                'id' => $search->id,
                                'slug' => str_slug($search->specialty_name)
                            ]

                            )}}">
                    <div class="specialty_blocks">
                        <div class="specialty_inf">
                            <h3>{{$search->specialty_name}} - {{$search->specialty_cipher}}</h3>
                            <p>Направление: <span>{{$search->direction->direction}}</span></p>
                            <p>Ученая степень: <span>{{$search->qualification->qualification}}</span></p>
                            <p>Профильные предметы: <span>{{$search->subject->subject}}</span></p>
                        </div>
                        <span class="watermark">UniSpecialty</span>
                    </div>
                    </a>
                    </div>
                @endforeach
            </div>
        </div>
        @else

            <div class="row">
                <div class="col-md-12" style="margin-left: 15px;">
                    <h3>По вашему запросу ничего не найдено</h3>
                </div>
            </div>
        @endif
    </div>
@stop