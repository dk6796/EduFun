@extends('components.navbar')

@section('title', 'Detail')

@section('content')
     <div class="d-flex flex-column p-5 justify-content-center align-items-center">
          <div class="fs-2">{{$article->subject->SubjectName}}</div>
          <div class="d-flex gap-3">
               <div class="" style="font-size:12px">by {{$article->writer->WriterName}}</div>
               <div class="" style="font-size: 12px;">{{date("d F Y H:i", strtotime($article->created_at))}}</div>
          </div>
          <div class="d-flex flex-column justify-content-center align-items-center gap-3 mt-3">
               <img src={{$article->ArticleImage}} alt="" style="width: 500px; height:350px;">
               <div class="" style="font-size:20px;">
                    {{$article->ArticleContent}}
               </div>
          </div>
     </div>
@endsection