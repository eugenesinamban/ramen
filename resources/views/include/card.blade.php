<div class="card border-dark mb-3">
    <img src="" alt="" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">{{ $datum['text'] }}</h5>
        <p class="card-text"></p>
        <div class="row">
            <div class="col-6 text-left">
                <a href="/" class="btn btn-danger">ページへ</a>
            </div>
            <div class="col-6 text-right">
                @include('include.like', $datum)
            </div>
        </div>
    </div>
</div>