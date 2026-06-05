@extends('layouts.app')

@section('content')
<div class="bg-white overflow-x-hidden">
    <div class="relative overflow-hidden">
        <div class="">

            {{-- Sections Hero et Module --}}
            @include('sections.index.heroSection')
            @include('sections.index.module')

        </div>
    </div>

    @include('sections.index.points-forts')
    @include('sections.index.pourquoi-myMonto')
    @include('sections.index.myMonto-cest')
    @include('sections.index.Toujours-a-vos-cotes')
    @include('sections.index.retour-utilisateurs')
    @include('sections.index.faq')
    @include('sections.index.footer')

</div>
@endsection