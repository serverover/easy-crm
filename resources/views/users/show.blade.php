@extends('layouts.master')

@section('user')
  <!-- User -->
<div class="user-box am-hide-sm-only">
    <div class="user-img">
        <img src="/src/assets/img/avatar-1.jpg" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
        <div class="user-status offline"><i class="am-icon-dot-circle-o" aria-hidden="true"></i></div>
    </div>
    <h5><a href="#">Mat Helme</a> </h5>
    <ul class="list-inline">
        <li>
            <a href="#">
                <i class="fa fa-cog" aria-hidden="true"></i>
            </a>
        </li>

        <li>
            <a href="#" class="text-custom">
                <i class="fa fa-cog" aria-hidden="true"></i>
            </a>
        </li>
    </ul>
</div>
          <!-- End User -->
@endsection
