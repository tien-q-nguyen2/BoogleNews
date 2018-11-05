@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit your profile') }}</div>

                <div class="card-body">
                    <div class="mt-3">
                        <div class="mt-3" >

                            <form action="/profile" method="post">
                                <?php echo csrf_field() ?>

                                @include('forms/text_input', [
                                    'name' => 'image',
                                    'default' => $profile->image,
                                    'label' => 'Profile Image',
                                    'placeholder' => 'This field can be empty (if not, please include http://)'
                                ]) 

                                @include('forms/text_input', [
                                    'name' => 'description',
                                    'default' => $profile->description,
                                    'label' => 'Description',
                                    'placeholder' => 'Please type in something here'
                                ])

                                @include('forms/text_input', [
                                    'name' => 'website',
                                    'default' => $profile->website,
                                    'label' => 'Website',
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
