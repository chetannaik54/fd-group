@extends('pages.template.layout')

@section('content')

<div class="timeline">
    <div class="timeline__wrap">
      <div class="timeline__items">
        <div class="timeline__item animated timeline__item--right fadeIn">
          <div class="timeline__content">
            Your content / markup
          </div>
        </div>
        <div class="timeline__item animated timeline__item--left fadeIn">
          <div class="timeline__content">
            Your content / markup
          </div>
        </div>
        <div class="timeline__item animated timeline__item--right fadeIn">
          <div class="timeline__content">
            Your content / markup
          </div>
        </div>

        <div class="timeline__item animated timeline__item--left fadeIn">
            <div class="timeline__content">
              Your content / markup
            </div>
          </div>
          <div class="timeline__item animated timeline__item--right fadeIn">
            <div class="timeline__content">
              Your content / markup
            </div>
          </div>
          <div class="timeline__item animated timeline__item--right fadeIn">
            <div class="timeline__content">
              Your content / markup
            </div>
        </div>
        <div class="timeline__item animated timeline__item--right fadeIn">
            <div class="timeline__content">
              Your content / markup
            </div>
          </div>
          <div class="timeline__item animated timeline__item--right fadeIn">
            <div class="timeline__content">
              Your content / markup
            </div>
          </div>
          <div class="timeline__item animated timeline__item--right fadeIn">
            <div class="timeline__content">
              Your content / markup
            </div>
          </div>
      </div>
    </div>
</div>  

@endsection

@section('scripts')
<script src="{{ asset('js/timeline.min.js') }}"></script>
<link href="{{ asset('css/timeline.min.css') }}" rel="stylesheet" />
<script>
    timeline(document.querySelectorAll('.timeline'), {
    verticalStartPosition: 'right',
    verticalTrigger: '150px'
    });
</script>
@endsection