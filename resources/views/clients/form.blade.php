
        <div class="am-form-group">
          <label for="doc-ipt-3" class="am-u-sm-3 am-form-label am-text-right am-padding-right-0"><span class="text-danger">*</span>名字</label>
          <div class="am-u-sm-9">
            {!!
                Form::text('name',
                isset($data['owners']) ? $data['owners'][0]['name'] : null)
            !!}
            @if($errors->has('name'))
                <span class="help-block">
                <strong class="alert-danger">
                  {{ $errors->first('name') }}
                </strong>
            @endif
          </div>
        </div>

        <div class="am-form-group">
          <label for="doc-ipt-3" class="am-u-sm-3 am-form-label am-text-right am-padding-right-0">增值税</label>
          <div class="am-u-sm-9">
            {!!
                Form::text('vat',
                isset($data['vat']) ?$data['vat'] : null,
                ['class' => 'form-control'])
            !!}
            @if($errors->has('vat'))
                <span class="help-block">
                <strong class="alert-danger">
                  {{ $errors->first('vat') }}
                </strong>
            @endif
          </div>
        </div>

        <div class="am-form-group">
          <label for="doc-ipt-3" class="am-u-sm-3 am-form-label am-text-right am-padding-right-0"><span class="text-danger">*</span>公司名称</label>
          <div class="am-u-sm-9">
            {!!
                Form::text('company_name',
                isset($data['name']) ? $data['name'] : null,
                ['class' => 'form-control'])
            !!}
            @if($errors->has('company_name'))
                <span class="help-block">
                <strong class="alert-danger">
                  {{ $errors->first('company_name') }}
                </strong>
            @endif
          </div>
        </div>

        <div class="am-form-group">
          <label for="doc-ipt-3" class="am-u-sm-3 am-form-label am-text-right am-padding-right-0"><span class="text-danger">*</span>邮箱</label>
          <div class="am-u-sm-9">
            {!!
                Form::text('email',
                isset($data['email']) ? $data['email'] : null,
                ['class' => 'form-control'])
            !!}
            @if($errors->has('email'))
                <span class="help-block">
                <strong class="alert-danger">
                  {{ $errors->first('email') }}
                </strong>
            @endif
          </div>
        </div>

        <div class="am-form-group">
          <label for="doc-ipt-3" class="am-u-sm-3 am-form-label am-text-right am-padding-right-0">地址</label>
          <div class="am-u-sm-9">
            {!!
                Form::text('address',
                isset($data['address']) ? $data['address'] : null,
                ['class' => 'form-control'])
            !!}
          </div>
        </div>

        <div class="am-form-group">
          <label for="doc-ipt-3" class="am-u-sm-3 am-form-label am-text-right am-padding-right-0">邮政编码</label>
          <div class="am-u-sm-9">
            {!!
                Form::text('zipcode',
                 isset($data['zipcode']) ? $data['zipcode'] : null,
                 ['class' => 'form-control'])
            !!}
            @if($errors->has('zipcode'))
                <span class="help-block">
                <strong class="alert-danger">
                  {{ $errors->first('zipcode') }}
                </strong>
            @endif
          </div>
        </div>

        <div class="am-form-group">
          <label for="doc-ipt-3" class="am-u-sm-3 am-form-label am-text-right am-padding-right-0">城市</label>
          <div class="am-u-sm-9">
            {!!
                Form::text('city',
                isset($data['city']) ? $data['city'] : null,
                ['class' => 'form-control'])
            !!}
          </div>
        </div>

        <div class="am-form-group">
          <label for="doc-ipt-3" class="am-u-sm-3 am-form-label am-text-right am-padding-right-0">常用号码</label>
          <div class="am-u-sm-9">
            {!!
                Form::text('primary_number',
                isset($data['phone']) ? $data['phone'] : null,
                ['class' => 'form-control'])
            !!}
            @if($errors->has('primary_number'))
                <span class="help-block">
                <strong class="alert-danger">
                  {{ $errors->first('primary_number') }}
                </strong>
            @endif
          </div>
        </div>

        <div class="am-form-group">
          <label for="doc-ipt-3" class="am-u-sm-3 am-form-label am-text-right am-padding-right-0">联系电话</label>
          <div class="am-u-sm-9">
            {!!
                Form::text('secondary_number',
                null,
                ['class' => 'form-control'])
            !!}
            @if($errors->has('secondary_number'))
                <span class="help-block">
                <strong class="alert-danger">
                  {{ $errors->first('secondary_number') }}
                </strong>
            @endif
          </div>
        </div>


        <div class="am-form-group">
          <label for="doc-ipt-3" class="am-u-sm-3 am-form-label am-text-right am-padding-right-0">公司类型</label>
          <div class="am-u-sm-9">
            {!!
                Form::text('company_type',
                isset($data['companydesc']) ? $data['companydesc'] : null,
                ['class' => 'form-control'])
            !!}
          </div>
        </div>

        <div class="am-form-group">
          <label for="doc-ipt-3" class="am-u-sm-3 am-form-label am-text-right am-padding-right-0">产业</label>
          <div class="am-u-sm-9">
            {!!
                Form::select('industry_id',
                $industries,
                null,
                ['class' => 'form-control ui search selection top right pointing search-select',
                'id' => 'search-select'])
            !!}
          </div>
          @if($errors->has('industry_id'))
              <span class="help-block">
              <strong class="alert-danger">
                {{ $errors->first('industry_id') }}
              </strong>
          @endif
        </div>

        <div class="am-form-group">
          <label for="doc-ipt-3" class="am-u-sm-3 am-form-label am-text-right am-padding-right-0">分配用户</label>
          <div class="am-u-sm-9">
            {!!
                Form::select('user_id',
                $users,
                null,
                ['class' => 'form-control ui search selection top right pointing search-select',
                'id' => 'search-select'])
            !!}
          </div>
          @if($errors->has('user_id'))
              <span class="help-block">
              <strong class="alert-danger">
                {{ $errors->first('user_id') }}
              </strong>
          @endif
        </div>


        <div class="am-form-group">
          <div class="am-u-sm-10 am-u-sm-offset-3">
            {!! Form::submit($submitButtonText, ['class' => 'am-btn am-btn-success']) !!}
          </div>
        </div>
