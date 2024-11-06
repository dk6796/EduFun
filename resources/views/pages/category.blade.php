@extends('components.navbar')

@section('title', 'Category')

@section('content')
     <div class="container p-5 d-flex flex-column align-items-center gap-3">
          @if($category == 1)
          <div class="fs-2">Interactive Multimedia</div>
          @elseif ($category == 2)
               <div class="fs-2">Software Engineering</div>
          @endif
          @foreach ($article as $a)
               <div class="d-flex gap-3 bg-light w-75  rounded-end">
                    <img src={{$a->ArticleImage}} alt="" style="width: 200px; height:150px">
                    <div class="d-flex flex-column gap-1 pt-4">
                         <div class="d-flex justify-content-between align-items-center">
                              <div class="" style="font-size:17px"><b>{{$a->subject->SubjectName}}</b></div>
                              <div class="" style="font-size: 12px;">{{date("d F Y H:i", strtotime($a->created_at))}}</div>
                         </div>
                         <div class="" style="font-size:12px">by {{$a->writer->WriterName}}</div>
                         <div class="d-flex justify-content-between pt-4 align-items-center gap-2">
                              <div class="text-truncate" style="width: 460px; font-size:12px;">
                                   {{$a->ArticleContent}}
                              </div>
                              <a href="{{ route('getArticle', ['id' => $a->id]) }}" class="btn btn-info" style="font-size:10px;">
                                   Read More
                              </a>
                         </div>
                    </div>
               </div>
          @endforeach
     </div>
@endsection