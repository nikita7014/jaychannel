@extends('admin.dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> {{ __('Edit') }}: {{ $credit->title }}</div>
                    <div class="card-body">
                        <form method="POST" action="/admin/credits/{{ $credit->id }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label>Title</label>
                                <input class="form-control" type="text" placeholder="{{ __('Title') }}" name="title" value="{{ $credit->title }}" required autofocus>
                            </div>

                            <div class="form-group row">
                                <label>Content</label>
                                <textarea class="form-control" id="textarea-input" name="content" rows="9" placeholder="{{ __('Content..') }}" required>{{ $credit->content }}</textarea>
                            </div>

                            <div class="form-group row">
                                <label>Type</label>
                                <select class="form-control" name="type">
                                    <option value="Fixed" <?php echo ($credit->type == 'Fixed')?'selected':''; ?>>Fixed</option>
                                    <option value="Variable" <?php echo ($credit->type == 'Variable')?'selected':''; ?>>Variable</option>
                                </select>
                            </div>                       

                            <div class="form-group row">
                                <label>Chargable Amount</label>
                                <input class="form-control" type="number" placeholder="{{ __('Chargable Amount') }}" name="cost_amount" value="{{ $credit->cost_amount }}" required autofocus>
                            </div>                            

                            <div class="form-group row">
                                <label>Points</label>
                                <input class="form-control" type="number" placeholder="{{ __('Points') }}" name="points" value="{{ $credit->points }}" required autofocus>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Is For Sale</label>
                                <div class="col-md-9 col-form-label">
                                    <div class="form-check">
                                        <input class="form-check-input" id="is_for_sale_yes" type="radio" value="1" name="is_for_sale" <?php echo ($credit->is_for_sale == 1)?'checked':''; ?>>
                                        <label class="form-check-label" for="is_for_sale_yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="is_for_sale_no" type="radio" value="0" name="is_for_sale" <?php echo ($credit->is_for_sale == 0)?'checked':''; ?>>
                                        <label class="form-check-label" for="is_for_sale_no">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Is Auto Renewable</label>
                                <div class="col-md-9 col-form-label">
                                    <div class="form-check">
                                        <input class="form-check-input" id="is_auto_renewal_yes" type="radio" value="1" name="is_auto_renewal" <?php echo ($credit->is_auto_renewal == 1)?'checked':''; ?>>
                                        <label class="form-check-label" for="is_auto_renewal_yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="is_auto_renewal_no" type="radio" value="0" name="is_auto_renewal" <?php echo ($credit->is_auto_renewal == 0)?'checked':''; ?>>
                                        <label class="form-check-label" for="is_auto_renewal_no">No</label>
                                    </div>
                                </div>
                            </div> 

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Status</label>
                                <div class="col-md-9 col-form-label">
                                    <div class="form-check">
                                        <input class="form-check-input" id="status_yes" type="radio" value="1" name="status" <?php echo ($credit->status == 1)?'checked':''; ?>>
                                        <label class="form-check-label" for="status_yes">Enable</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="status_no" type="radio" value="0" name="status" <?php echo ($credit->status == 0)?'checked':''; ?>>
                                        <label class="form-check-label" for="status_no">Disable</label>
                                    </div>
                                </div>
                            </div>  
 
                            <button class="btn btn-block btn-success" type="submit">{{ __('Save') }}</button>
                            <a href="{{ route('credits.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a> 
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection

@section('javascript')

@endsection