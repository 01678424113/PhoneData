@extends('layouts.app-2')

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Sửa giao dịch</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        {{--<li class="dropdown hidden">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                               aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>--}}
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br/>
                                    <form action="{{ route('transaction-manager.update', $model->id) }}" method="post"
                                          class="form-horizontal form-label-left">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                @include('layouts.components.form-html.input-text', [
                                                    'label' => 'ID giao dịch',
                                                    'name' => 'transaction_id',
                                                    'readonly' => true,
                                                    'is_required' => true,
                                                    'value' => $model->transaction_id
                                                ])
                                                @include('layouts.components.form-html.textarea', [
                                                    'label' => 'Lý do',
                                                    'name' => 'note',
                                                    'is_required' => false,
                                                    'value' => $model->note
                                                ])
                                                @include('layouts.components.form-html.input-number', [
                                                    'label' => 'Số tiền',
                                                    'name' => 'amount',
                                                    'is_required' => true,
                                                    'value' => (!empty($model->amount) ? $model->amount : 0)
                                                ])
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Loại giao dịch <span> *</span></label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <select name="type" id="" class="form-control">
                                                            <option {{($model->type == \App\Models\Transaction::$TYPE_PLUS) ? 'selected' : ''}} value="{{\App\Models\Transaction::$TYPE_PLUS}}">Cộng tiền</option>
                                                            <option {{($model->type == \App\Models\Transaction::$TYPE_MINUS) ? 'selected' : ''}} value="{{\App\Models\Transaction::$TYPE_MINUS}}">Trừ tiền</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Trạng thái <span> *</span></label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <select name="status" id="" class="form-control" required>
                                                            <option {{($model->status == \App\Models\Transaction::$STATUS_SUCCESS) ? 'selected' : ''}} value="{{\App\Models\Transaction::$STATUS_SUCCESS}}">Thành công</option>
                                                            <option {{($model->status == \App\Models\Transaction::$STATUS_PENDING) ? 'selected' : ''}} value="{{\App\Models\Transaction::$STATUS_PENDING}}">Đang xử lý</option>
                                                            <option {{($model->status == \App\Models\Transaction::$STATUS_FAILURE) ? 'selected' : ''}} value="{{\App\Models\Transaction::$STATUS_FAILURE}}">Thất bại</option>
                                                            <option {{($model->status == \App\Models\Transaction::$STATUS_CANCEL) ? 'selected' : ''}} value="{{\App\Models\Transaction::$STATUS_CANCEL}}">Hủy bỏ</option>
                                                            <option {{($model->status == \App\Models\Transaction::$STATUS_INIT) ? 'selected' : ''}}  value="{{\App\Models\Transaction::$STATUS_INIT}}">Mới tạo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Công
                                                        ty <span> *</span></label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        {!! Form::select('company_id', $companies, old('company_id'), ['class' => 'form-control select2']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <a href="{{ route('companies.index') }}" class="btn btn-primary">Quay lại</a>
                                                <button type="submit" name="btnSubmit" class="btn btn-success">Lưu thay đổi
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
