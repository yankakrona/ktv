@extends('frontend.layouts.master')
@section('title','CAST一覧')
@section('content')
<div class="ktv-title-list"><span class="icon icon-woman"></span>キャスト一覧</div>
<div class="ktv-list">
  <div class="row">
    @if(count($girls) !='')
      @foreach ($girls as $girl)
        <div class="col-md-2 col-sm-2 col-xs-4 col-ktv-4">
          <div class="box-ktv-list">
            <div class="box-show-model">
              <a href="{{route('girl.singlePost',$girl->girl_name)}}">
                @if($girl->profile_girl !='')
                  <img src="/{{$girl->profile_girl}}" alt="{{$girl->girl_name}}">
                @else
                  <img src="/assets/views/images/noimage.jpg" alt="image not found">
                @endif
                @if($girl->all_flag == 1)
                <div class="model-active">出勤中</div>
                @endif
              </a>
            </div>
            <div class="box-ktv-title">
              <a href="{{route('girl.singlePost',$girl->girl_name)}}">{!! str_replace('-', ' ', $girl->girl_name) !!}</a>
            </div>
          </div>
        </div><!--/col-md-2-->
      @endforeach
    @endif
  </div><!--/row-->
  <div class="row">
    <div class="nav-paginate text-center">
      {!! $girls->links() !!}
    </div><!--/nav-paginate-->
  </div><!--/row-->
  <!-- start main menu -->
  @include('pages.inc.main-menu')
  <!-- end main menu -->
</div><!--/ktv-list-->
@endsection
