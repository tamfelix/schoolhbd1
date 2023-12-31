@extends('welcome')

@section('content')
@php $link = route('classes.index'); $title = __('sections.class').' '.$class[0]['title']; @endphp
<x-header :title="$title" :link="$link"/>


            <section class="text-gray-700 font3 m-6">
                @if($courses)
                    <div class="py-3 text-lg">{{ __('sections.available') }}</div>
                    <div class="pl-4">
                    @foreach($courses as $item)
                        <p><a href="{{ route('courses.show', $item->id) }}">{{ $item->{'title_'.app()->getLocale()} }}</a><span class="text-gray-400"> : {{ $item->{'content_'.app()->getLocale()} }}</span></p>
                    @endforeach
                    </div>
                
                
                
                
            <div class="mt-4"><i class="mt-8 text-green-800">{{ $class[0][ 'content_'.app()->getLocale() ] }}</i></div>
                @else
                    {{ __('sections.soon') }}
                @endif    
            </section>


    </div>



</section>

                <x-rightmenu :sidemenu="$sidemenu" :director="$director"  />

           <x-endtag/>

@endsection
