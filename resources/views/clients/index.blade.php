@extends('layouts.master')
@section('heading')
    所有客户
@endsection
@section('content')
  <!-- Start right Content here -->
<div class="content-page">
<!-- Start content -->
<div class="content">
  <div class="card-box">
    <!-- Row start -->
    <div class="am-g">
      <div class="am-u-sm-12 am-u-md-6">
            <div class="am-btn-toolbar">
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default"><a href="/clients/create"> <span class="am-icon-plus"></span> 新增</a></button>
                {{-- <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button> --}}
                {{-- <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 审核</button> --}}
                {{-- <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button> --}}
              </div>
            </div>
      </div>

      <div class="am-u-sm-12 am-u-md-3">
            <div class="am-input-group am-input-group-sm">
              <input type="text" class="am-form-field">
            <span class="am-input-group-btn">
              <button class="am-btn am-btn-default" type="button">搜索</button>
            </span>
            </div>
      </div>
    </div>
  <!-- Row end -->

      <!-- Row start -->
<div class="am-g">
  <div class="am-u-sm-12">
    <form class="am-form">
      <table class="am-table am-table-striped am-table-hover table-main">
        <thead>
        <tr>
          {{-- <th class="table-check"><input type="checkbox" /></th> --}}
          <th class="table-id">ID</th>
          <th class="table-title">名字</th>
          <th class="table-type">手机号码</th>
          <th class="table-author am-hide-sm-only">公司</th>
          <th class="table-date am-hide-sm-only">邮箱</th>
          <th class="table-set">操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($clients as $client)
          <tr>
            {{-- <td><input type="checkbox" /></td> --}}
            <td>{{ $client->id }}</td>
            <td><a href="/clients/{{ $client->id }}">{{ $client->name }}</a></td>
            <td>{{ $client->primary_number }}</td>
            <td class="am-hide-sm-only">{{ $client->company_name }}</td>
            <td class="am-hide-sm-only">{{ $client->email }}</td>
            <td>
              <div class="am-btn-toolbar">
                <div class="am-btn-group am-btn-group-xs">
                  <a href="/clients/{{ $client->id }}/edit"><button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button></a>
                  {{-- <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button> --}}
                  <a href="#"><button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button></a>
                </div>
              </div>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <div class="am-cf">
        共 {{ $clients->count() }} 条记录
        <div class="am-fr">
          {{ $clients->links() }}
        </div>
      </div>
      <hr />
      <p>注：
      </p>
    </form>
  </div>

</div>
      <!-- Row end -->

    </div>




  </div>


</div>
</div>
<!-- end right Content here -->
@endsection
