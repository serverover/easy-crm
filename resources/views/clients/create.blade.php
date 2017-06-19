@extends('layouts.master')
@section('content')
  <!-- Start right Content here -->
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <!-- row start -->
    <div class="am-g">
      <!-- col start -->
      <div class="am-u-md-10">
        <div class="card-box">
          <h4 class="header-title m-t-0 m-b-30">新建客户</h4>
          {!! Form::open([
          'route' => 'clients.store',
          'class' => 'am-form am-form-horizontal'
          ]) !!}
            @include('clients.form', ['submitButtonText' => __('创建新的客户')])
          {!! Form::close() !!}
          </form>
        </div>
      </div>
      <!-- col end -->
    </div>
    <!-- row end -->

  </div>
</div>
<!-- end right Content here -->
@endsection
