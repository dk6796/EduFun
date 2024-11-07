@extends('/components/navbar')

@section('title', 'Home')

@section('content')
     <div class="d-flex flex-column">
          <div class="position-relative text-center">
               <img src="/study.jpg" alt="Study Image" class="w-100" style="height: 470px;">
               <div class="position-absolute top-50 start-50 translate-middle text-white fs-1" style="font-weight: bold; padding: 10px 20px; border-radius: 5px;">
                   Discover the Fun in Learning
               </div>
          </div>
          <div class="d-flex flex-column p-5 align-items-center gap-5">
               @foreach ($article as $a)
               <div class="d-flex gap-3 bg-light rounded-end p-4">
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
     </div>
@endsection