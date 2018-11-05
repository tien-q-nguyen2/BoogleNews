@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create a new headline') }}</div>

                <div class="card-body">
                    <div class="mt-3">
                        <div class="mt-3" >

                            <form action="/create_post" method="post">
                                <?php echo csrf_field() ?>

                                @include('text_input', [
                                    'name' => 'title',
                                    'default' => '',
                                    'label' => 'Title of the new headline',
                                    'placeholder' => 'Please type in something here'
                                ]) 

                                @include('text_input', [
                                    'name' => 'image',
                                    'default' => $defaultImage,
                                    'label' => 'Image to go with the headline',
                                    'placeholder' => 'This field can be empty (if not, please include http://)'
                                ])

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <input
                                            class="btn btn-primary"
                                            type="submit"
                                            name="submit"
                                            value="Submit"
                                        />
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
@endsection
