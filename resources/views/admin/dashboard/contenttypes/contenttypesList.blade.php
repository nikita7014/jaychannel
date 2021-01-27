@extends('admin.dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i>{{ __('Content Types') }}</div>
                    <div class="card-body">
                        <div class="row"> 
                          <a href="{{ route('content_types.create') }}" class="btn btn-primary m-2">{{ __('Add Content Type') }}</a>
                        </div>
                        <br>
                        <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th></th>
                            <th></th>
                            <th></th>                            
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($content_types as $content_type)
                            <tr>
                              <td><strong>{{ $content_type->name }}</strong></td>                             
                              <td>
                                <a href="{{ url('/admin/content_types/' . $content_type->id) }}" class="btn btn-block btn-primary">View</a>
                              </td>
                              <td>
                                <a href="{{ url('/admin/content_types/' . $content_type->id . '/edit') }}" class="btn btn-block btn-primary">Edit</a>
                              </td>
                              <td>
                                <form action="{{ route('content_types.destroy', $content_type->id ) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-block btn-danger">Delete</button>
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{ $content_types->links() }}
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection

