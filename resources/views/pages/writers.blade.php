@extends('/components/navbar')

@section('title', 'Writers')

@section('content')
     <div class="container p-5 d-flex flex-column justify-content-center align-items-center gap-3">
          <div class="fs-2">Our Writers</div>
          <div class="accordion w-100" id="writerList">
               @foreach ($writers as $w)
                    <div class="accordion-item">
                         <h2 class="accordion-header" id="heading{{ $w->id }}">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$w->id}}" aria-expanded="true" aria-controls="collapse{{$w->id}}">
                                   <div class="d-flex gap-3 align-items-center">
                                        <img src={{$w->WriterProfPict}} alt="" class="rounded-circle" style="width: 100px; height: 100px; border">
                                        <div class="">
                                             <div class="fs-5 text-dark">{{$w->WriterName}}</div>
                                             <div class="">{{$w->WriterDesc}}</div>
                                        </div>
                                   </div>
                              </button>
                         </h2>
                         <div id="collapse{{$w->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$w->id}}" data-bs-parent="#writerList">
                              <div class="accordion-body d-flex flex-column align-items-center gap-4 p-2">
                                   @foreach ($articles as $a)
                                        @if ($a->WriterID == $w->id)
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
                                        @endif
                                   @endforeach
                              </div>
                         </div>
                    </div>
               @endforeach
          </div>
     </div>
@endsection