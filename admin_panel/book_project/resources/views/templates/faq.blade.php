@extends('templates.master')
@section('title','Suallar')
@section('content')
<div class="faq-area inner-page-sec-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner text-center">
                    <h1>GENERAL QUESTION</h1>
                </div>
            </div>
        </div>
        <div class="row mbn-30">
            
            <div class="col-lg-6 col-12">
                <!--FAQ (Accordion) Start-->
                <div class="accordion" id="gq-faqs-1">
                    
                    <!--Cart Start-->

                    @foreach ($questions as $question)

                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0"><button class="collapsed" data-bs-toggle="collapse" data-bs-target="#gq-faq-{{ $question->id }}">{{ $question->question_title }}</button></h5>
                        </div>
                        <div id="gq-faq-{{ $question->id }}" class="collapse" data-parent="#gq-faqs-1">
                            <div class="card-body">
                                <p>{{ $question->question_answer }}</p>
                            </div>
                        </div>
                    </div>

                    <!--Cart End-->
                    @endforeach        
                </div><!--FAQ (Accordion) End-->
            </div>
            
            {{-- <div class="col-lg-6 col-12 accordion-2">
                <!--FAQ (Accordion) Start-->
                <div class="accordion" id="gq-faqs-2">
                    
                    <!--Cart Start-->
                    
                    @foreach ($questions as $question)

                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0"><button class="collapsed" data-bs-toggle="collapse" data-bs-target="#gq-faq-1">{{ $question->question_title }} ?</button></h5>
                        </div>
                        <div id="gq-faq-1" class="collapse show" data-parent="#gq-faqs-1">
                            <div class="card-body">
                                <p>{{ $question->question_answer }}</p>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                    <!--Cart End-->
                    
                    
                </div><!--FAQ (Accordion) End-->
            </div> --}}
            
        </div>
    </div>
</div>
@endsection
@section('addcss')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection
@section('addjs')
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
@endsection