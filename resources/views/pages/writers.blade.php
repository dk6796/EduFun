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
                              <div class="accordion-body">
                                   <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                              </div>
                         </div>
                    </div>
               @endforeach
          </div>
     </div>
@endsection