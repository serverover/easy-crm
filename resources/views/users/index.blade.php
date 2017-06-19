@extends('layouts.master')
@section('heading')
    个人简介
@stop
@section('content')
  <div class="am-g">
    <!-- Row start -->
      <div class="am-u-sm-6">
        <div class="card-box">
          <!-- User -->
        <div class="user-box am-hide-sm-only">
            <div class="user-img">
                <img src="/src/assets/img/avatar-1.jpg" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                <div class="user-status offline"><i class="am-icon-dot-circle-o" aria-hidden="true"></i></div>
            </div>
            <h5><a href="/users/{{ Auth::user()->id }}">{{ Auth::user()->name }}</a> </h5>
            {{-- <ul class="list-inline">
                <li>
                    <a href="#">
                        <i class="fa fa-cog" aria-hidden="true"></i>电子邮箱：
                    </a>
                </li>

                <li>
                    <a href="#" class="text-custom">
                        <i class="fa fa-cog" aria-hidden="true"></i>{{ Auth::user()->email }}
                    </a>
                </li>
            </ul>
            <ul class="list-inline">
                <li>
                    <a href="#">
                        <i class="fa fa-cog" aria-hidden="true"></i>工作号码：
                    </a>
                </li>

                <li>
                    <a href="#" class="text-custom">
                        <i class="fa fa-cog" aria-hidden="true"></i>{{ Auth::user()->work_number }}
                    </a>
                </li>
            </ul>
            <ul class="list-inline">
                <li>
                    <a href="#">
                        <i class="fa fa-cog" aria-hidden="true"></i>私人号码：
                    </a>
                </li>

                <li>
                    <a href="#" class="text-custom">
                        <i class="fa fa-cog" aria-hidden="true"></i>{{ Auth::user()->personal_number }}
                    </a>
                </li>
            </ul> --}}
        </div>
                  <!-- End User -->
                  <!-- col start -->
                    <table class="am-table  am-table-hover text-center">
                      <tbody>
                          <tr>
                              <td>电子邮件</td>
                              <td>{{ Auth::user()->email }}</td>
                          </tr>
                          <tr>
                              <td>工作号码</td>
                              <td>{{ Auth::user()->work_number }}</td>
                          </tr>
                          <tr>
                              <td>私人号码</td>
                              <td>{{ Auth::user()->personal_number }}</td>
                          </tr>
                          <tr>
                              <td>家庭地址</td>
                              <td>{{ Auth::user()->address }}</td>
                          </tr>
                      </tbody>
                  </table>
                  <!-- col end -->
        </div>
      </div>

      <div class="am-u-sm-6">
        {{-- <div class="card-box"> --}}
          <!-- col start -->
            <table class="am-table  am-table-hover">
              <thead>
                  <tr>
                      <th>网站名称</th>
                      <th>网址</th>
                      <th>创建时间</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>Amaze UI</td>
                      <td>http://amazeui.org</td>
                      <td>2012-10-01</td>
                  </tr>
                  <tr>
                      <td>Amaze UI</td>
                      <td>http://amazeui.org</td>
                      <td>2012-10-01</td>
                  </tr>
                  <tr>
                      <td>Amaze UI</td>
                      <td>http://amazeui.org</td>
                      <td>2012-10-01</td>
                  </tr>
                  <tr>
                      <td>Amaze UI</td>
                      <td>http://amazeui.org</td>
                      <td>2012-10-01</td>
                  </tr>
                  <tr>
                      <td>Amaze UI</td>
                      <td>http://amazeui.org</td>
                      <td>2012-10-01</td>
                  </tr>
              </tbody>
          </table>
          <!-- col end -->
        </div>
      </div>
    <!-- Row end -->
  </div>

@endsection
