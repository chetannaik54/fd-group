@extends('pages.template.layout')

@section('customcss')
<style>.grid {
    display: grid;
    grid-gap: 30px;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    grid-auto-rows: 150px;
    grid-auto-flow: row dense;
  }
  
  .item {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    box-sizing: border-box;
    background: #0c9a9a;
    color: #fff;
    grid-column-start: auto;
    grid-row-start: auto;
    color: #fff;
    background: url("https://images.unsplash.com/photo-1470124182917-cc6e71b22ecc?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=");
    background-size: cover;
    background-position: center;
    box-shadow: -2px 2px 10px 0px rgba(68, 68, 68, 0.4);
    transition: transform 0.3s ease-in-out;
    cursor: pointer;
    counter-increment: item-counter;
  }
  .item:nth-of-type(3n) {
    background-image: url("https://images.unsplash.com/photo-1422255198496-21531f12a6e8?dpr=2&auto=format&fit=crop&w=1500&h=996&q=80&cs=tinysrgb&crop=");
  }
  .item:nth-of-type(4n) {
    background-image: url("https://images.unsplash.com/photo-1490914327627-9fe8d52f4d90?dpr=2&auto=format&fit=crop&w=1500&h=2250&q=80&cs=tinysrgb&crop=");
  }
  .item:nth-of-type(5n) {
    background-image: url("https://images.unsplash.com/photo-1476097297040-79e9e1603142?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=");
  }
  .item:nth-of-type(6n) {
    background-image: url("https://images.unsplash.com/photo-1464652149449-f3b8538144aa?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=");
  }
  .item:after {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: black;
    opacity: 0.3;
    transition: opacity 0.3s ease-in-out;
  }
  .item:hover {
    transform: scale(1.05);
  }
  .item:hover:after {
    opacity: 0;
  }
  .item--medium {
    grid-row-end: span 2;
  }
  .item--large {
    grid-row-end: span 3;
  }
  .item--full {
    grid-column-end: auto;
  }
  @media screen and (min-width: 768px) {
    .item--full {
      grid-column: 1/-1;
      grid-row-end: span 2;
    }
  }
  .item__details {
    position: relative;
    z-index: 1;
    padding: 15px;
    color: #444;
    background: #fff;
    text-transform: lowercase;
    letter-spacing: 1px;
    color: #828282;
  }
  .item__details:before {
    content: counter(item-counter);
    font-weight: bold;
    font-size: 1.1rem;
    padding-right: 0.5em;
    color: #444;
  }</style>
@endsection

@section('content')
    <!-- Start Home -->
    <section class="relative jarallax py-4">
        <div
            class="absolute inset-0 h-full w-full bg-gradient-to-t to-transparent via-white/80 dark:via-slate-900/80 from-white dark:from-slate-900">
        </div>

        <div class="absolute text-center p-6 bottom-0 left-0 right-0">
            <h3 class="md:text-3xl md:leading-normal text-2xl leading-normal font-bold">Gallery</h3>
        </div>
    </section>
    <!--end section-->
    <!-- End Home -->

    <div class="message">
        Sorry, your browser does not support CSS Grid. 😅
    </div>
    <section class="section">
        <div class="grid">
            <div class="item">
                <div class="item__details">
                    jelly-o brownie sweet
                </div>
            </div>
            <div class="item item--large">
                <div class="item__details">
                    Muffin jelly gingerbread
                </div>
            </div>
            <div class="item item--medium">
                <div class="item__details">
                    sesame snaps chocolate
                </div>
            </div>
            <div class="item item--large">
                <div class="item__details">
                    Oat cake
                </div>
            </div>
            <div class="item item--full">
                <div class="item__details">
                    jujubes cheesecake
                </div>
            </div>
            <div class="item item--medium">
                <div class="item__details">
                    Dragée pudding brownie
                </div>
            </div>
            <div class="item item--large">
                <div class="item__details">
                    Oat cake
                </div>
            </div>
            <div class="item">
                <div class="item__details">
                    powder toffee
                </div>
            </div>
            <div class="item item--medium">
                <div class="item__details">
                    pudding cheesecake
                </div>
            </div>
            <div class="item item--large">
                <div class="item__details">
                    toffee bear claw
                </div>
            </div>
            <div class="item">
                <div class="item__details">
                    cake cookie croissant
                </div>
            </div>
            <div class="item item--medium">
                <div class="item__details">
                    liquorice sweet roll
                </div>
            </div>
            <div class="item item--medium">
                <div class="item__details">
                    chocolate marzipan
                </div>
            </div>
            <div class="item item--large">
                <div class="item__details">
                    danish dessert lollipop
                </div>
            </div>
            <div class="item">
                <div class="item__details">
                    sugar plum dragée
                </div>
            </div>
        </div>
        </div>
    @endsection

    @section('scripts')
    @endsection
