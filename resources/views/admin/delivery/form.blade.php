@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Deliveries</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            @if (!empty($delivery))
            <h2>Edit</h2>
            {!! Form::model($delivery, ['method' => 'PATCH', 'route' => ['admin.deliveries.update', $delivery->id]]) !!}
            @else
                <h2>Add</h2>
                {!! Form::model($delivery = new App\Delivery, ['route' => ['admin.deliveries.store']]) !!}
            @endif


                <div class="form-group">
                    {!! Form::label('area', 'Miền') !!}
                    {!! Form::select('area', config('delivery')['area'], null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('city', 'Thanh Pho') !!}
                    {!! Form::select('city', config('delivery')['city'], null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('content', 'Noi Dung') !!}
                    {!! Form::textarea('content', null, ['class' => 'form-control ckeditor']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('seo_title', 'SEO title') !!}
                    {!! Form::text('seo_title', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('desc', 'SEO Description') !!}
                    {!! Form::textarea('desc', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('keywords', 'SEO Keywords') !!}
                    {!! Form::textarea('keywords', null, ['class' => 'form-control']) !!}
                </div>


            <div class="form-group">
                {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
            </div>

            {!! Form::close() !!}

            @include('admin.list')

        </div>
    </div>
@endsection