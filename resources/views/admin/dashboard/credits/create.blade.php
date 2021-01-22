@extends('admin.dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> {{ __('Create Credit') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('credits.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label>Title</label>
                                <input class="form-control" type="text" placeholder="{{ __('Title') }}" name="title" required autofocus>
                            </div>

                            <div class="form-group row">
                                <label>Content</label>
                                <textarea class="form-control" id="textarea-input" name="content" rows="9" placeholder="{{ __('Content..') }}" required></textarea>
                            </div>

                            <div class="form-group row">
                                <label>Type</label>
                                <select class="form-control" name="type">
                                    <option value="Fixed">Fixed</option>
                                    <option value="Variable">Variable</option>                                    
                                </select>
                            </div>                       

                            <div class="form-group row">
                                <label>Chargable Amount</label>
                                <input class="form-control" type="number" placeholder="{{ __('Chargable Amount') }}" name="cost_amount" required autofocus>
                            </div>                            

                            <div class="form-group row">
                                <label>Points</label>
                                <input class="form-control" type="number" placeholder="{{ __('Points') }}" name="points" required autofocus>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Is For Sale</label>
                                <div class="col-md-9 col-form-label">
                                    <div class="form-check">
                                        <input class="form-check-input" id="is_for_sale_yes" type="radio" value="1" name="is_for_sale">
                                        <label class="form-check-label" for="is_for_sale_yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="is_for_sale_no" type="radio" value="0" name="is_for_sale">
                                        <label class="form-check-label" for="is_for_sale_no">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Is Auto Renewable</label>
                                <div class="col-md-9 col-form-label">
                                    <div class="form-check">
                                        <input class="form-check-input" id="is_auto_renewal_yes" type="radio" value="1" name="is_auto_renewal">
                                        <label class="form-check-label" for="is_auto_renewal_yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="is_auto_renewal_no" type="radio" value="0" name="is_auto_renewal">
                                        <label class="form-check-label" for="is_auto_renewal_no">No</label>
                                    </div>
                                </div>
                            </div> 

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Status</label>
                                <div class="col-md-9 col-form-label">
                                    <div class="form-check">
                                        <input class="form-check-input" id="status_yes" type="radio" value="1" name="status">
                                        <label class="form-check-label" for="status_yes">Enable</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="status_no" type="radio" value="0" name="status">
                                        <label class="form-check-label" for="status_no">Disable</label>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-block btn-success" type="submit">{{ __('Add') }}</button>
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